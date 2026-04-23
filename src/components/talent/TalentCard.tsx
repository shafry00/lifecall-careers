import React from 'react';
import { Star, MapPin, DollarSign, Briefcase } from 'lucide-react';
import { motion } from 'motion/react';

interface TalentProps {
  fullName: string;
  bio?: string;
  skills?: string[];
  rate?: number;
  experience?: number;
  avatarUrl?: string;
}

export const TalentCard: React.FC<TalentProps> = ({
  fullName,
  bio,
  skills = [],
  rate,
  experience,
  avatarUrl,
}) => {
  return (
    <motion.div
      whileHover={{ scale: 1.02 }}
      className="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:border-teal-500 transition-all duration-300 flex flex-col h-full"
    >
      <div className="flex justify-between items-start mb-4">
        <div className="w-12 h-12 bg-slate-100 rounded-xl overflow-hidden flex-shrink-0">
          {avatarUrl ? (
            <img src={avatarUrl} alt={fullName} className="w-full h-full object-cover" />
          ) : (
            <div className="w-full h-full flex items-center justify-center font-bold text-slate-400 bg-teal-50">
              {fullName.charAt(0)}{fullName.split(' ')[1]?.charAt(0) || ''}
            </div>
          )}
        </div>
        <div className="px-3 py-1 bg-teal-50 text-teal-700 text-[10px] font-bold uppercase rounded-full tracking-wider">
          Available
        </div>
      </div>

      <h2 className="text-xl font-bold text-slate-900 leading-tight mb-0.5">{fullName}</h2>
      <p className="text-slate-500 text-sm mb-4 font-medium leading-tight">
        {experience || 0} Years Experience
      </p>

      <p className="text-slate-600 text-sm line-clamp-2 mb-6 min-h-[40px]">
        {bio || "Senior digital professional specialized in modern technology stacks."}
      </p>

      <div className="flex flex-wrap gap-2 mb-6 flex-grow items-start">
        {skills.slice(0, 3).map((skill) => (
          <span
            key={skill}
            className="px-2 py-1 bg-slate-50 border border-slate-100 rounded text-[11px] font-semibold text-slate-600"
          >
            {skill}
          </span>
        ))}
      </div>

      <div className="mt-auto flex justify-between items-center pt-4 border-t border-slate-100 font-mono">
        <div className="text-slate-400 text-[10px] uppercase tracking-widest font-bold">Rate</div>
        <div className="text-slate-900 font-bold">
          ${rate || 0}<span className="text-slate-400 font-normal">/hr</span>
        </div>
      </div>
    </motion.div>
  );
};
