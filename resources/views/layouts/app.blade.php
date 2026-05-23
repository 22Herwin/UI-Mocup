<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('page_title', 'AI Academic Mentor Workspace')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@400;600;700&family=Space+Grotesk:wght@400;500;600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen page-shell text-slate-900">
    <div class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">
        <div class="absolute -top-32 right-10 h-72 w-72 rounded-full bg-amber-200/50 blur-3xl"></div>
        <div class="absolute top-40 -left-24 h-80 w-80 rounded-full bg-teal-200/50 blur-3xl"></div>
    </div>

    <div class="relative z-10 flex min-h-screen">
        <aside class="hidden w-64 flex-col border-r border-slate-200/70 bg-white/70 px-6 py-8 md:flex">
            <div class="flex items-center gap-3">
                <span class="rounded-full bg-teal-700 px-3 py-1 text-xs uppercase tracking-[0.3em] text-amber-100">AIM</span>
                <span class="font-semibold" style="font-family: 'Fraunces', serif;">Mentor Suite</span>
            </div>
            <div class="mt-10 space-y-6 text-sm text-slate-600">
                <div>
                    <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Workspace</p>
                    <ul class="mt-3 space-y-2">
                        <li><a href="/student" class="hover:text-slate-900">Student Studio</a></li>
                        <li><a href="/student/session" class="hover:text-slate-900">Session Timeline</a></li>
                        <li><a href="/projects" class="hover:text-slate-900">Projects</a></li>
                        <li><a href="/documents" class="hover:text-slate-900">Documents</a></li>
                        <li><a href="/reports" class="hover:text-slate-900">Reports</a></li>
                    </ul>
                </div>
                <div>
                    <p class="text-xs uppercase tracking-[0.2em] text-slate-400">University</p>
                    <ul class="mt-3 space-y-2">
                        <li><a href="/lecturer" class="hover:text-slate-900">Lecturer Dashboard</a></li>
                        <li><a href="/admin/tenant" class="hover:text-slate-900">Tenant Settings</a></li>
                        <li><a href="/integrations" class="hover:text-slate-900">Integrations</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-auto rounded-2xl border border-slate-200/70 bg-white/80 p-4 text-xs text-slate-600">
                <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400">Integrity Mode</p>
                <p class="mt-2 font-medium">Active</p>
                <p class="mt-2">Responses are guided, no direct submissions.</p>
            </div>
        </aside>

        <div class="flex min-h-screen flex-1 flex-col">
            <header class="flex items-center justify-between border-b border-slate-200/70 bg-white/70 px-6 py-4">
                <div>
                    <p class="text-xs uppercase tracking-[0.3em] text-slate-500">@yield('page_label', 'Workspace')</p>
                    <h1 class="text-2xl font-semibold">@yield('page_heading', 'Mentor Workspace')</h1>
                </div>
                <div class="flex items-center gap-3">
                    <div class="hidden items-center gap-2 rounded-full border border-slate-200/70 bg-white/80 px-3 py-2 text-xs text-slate-500 md:flex">
                        <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                        Live mentoring queue
                    </div>
                    <div class="rounded-full border border-slate-200/70 bg-white/80 px-4 py-2 text-xs text-slate-700">University of Meridian</div>
                </div>
            </header>

            <main class="flex-1 space-y-6 px-6 py-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
