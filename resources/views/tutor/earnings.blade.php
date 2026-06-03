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
<div class="max-w-7xl mx-auto p-8">
    
    <div class="flex flex-col md:flex-row justify-between items-start mb-10 gap-6">
        <div class="max-w-2xl">
            <h1 class="text-5xl font-bold navy-text mb-4">Earnings</h1>
            <p class="text-slate-500 text-lg leading-relaxed">
                Track your financial growth, manage tutor payouts, and view detailed transaction histories.
            </p>
        </div>

        <button class="px-8 py-3.5 navy-bg text-white font-bold rounded-xl hover:opacity-90 transition flex items-center gap-2 self-end md:self-auto shadow-sm">
            <i class="fa-solid fa-wallet"></i> Withdraw Funds
        </button>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <div class="lg:col-span-8 space-y-8">
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm relative overflow-hidden">
                    <span class="text-xs font-bold text-slate-400 tracking-wider block mb-2 uppercase">Available Balance</span>
                    <h2 class="text-4xl font-bold navy-text">Rp 3.750.000</h2>
                    <p class="text-slate-400 text-sm mt-3">Next automatic payout: Oct 30, 2026</p>
                    <div class="absolute right-6 top-8 text-slate-100 text-5xl font-bold pointer-events-none">
                        <i class="fa-solid fa-money-bill-wave"></i>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm relative overflow-hidden">
                    <span class="text-xs font-bold text-slate-400 tracking-wider block mb-2 uppercase">Total Earnings (YTD)</span>
                    <h2 class="text-4xl font-bold navy-text">Rp 48.200.000</h2>
                    <span class="text-emerald-500 text-sm font-semibold mt-3 inline-flex items-center gap-1">
                        <i class="fa-solid fa-arrow-trend-up"></i> +18% growth this year
                    </span>
                </div>
            </div>

            <div class="space-y-4">
                <div class="flex justify-between items-center mb-2">
                    <h3 class="text-2xl font-bold navy-text">Payout History</h3>
                    <div class="flex items-center gap-2">
                        <span class="text-slate-400 text-sm font-medium">Filter:</span>
                        <select class="bg-transparent border-none text-slate-700 font-semibold text-sm focus:outline-none cursor-pointer">
                            <option>All Transactions</option>
                            <option>Successful</option>
                            <option>Processing</option>
                        </select>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm flex flex-col sm:flex-row justify-between items-center gap-4">
                    <div class="flex items-center gap-5 w-full sm:w-auto">
                        <div class="w-14 h-14 rounded-2xl bg-emerald-50 flex items-center justify-center text-emerald-600 shrink-0">
                            <i class="fa-solid fa-arrow-down-long text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg navy-text">Payout to Bank Account</h4>
                            <p class="text-sm text-slate-400">Transaction ID: #TR-948201</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between sm:justify-end gap-6 w-full sm:w-auto border-t sm:border-t-0 pt-3 sm:pt-0 border-slate-50">
                        <div class="text-left sm:text-right">
                            <span class="text-sm text-slate-400 block">Oct 15, 2026</span>
                            <span class="px-2.5 py-0.5 bg-emerald-50 text-emerald-700 text-[10px] font-bold uppercase tracking-wider rounded-md inline-block mt-1">Success</span>
                        </div>
                        <span class="text-xl font-bold text-slate-800">+Rp 1.500.000</span>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm flex flex-col sm:flex-row justify-between items-center gap-4">
                    <div class="flex items-center gap-5 w-full sm:w-auto">
                        <div class="w-14 h-14 rounded-2xl bg-emerald-50 flex items-center justify-center text-emerald-600 shrink-0">
                            <i class="fa-solid fa-arrow-down-long text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg navy-text">Payout to Bank Account</h4>
                            <p class="text-sm text-slate-400">Transaction ID: #TR-837402</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between sm:justify-end gap-6 w-full sm:w-auto border-t sm:border-t-0 pt-3 sm:pt-0 border-slate-50">
                        <div class="text-left sm:text-right">
                            <span class="text-sm text-slate-400 block">Oct 01, 2026</span>
                            <span class="px-2.5 py-0.5 bg-emerald-50 text-emerald-700 text-[10px] font-bold uppercase tracking-wider rounded-md inline-block mt-1">Success</span>
                        </div>
                        <span class="text-xl font-bold text-slate-800">+Rp 2.200.000</span>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm flex flex-col sm:flex-row justify-between items-center gap-4">
                    <div class="flex items-center gap-5 w-full sm:w-auto">
                        <div class="w-14 h-14 rounded-2xl bg-amber-50 flex items-center justify-center text-amber-600 shrink-0">
                            <i class="fa-solid fa-rotate text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg navy-text">Payout to Bank Account</h4>
                            <p class="text-sm text-slate-400">Transaction ID: #TR-726194</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between sm:justify-end gap-6 w-full sm:w-auto border-t sm:border-t-0 pt-3 sm:pt-0 border-slate-50">
                        <div class="text-left sm:text-right">
                            <span class="text-sm text-slate-400 block">Sep 15, 2026</span>
                            <span class="px-2.5 py-0.5 bg-amber-50 text-amber-700 text-[10px] font-bold uppercase tracking-wider rounded-md inline-block mt-1">Processing</span>
                        </div>
                        <span class="text-xl font-bold text-slate-800">+Rp 850.000</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="lg:col-span-4 space-y-6">
            
            <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-10 h-1 rounded-full bg-amber-400"></div>
                    <h3 class="text-lg font-bold navy-text">Income Source</h3>
                </div>

                <div class="space-y-6">
                    <div class="space-y-2">
                        <div class="flex justify-between items-center text-sm font-semibold text-slate-700">
                            <span>1-on-1 Sessions</span>
                            <span class="navy-text">85%</span>
                        </div>
                        <div class="w-full bg-slate-100 rounded-full h-2">
                            <div class="navy-bg h-2 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <div class="flex justify-between items-center text-sm font-semibold text-slate-700">
                            <span>Group Webinars</span>
                            <span class="navy-text">10%</span>
                        </div>
                        <div class="w-full bg-slate-100 rounded-full h-2">
                            <div class="bg-amber-600 h-2 rounded-full" style="width: 10%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="navy-bg text-white rounded-3xl p-8 relative overflow-hidden">
                <h3 class="text-2xl font-bold mb-4">Earning Tip</h3>
                <p class="text-slate-300 leading-relaxed mb-6" style="color: #f9f9f9">
                    Tutors who host group revision packages ahead of final exams increase their monthly payouts by up to <span class="text-amber-400 font-bold" style="color: #f9f9f9">35%</span>.
                </p>
                <a href="#" class="inline-flex items-center gap-2 text-amber-400 font-bold hover:gap-3 transition-all" style="color: #f9f9f9">
                    Create Group Package <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

        </div>
    </div>
</div>
@endsection