import React from 'react';
import { Link } from 'react-router-dom';
import { motion } from 'motion/react';
import { ArrowRight, CheckCircle2, Star, Users, Building2, Briefcase } from 'lucide-react';

export const LandingPage: React.FC = () => {
  return (
    <div className="flex flex-col w-full">
      {/* Hero Section */}
      <section className="relative pt-32 pb-20 md:pt-48 md:pb-32 px-6 overflow-hidden">
        <div className="absolute top-0 left-0 right-0 h-[600px] bg-gradient-to-b from-gold-50/50 to-transparent -z-10" />
        
        <div className="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-16">
          <div className="flex-1 text-center lg:text-left">
            <motion.div
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              className="inline-flex items-center gap-2 px-4 py-2 bg-gold-100 text-gold-700 rounded-full text-sm font-bold mb-6"
            >
              <Star className="w-4 h-4 fill-current" />
              Over 5,000+ Professionals Joined
            </motion.div>
            
            <motion.h1 
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ delay: 0.1 }}
              className="text-6xl md:text-8xl font-black text-brand-navy leading-none tracking-tighter mb-8"
            >
              Akselerasi Karir <span className="text-gold-500 italic">Impianmu</span> Sekarang
            </motion.h1>
            
            <motion.p 
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ delay: 0.2 }}
              className="text-brand-slate text-xl mb-10 max-w-xl mx-auto lg:mx-0"
            >
              Lifecall Careers membantu profesional muda menaklukkan tantangan industri dengan kurikulum <span className="font-bold text-brand-navy underline decoration-gold-400">Fast Track Learning</span> yang praktis dan efisien.
            </motion.p>
            
            <motion.div 
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ delay: 0.3 }}
              className="flex flex-col sm:flex-row items-center gap-4 justify-center lg:justify-start"
            >
              <Link to="/talents" className="w-full sm:w-auto px-8 py-4 bg-brand-teal text-white rounded-2xl font-bold flex items-center justify-center gap-2 hover:bg-gold-600 transition-all shadow-lg hover:shadow-gold-200">
                Mulai Belajar Sekarang <ArrowRight className="w-5 h-5" />
              </Link>
              <Link to="/auth" className="w-full sm:w-auto px-8 py-4 bg-white text-brand-navy border border-slate-200 rounded-2xl font-bold hover:bg-slate-50 transition-all">
                Daftar Sebagai Mentor
              </Link>
            </motion.div>

            <div className="mt-12 flex items-center justify-center lg:justify-start gap-8 opacity-50 grayscale hover:grayscale-0 transition-all duration-500">
              <span className="text-sm font-bold uppercase tracking-widest text-slate-400">Official Partner:</span>
              <img src="https://talentiv.id/wp-content/uploads/2023/06/BNSP-New-Logo-300x127.png" alt="BNSP" className="h-8" />
              <img src="https://talentiv.id/wp-content/uploads/2023/10/mekari-talenta.png" alt="Mekari" className="h-8" />
            </div>
          </div>

          <motion.div 
            initial={{ opacity: 0, scale: 0.8 }}
            animate={{ opacity: 1, scale: 1 }}
            transition={{ delay: 0.4, type: "spring" }}
            className="flex-1 relative"
          >
            <div className="relative z-10 rounded-3xl overflow-hidden shadow-2xl skew-y-1">
              <img 
                src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80&w=1200" 
                alt="Lifecall Team" 
                className="w-full h-auto"
              />
              <div className="absolute inset-0 bg-gradient-to-t from-brand-navy/60 to-transparent" />
              <div className="absolute bottom-8 left-8 text-white">
                <p className="text-sm font-bold uppercase tracking-widest opacity-80 mb-2">Success Story</p>
                <p className="text-2xl font-bold leading-tight">"From Fresh Graduate to Senior Consultant in 2 years"</p>
              </div>
            </div>
            
            {/* Floating Element */}
            <div className="absolute -top-6 -right-6 bg-white p-4 rounded-2xl shadow-xl z-20 hidden md:block">
              <div className="flex items-center gap-3">
                <div className="w-10 h-10 bg-gold-100 rounded-full flex items-center justify-center text-gold-600">
                  <CheckCircle2 className="w-6 h-6" />
                </div>
                <div>
                  <p className="text-xs font-bold text-slate-400 uppercase">Verified</p>
                  <p className="text-sm font-bold text-brand-navy">BNSP Certified</p>
                </div>
              </div>
            </div>
          </motion.div>
        </div>
      </section>

      {/* Trust Signals / Stats */}
      <section className="bg-brand-navy py-16">
        <div className="max-w-7xl mx-auto px-6">
          <div className="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-slate-800">
            <div>
              <p className="text-4xl md:text-5xl font-display font-bold text-white mb-2">5000+</p>
              <p className="text-slate-400 text-sm font-semibold">Alumni Profesional</p>
            </div>
            <div>
              <p className="text-4xl md:text-5xl font-display font-bold text-gold-400 mb-2">4.9</p>
              <p className="text-slate-400 text-sm font-semibold">Student Rating</p>
            </div>
            <div>
              <p className="text-4xl md:text-5xl font-display font-bold text-white mb-2">80+</p>
              <p className="text-slate-400 text-sm font-semibold">Mitra Perusahaan</p>
            </div>
            <div>
              <p className="text-4xl md:text-5xl font-display font-bold text-gold-400 mb-2">24/7</p>
              <p className="text-slate-400 text-sm font-semibold">Career Support</p>
            </div>
          </div>
        </div>
      </section>

      {/* Categories / Services */}
      <section className="py-24 px-6 bg-white">
        <div className="max-w-7xl mx-auto">
          <div className="text-center mb-16">
            <h2 className="text-4xl font-bold mb-4">Didesain Oleh Expert & Divalidasi</h2>
            <p className="text-brand-slate text-lg">Pilih jalur karirmu dan mulai bertransformasi hari ini.</p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
            <CategoryCard 
              title="Menjadi Profesional"
              desc="Cocok Untuk Karyawan & Staf Yang Sedang Bekerja Di Perusahaan."
              icon={<Users className="w-8 h-8" />}
              color="bg-blue-50 text-blue-600"
            />
            <CategoryCard 
              title="Menjadi Leader"
              desc="Cocok Untuk Manajer & Senior Yang Sedang Bekerja Di Perusahaan."
              icon={<Building2 className="w-8 h-8" />}
              color="bg-purple-50 text-purple-600"
            />
            <CategoryCard 
              title="Mencari Pekerjaan"
              desc="Cocok Untuk Fresh Graduate & Job Seeker Yang Ingin Karir Cepat."
              icon={<Briefcase className="w-8 h-8" />}
              color="bg-gold-50 text-gold-600"
            />
          </div>
        </div>
      </section>

      {/* FAQ / Consulting CTA */}
      <section className="py-20 px-6 bg-slate-50">
        <div className="max-w-5xl mx-auto bg-brand-navy rounded-[2.5rem] p-12 relative overflow-hidden">
          <div className="absolute right-0 top-0 w-1/3 h-full bg-gold-500 opacity-10 skew-x-12 translate-x-16" />
          
          <div className="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
            <div>
              <h2 className="text-3xl md:text-4xl font-bold text-white mb-4">Masih Bingung?</h2>
              <p className="text-slate-400 text-lg">Konsultasikan kebutuhan Anda dengan tim ahli kami secara gratis.</p>
            </div>
            <a href="#" className="whitespace-nowrap px-8 py-4 bg-gold-500 text-white rounded-2xl font-bold hover:bg-gold-400 transition-all flex items-center gap-2">
              Hubungi Kami via WhatsApp
            </a>
          </div>
        </div>
      </section>
    </div>
  );
};

const CategoryCard = ({ title, desc, icon, color }: { title: string, desc: string, icon: React.ReactNode, color: string }) => (
  <motion.div 
    whileHover={{ y: -10 }}
    className="bg-white border border-slate-100 p-8 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300"
  >
    <div className={`w-16 h-16 ${color} rounded-2xl flex items-center justify-center mb-6`}>
      {icon}
    </div>
    <h3 className="text-2xl font-bold mb-4">{title}</h3>
    <p className="text-brand-slate mb-6">{desc}</p>
    <Link to="/talents" className="text-gold-600 font-bold flex items-center gap-2 hover:gap-3 transition-all">
      Lihat Detail Program <ArrowRight className="w-4 h-4" />
    </Link>
  </motion.div>
);
