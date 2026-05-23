@extends('layouts.app')

@section('page_label', 'Integrations')
@section('page_heading', 'LMS and University Integrations')
@section('page_title', 'Integrations')

@section('content')
<div class="grid gap-6 lg:grid-cols-[1.1fr_0.9fr]">
    <section class="panel rounded-3xl p-6">
        <h2 class="text-xl font-semibold">LTI 1.3 Configuration</h2>
        <p class="mt-2 text-sm text-slate-600">Connect to Canvas, Moodle, or Blackboard with secure OAuth.</p>
        <div class="mt-4 space-y-4 text-sm">
            <div>
                <label class="text-xs uppercase tracking-[0.2em] text-slate-500">LTI Issuer</label>
                <input class="mt-2 w-full rounded-xl border border-slate-200 bg-white px-4 py-3" value="https://canvas.university.edu" />
            </div>
            <div>
                <label class="text-xs uppercase tracking-[0.2em] text-slate-500">Client ID</label>
                <input class="mt-2 w-full rounded-xl border border-slate-200 bg-white px-4 py-3" value="lti-client-9021" />
            </div>
            <div>
                <label class="text-xs uppercase tracking-[0.2em] text-slate-500">Deployment ID</label>
                <input class="mt-2 w-full rounded-xl border border-slate-200 bg-white px-4 py-3" value="deployment-882" />
            </div>
        </div>
        <a href="/integrations" class="mt-6 inline-flex rounded-full bg-teal-700 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-amber-100">Save integration</a>
    </section>

    <aside class="panel rounded-3xl p-6">
        <h3 class="text-lg font-semibold">Webhooks</h3>
        <ul class="mt-4 space-y-2 text-sm text-slate-700">
            <li>mentor.session.created</li>
            <li>mentor.session.summary</li>
            <li>document.processed</li>
            <li>integrity.alert</li>
        </ul>
        <a href="/integrations" class="mt-4 block w-full rounded-xl border border-slate-200 px-4 py-2 text-center text-xs font-semibold uppercase tracking-widest text-slate-600">Add webhook</a>
        <div class="mt-6 rounded-2xl bg-emerald-50 px-4 py-3 text-xs text-emerald-800">API-first access for external platforms and student portals.</div>
    </aside>
</div>
@endsection
