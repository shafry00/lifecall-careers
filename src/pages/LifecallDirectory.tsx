import React, { useEffect, useState } from 'react';
import { collection, query, where, getDocs, limit } from 'firebase/firestore';
import { db } from '@/src/lib/firebase';
import { Search, Filter, SlidersHorizontal } from 'lucide-react';
import { LifecallCard } from '@/src/components/talent/LifecallCard';
import { motion } from 'motion/react';

interface LifecallProfile {
  id: string;
  fullName: string;
  bio: string;
  skills: string[];
  rate: number;
  experience: number;
  avatarUrl?: string;
  role: 'talent';
}

export const LifecallDirectory: React.FC = () => {
  const [talents, setLifecalls] = useState<LifecallProfile[]>([]);
  const [loading, setLoading] = useState(true);
  const [searchTerm, setSearchTerm] = useState('');
  const [category, setCategory] = useState('All');

  useEffect(() => {
    const fetchLifecalls = async () => {
      try {
        const q = query(
          collection(db, 'profiles'),
          where('role', '==', 'talent'),
          limit(12)
        );
        const querySnapshot = await getDocs(q);
        const fetchedLifecalls = querySnapshot.docs.map((doc) => ({
          id: doc.id,
          ...doc.data(),
        })) as LifecallProfile[];
        
        if (fetchedLifecalls.length === 0) {
          setLifecalls(MOCK_TALENTS);
        } else {
          setLifecalls(fetchedLifecalls);
        }
      } catch (error) {
        console.error('Error fetching talents:', error);
        setLifecalls(MOCK_TALENTS);
      } finally {
        setLoading(false);
      }
    };

    fetchLifecalls();
  }, []);

  const filteredLifecalls = talents.filter(t => 
    (searchTerm === '' || t.fullName.toLowerCase().includes(searchTerm.toLowerCase()) || t.skills.some(s => s.toLowerCase().includes(searchTerm.toLowerCase()))) &&
    (category === 'All' || t.skills.includes(category))
  );

  return (
    <div className="flex min-h-screen pt-16">
      {/* Sidebar Filter */}
      <aside className="w-64 flex-none bg-white border-r border-slate-200 p-8 space-y-10 hidden lg:block overflow-y-auto">
        <section>
          <h3 className="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-6">Expertise</h3>
          <div className="space-y-4">
            {['Development', 'Design & Creative', 'Product Management', 'Digital Marketing'].map(exp => (
              <label key={exp} className="flex items-center gap-3 text-sm text-slate-600 cursor-pointer group">
                <input type="checkbox" className="w-4 h-4 rounded border-slate-300 text-gold-600 focus:ring-gold-500" />
                <span className="font-medium group-hover:text-slate-900 transition-colors">{exp}</span>
              </label>
            ))}
          </div>
        </section>

        <section>
          <h3 className="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-6">Availability</h3>
          <div className="space-y-4">
            <label className="flex items-center gap-3 text-sm text-slate-600 cursor-pointer group">
              <input type="radio" name="avail" defaultChecked className="w-4 h-4 border-slate-300 text-gold-600 focus:ring-gold-500" />
              <span className="font-medium group-hover:text-slate-900 transition-colors">Full-time</span>
            </label>
            <label className="flex items-center gap-3 text-sm text-slate-600 cursor-pointer group">
              <input type="radio" name="avail" className="w-4 h-4 border-slate-300 text-gold-600 focus:ring-gold-500" />
              <span className="font-medium group-hover:text-slate-900 transition-colors">Freelance</span>
            </label>
          </div>
        </section>

        <section>
          <h3 className="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-6">Hourly Rate</h3>
          <div className="space-y-5">
            <div className="h-1.5 bg-slate-100 rounded-full relative">
              <div className="absolute left-[20%] right-[30%] h-full bg-gold-500 rounded-full"></div>
              <div className="absolute left-[20%] -top-1 w-3.5 h-3.5 bg-white border-2 border-gold-500 rounded-full shadow-sm"></div>
              <div className="absolute right-[30%] -top-1 w-3.5 h-3.5 bg-white border-2 border-gold-500 rounded-full shadow-sm"></div>
            </div>
            <div className="flex justify-between text-[11px] font-bold font-mono text-slate-400">
              <span>$40/HR</span>
              <span>$150/HR</span>
            </div>
          </div>
        </section>
      </aside>

      {/* Main Content */}
      <main className="flex-1 p-8 lg:p-12 bg-slate-50 overflow-y-auto">
        <header className="mb-12 flex flex-col md:flex-row md:items-end justify-between gap-8">
          <div className="space-y-3">
            <h1 className="text-6xl font-black tracking-tighter text-slate-900 leading-none">Digital Lifecalls</h1>
            <p className="text-slate-500 font-medium text-lg">Discovering world-class vetted professionals for your project.</p>
          </div>

          <div className="flex bg-white border border-slate-200 rounded-xl p-1 gap-1 shadow-sm h-fit">
            <button className="px-5 py-2.5 text-xs font-bold bg-slate-100 text-slate-900 rounded-lg transition-all">GRID VIEW</button>
            <button className="px-5 py-2.5 text-xs font-bold text-slate-400 hover:text-slate-600 rounded-lg transition-all uppercase tracking-wider">LIST VIEW</button>
          </div>
        </header>

        <div className="mb-10 relative max-w-2xl">
          <Search className="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400" />
          <input
            type="text"
            placeholder="Search by mission, skills or name..."
            className="w-full pl-12 pr-4 py-4 bg-white border border-slate-200 rounded-xl focus:ring-2 focus:ring-gold-500 outline-none transition-all shadow-sm font-medium"
            value={searchTerm}
            onChange={(e) => setSearchTerm(e.target.value)}
          />
        </div>

        {loading ? (
          <div className="flex justify-center py-20">
            <div className="w-10 h-10 border-4 border-gold-500 border-t-transparent rounded-full animate-spin"></div>
          </div>
        ) : (
          <div className="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
            {filteredLifecalls.map((talent, idx) => (
              <motion.div
                key={talent.id}
                initial={{ opacity: 0, y: 10 }}
                animate={{ opacity: 1, y: 0 }}
                transition={{ delay: idx * 0.05 }}
              >
                <LifecallCard {...talent} />
              </motion.div>
            ))}
          </div>
        )}

        {!loading && filteredLifecalls.length === 0 && (
          <div className="text-center py-20 bg-white border border-slate-200 rounded-3xl animate-in fade-in duration-500">
            <p className="text-slate-400 text-lg font-bold tracking-tight">No talents matching your search.</p>
            <button 
              onClick={() => { setSearchTerm(''); setCategory('All'); }}
              className="mt-4 text-gold-600 font-bold hover:underline uppercase text-sm tracking-widest"
            >
              Reset Search
            </button>
          </div>
        )}
      </main>
    </div>
  );
};

