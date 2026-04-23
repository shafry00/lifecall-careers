import React, { useState } from 'react';
import { useSearchParams, useNavigate } from 'react-router-dom';
import { signInWithPopup, GoogleAuthProvider, createUserWithEmailAndPassword, signInWithEmailAndPassword } from 'firebase/auth';
import { doc, setDoc, getDoc } from 'firebase/firestore';
import { auth, db } from '@/src/lib/firebase';
import { motion } from 'motion/react';
import { Mail, Lock, User, Github } from 'lucide-react';
import { LifecallLogo } from '@/src/components/layout/LifecallLogo';

export const AuthPage: React.FC = () => {
  const [searchParams] = useSearchParams();
  const navigate = useNavigate();
  const isLogin = searchParams.get('mode') === 'login';
  
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [fullName, setFullName] = useState('');
  const [role, setRole] = useState<'talent' | 'client'>('talent');
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState<string | null>(null);

  const handleGoogleLogin = async () => {
    try {
      const provider = new GoogleAuthProvider();
      const result = await signInWithPopup(auth, provider);
      
      // Check if profile exists, if not create one
      const docRef = doc(db, 'profiles', result.user.uid);
      const docSnap = await getDoc(docRef);
      
      if (!docSnap.exists()) {
        await setDoc(docRef, {
          userId: result.user.uid,
          fullName: result.user.displayName || 'Unnamed User',
          email: result.user.email,
          role: 'talent', // Default
          createdAt: new Date().toISOString(),
        });
      }
      
      navigate('/dashboard');
    } catch (err) {
      console.error(err);
      setError('Login failed. Please try again.');
    }
  };

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setLoading(true);
    setError(null);

    try {
      if (isLogin) {
        await signInWithEmailAndPassword(auth, email, password);
      } else {
        const result = await createUserWithEmailAndPassword(auth, email, password);
        await setDoc(doc(db, 'profiles', result.user.uid), {
          userId: result.user.uid,
          fullName,
          email,
          role,
          createdAt: new Date().toISOString(),
        });
      }
      navigate('/dashboard');
    } catch (err: any) {
      console.error(err);
      setError(err.message || 'Authentication failed.');
    } finally {
      setLoading(false);
    }
  };

  return (
    <div className="min-h-screen flex items-center justify-center bg-slate-50 p-6">
      <motion.div 
        initial={{ opacity: 0, scale: 0.9 }}
        animate={{ opacity: 1, scale: 1 }}
        className="w-full max-w-md bg-white rounded-3xl shadow-xl p-8 border border-slate-100"
      >
        <div className="text-center mb-8">
          <Link to="/" className="inline-flex items-center gap-2 mb-6">
            <LifecallLogo className="w-8 h-8 text-gold-500" />
            <span className="text-2xl font-display font-bold text-brand-navy">Lifecall Careers</span>
          </Link>
          <h1 className="text-2xl font-bold text-brand-navy">
            {isLogin ? 'Welcome back' : 'Create your account'}
          </h1>
          <p className="text-brand-slate mt-2">
            {isLogin ? 'Join the community of elite digital talents' : 'Start your professional journey with us'}
          </p>
        </div>

        {error && (
          <div className="mb-6 p-4 bg-red-50 text-red-600 rounded-xl text-sm font-medium">
            {error}
          </div>
        )}

        <form onSubmit={handleSubmit} className="space-y-4">
          {!isLogin && (
            <>
              <div className="relative">
                <User className="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400" />
                <input
                  type="text"
                  placeholder="Full Name"
                  required
                  className="w-full pl-12 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-gold-500 outline-none transition-all"
                  value={fullName}
                  onChange={(e) => setFullName(e.target.value)}
                />
              </div>
              
              <div className="grid grid-cols-2 gap-4">
                <button
                  type="button"
                  onClick={() => setRole('talent')}
                  className={`py-3 rounded-xl font-bold border-2 transition-all ${role === 'talent' ? 'border-gold-500 bg-gold-50 text-gold-700' : 'border-slate-100 bg-slate-50 text-slate-500'}`}
                >
                  Lifecall
                </button>
                <button
                  type="button"
                  onClick={() => setRole('client')}
                  className={`py-3 rounded-xl font-bold border-2 transition-all ${role === 'client' ? 'border-gold-500 bg-gold-50 text-gold-700' : 'border-slate-100 bg-slate-50 text-slate-500'}`}
                >
                  Client
                </button>
              </div>
            </>
          )}

          <div className="relative">
            <Mail className="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400" />
            <input
              type="email"
              placeholder="Email Address"
              required
              className="w-full pl-12 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-gold-500 outline-none transition-all"
              value={email}
              onChange={(e) => setEmail(e.target.value)}
            />
          </div>

          <div className="relative">
            <Lock className="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400" />
            <input
              type="password"
              placeholder="Password"
              required
              className="w-full pl-12 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-gold-500 outline-none transition-all"
              value={password}
              onChange={(e) => setPassword(e.target.value)}
            />
          </div>

          <button
            type="submit"
            disabled={loading}
            className="w-full py-4 bg-brand-navy text-white font-bold rounded-xl hover:bg-slate-800 transition-all shadow-lg flex items-center justify-center gap-2"
          >
            {loading ? 'Processing...' : (isLogin ? 'Log In' : 'Sign Up')}
          </button>
        </form>

        <div className="my-8 flex items-center gap-4">
          <div className="flex-grow h-px bg-slate-100" />
          <span className="text-xs font-bold text-slate-400 uppercase tracking-widest">Or continue with</span>
          <div className="flex-grow h-px bg-slate-100" />
        </div>

        <button
          onClick={handleGoogleLogin}
          className="w-full py-4 bg-white border border-slate-200 text-slate-700 font-bold rounded-xl hover:bg-slate-50 transition-all flex items-center justify-center gap-3"
        >
          <img src="https://www.google.com/favicon.ico" className="w-5 h-5" alt="Google" />
          Google
        </button>

        <p className="mt-8 text-center text-sm font-medium text-brand-slate">
          {isLogin ? "Don't have an account?" : "Already have an account?"} {' '}
          <button
            onClick={() => navigate(`/auth?mode=${isLogin ? 'signup' : 'login'}`)}
            className="text-gold-600 font-bold hover:underline"
          >
            {isLogin ? 'Sign up for free' : 'Log in here'}
          </button>
        </p>
      </motion.div>
    </div>
  );
};

// Add Link import for logo if needed
import { Link } from 'react-router-dom';
