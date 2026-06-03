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
<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap');
    body { font-family: 'DM Sans', sans-serif; }
</style>
@endpush

@section('content')
<div class="p-6 bg-slate-50 min-h-screen">
    
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
        <div>
            <h1 class="text-3xl font-bold text-slate-900">Good morning, Dian Ramadhani</h1>
            <p class="text-slate-500 mt-1">You have <span class="font-semibold text-slate-700">3 new student requests</span> and <span class="font-semibold text-slate-700">4 sessions today</span>.</p>
        </div>
        <div class="bg-white border border-slate-100 rounded-2xl p-4 shadow-sm flex items-center gap-4 w-full md:w-auto">
            <div class="w-10 h-10 rounded-full bg-indigo-50 flex items-center justify-center text-indigo-600">
                <i class="fa-solid fa-graduation-cap text-lg"></i>
            </div>
            <div class="flex-1 md:w-48">
                <div class="flex justify-between text-xs font-semibold mb-1 text-slate-700">
                    <span>PROFILE COMPLETION</span>
                    <span>85%</span>
                </div>
                <div class="w-full bg-slate-100 rounded-full h-2">
                    <div class="bg-amber-500 h-2 rounded-full" style="width: 85%"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
            <span class="text-xs font-bold text-slate-400 tracking-wider block mb-2 text-uppercase">THIS MONTH'S EARNINGS</span>
            <h2 class="text-3xl font-bold text-slate-900">$2,450.00</h2>
            <span class="text-emerald-500 text-xs font-semibold mt-2 inline-flex items-center gap-1">
                <i class="fa-solid fa-arrow-trend-up"></i> +12% from last month
            </span>
        </div>
        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
            <span class="text-xs font-bold text-slate-400 tracking-wider block mb-2">RATING</span>
            <h2 class="text-3xl font-bold text-slate-900 flex items-center gap-2">
                4.9 <span class="text-amber-400 text-2xl"><i class="fa-solid fa-star"></i></span>
            </h2>
            <span class="text-slate-400 text-xs mt-2 block">128 Total Reviews</span>
        </div>
        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
            <span class="text-xs font-bold text-slate-400 tracking-wider block mb-2">SESSIONS</span>
            <h2 class="text-3xl font-bold text-slate-900">42</h2>
            <span class="text-slate-400 text-xs mt-2 block">Completed this month</span>
        </div>
        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
            <span class="text-xs font-bold text-slate-400 tracking-wider block mb-2">REQUESTS</span>
            <h2 class="text-3xl font-bold text-slate-900">3</h2>
            <span class="text-amber-600 font-semibold text-xs mt-2 block">New arrivals</span>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <div class="lg:col-span-4 space-y-4">
            <div class="flex justify-between items-center mb-2">
                <h3 class="text-lg font-bold text-slate-900">Booking requests</h3>
                <a href="#" class="text-amber-600 hover:text-amber-700 text-sm font-semibold">View all</a>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-slate-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&h=150&q=80" alt="Alex" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900">Alex Johnson</h4>
                        <p class="text-xs text-slate-400">Applied Mathematics</p>
                    </div>
                </div>
                <div class="text-sm text-slate-600 space-y-1">
                    <div class="flex items-center gap-2"><i class="fa-regular fa-calendar text-slate-400"></i> Tomorrow, Oct 24</div>
                    <div class="flex items-center gap-2"><i class="fa-regular fa-clock text-slate-400"></i> 2:00 PM - 3:00 PM (1h)</div>
                </div>
                <div class="grid grid-cols-2 gap-3 pt-2">
                    <button class="px-4 py-2.5 border border-slate-200 text-slate-700 font-semibold text-sm rounded-xl hover:bg-slate-50 transition">Decline</button>
                    <button class="px-4 py-2.5 bg-[#f5a623] text-white font-semibold text-sm rounded-xl hover:bg-slate-800 transition">Accept</button>
                </div>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-slate-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=150&h=150&q=80" alt="Sarah" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900">Sarah Williams</h4>
                        <p class="text-xs text-slate-400">Linear Algebra</p>
                    </div>
                </div>
                <div class="text-sm text-slate-600 space-y-1">
                    <div class="flex items-center gap-2"><i class="fa-regular fa-calendar text-slate-400"></i> Friday, Oct 25</div>
                    <div class="flex items-center gap-2"><i class="fa-regular fa-clock text-slate-400"></i> 10:00 AM - 11:30 AM (1.5h)</div>
                </div>
                <div class="grid grid-cols-2 gap-3 pt-2">
                    <button class="px-4 py-2.5 border border-slate-200 text-slate-700 font-semibold text-sm rounded-xl hover:bg-slate-50 transition">Decline</button>
                    <button class="px-4 py-2.5 bg-[#f5a623] text-white font-semibold text-sm rounded-xl hover:bg-slate-800 transition">Accept</button>
                </div>
            </div>
        </div>

        <div class="lg:col-span-8 space-y-6">
            <div class="flex justify-between items-center mb-2">
                <h3 class="text-lg font-bold text-slate-900">Today's sessions</h3>
                <div class="bg-slate-100 p-1 rounded-xl flex gap-1 text-sm font-semibold">
                    <button class="px-4 py-1.5 bg-white rounded-lg shadow-sm text-slate-800">Upcoming</button>
                    <button class="px-4 py-1.5 text-slate-400 hover:text-slate-600">Past</button>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex items-stretch border-l-4 border-l-amber-500">
                <div class="p-5 flex flex-col justify-center items-center border-r border-slate-100 px-6 min-w-[110px]">
                    <span class="text-2xl font-bold text-slate-800">09:30</span>
                    <span class="text-xs font-bold text-slate-400">AM</span>
                </div>
                <div class="p-5 flex-1 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-slate-200 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&h=150&q=80" alt="James" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-800">James Miller</h4>
                            <p class="text-xs text-slate-400">Calculus II • 60 mins</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 self-end sm:self-auto">
                        <button class="px-5 py-2 bg-[#f5a623] text-white text-sm font-semibold rounded-xl flex items-center gap-2 hover:bg-[#e69514] transition">
                            <i class="fa-regular fa-circle-play"></i> Start
                        </button>
                        <button class="p-2 text-slate-400 hover:text-slate-600 rounded-lg"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex items-stretch border-l-4 border-l-slate-800">
                <div class="p-5 flex flex-col justify-center items-center border-r border-slate-100 px-6 min-w-[110px]">
                    <span class="text-2xl font-bold text-slate-800">13:00</span>
                    <span class="text-xs font-bold text-slate-400">PM</span>
                </div>
                <div class="p-5 flex-1 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-slate-200 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=150&h=150&q=80" alt="Maya" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-800">Maya Chen</h4>
                            <p class="text-xs text-slate-400">Discrete Mathematics • 90 mins</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 self-end sm:self-auto">
                        <span class="px-4 py-2 bg-slate-50 border border-slate-100 text-slate-500 text-xs font-semibold rounded-xl flex items-center gap-2">
                            <i class="fa-regular fa-clock"></i> Starts in 2h
                        </span>
                        <button class="p-2 text-slate-400 hover:text-slate-600 rounded-lg"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex items-stretch border-l-4 border-l-slate-200">
                <div class="p-5 flex flex-col justify-center items-center border-r border-slate-100 px-6 min-w-[110px]">
                    <span class="text-2xl font-bold text-slate-800">15:30</span>
                    <span class="text-xs font-bold text-slate-400">PM</span>
                </div>
                <div class="p-5 flex-1 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-amber-500 text-white font-bold flex items-center justify-center text-sm">
                            LL
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-800">Lucas Lopez</h4>
                            <p class="text-xs text-slate-400">Advanced Calculus • 60 mins</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 self-end sm:self-auto">
                        <span class="px-4 py-2 bg-slate-50 border border-slate-100 text-slate-500 text-xs font-semibold rounded-xl flex items-center gap-2">
                            <i class="fa-regular fa-clock"></i> Starts in 4h
                        </span>
                        <button class="p-2 text-slate-400 hover:text-slate-600 rounded-lg"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </div>
                </div>
            </div>

            <div class="bg-[#0A1128] text-white rounded-2xl p-6 relative overflow-hidden flex flex-col md:flex-row justify-between items-start md:items-center gap-6 shadow-md mt-4">
                <div class="max-w-md z-10">
                    <h3 class="text-2xl font-bold mb-2">Boost your reach</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">Complete your full teaching certification to appear higher in student searches and increase your hourly rate.</p>
                </div>
                <button class="px-6 py-3 bg-amber-500 hover:bg-amber-600 text-[#0A1128] font-bold text-sm rounded-xl shadow transition whitespace-nowrap z-10">
                    Get Certified
                </button>
                <div class="absolute right-0 top-0 bottom-0 opacity-10 pointer-events-none hidden md:block">
                    <div class="w-48 h-full bg-gradient-to-l from-white to-transparent"></div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection