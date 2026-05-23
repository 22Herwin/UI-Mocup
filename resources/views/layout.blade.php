<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('page_title', 'AI Academic Mentor')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@400;600;700&family=Space+Grotesk:wght@400;500;600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen page-shell text-slate-900">
    <div class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">
        <div class="absolute -top-40 right-10 h-80 w-80 rounded-full bg-amber-200/60 blur-3xl"></div>
        <div class="absolute top-40 -left-24 h-72 w-72 rounded-full bg-teal-200/50 blur-3xl"></div>
        <div class="absolute bottom-10 right-1/3 h-64 w-64 rounded-full bg-orange-200/40 blur-3xl"></div>
    </div>

    <header class="relative z-10">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-6">
            <a href="/" class="flex items-center gap-3 text-lg font-semibold">
                <span class="rounded-full bg-teal-700 px-3 py-1 text-xs uppercase tracking-[0.3em] text-amber-100">AIM</span>
                <span class="font-semibold" style="font-family: 'Fraunces', serif;">AI Academic Mentor</span>
            </a>
            <nav class="hidden items-center gap-6 text-sm text-slate-600 md:flex">
                <a class="hover:text-slate-900" href="/student">Student</a>
                <a class="hover:text-slate-900" href="/lecturer">Lecturer</a>
                <a class="hover:text-slate-900" href="/documents">Documents</a>
                <a class="hover:text-slate-900" href="/integrations">Integrations</a>
                <a class="hover:text-slate-900" href="/reports">Reports</a>
            </nav>
            <div class="flex items-center gap-3">
                <a href="/login" class="rounded-full border border-slate-300 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-slate-700">Login</a>
                <a href="/student" class="rounded-full bg-teal-700 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-amber-100 shadow-lg shadow-teal-200">Launch Workspace</a>
            </div>
        </div>
    </header>

    <main class="relative z-10">
        @yield('content')
    </main>

    <footer class="relative z-10 border-t border-slate-200/70 py-8">
        <div class="mx-auto flex max-w-6xl flex-col gap-4 px-6 text-sm text-slate-600 md:flex-row md:items-center md:justify-between">
            <p>Integrity-first mentoring for universities and research teams.</p>
            <div class="flex flex-wrap gap-4">
                <a href="/integrations" class="hover:text-slate-900">LMS Integrations</a>
                <a href="/admin/tenant" class="hover:text-slate-900">Tenant Settings</a>
                <a href="/reports" class="hover:text-slate-900">Reporting</a>
            </div>
        </div>
    </footer>
</body>
</html>
