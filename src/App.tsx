import React from 'react';
import { BookOpen, Award, FileText, Mail, ExternalLink, GraduationCap } from 'lucide-react';
import { Link } from 'react-router-dom';

function App() {
  const stats = [
    { label: 'Years Experience', value: '25+' },
    { label: 'Publications', value: '50+' },
    { label: 'Awards', value: '12' }
  ];

  return (
    <div className="min-h-screen bg-[#0A1929]">
      {/* Navigation */}
      <nav className="fixed top-0 w-full bg-[#0A1929]/90 backdrop-blur-sm border-b border-[#2196F3]/20 z-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex justify-between h-16 items-center">
            <div className="flex items-center">
              <GraduationCap className="h-8 w-8 text-[#2196F3]" />
              <span className="ml-2 text-white font-semibold">Prof. Dr. C M Ahmed</span>
            </div>
            <div className="hidden md:flex items-center space-x-8">
              <Link to="/" className="text-gray-300 hover:text-white transition">Home</Link>
              <Link to="/biodata" className="text-gray-300 hover:text-white transition">Biodata</Link>
              <Link to="/contact" className="text-gray-300 hover:text-white transition">Contact</Link>
            </div>
          </div>
        </div>
      </nav>

      {/* Hero Section */}
      <div className="pt-24 pb-16 px-4 sm:px-6 lg:px-8">
        <div className="max-w-7xl mx-auto">
          <div className="flex flex-col md:flex-row items-center gap-12">
            <div className="flex-1">
              <h1 className="font-playfair text-4xl md:text-5xl lg:text-6xl text-white font-bold">
                Prof. Dr. Chaudhury Meshkat Ahmed
              </h1>
              <p className="mt-4 text-xl text-gray-400">
                Distinguished Medical Professional & Academic Researcher
              </p>
              <div className="mt-8 grid grid-cols-3 gap-4">
                {stats.map((stat) => (
                  <div key={stat.label} className="bg-[#1A2C42] p-4 rounded-lg">
                    <div className="text-[#2196F3] text-2xl font-bold">{stat.value}</div>
                    <div className="text-gray-400 text-sm">{stat.label}</div>
                  </div>
                ))}
              </div>
            </div>
            <div className="flex-1">
              <img 
                src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?auto=format&fit=crop&q=80"
                alt="Professional headshot"
                className="rounded-lg shadow-xl w-full max-w-md mx-auto"
              />
            </div>
          </div>
        </div>
      </div>

      {/* Research Spotlight */}
      <section className="py-16 bg-[#1A2C42]">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <h2 className="text-3xl font-playfair font-bold text-white mb-8">Research Spotlight</h2>
          <div className="grid md:grid-cols-3 gap-8">
            {[1, 2, 3].map((item) => (
              <div key={item} className="bg-[#0A1929] p-6 rounded-lg">
                <BookOpen className="h-8 w-8 text-[#2196F3] mb-4" />
                <h3 className="text-xl font-bold text-white mb-2">Research Title {item}</h3>
                <p className="text-gray-400 mb-4">
                  Brief description of the research and its impact on the medical field.
                </p>
                <a href="#" className="text-[#2196F3] hover:text-[#4CAF50] flex items-center gap-2">
                  Read More <ExternalLink className="h-4 w-4" />
                </a>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Footer */}
      <footer className="bg-[#0A1929] border-t border-[#2196F3]/20 py-8">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex flex-col md:flex-row justify-between items-center">
            <div className="text-gray-400 text-sm">
              © {new Date().getFullYear()} Prof. Dr. Chaudhury Meshkat Ahmed
            </div>
            <div className="flex space-x-6 mt-4 md:mt-0">
              <Mail className="h-5 w-5 text-gray-400 hover:text-white cursor-pointer" />
              <FileText className="h-5 w-5 text-gray-400 hover:text-white cursor-pointer" />
              <Award className="h-5 w-5 text-gray-400 hover:text-white cursor-pointer" />
            </div>
          </div>
        </div>
      </footer>
    </div>
  );
}

export default App;