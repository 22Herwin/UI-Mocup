@extends('layouts.app')

@section('page_label', 'Documents')
@section('page_heading', 'Document Review and RAG Context')
@section('page_title', 'Documents')

@section('content')
<div class="grid gap-6 lg:grid-cols-[1.2fr_0.8fr]">
    <section class="panel rounded-3xl p-6">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold">Upload and analyze</h2>
            <span class="tag-accent rounded-full px-3 py-1 text-xs">RAG Ready</span>
        </div>
        <div class="mt-4 rounded-2xl border border-dashed border-slate-300 bg-white px-6 py-8 text-center">
            <p class="text-sm text-slate-600">Drag PDF or DOCX files here</p>
            <a href="/documents" class="mt-4 inline-flex rounded-full bg-teal-700 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-amber-100">Browse files</a>
        </div>
        <div class="mt-6 space-y-4">
            <div class="rounded-2xl border border-slate-200/70 bg-white p-4">
                <div class="flex items-center justify-between">
                    <p class="font-semibold">Literature review notes.pdf</p>
                    <span class="text-xs text-emerald-600">Indexed</span>
                </div>
                <p class="mt-2 text-xs text-slate-500">32 chunks | 4 key themes extracted</p>
            </div>
            <div class="rounded-2xl border border-slate-200/70 bg-white p-4">
                <div class="flex items-center justify-between">
                    <p class="font-semibold">Methodology outline.docx</p>
                    <span class="text-xs text-amber-600">Parsing</span>
                </div>
                <p class="mt-2 text-xs text-slate-500">Chunking in progress</p>
            </div>
        </div>
    </section>

    <aside class="space-y-6">
        <div class="panel rounded-3xl p-5">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Context Snippets</p>
            <div class="mt-4 space-y-3 text-sm text-slate-700">
                <div class="rounded-2xl border border-slate-200/70 bg-white p-3">
                    "Peer tutoring increases retention when paired with adaptive feedback."
                </div>
                <div class="rounded-2xl border border-slate-200/70 bg-white p-3">
                    "Students reported higher engagement in week 4 after AI quiz prompts."
                </div>
            </div>
        </div>
        <div class="panel rounded-3xl p-5">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Feedback Guidance</p>
            <ul class="mt-4 space-y-2 text-sm text-slate-700">
                <li>Highlight missing citations before drafting.</li>
                <li>Check methodology alignment with research question.</li>
                <li>Request reflective summary from student.</li>
            </ul>
        </div>
    </aside>
</div>
@endsection
