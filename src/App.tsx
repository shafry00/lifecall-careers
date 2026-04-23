/**
 * @license
 * SPDX-License-Identifier: Apache-2.0
 */

import React from 'react';
import { BrowserRouter as Router, Routes, Route, Navigate } from 'react-router-dom';
import { AuthProvider, useAuth } from '@/src/contexts/AuthContext';
import { Navbar } from '@/src/components/layout/Navbar';
import { LandingPage } from '@/src/pages/LandingPage';
import { TalentDirectory } from '@/src/pages/TalentDirectory';
import { AuthPage } from '@/src/pages/Auth';
import { Dashboard } from '@/src/pages/Dashboard';

const ProtectedRoute: React.FC<{ children: React.ReactNode }> = ({ children }) => {
  const { user, loading } = useAuth();
  
  if (loading) return (
    <div className="min-h-screen flex items-center justify-center">
      <div className="w-12 h-12 border-4 border-teal-500 border-t-transparent rounded-full animate-spin"></div>
    </div>
  );
  
  if (!user) return <Navigate to="/auth?mode=login" />;
  
  return <>{children}</>;
};

export default function App() {
  return (
    <AuthProvider>
      <Router>
        <div className="flex flex-col min-h-screen bg-slate-50">
          <Navbar />
          <main className="flex-grow">
            <Routes>
              <Route path="/" element={<LandingPage />} />
              <Route path="/talents" element={<TalentDirectory />} />
              <Route path="/auth" element={<AuthPage />} />
              <Route 
                path="/dashboard" 
                element={
                  <ProtectedRoute>
                    <Dashboard />
                  </ProtectedRoute>
                } 
              />
              <Route path="/jobs" element={<div className="pt-32 text-center text-slate-500">Job Board Coming Soon</div>} />
              <Route path="*" element={<Navigate to="/" />} />
            </Routes>
          </main>
          <footer className="h-12 flex-none bg-white border-t border-slate-200 px-8 flex items-center justify-between text-[11px] font-bold text-slate-400 uppercase tracking-widest bg-white z-10">
            <div>&copy; 2026 Talentiv Platform</div>
            <div className="hidden md:flex gap-6">
              <span>Total Talents: 5,000+</span>
              <span>Active Jobs: 148</span>
              <span className="text-teal-600">System Status: Optimal</span>
            </div>
          </footer>
        </div>
      </Router>
    </AuthProvider>
  );
}

