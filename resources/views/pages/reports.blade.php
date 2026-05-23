@extends('layouts.app')

@section('page_label', 'Reports')
@section('page_heading', 'Academic Report Generator')
@section('page_title', 'Reports')

@section('content')
<div class="grid gap-6 lg:grid-cols-[1.1fr_0.9fr]">
    <section class="panel rounded-3xl p-6">
        <h2 class="text-xl font-semibold">Generate mentoring report</h2>
        <p class="mt-2 text-sm text-slate-600">Summaries include progress, guidance themes, and integrity checks.</p>
        <div class="mt-6 grid gap-4 md:grid-cols-2 text-sm">
            <div>
                <label class="text-xs uppercase tracking-[0.2em] text-slate-500">Report Type</label>
                <select class="mt-2 w-full rounded-xl border border-slate-200 bg-white px-3 py-2">
                    <option>Mentoring summary</option>
                    <option>Learning progress</option>
                    <option>Thesis guidance</option>
                    <option>Reflection report</option>
                </select>
            </div>
            <div>
                <label class="text-xs uppercase tracking-[0.2em] text-slate-500">Session Range</label>
                <select class="mt-2 w-full rounded-xl border border-slate-200 bg-white px-3 py-2">
                    <option>Last 30 days</option>
                    <option>Last 90 days</option>
                    <option>Custom</option>
                </select>
            </div>
        </div>
        <a href="/reports" class="mt-6 inline-flex rounded-full bg-teal-700 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-amber-100">Generate PDF</a>
    </section>

    <aside class="panel rounded-3xl p-6">
        <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Preview</p>
        <div class="mt-4 space-y-3 text-sm text-slate-700">
            <p><span class="font-semibold">Session summary:</span> Student clarified research scope and outlined methodology.</p>
            <p><span class="font-semibold">Guidance themes:</span> Problem framing, methodology alignment, citation hygiene.</p>
            <p><span class="font-semibold">Integrity:</span> No direct-answer violations detected.</p>
        </div>
        <div class="mt-6 rounded-2xl bg-emerald-50 px-4 py-3 text-xs text-emerald-800">Export to PDF or CSV for lecturer review.</div>
    </aside>
</div>
@endsection
