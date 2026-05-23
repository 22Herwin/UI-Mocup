@extends('layout')

@section('content')
<section class="mx-auto max-w-6xl px-6 py-12">
    <div class="flex flex-col gap-10 md:flex-row md:items-center">
        <div class="md:w-1/2">
            <p class="text-sm uppercase tracking-[0.2em] text-teal-700">Academic Mentor Platform</p>
            <h1 class="mt-4 text-4xl font-semibold text-slate-900 md:text-5xl" style="font-family: 'Fraunces', serif;">
                Think like a researcher, write with clarity
            </h1>
            <p class="mt-4 text-base text-slate-700" style="font-family: 'Space Grotesk', sans-serif;">
                Guided mentoring, Socratic prompts, and integrity-first scaffolding for theses, assignments, and research projects.
            </p>
            <div class="mt-6 flex flex-wrap gap-3">
                <button class="rounded-full bg-teal-700 px-5 py-2 text-sm font-medium text-white shadow-lg shadow-teal-200">
                    Start a mentoring session
                </button>
                <button class="rounded-full border border-slate-300 px-5 py-2 text-sm font-medium text-slate-700">
                    View sample guidance
                </button>
            </div>
        </div>
        <div class="md:w-1/2">
            <div class="rounded-3xl border border-slate-200 bg-white/80 p-6 shadow-xl shadow-amber-100">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-semibold uppercase tracking-widest text-amber-700">Mentor Insights</span>
                    <span class="rounded-full bg-amber-100 px-3 py-1 text-xs text-amber-900">Integrity On</span>
                </div>
                <h2 class="mt-4 text-xl font-semibold" style="font-family: 'Space Grotesk', sans-serif;">Session Snapshot</h2>
                <ul class="mt-3 space-y-3 text-sm text-slate-700">
                    <li>Clarifying question: What is your exact research scope?</li>
                    <li>Next step: Draft a one-paragraph problem statement.</li>
                    <li>Reflection: Which assumption needs evidence?</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="mt-12 grid gap-6 md:grid-cols-3">
        <div class="rounded-2xl border border-slate-200 bg-white/90 p-5">
            <p class="text-xs uppercase tracking-widest text-slate-500">Modes</p>
            <h3 class="mt-2 text-lg font-semibold">Thesis Advisor</h3>
            <p class="mt-2 text-sm text-slate-600">Structure research questions and methodology choices.</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white/90 p-5">
            <p class="text-xs uppercase tracking-widest text-slate-500">Modes</p>
            <h3 class="mt-2 text-lg font-semibold">Coding Mentor</h3>
            <p class="mt-2 text-sm text-slate-600">Debug with guided hints and incremental steps.</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white/90 p-5">
            <p class="text-xs uppercase tracking-widest text-slate-500">Modes</p>
            <h3 class="mt-2 text-lg font-semibold">Literature Review</h3>
            <p class="mt-2 text-sm text-slate-600">Map themes and compare scholarly perspectives.</p>
        </div>
    </div>
</section>
@endsection
