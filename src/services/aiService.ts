import { GoogleGenAI, Type } from "@google/genai";

const ai = new GoogleGenAI({ apiKey: process.env.GEMINI_API_KEY });

interface TalentProfile {
  id: string;
  fullName: string;
  skills: string[];
  experience: number;
}

export async function matchTalentWithJob(jobDescription: string, talents: TalentProfile[]) {
  try {
    const response = await ai.models.generateContent({
      model: "gemini-3-flash-preview",
      contents: `Rank the following talents for this job description. Return a list of talent IDs sorted from best to worst match, with a short reason for each.
      
      Job Description: ${jobDescription}
      
      Talents:
      ${JSON.stringify(talents)}`,
      config: {
        responseMimeType: "application/json",
        responseSchema: {
          type: Type.OBJECT,
          properties: {
            matches: {
              type: Type.ARRAY,
              items: {
                type: Type.OBJECT,
                properties: {
                  talentId: { type: Type.STRING },
                  reason: { type: Type.STRING },
                  matchScore: { type: Type.NUMBER, description: "Match score from 0 to 100" }
                },
                required: ["talentId", "reason", "matchScore"]
              }
            }
          },
          required: ["matches"]
        }
      }
    });

    const result = JSON.parse(response.text);
    return result.matches;
  } catch (error) {
    console.error("AI Matching failed:", error);
    return [];
  }
}
