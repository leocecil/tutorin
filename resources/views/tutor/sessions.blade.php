<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>@yield('title', 'Tutorin')</title>
    </head>
<body>
    </body>
</html>

@extends('layouts.app_tutor')

@push('styles')
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');
    
    body { 
        font-family: 'DM Sans', sans-serif; 
        background-color: #f8fafc;
    }

    .navy-bg { background-color: #f5a623; }
    .navy-text { color: #0A1128; }
</style>
@endpush

@section('content')
<div class="max-w-7xl mx-auto p-8" x-data="{ currentTab: 'upcoming', showModal: false, fileName: '' }">
    
    <div class="flex flex-col md:flex-row justify-between items-start mb-10 gap-6">
        <div class="max-w-2xl">
            <h1 class="text-3xl font-bold navy-text mb-4">My Sessions</h1>
            <p class="text-slate-500 text-lg leading-relaxed">
                Manage your academic schedule, track student progress, and review past interactions in one centralized hub.
            </p>
        </div>

        <div class="bg-slate-100 p-1.5 rounded-2xl flex items-center gap-1 self-end md:self-auto">
            <button 
                @click="currentTab = 'upcoming'"
                :class="currentTab === 'upcoming' ? 'bg-white rounded-xl shadow-sm text-slate-800 font-semibold' : 'text-slate-400 font-semibold hover:text-slate-600'"
                class="px-8 py-2.5 transition">
                Upcoming
            </button>
            <button 
                @click="currentTab = 'completed'"
                :class="currentTab === 'completed' ? 'bg-white rounded-xl shadow-sm text-slate-800 font-semibold' : 'text-slate-400 font-semibold hover:text-slate-600'"
                class="px-8 py-2.5 transition">
                Completed
            </button>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <div class="lg:col-span-4 lg:col-span-8 space-y-6">
            
            <div x-show="currentTab === 'upcoming'" class="space-y-6">
                <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm flex flex-col md:flex-row justify-between items-center gap-6">
                    <div class="flex items-start gap-6 w-full">
                        <div class="w-16 h-16 rounded-2xl bg-indigo-50 flex items-center justify-center text-indigo-600 shrink-0">
                            <i class="fa-solid fa-graduation-cap text-2xl"></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-1">
                                <h3 class="text-2xl font-bold navy-text">Alex Johnson</h3>
                                <span class="px-3 py-1 bg-indigo-50 text-indigo-600 text-[10px] font-bold uppercase tracking-wider rounded-md">Confirmed</span>
                            </div>
                            <p class="text-slate-400 font-medium mb-4">Advanced Calculus • Integration</p>
                            <div class="flex flex-wrap gap-6 text-slate-600">
                                <div class="flex items-center gap-2">
                                    <i class="fa-regular fa-calendar text-slate-400"></i>
                                    <span class="text-sm font-semibold">Oct 24, 2024</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="fa-regular fa-clock text-slate-400"></i>
                                    <span class="text-sm font-semibold">14:00 - 15:30</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="w-full md:w-auto px-8 py-3.5 navy-bg text-white font-bold rounded-xl hover:opacity-90 transition whitespace-nowrap">
                        Join Room
                    </button>
                </div>

                <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm flex flex-col md:flex-row justify-between items-center gap-6">
                    <div class="flex items-start gap-6 w-full">
                        <div class="w-16 h-16 rounded-2xl bg-amber-50 flex items-center justify-center text-amber-600 shrink-0">
                            <i class="fa-solid fa-graduation-cap text-2xl"></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-1">
                                <h3 class="text-2xl font-bold navy-text">Sarah Williams</h3>
                                <span class="px-3 py-1 bg-indigo-50 text-indigo-600 text-[10px] font-bold uppercase tracking-wider rounded-md">Confirmed</span>
                            </div>
                            <p class="text-slate-400 font-medium mb-4">French Literature • Analysis</p>
                            <div class="flex flex-wrap gap-6 text-slate-600">
                                <div class="flex items-center gap-2">
                                    <i class="fa-regular fa-calendar text-slate-400"></i>
                                    <span class="text-sm font-semibold">Oct 25, 2024</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="fa-regular fa-clock text-slate-400"></i>
                                    <span class="text-sm font-semibold">10:00 - 11:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="w-full md:w-auto px-10 py-3.5 border-2 border-slate-100 text-slate-700 font-bold rounded-xl hover:bg-slate-50 transition whitespace-nowrap">
                        Details
                    </button>
                </div>
            </div>

            <div x-show="currentTab === 'completed'" x-cloak class="space-y-6">
                <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm flex flex-col md:flex-row justify-between items-center gap-6">
                    <div class="flex items-start gap-6 w-full">
                        <div class="w-16 h-20 rounded-2xl bg-cyan-50/60 flex flex-col items-center justify-center border border-cyan-100 text-cyan-700 shrink-0">
                            <span class="text-2xl font-bold leading-none">20</span>
                            <span class="text-[11px] font-bold tracking-wider uppercase mt-1">Apr</span>
                        </div>
                        <div class="flex-1 space-y-2">
                            <h3 class="text-2xl font-bold navy-text">Rafi Adhitama</h3>
                            <p class="text-slate-400 font-medium">Calculus II • 90 min</p>
                            
                            <div class="flex flex-wrap gap-2 items-center">
                                <span class="px-3 py-1 bg-slate-100 text-slate-600 text-xs font-semibold rounded-full">14:00 – 15:30</span>
                                <span class="px-3 py-1 bg-amber-50 text-amber-700 text-xs font-bold rounded-full inline-flex items-center gap-1">
                                    COMPLETED • <span class="text-amber-500 text-xs">★★★★★</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <button @click="fileName = ''; showModal = true" class="w-full md:w-auto px-6 py-3 navy-bg text-white font-bold rounded-xl hover:opacity-90 transition flex items-center justify-center gap-2 whitespace-nowrap">
                        <i class="fa-regular fa-file-lines"></i> Upload notes
                    </button>
                </div>

                <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm flex flex-col md:flex-row justify-between items-center gap-6">
                    <div class="flex items-start gap-6 w-full">
                        <div class="w-16 h-20 rounded-2xl bg-cyan-50/60 flex flex-col items-center justify-center border border-cyan-100 text-cyan-700 shrink-0">
                            <span class="text-2xl font-bold leading-none">15</span>
                            <span class="text-[11px] font-bold tracking-wider uppercase mt-1">Apr</span>
                        </div>
                        <div class="flex-1 space-y-2">
                            <h3 class="text-2xl font-bold navy-text">Andi Pratama</h3>
                            <p class="text-slate-400 font-medium">Linear Algebra • 60 min</p>
                            
                            <div class="flex flex-wrap gap-2 items-center">
                                <span class="px-3 py-1 bg-slate-100 text-slate-600 text-xs font-semibold rounded-full">10:00 – 11:00</span>
                                <span class="px-3 py-1 bg-amber-50 text-amber-700 text-xs font-bold rounded-full inline-flex items-center gap-1">
                                    COMPLETED • <span class="text-amber-500 text-xs">★★★★★</span>
                                </span>
                            </div>
                            <div>
                                <span class="px-3 py-1 bg-emerald-50 text-emerald-700 text-xs font-bold rounded-md inline-flex items-center gap-1 mt-1">
                                    Notes uploaded
                                </span>
                            </div>
                        </div>
                    </div>
                    <button class="w-full md:w-auto px-8 py-3.5 border-2 border-slate-100 text-slate-700 font-bold rounded-xl hover:bg-slate-50 transition whitespace-nowrap">
                        Details
                    </button>
                </div>
            </div>

        </div>

        <div class="lg:col-span-4 space-y-6">
            <div class="navy-bg text-white rounded-3xl p-8 relative overflow-hidden">
                <h3 class="text-2xl font-bold mb-4">Quick Tip</h3>
                <p class="text-slate-300 leading-relaxed mb-8" style="color: #f9f9f9"> 
                    Uploading session notes within 24 hours increases student retention by 40%. Start preparing your materials now.
                </p>
                <a href="#" class="inline-flex items-center gap-2 text-amber-400 font-bold hover:gap-3 transition-all" style="color: #f9f9f9">
                    View Guide <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-10 h-1 rounded-full bg-amber-400"></div>
                    <h3 class="text-lg font-bold navy-text">Weekly Outlook</h3>
                </div>
                <div class="space-y-6">
                    <div class="flex justify-between items-center">
                        <span class="text-slate-400 font-medium">Total Sessions</span>
                        <span class="text-xl font-bold navy-text">12</span>
                    </div>
                    <div class="w-full bg-slate-100 rounded-full h-2.5">
                        <div class="bg-green-700 h-2.5 rounded-full" style="width: 80%"></div>
                    </div>
                    <hr class="border-slate-100">
                    <div class="flex justify-between items-center">
                        <span class="text-slate-400 font-medium">Hours Completed</span>
                        <span class="text-xl font-bold navy-text">18.5h</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div 
        x-show="showModal" 
        class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/40 backdrop-blur-sm"
        x-transition
        x-cloak>
        
        <div 
            @click.away="showModal = false" 
            class="bg-white w-full max-w-lg rounded-3xl p-8 shadow-xl relative space-y-6">
            
            <div class="w-12 h-1 bg-slate-200 rounded-full mx-auto -mt-2"></div>

            <div>
                <h2 class="text-3xl font-bold navy-text">Upload session notes</h2>
                <p class="text-sm text-slate-400 mt-1">For: <span class="font-semibold text-slate-600">Rafi Adhitama · Calculus II</span></p>
            </div>

            <input 
                type="file" 
                id="realFileInput" 
                class="hidden" 
                accept=".pdf,.docx,.doc,.jpg,.jpeg,.png"
                @change="fileName = $event.target.files[0] ? $event.target.files[0].name : ''"
            >

            <div 
                @click="document.getElementById('realFileInput').click()"
                class="border-2 border-dashed rounded-2xl p-8 text-center bg-slate-50/50 hover:bg-slate-50 cursor-pointer transition"
                :class="fileName ? 'border-emerald-400 bg-emerald-50/10' : 'border-slate-200'"
            >
                <div class="flex flex-col items-center gap-3">
                    <div 
                        class="w-12 h-14 rounded-lg flex items-center justify-center shadow-sm transition"
                        :class="fileName ? 'bg-emerald-50 text-emerald-500' : 'bg-indigo-50 text-indigo-400'"
                    >
                        <i :class="fileName ? 'fa-solid fa-file-circle-check' : 'fa-regular fa-file-lines'" class="text-2xl"></i>
                    </div>
                    
                    <div class="max-w-[280px] overflow-hidden truncate">
                        <template x-if="!fileName">
                            <div>
                                <p class="text-base font-bold text-slate-700">Tap to upload file</p>
                                <p class="text-xs text-slate-400 mt-1">PDF, DOCX, JPG · Max 20MB</p>
                            </div>
                        </template>
                        <template x-if="fileName">
                            <div>
                                <p class="text-base font-bold text-emerald-700 truncate" x-text="fileName"></p>
                                <p class="text-xs text-emerald-500 mt-1">File selected successfully! Click to change</p>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            <div class="space-y-2">
                <label class="text-[11px] font-bold tracking-wider text-slate-400 uppercase">Add a note for the student (optional)</label>
                <textarea 
                    rows="3" 
                    placeholder="e.g. Focus on pages 3–5 for next session..." 
                    class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:border-indigo-500 placeholder-slate-300 resize-none text-slate-700"></textarea>
            </div>

            <button 
                @click="showModal = false" 
                class="w-full py-4 navy-bg text-white font-bold text-base rounded-xl hover:opacity-90 transition">
                Done
            </button>
        </div>
    </div>

</div>
@endsection