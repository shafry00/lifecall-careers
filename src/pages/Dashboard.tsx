import React, { useEffect, useState } from 'react';
import { useAuth } from '@/src/contexts/AuthContext';
import { collection, query, where, getDocs, addDoc, serverTimestamp, orderBy } from 'firebase/firestore';
import { db } from '@/src/lib/firebase';
import { motion } from 'motion/react';
import { Briefcase, Users, FileText, CheckCircle2, ChevronRight, Plus } from 'lucide-react';

export const Dashboard: React.FC = () => {
  const { user, profile, isTalent, isClient } = useAuth();
  const [items, setItems] = useState<any[]>([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    const fetchData = async () => {
      if (!user) return;
      try {
        if (isTalent) {
          // Fetch applications
          const q = query(collection(db, 'applications'), where('talentId', '==', user.uid));
          const snap = await getDocs(q);
          setItems(snap.docs.map(d => ({ id: d.id, ...d.data() })));
        } else if (isClient) {
          // Fetch jobs
          const q = query(collection(db, 'jobs'), where('clientId', '==', user.uid), orderBy('createdAt', 'desc'));
          const snap = await getDocs(q);
          setItems(snap.docs.map(d => ({ id: d.id, ...d.data() })));
        }
      } catch (err) {
        console.error(err);
      } finally {
        setLoading(false);
      }
    };
    fetchData();
  }, [user, isTalent, isClient]);

  if (!user) return <div>Please login first.</div>;

  return (
    <div className="min-h-screen pt-24 pb-12 px-6">
      <div className="max-w-7xl mx-auto">
        <header className="mb-8 flex items-center justify-between">
          <div>
            <h1 className="text-3xl font-bold text-brand-navy">Welcome back, {profile?.fullName.split(' ')[0]}</h1>
            <p className="text-brand-slate mt-1">Manage your {isTalent ? 'applications' : 'job postings'} and career.</p>
          </div>
          {isClient && (
            <button className="flex items-center gap-2 px-6 py-3 bg-brand-navy text-white font-bold rounded-xl hover:bg-slate-800 transition-all shadow-lg">
              <Plus className="w-5 h-5" /> Post a Job
            </button>
          )}
        </header>

        <div className="grid grid-cols-1 lg:grid-cols-3 gap-8">
          {/* Main Content */}
          <div className="lg:col-span-2 space-y-6">
            <div className="bg-white border border-slate-100 rounded-3xl p-8 shadow-sm">
              <div className="flex items-center justify-between mb-8">
                <h2 className="text-xl font-bold text-brand-navy">
                  Recent {isTalent ? 'Applications' : 'Active Jobs'}
                </h2>
                <button className="text-teal-600 text-sm font-bold hover:underline">View All</button>
              </div>

              {loading ? (
                <div className="animate-pulse space-y-4">
                  {[1, 2, 3].map(i => <div key={i} className="h-20 bg-slate-50 rounded-2xl" />)}
                </div>
              ) : items.length === 0 ? (
                <div className="text-center py-12">
                  <div className="w-16 h-16 bg-slate-50 rounded-full flex items-center justify-center mx-auto mb-4">
                    <FileText className="text-slate-300 w-8 h-8" />
                  </div>
                  <p className="text-brand-slate">No recent activity to show.</p>
                </div>
              ) : (
                <div className="space-y-4">
                  {items.map((item) => (
                    <div key={item.id} className="flex items-center justify-between p-4 border border-slate-50 rounded-2xl hover:border-slate-200 transition-all group">
                      <div className="flex items-center gap-4">
                        <div className="w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center">
                          {isTalent ? <FileText className="text-slate-400" /> : <Briefcase className="text-slate-400" />}
                        </div>
                        <div>
                          <p className="font-bold text-brand-navy">{item.title || 'Application'}</p>
                          <p className="text-xs text-brand-slate uppercase tracking-wider font-bold mt-0.5">
                            Status: <span className="text-teal-600">{item.status}</span>
                          </p>
                        </div>
                      </div>
                      <ChevronRight className="w-5 h-5 text-slate-300 group-hover:text-brand-navy group-hover:translate-x-1 transition-all" />
                    </div>
                  ))}
                </div>
              )}
            </div>
          </div>

          {/* Sidebar */}
          <div className="space-y-6">
            <div className="bg-brand-navy text-white rounded-3xl p-8 shadow-xl">
              <h3 className="text-lg font-bold mb-6">AI Career Assist</h3>
              <p className="text-slate-400 text-sm mb-6">Let our AI help you optimize your profile for 200% better visibility.</p>
              <button className="w-full py-4 bg-teal-500 text-white font-bold rounded-xl hover:bg-teal-400 transition-all">
                Run Analysis
              </button>
            </div>

            <div className="bg-white border border-slate-100 rounded-3xl p-8 shadow-sm">
              <h3 className="text-lg font-bold text-brand-navy mb-6">Quick Stats</h3>
              <div className="space-y-6">
                <StatItem label="Profile Views" value="24" color="text-blue-500" />
                <StatItem label="New Messages" value="3" color="text-teal-500" />
                <StatItem label="Interview Requests" value="1" color="text-purple-500" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

const StatItem = ({ label, value, color }: { label: string, value: string, color: string }) => (
  <div className="flex items-center justify-between">
    <span className="text-sm font-medium text-brand-slate">{label}</span>
    <span className={`text-lg font-bold ${color}`}>{value}</span>
  </div>
);
