@extends('layout')

@section('page_title', 'Login - AI Academic Mentor')

@section('content')
<section class="mx-auto grid max-w-5xl gap-10 px-6 py-16 md:grid-cols-2">
    <div class="space-y-6">
        <p class="text-xs uppercase tracking-[0.3em] text-slate-500">Secure Access</p>
        <h1 class="text-3xl font-semibold">Sign in with your university or workspace</h1>
        <p class="text-sm text-slate-600">
            Choose your role to enable role-based access control, analytics visibility, and mentoring scopes.
        </p>
        <div class="space-y-4">
            <div class="glass rounded-2xl p-5">
                <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Student</p>
                <p class="mt-2 text-sm text-slate-600">Mentoring guidance, projects, and document feedback.</p>
            </div>
            <div class="glass rounded-2xl p-5">
                <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Lecturer</p>
                <p class="mt-2 text-sm text-slate-600">Analytics, engagement tracking, and integrity reports.</p>
            </div>
        </div>
    </div>
    <div class="panel rounded-3xl p-6">
        <h2 class="text-lg font-semibold">Login</h2>
        <div class="mt-4 space-y-3">
            <a href="/student" class="block w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-center text-sm font-semibold text-slate-700">Continue with University SSO</a>
            <a href="/student" class="block w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-center text-sm font-semibold text-slate-700">Continue with OAuth2</a>
        </div>
        <div class="mt-6">
            <label class="text-xs uppercase tracking-[0.2em] text-slate-500">Email</label>
            <input class="mt-2 w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm" placeholder="student@university.edu" />
        </div>
        <div class="mt-4">
            <label class="text-xs uppercase tracking-[0.2em] text-slate-500">Password</label>
            <input type="password" class="mt-2 w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm" placeholder="********" />
        </div>
        <a href="/student" class="mt-6 block w-full rounded-xl bg-teal-700 px-4 py-3 text-center text-sm font-semibold text-amber-100">Sign in</a>
        <p class="mt-4 text-xs text-slate-500">Access is governed by tenant policies and role-based access control.</p>
    </div>
</section>
@endsection
