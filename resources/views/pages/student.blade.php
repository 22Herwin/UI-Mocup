@extends('layouts.app')

@section('page_label', 'Student Workspace')
@section('page_heading', 'AI Academic Mentor Studio')
@section('page_title', 'Student Workspace')

@section('content')
<div class="grid gap-6 lg:grid-cols-[1.6fr_1fr]">
    <section class="panel rounded-3xl p-6">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Thesis Project</p>
                <h2 class="mt-2 text-xl font-semibold">AI in Inclusive Education</h2>
                <p class="mt-1 text-xs text-slate-500">Mode: Thesis Advisor | Stage: Literature review</p>
            </div>
            <div class="flex flex-wrap gap-2 text-xs">
                <span class="tag-accent rounded-full px-3 py-1">Integrity On</span>
                <span class="tag-warm rounded-full px-3 py-1">Token Budget 2.4k</span>
                <span class="tag-ink rounded-full px-3 py-1">Session 14</span>
            </div>
        </div>
        <div class="mt-6 space-y-4">
            <div class="glass rounded-2xl p-4">
                <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Mentor</p>
                <p class="mt-2 text-sm text-slate-700">Let us refine your research question by narrowing the target population and the outcome you want to measure.</p>
                <p class="mt-3 text-xs text-slate-500">Clarifying question: Which student group are you focusing on?</p>
            </div>
            <div class="rounded-2xl border border-slate-200/70 bg-white p-4">
                <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Student Draft</p>
                <p class="mt-2 text-sm text-slate-700">I want to focus on AI tutoring tools for first-year engineering students.</p>
            </div>
            <div class="glass rounded-2xl p-4">
                <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Mentor</p>
                <p class="mt-2 text-sm text-slate-700">Great. What learning outcome matters most: retention, conceptual mastery, or engagement?</p>
                <p class="mt-3 text-xs text-slate-500">Reflection: Which metric could best capture that outcome?</p>
            </div>
        </div>
        <div class="mt-6 grid gap-3 md:grid-cols-[1fr_auto]">
            <input class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm" placeholder="Ask the mentor for guidance..." />
            <a href="/student/session" class="rounded-2xl bg-teal-700 px-5 py-3 text-center text-xs font-semibold uppercase tracking-widest text-amber-100">Send</a>
        </div>
        <div class="mt-4 flex flex-wrap gap-2 text-xs text-slate-500">
            <span class="chip rounded-full px-3 py-1">Suggest an outline</span>
            <span class="chip rounded-full px-3 py-1">Explain methodology</span>
            <span class="chip rounded-full px-3 py-1">Ask reflective question</span>
        </div>
    </section>

    <aside class="space-y-6">
        <div class="panel rounded-3xl p-5">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Guided Steps</p>
            <ol class="mt-4 space-y-3 text-sm text-slate-700">
                <li>1. Define target learner population.</li>
                <li>2. Select measurable learning outcomes.</li>
                <li>3. Choose methodology and data sources.</li>
                <li>4. Draft the research question.</li>
            </ol>
            <div class="mt-4 rounded-2xl bg-emerald-50 px-4 py-3 text-xs text-emerald-800">
                Integrity note: The mentor will not write your thesis; it will guide your reasoning.
            </div>
        </div>
        <div class="panel rounded-3xl p-5">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Memory Summary</p>
            <p class="mt-3 text-sm text-slate-700">Focus on first-year engineering students using AI tutors, exploring engagement and retention metrics.</p>
            <div class="mt-4 flex flex-wrap gap-2 text-xs">
                <span class="tag-accent rounded-full px-3 py-1">AI tutors</span>
                <span class="tag-warm rounded-full px-3 py-1">Retention</span>
                <span class="tag-ink rounded-full px-3 py-1">Methodology</span>
            </div>
        </div>
        <div class="panel rounded-3xl p-5">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Document Context</p>
            <div class="mt-3 space-y-2 text-sm text-slate-700">
                <div class="flex items-center justify-between">
                    <span>Literature review notes.pdf</span>
                    <span class="text-xs text-slate-400">Indexed</span>
                </div>
                <div class="flex items-center justify-between">
                    <span>Methodology outline.docx</span>
                    <span class="text-xs text-slate-400">Pending</span>
                </div>
            </div>
            <a href="/documents" class="mt-4 block w-full rounded-xl border border-slate-200 px-4 py-2 text-center text-xs font-semibold uppercase tracking-widest text-slate-600">Upload document</a>
        </div>
    </aside>
</div>
@endsection
