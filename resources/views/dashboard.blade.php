<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }} - Dashboard</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <script src="https://cdn.tailwindcss.com"></script>
            <script>
                tailwind.config = { darkMode: 'class' }
            </script>
        @endif

        <style>
            :root {
                --bg-body: #FDFDFC;
                --bg-card: #ffffff;
                --text-main: #1b1b18;
                --text-muted: #706f6c;
                --border: #e3e3e0;
            }
            .dark {
                --bg-body: #0a0a0a;
                --bg-card: #161615;
                --text-main: #EDEDEC;
                --text-muted: #A1A09A;
                --border: #3E3E3A;
            }
        </style>
    </head>
    <body class="min-h-screen transition-colors duration-300"
          style="background-color: var(--bg-body); color: var(--text-main);">

        <header class="w-full border-b" style="border-color: var(--border); background: var(--bg-card);">
            <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-red-600 flex items-center justify-center text-white font-bold text-sm">
                        L
                    </div>
                    <span class="font-semibold text-lg" style="color: var(--text-main);">{{ $appName }}</span>
                    <span class="px-2 py-0.5 rounded-full text-xs font-medium"
                          style="background: oklch(.704 .191 22.216); color: white;">v{{ $laravelVersion }}</span>
                </div>
                <nav class="flex items-center gap-4 text-sm">
                    <a href="/status" class="px-4 py-2 rounded-md font-medium hover:bg-opacity-80"
                       style="background: oklch(.577 .245 27.325); color: white;">
                        Check Status
                    </a>
                </nav>
            </div>
        </header>

        <main class="max-w-6xl mx-auto px-6 py-10">

            <section class="mb-12">
                <h1 class="text-3xl font-semibold mb-2" style="color: var(--text-main);">Server Dashboard</h1>
                <p class="text-base" style="color: var(--text-muted);">
                    This Laravel application is running on a custom port. Below you'll find all the details you need to manage and monitor your development server.
                </p>
            </section>

            <section class="mb-12">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                    <div class="rounded-xl border p-6 flex items-center gap-4 transition-all hover:shadow-md"
                         style="background: var(--bg-card); border-color: var(--border);">
                        <div class="p-3 rounded-lg bg-blue-100 text-blue-700 dark:bg-blue-900 dark:text-blue-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"/><rect x="2" y="14" width="20" height="8" rx="2" ry="2"/><circle cx="6" cy="6" r="1"/><circle cx="6" cy="18" r="1" class="hidden dark:block"/></svg>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-wider mb-1" style="color: var(--text-muted);">Host</p>
                            <p class="text-lg font-semibold font-mono">{{ $host }}</p>
                        </div>
                    </div>

                    <div class="rounded-xl border p-6 flex items-center gap-4 transition-all hover:shadow-md"
                         style="background: var(--bg-card); border-color: var(--border);">
                        <div class="p-3 rounded-lg bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l6-6-6-6"/><path d="M12 19h8"/></svg>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-wider mb-1" style="color: var(--text-muted);">Port</p>
                            <p class="text-lg font-semibold font-mono">{{ $port }}</p>
                        </div>
                    </div>

                    <div class="rounded-xl border p-6 flex items-center gap-4 transition-all hover:shadow-md"
                         style="background: var(--bg-card); border-color: var(--border);">
                        <div class="p-3 rounded-lg bg-purple-100 text-purple-700 dark:bg-purple-900 dark:text-purple-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-wider mb-1" style="color: var(--text-muted);">Environment</p>
                            <p class="text-lg font-semibold capitalize">{{ $environment }}</p>
                        </div>
                    </div>

                    <div class="rounded-xl border p-6 flex items-center gap-4 transition-all hover:shadow-md"
                         style="background: var(--bg-card); border-color: var(--border);">
                        <div class="p-3 rounded-lg bg-orange-100 text-orange-700 dark:bg-orange-900 dark:text-orange-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-wider mb-1" style="color: var(--text-muted);">Debug Mode</p>
                            <p class="text-lg font-semibold capitalize">{{ $debug ? 'Enabled' : 'Disabled' }}</p>
                        </div>
                    </div>

                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-xl font-semibold mb-6" style="color: var(--text-main);">Quick Reference</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    <div class="rounded-xl border p-6"
                         style="background: var(--bg-card); border-color: var(--border);">
                        <h3 class="font-semibold mb-3" style="color: var(--text-main);">Default Port</h3>
                        <div class="bg-gray-100 dark:bg-gray-800 rounded-lg p-3 font-mono text-sm mb-4 break-all"
                             style="color: var(--text-muted);">
                            php artisan serve --port=8000
                        </div>
                        <p class="text-xs mb-4" style="color: var(--text-muted);">Start the default Laravel server on port 8000.</p>
                        <a href="http://localhost:8000" target="_blank"
                           class="inline-block w-full text-center px-4 py-2 rounded-md text-sm font-medium"
                           style="background: oklch(.704 .191 22.216); color: white;">
                            Open http://localhost:8000
                        </a>
                    </div>

                    <div class="rounded-xl border p-6"
                         style="background: var(--bg-card); border-color: var(--border);">
                        <h3 class="font-semibold mb-3" style="color: var(--text-main);">Custom Port (Current)</h3>
                        <div class="bg-gray-100 dark:bg-gray-800 rounded-lg p-3 font-mono text-sm mb-4 break-all"
                             style="color: var(--text-muted);">
                            php artisan serve --port={{ $port }}
                        </div>
                        <p class="text-xs mb-4" style="color: var(--text-muted);">Run this application on a custom port.</p>
                        <a href="{{ $protocol }}://{{ $host }}:{{ $port }}" target="_blank"
                           class="inline-block w-full text-center px-4 py-2 rounded-md text-sm font-medium"
                           style="background: oklch(.577 .245 27.325); color: white;">
                            Open {{ $protocol }}://{{ $host }}:{{ $port }}
                        </a>
                    </div>

                    <div class="rounded-xl border p-6"
                         style="background: var(--bg-card); border-color: var(--border);">
                        <h3 class="font-semibold mb-3" style="color: var(--text-main);">Specify Host & Port</h3>
                        <div class="bg-gray-100 dark:bg-gray-800 rounded-lg p-3 font-mono text-sm mb-4 break-all"
                             style="color: var(--text-muted);">
                            php artisan serve --host={{ $host }} --port={{ $port }}
                        </div>
                        <p class="text-xs mb-4" style="color: var(--text-muted);">Bind the server to a specific host and port.</p>
                        <a href="{{ $protocol }}://{{ $host }}:{{ $port }}" target="_blank"
                           class="inline-block w-full text-center px-4 py-2 rounded-md text-sm font-medium"
                           style="background: oklch(.47 .157 37.304); color: white;">
                            Visit {{ $protocol }}://{{ $host }}:{{ $port }}
                        </a>
                    </div>

                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-xl font-semibold mb-6" style="color: var(--text-main);">System Info</h2>
                <div class="rounded-xl border overflow-hidden"
                     style="background: var(--bg-card); border-color: var(--border);">
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <tbody>
                                <tr class="border-b" style="border-color: var(--border);">
                                    <td class="px-6 py-3 font-medium" style="color: var(--text-muted); width: 30%;">PHP Version</td>
                                    <td class="px-6 py-3 font-mono" style="color: var(--text-main);">{{ $phpVersion }}</td>
                                </tr>
                                <tr class="border-b" style="border-color: var(--border);">
                                    <td class="px-6 py-3 font-medium" style="color: var(--text-muted);">Laravel Version</td>
                                    <td class="px-6 py-3 font-mono" style="color: var(--text-main);">{{ $laravelVersion }}</td>
                                </tr>
                                <tr class="border-b" style="border-color: var(--border);">
                                    <td class="px-6 py-3 font-medium" style="color: var(--text-muted);">Operating System</td>
                                    <td class="px-6 py-3 font-mono" style="color: var(--text-main);">{{ $os }}</td>
                                </tr>
                                <tr class="border-b" style="border-color: var(--border);">
                                    <td class="px-6 py-3 font-medium" style="color: var(--text-muted);">Server Software</td>
                                    <td class="px-6 py-3 font-mono" style="color: var(--text-main);">{{ $server }}</td>
                                </tr>
                                <tr class="border-b" style="border-color: var(--border);">
                                    <td class="px-6 py-3 font-medium" style="color: var(--text-muted);">Protocol</td>
                                    <td class="px-6 py-3 font-mono capitalize" style="color: var(--text-main);">{{ $protocol }}</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-3 font-medium" style="color: var(--text-muted);">Application URL</td>
                                    <td class="px-6 py-3 font-mono" style="color: var(--text-main);">{{ $url }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <section class="mb-8">
                <h2 class="text-xl font-semibold mb-6" style="color: var(--text-main);">Running Multiple Projects</h2>
                <div class="rounded-xl border p-6 md:p-8"
                     style="background: var(--bg-card); border-color: var(--border);">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="font-semibold mb-2" style="color: var(--text-main);">Run two apps simultaneously</h3>
                            <p class="text-sm mb-4" style="color: var(--text-muted);">
                                You can run multiple Laravel applications on different ports at the same time. Each app gets its own isolated server process.
                            </p>
                            <pre class="bg-gray-100 dark:bg-gray-800 rounded-lg p-4 font-mono text-xs overflow-x-auto"
                                 style="color: var(--text-main);"><code>Terminal 1: php artisan serve --port=8001
Terminal 2: php artisan serve --port=8002</code></pre>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2" style="color: var(--text-main);">Environment configuration</h3>
                            <p class="text-sm mb-4" style="color: var(--text-muted);">
                                Configure the host and port in your <code>.env</code> file for clarity and consistency across your team.
                            </p>
                            <pre class="bg-gray-100 dark:bg-gray-800 rounded-lg p-4 font-mono text-xs overflow-x-auto"
                                 style="color: var(--text-main);"><code>APP_HOST=localhost
APP_PORT=8000
APP_URL=http://localhost:8000</code></pre>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-8">
                <h2 class="text-xl font-semibold mb-6" style="color: var(--text-main);">Live Status</h2>
                <div class="rounded-xl border p-6 md:p-8"
                     style="background: var(--bg-card); border-color: var(--border);">
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <h3 class="font-semibold text-lg" style="color: var(--text-main);">API Health Check</h3>
                            <p class="text-sm" style="color: var(--text-muted);">Real-time diagnostics from <code class="bg-gray-100 dark:bg-gray-800 px-1.5 py-0.5 rounded text-xs">GET /status</code></p>
                        </div>
                        <button onclick="fetchStatus()" class="px-4 py-2 rounded-md text-sm font-medium transition-colors"
                                style="background: oklch(.577 .245 27.325); color: white;">
                            Refresh Status
                        </button>
                    </div>
                    <div id="status-loading" class="text-sm" style="color: var(--text-muted);">Click "Refresh Status" to load live data...</div>
                    <div id="status-result" class="hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm">
                                <thead>
                                    <tr class="border-b" style="border-color: var(--border);">
                                        <th class="text-left px-4 py-2 font-medium text-xs uppercase tracking-wider" style="color: var(--text-muted);">Field</th>
                                        <th class="text-left px-4 py-2 font-medium text-xs uppercase tracking-wider" style="color: var(--text-muted);">Value</th>
                                    </tr>
                                </thead>
                                <tbody id="status-table-body"></tbody>
                            </table>
                        </div>
                    </div>
                    <div id="status-error" class="hidden mt-4 p-3 rounded-lg text-sm bg-red-50 dark:bg-red-900/20 text-red-700 dark:text-red-400 border border-red-200 dark:border-red-800"></div>
                </div>
            </section>

            <section class="mb-8">
                <h2 class="text-xl font-semibold mb-6" style="color: var(--text-main);">Useful Commands</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="rounded-xl border p-6" style="background: var(--bg-card); border-color: var(--border);">
                        <h3 class="font-medium mb-3 text-sm" style="color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em;">Install Dependencies</h3>
                        <pre class="bg-gray-100 dark:bg-gray-800 rounded-lg p-3 font-mono text-xs mb-3" style="color: var(--text-main);"><code>composer install && npm install</code></pre>
                    </div>
                    <div class="rounded-xl border p-6" style="background: var(--bg-card); border-color: var(--border);">
                        <h3 class="font-medium mb-3 text-sm" style="color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em;">Run Tests</h3>
                        <pre class="bg-gray-100 dark:bg-gray-800 rounded-lg p-3 font-mono text-xs mb-3" style="color: var(--text-main);"><code>composer test</code></pre>
                    </div>
                    <div class="rounded-xl border p-6" style="background: var(--bg-card); border-color: var(--border);">
                        <h3 class="font-medium mb-3 text-sm" style="color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em;">Clear Configuration</h3>
                        <pre class="bg-gray-100 dark:bg-gray-800 rounded-lg p-3 font-mono text-xs mb-3" style="color: var(--text-main);"><code>php artisan config:clear</code></pre>
                    </div>
                    <div class="rounded-xl border p-6" style="background: var(--bg-card); border-color: var(--border);">
                        <h3 class="font-medium mb-3 text-sm" style="color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em;">View All Routes</h3>
                        <pre class="bg-gray-100 dark:bg-gray-800 rounded-lg p-3 font-mono text-xs mb-3" style="color: var(--text-main);"><code>php artisan route:list</code></pre>
                    </div>
                </div>
            </section>

            <footer class="mt-16 pt-8 border-t text-center text-sm" style="border-color: var(--border); color: var(--text-muted);">
                <p>Built with Laravel {{ $laravelVersion }} on PHP {{ $phpVersion }}</p>
            </footer>
        </main>

    <script>
        async function fetchStatus() {
            const loading = document.getElementById('status-loading');
            const result = document.getElementById('status-result');
            const error = document.getElementById('status-error');
            const tbody = document.getElementById('status-table-body');

            loading.classList.remove('hidden');
            result.classList.add('hidden');
            error.classList.add('hidden');

            try {
                const response = await fetch('/status');
                if (!response.ok) throw new Error('HTTP ' + response.status);
                const data = await response.json();

                tbody.innerHTML = Object.entries(data).map(([key, value]) => {
                    const display = Array.isArray(value) ? value.join(', ') : String(value);
                    return `<tr class="border-b" style="border-color: var(--border);">
                        <td class="px-4 py-2 font-mono text-xs font-medium" style="color: var(--text-muted);">${key}</td>
                        <td class="px-4 py-2 font-mono text-xs" style="color: var(--text-main);">${escapeHtml(display)}</td>
                    </tr>`;
                }).join('');

                loading.classList.add('hidden');
                result.classList.remove('hidden');
            } catch (err) {
                loading.classList.add('hidden');
                error.textContent = 'Failed to fetch /status: ' + err.message;
                error.classList.remove('hidden');
            }
        }

        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }
    </script>
</html>
