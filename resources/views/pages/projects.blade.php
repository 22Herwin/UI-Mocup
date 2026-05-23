@extends('layouts.app')

@section('page_label', 'Projects')
@section('page_heading', 'Thesis and Assignment Projects')
@section('page_title', 'Projects')

@section('content')
<div class="flex flex-wrap items-center justify-between gap-4">
    <p class="text-sm text-slate-600">Track progress across theses, assignments, and research sprints.</p>
    <a href="/student" class="rounded-full bg-teal-700 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-amber-100">Create project</a>
</div>

<div class="mt-6 grid gap-6 md:grid-cols-2">
    <div class="panel rounded-3xl p-5">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold">AI in Inclusive Education</h3>
            <span class="tag-accent rounded-full px-3 py-1 text-xs">Thesis</span>
        </div>
        <p class="mt-2 text-sm text-slate-600">Stage: Literature review</p>
        <div class="mt-4 h-2 rounded-full bg-slate-100">
            <div class="h-2 w-3/5 rounded-full bg-teal-600"></div>
        </div>
        <div class="mt-4 flex flex-wrap gap-2 text-xs">
            <span class="chip rounded-full px-3 py-1">Next: methodology outline</span>
            <span class="chip rounded-full px-3 py-1">Mentor session weekly</span>
        </div>
    </div>
    <div class="panel rounded-3xl p-5">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold">Research Methods Assignment</h3>
            <span class="tag-warm rounded-full px-3 py-1 text-xs">Assignment</span>
        </div>
        <p class="mt-2 text-sm text-slate-600">Stage: Drafting</p>
        <div class="mt-4 h-2 rounded-full bg-slate-100">
            <div class="h-2 w-4/5 rounded-full bg-amber-500"></div>
        </div>
        <div class="mt-4 flex flex-wrap gap-2 text-xs">
            <span class="chip rounded-full px-3 py-1">Need feedback on citations</span>
            <span class="chip rounded-full px-3 py-1">Due in 5 days</span>
        </div>
    </div>
</div>

<div class="mt-6 panel rounded-3xl p-6">
    <div class="flex items-center justify-between">
        <h3 class="text-lg font-semibold">Milestone calendar</h3>
        <span class="text-xs text-slate-500">Next 30 days</span>
    </div>
    <div class="mt-4 grid gap-4 md:grid-cols-3 text-sm text-slate-700">
        <div class="rounded-2xl border border-slate-200/70 bg-white p-4">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-500">May 28</p>
            <p class="mt-2 font-semibold">Submit annotated bibliography</p>
        </div>
        <div class="rounded-2xl border border-slate-200/70 bg-white p-4">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Jun 3</p>
            <p class="mt-2 font-semibold">Mentor check-in</p>
        </div>
        <div class="rounded-2xl border border-slate-200/70 bg-white p-4">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Jun 10</p>
            <p class="mt-2 font-semibold">Draft methodology section</p>
        </div>
    </div>
</div>
@endsection