const MOCK_TALENTS: LifecallProfile[] = [
  {
    id: '1',
    fullName: 'Alex Riviera',
    bio: 'Senior Fullstack Engineer specialized in React and Node.js. 8+ years of experience building scalable apps.',
    skills: ['Fullstack', 'React', 'Node.js', 'Typescript', 'PostgreSQL'],
    rate: 85,
    experience: 8,
    role: 'talent'
  },
  {
    id: '2',
    fullName: 'Sarah Chen',
    bio: 'Award-winning UI/UX Designer with a passion for clean, user-centric interfaces and mobile experiences.',
    skills: ['UI/UX Design', 'Figma', 'Prototyping', 'Adobe XD', 'Branding'],
    rate: 95,
    experience: 6,
    role: 'talent'
  },
  {
    id: '3',
    fullName: 'Marcus Thorne',
    bio: 'AI Specialist helping companies integrate LLMs and computer vision into their core business products.',
    skills: ['AI/ML', 'Python', 'PyTorch', 'Gemini API', 'Data Science'],
    rate: 120,
    experience: 5,
    role: 'talent'
  },
  {
    id: '4',
    fullName: 'Elena Rodriguez',
    bio: 'Frontend Architect focused on performance and accessibility. Expert in modern frameworks and CSS architectures.',
    skills: ['Frontend', 'Tailwind CSS', 'Vue.js', 'Web Accessibility', 'Three.js'],
    rate: 75,
    experience: 7,
    role: 'talent'
  }
];
