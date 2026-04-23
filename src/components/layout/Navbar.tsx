import React from 'react';
import { NavLink, Link } from 'react-router-dom';
import { TalentivLogo } from './TalentivLogo';
import { useAuth } from '@/src/contexts/AuthContext';
import { LogOut, User, Menu, X } from 'lucide-react';
import { auth } from '@/src/lib/firebase';
import { signOut } from 'firebase/auth';

export const Navbar: React.FC = () => {
  const { user, profile } = useAuth();
  const [isOpen, setIsOpen] = React.useState(false);

  return (
    <nav className="fixed top-0 left-0 right-0 z-50 bg-slate-900 text-white border-b border-slate-800">
      <div className="max-w-7xl mx-auto px-8 h-16 flex items-center justify-between">
        <div className="flex items-center gap-8">
          <Link to="/" className="flex items-center gap-2">
            <div className="w-8 h-8 bg-teal-500 rounded-lg flex items-center justify-center font-bold text-white">T</div>
            <span className="text-xl font-bold tracking-tight">Talentiv<span className="text-teal-400 italic">.</span></span>
          </Link>

          {/* Desktop Nav */}
          <div className="hidden md:flex items-center gap-6">
            <NavLink to="/talents" className={({isActive}) => `text-sm font-medium transition-colors ${isActive ? 'text-white border-teal-500 border-b-2 pb-1' : 'text-slate-300 hover:text-white'}`}>
              Talents
            </NavLink>
            <NavLink to="/jobs" className={({isActive}) => `text-sm font-medium transition-colors ${isActive ? 'text-white border-teal-500 border-b-2 pb-1' : 'text-slate-300 hover:text-white'}`}>
              Job Board
            </NavLink>
          </div>
        </div>

        <div className="hidden md:flex items-center gap-4">
          <button className="bg-teal-600 hover:bg-teal-500 text-white px-4 py-2 rounded-lg text-sm font-semibold transition-colors">
            Post a Job
          </button>
          
          {user ? (
            <Link to="/dashboard" className="flex items-center gap-3 pl-4 border-l border-slate-700">
              <div className="w-10 h-10 rounded-full bg-slate-700 border border-slate-600 flex items-center justify-center text-xs font-bold">
                {profile?.fullName.charAt(0) || user.email?.charAt(0)}
              </div>
            </Link>
          ) : (
            <Link to="/auth?mode=login" className="text-sm font-semibold text-slate-300 hover:text-white ml-4">
              Login
            </Link>
          )}
        </div>

        {/* Mobile Toggle */}
        <button className="md:hidden" onClick={() => setIsOpen(!isOpen)}>
          {isOpen ? <X /> : <Menu />}
        </button>
      </div>

      {/* Mobile Menu */}
      {isOpen && (
        <div className="md:hidden absolute top-20 left-0 right-0 bg-white border-b border-slate-100 p-6 flex flex-col gap-4 animate-in slide-in-from-top-4 duration-200">
          <Link to="/talents" onClick={() => setIsOpen(false)} className="text-lg font-semibold text-brand-navy">Find Talents</Link>
          <Link to="/jobs" onClick={() => setIsOpen(false)} className="text-lg font-semibold text-brand-navy">Job Board</Link>
          <hr className="border-slate-100" />
          {user ? (
            <Link to="/dashboard" onClick={() => setIsOpen(false)} className="flex items-center gap-3 text-lg font-semibold text-brand-navy">
              <User className="w-5 h-5" /> Dashboard
            </Link>
          ) : (
            <Link to="/auth" onClick={() => setIsOpen(false)} className="px-5 py-3 bg-brand-navy text-white text-center font-semibold rounded-xl">
              Get Started
            </Link>
          )}
        </div>
      )}
    </nav>
  );
};
