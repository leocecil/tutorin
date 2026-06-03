@extends('layouts.app_tutor')

@push('styles')
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');
    
    body { 
        font-family: 'DM Sans', sans-serif; 
        background-color: #f8fafc;
    }

    .navy-bg { background-color: #0A1128; }
    .navy-text { color: #0A1128; }
</style>
@endpush

@section('content')
<div class="max-w-7xl mx-auto p-8">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <div class="lg:col-span-4 space-y-6">
            
            <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm relative">
                <button class="absolute top-6 right-6 text-slate-400 hover:text-slate-600 flex items-center gap-1 text-sm font-semibold transition">
                    <i class="fa-solid fa-pen-to-square text-xs"></i> Edit
                </button>

                <div class="flex flex-col items-center text-center">
                    <div class="w-32 h-32 rounded-3xl bg-slate-200 overflow-hidden mb-6 shadow-md border-4 border-white">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=300&h=300&q=80" alt="Dian" class="w-full h-full object-cover">
                    </div>
                    
                    <h1 class="text-3xl font-bold navy-text mb-1">Dian Ramadhani</h1>
                    <p class="text-slate-400 font-medium mb-4">Mathematics Specialist</p>

                    <div class="flex items-center gap-2 mb-6">
                        <span class="text-amber-400"><i class="fa-solid fa-star"></i></span>
                        <span class="font-bold navy-text">4.9</span>
                        <span class="text-slate-400 text-sm">(128 reviews)</span>
                    </div>

                    <div class="flex flex-wrap justify-center gap-2">
                        <span class="px-4 py-1.5 bg-indigo-50 text-indigo-600 text-[10px] font-bold uppercase tracking-wider rounded-md border border-indigo-100">Top Tutor</span>
                        <span class="px-4 py-1.5 bg-indigo-50 text-indigo-600 text-[10px] font-bold uppercase tracking-wider rounded-md border border-indigo-100">Most Booked</span>
                    </div>
                </div>

                <div class="mt-10 space-y-4 pt-8 border-t border-slate-50">
                    <a href="#" class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-xl bg-slate-50 flex items-center justify-center text-slate-400 group-hover:bg-indigo-50 group-hover:text-indigo-600 transition">
                            <i class="fa-regular fa-calendar"></i>
                        </div>
                        <span class="text-slate-600 font-semibold text-sm">Availability schedule</span>
                    </a>
                    <a href="#" class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-xl bg-slate-50 flex items-center justify-center text-slate-400 group-hover:bg-indigo-50 group-hover:text-indigo-600 transition">
                            <i class="fa-regular fa-file-lines"></i>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-slate-600 font-semibold text-sm">Contract & code of conduct</span>
                            <span class="text-[10px] text-slate-400">Signed on Jun 2026</span>
                        </div>
                    </a>
                    <a href="#" class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-xl bg-slate-50 flex items-center justify-center text-slate-400 group-hover:bg-indigo-50 group-hover:text-indigo-600 transition">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <span class="text-slate-600 font-semibold text-sm">My badges</span>
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm">
                <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider block mb-4">Hourly Rate</span>
                <div class="flex items-baseline gap-1">
                    <span class="text-4xl font-bold navy-text">Rp 650.000</span>
                    <span class="text-slate-400 font-medium">/ hour</span>
                </div>
                <p class="text-xs text-slate-400 mt-3 leading-relaxed">
                    Standard rate for advanced calculus and geometry sessions.
                </p>
            </div>

        </div>

        <div class="lg:col-span-8 space-y-6">
            
            <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm space-y-8">
                <div>
                    <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-4">About Me</h3>
                    <p class="text-slate-500 leading-relaxed text-base">
                        With over 8 years of experience in academic instruction, I specialize in making complex mathematical concepts accessible and engaging. My approach focuses on building a strong foundational understanding before tackling advanced problem-solving techniques. I have helped hundreds of students excel in SAT/ACT prep, Calculus, and Linear Algebra.
                    </p>
                </div>

                <div>
                    <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-4">Subjects</h3>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-5 py-2.5 bg-slate-50 border border-slate-200 text-slate-600 font-semibold text-sm rounded-xl">Calculus AB/BC</span>
                        <span class="px-5 py-2.5 bg-slate-50 border border-slate-200 text-slate-600 font-semibold text-sm rounded-xl">Geometry</span>
                        <span class="px-5 py-2.5 bg-slate-50 border border-slate-200 text-slate-600 font-semibold text-sm rounded-xl">Algebra II</span>
                        <span class="px-5 py-2.5 bg-slate-50 border border-slate-200 text-slate-600 font-semibold text-sm rounded-xl">Trigonometry</span>
                    </div>
                </div>

                <button class="px-8 py-3 border-2 border-slate-100 text-slate-700 font-bold rounded-xl hover:bg-slate-50 transition">
                    Statistics
                </button>
            </div>

            <div class="space-y-4">
                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm flex items-center justify-between group cursor-pointer hover:border-indigo-100 transition">
                    <div class="flex items-center gap-5">
                        <div class="w-14 h-14 rounded-2xl bg-indigo-50/50 flex items-center justify-center text-indigo-600 shrink-0">
                            <i class="fa-regular fa-calendar-check text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold navy-text">Availability schedule</h4>
                            <p class="text-sm text-slate-400">Manage your weekly teaching hours</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-chevron-right text-slate-300 group-hover:text-indigo-400 transition"></i>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm flex items-center justify-between group cursor-pointer hover:border-indigo-100 transition">
                    <div class="flex items-center gap-5">
                        <div class="w-14 h-14 rounded-2xl bg-indigo-50/50 flex items-center justify-center text-indigo-600 shrink-0">
                            <i class="fa-solid fa-file-shield text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold navy-text">Contract & code of conduct</h4>
                            <p class="text-sm text-slate-400">Legal agreements and platform rules</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-chevron-right text-slate-300 group-hover:text-indigo-400 transition"></i>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm flex items-center justify-between group cursor-pointer hover:border-indigo-100 transition">
                    <div class="flex items-center gap-5">
                        <div class="w-14 h-14 rounded-2xl bg-indigo-50/50 flex items-center justify-center text-indigo-600 shrink-0">
                            <i class="fa-solid fa-medal text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold navy-text">My badges</h4>
                            <p class="text-sm text-slate-400">View earned achievement markers</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-chevron-right text-slate-300 group-hover:text-indigo-400 transition"></i>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm flex items-center justify-between">
                    <div class="flex items-center gap-5">
                        <div class="w-14 h-14 rounded-2xl bg-indigo-50/50 flex items-center justify-center text-indigo-600 shrink-0">
                            <i class="fa-regular fa-bell text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold navy-text">Notifications</h4>
                            <p class="text-sm text-slate-400">Receive alerts for new sessions</p>
                        </div>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer" checked>
                        <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#0A1128]"></div>
                    </label>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection