@extends('layouts.app')

@section('page_label', 'Session Timeline')
@section('page_heading', 'Mentoring Session Overview')
@section('page_title', 'Mentoring Session Timeline')

@section('content')
<div class="grid gap-6 lg:grid-cols-[1.3fr_0.7fr]">
    <section class="panel rounded-3xl p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Session 14</p>
                <h2 class="mt-2 text-xl font-semibold">Research Question Refinement</h2>
            </div>
            <span class="tag-accent rounded-full px-3 py-1 text-xs">Integrity Passed</span>
        </div>
        <div class="mt-6 space-y-5">
            <div class="glass rounded-2xl p-4">
                <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Mentor Prompt</p>
                <p class="mt-2 text-sm text-slate-700">Clarify your target population and the learning outcome you plan to measure.</p>
            </div>
            <div class="rounded-2xl border border-slate-200/70 bg-white p-4">
                <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Student Response</p>
                <p class="mt-2 text-sm text-slate-700">Focus on first-year engineering students using AI tutoring tools.</p>
            </div>
            <div class="glass rounded-2xl p-4">
                <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Mentor Guidance</p>
                <p class="mt-2 text-sm text-slate-700">Select a measurable outcome like engagement, retention, or conceptual mastery.</p>
                <p class="mt-3 text-xs text-slate-500">Reflect: Which metric aligns with your data access?</p>
            </div>
        </div>
    </section>

    <aside class="space-y-6">
        <div class="panel rounded-3xl p-5">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Session Summary</p>
            <p class="mt-3 text-sm text-slate-700">Student refined scope to AI tutors for first-year engineering students, considering engagement and retention metrics.</p>
            <div class="mt-4 flex flex-wrap gap-2 text-xs">
                <span class="tag-accent rounded-full px-3 py-1">Scope defined</span>
                <span class="tag-warm rounded-full px-3 py-1">Metrics pending</span>
            </div>
        </div>
        <div class="panel rounded-3xl p-5">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Next Actions</p>
            <ul class="mt-4 space-y-2 text-sm text-slate-700">
                <li>Draft one-paragraph problem statement.</li>
                <li>Identify 3 key sources to compare.</li>
                <li>Schedule next mentoring session.</li>
            </ul>
            <a href="/student" class="mt-4 block w-full rounded-xl bg-teal-700 px-4 py-2 text-center text-xs font-semibold uppercase tracking-widest text-amber-100">Schedule follow-up</a>
        </div>
    </aside>
</div>
@endsection
