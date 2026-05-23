@extends('layouts.app')

@section('page_label', 'Tenant Settings')
@section('page_heading', 'University Configuration')
@section('page_title', 'Tenant Settings')

@section('content')
<div class="grid gap-6 lg:grid-cols-[1.2fr_0.8fr]">
    <section class="panel rounded-3xl p-6">
        <h2 class="text-xl font-semibold">SSO and branding</h2>
        <div class="mt-4 space-y-4 text-sm">
            <div>
                <label class="text-xs uppercase tracking-[0.2em] text-slate-500">SSO Provider</label>
                <input class="mt-2 w-full rounded-xl border border-slate-200 bg-white px-4 py-3" value="Azure AD" />
            </div>
            <div>
                <label class="text-xs uppercase tracking-[0.2em] text-slate-500">Tenant Slug</label>
                <input class="mt-2 w-full rounded-xl border border-slate-200 bg-white px-4 py-3" value="meridian-university" />
            </div>
            <div>
                <label class="text-xs uppercase tracking-[0.2em] text-slate-500">Primary Accent</label>
                <input class="mt-2 w-full rounded-xl border border-slate-200 bg-white px-4 py-3" value="#0f766e" />
            </div>
        </div>
        <a href="/admin/tenant" class="mt-6 inline-flex rounded-full bg-teal-700 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-amber-100">Save changes</a>
    </section>

    <aside class="panel rounded-3xl p-6">
        <p class="text-xs uppercase tracking-[0.2em] text-slate-500">API Access</p>
        <div class="mt-4 space-y-3 text-sm text-slate-700">
            <p>Client ID: univ-meridian-001</p>
            <p>Scopes: mentor:read/write, analytics:read</p>
            <a href="/admin/tenant" class="inline-flex rounded-xl border border-slate-200 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-slate-600">Rotate key</a>
        </div>
        <div class="mt-6 rounded-2xl bg-amber-50 px-4 py-3 text-xs text-amber-800">Token usage billed per 1k tokens with integrity guardrails enabled.</div>
    </aside>
</div>
@endsection
