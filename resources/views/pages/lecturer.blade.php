@extends('layouts.app')

@section('page_label', 'Lecturer Dashboard')
@section('page_heading', 'Cohort Mentoring Analytics')
@section('page_title', 'Lecturer Dashboard')

@section('content')
<div class="grid gap-6 md:grid-cols-3">
    <div class="panel rounded-3xl p-5">
        <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Active Sessions</p>
        <p class="mt-2 text-3xl font-semibold">64</p>
        <p class="text-xs text-slate-500">+12 this week</p>
    </div>
    <div class="panel rounded-3xl p-5">
        <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Integrity Alerts</p>
        <p class="mt-2 text-3xl font-semibold">3</p>
        <p class="text-xs text-slate-500">Flagged for direct-answer requests</p>
    </div>
    <div class="panel rounded-3xl p-5">
        <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Engagement Rate</p>
        <p class="mt-2 text-3xl font-semibold">82%</p>
        <p class="text-xs text-slate-500">Mentoring sessions completed</p>
    </div>
</div>

<div class="mt-6 grid gap-6 lg:grid-cols-[1.4fr_0.6fr]">
    <section class="panel rounded-3xl p-6">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold">Topic heatmap</h2>
            <span class="text-xs text-slate-500">Last 7 days</span>
        </div>
        <div class="mt-4 grid grid-cols-7 gap-2">
            @for ($i = 0; $i < 21; $i++)
                <div class="h-10 rounded-xl" style="background: rgba(15, 118, 110, {{ 0.08 + ($i % 7) * 0.03 }});"></div>
            @endfor
        </div>
        <div class="mt-4 flex flex-wrap gap-2 text-xs">
            <span class="tag-accent rounded-full px-3 py-1">Literature review</span>
            <span class="tag-warm rounded-full px-3 py-1">Methodology</span>
            <span class="tag-ink rounded-full px-3 py-1">Critical thinking</span>
        </div>
    </section>
    <aside class="panel rounded-3xl p-6">
        <h3 class="text-lg font-semibold">Common blockers</h3>
        <ul class="mt-4 space-y-2 text-sm text-slate-700">
            <li>Research question too broad</li>
            <li>Missing citations for claims</li>
            <li>Methodology misalignment</li>
        </ul>
        <a href="/reports" class="mt-4 block w-full rounded-xl border border-slate-200 px-4 py-2 text-center text-xs font-semibold uppercase tracking-widest text-slate-600">Share guidance playbook</a>
    </aside>
</div>

<section class="mt-6 panel rounded-3xl p-6">
    <div class="flex items-center justify-between">
        <h2 class="text-xl font-semibold">Student engagement</h2>
        <a href="/reports" class="rounded-full bg-teal-700 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-amber-100">Export report</a>
    </div>
    <div class="mt-4 grid gap-4 md:grid-cols-2">
        <div class="rounded-2xl border border-slate-200/70 bg-white p-4">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Student</p>
            <p class="mt-1 font-semibold">Arianna S.</p>
            <p class="mt-2 text-sm text-slate-600">Needs support on methodology definitions.</p>
        </div>
        <div class="rounded-2xl border border-slate-200/70 bg-white p-4">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Student</p>
            <p class="mt-1 font-semibold">Kenji T.</p>
            <p class="mt-2 text-sm text-slate-600">Has high engagement, needs citation review.</p>
        </div>
    </div>
</section>
@endsection
