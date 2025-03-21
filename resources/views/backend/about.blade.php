@use('App\Services\KeyGeneratorService')

@extends('layouts.backend')

@section('title', __('About System'))
@section('content')
    <div class="page_about container-alt max-w-4xl">
        @php
            $debug = config('app.debug');
            $env = (string) app()->environment();
        @endphp

        <div class="mb-6">
            @if ($debug == true || $env !== 'production')
                <div role="alert"
                    class="card relative mb-4 scroll-mt-7 py-3.5 pl-6.5 pr-4 dark:shadow-xs shadow-orange-600">
                    <div class="absolute inset-y-2 left-2 w-0.5 rounded-full bg-orange-600"></div>
                    <p class="mb-2 flex items-center gap-x-2 text-orange-600">
                        @svg('icon-sign-warning', '!size-5')
                        <span class="text-xs/4 font-medium">Warning</span>
                    </p>
                    <ul class="text-slate-600 dark:text-dark-400">
                        @if ($env !== 'production')
                            <li>The environment was expected to be <span
                                    class="env_value env_value_expected">production</span>, but actually was <span
                                    class="env_value env_value_actual">{{ $env }}</span>.</li>
                        @endif
                        @if ($debug === true)
                            <li>The debug mode was expected to be <span class="env_value env_value_expected">false</span>,
                                but actually was <span class="env_value  env_value_actual">true</span>.</li>
                        @endif
                    </ul>
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="card card-fluid shadow-xs p-4 md:col-span-2">
                    <p class="text-uh-logo dark:text-uh-logo-dark text-sm font-medium leading-4">{{ config('app.name') }}
                    </p>
                    <p class="text-2xl font-bold text-slate-700 dark:text-dark-300">
                        {{ config('urlhub.app_version') }}
                    </p>
                </div>
                <div class="card card-fluid shadow-xs p-4 holographic-card">
                    <p
                        class="text-[oklch(48.68%_0.0912_273.4)] dark:text-[oklch(62.3%_0.0912_273.4)] text-sm font-medium leading-4">
                        PHP</p>
                    <p class="text-2xl font-bold text-slate-700 dark:text-dark-300">
                        <a href="https://www.php.net/ChangeLog-8.php#{{ phpversion() }}" target="_blank">
                            {{ phpversion() }}
                        </a>
                    </p>
                </div>
                <div class="card card-fluid shadow-xs p-4 holographic-card">
                    <p class="text-[#ff2d20] text-sm font-medium leading-4">Laravel</p>
                    <p class="text-2xl font-bold text-slate-700 dark:text-dark-300">
                        <a href="https://github.com/laravel/framework/releases/tag/v{{ app()->version() }}" target="_blank">
                            {{ app()->version() }}
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <div class="card card-fluid shadow-xs p-6">
                <h2 class="text-xl font-bold text-slate-700 dark:text-dark-300">About P - Link</h2>
                <p class="mt-2 text-slate-600 dark:text-dark-400">
                    P - Link is an innovative URL shortening service designed to enhance
                    efficiency in digital communication. Whether you need to share important
                    updates, internal resources, or project links, our tool provides a seamless way
                    to create short, shareable URLs.
                </p>

                <h3 class="mt-4 text-lg font-semibold text-slate-700 dark:text-dark-300">Key Features</h3>
                <ul class="mt-2 list-disc pl-5 text-slate-600 dark:text-dark-400">
                    <li>🔗 <strong>Custom Short Links</strong> – Create branded and meaningful URLs.</li>
                    <li>📊 <strong>Real-time Analytics</strong> – Track clicks and engagement metrics.</li>
                    <li>🔒 <strong>Secure & Private</strong> – Protect your links with optional access keys.</li>
                    <li>🚀 <strong>Fast & Reliable</strong> – Instantly generate shareable links.</li>
                </ul>

                <p class="mt-4 text-slate-600 dark:text-dark-400">
                    Built with <a href="https://laravel.com/" class="text-red-500 font-medium text-bold"
                        target="_blank">Laravel</a>
                    and optimized for seamless performance, P - Link supports the port industry's
                    digital transformation by ensuring efficient and organized link management.
                </p>

                <h3 class="mt-4 text-lg font-semibold text-slate-700 dark:text-dark-300 text-center">Technology Stack</h3>

                <div class="grid grid-cols-2 gap-x-6 gap-y-2 mt-2 items-start">
                    <!-- Column 1 -->
                    <div>
                        <h4 class="text-md font-semibold text-slate-700 dark:text-dark-300 text-center">Backend</h4>
                        <ul class="space-y-2">
                            <li
                                class="border border-gray-300 dark:border-gray-600 rounded-lg p-2 bg-gray-100 dark:bg-gray-800 holographic-card">
                                <a href="https://www.php.net/releases/8.2/en.php"
                                    class="text-purple-600 font-medium block text-center" target="_blank">
                                    PHP 8.2.12
                                </a>
                            </li>
                            <li
                                class="border border-gray-300 dark:border-gray-600 rounded-lg p-2 bg-gray-100 dark:bg-gray-800 holographic-card">
                                <a href="https://laravel.com/" class="text-red-600 font-medium block text-center"
                                    target="_blank">
                                    Laravel 12.2.0
                                </a>
                            </li>
                            <li
                                class="border border-gray-300 dark:border-gray-600 rounded-lg p-2 bg-gray-100 dark:bg-gray-800 holographic-card">
                                <a href="https://www.mysql.com/" class="text-blue-600 font-medium block text-center"
                                    target="_blank">
                                    MySQL
                                </a>
                            </li>
                            <li
                                class="border border-gray-300 dark:border-gray-600 rounded-lg p-2 bg-gray-100 dark:bg-gray-800 holographic-card">
                                <a href="https://www.heroku.com/" class="text-green-600 font-medium block text-center"
                                    target="_blank">
                                    Heroku
                                </a>
                            </li>
                            <li
                                class="border border-gray-300 dark:border-gray-600 rounded-lg p-2 bg-gray-100 dark:bg-gray-800 holographic-card">
                                <a href="https://www.phpmyadmin.net/" class="text-orange-600 font-medium block text-center"
                                    target="_blank">
                                    PhpMyAdmin
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Column 2 -->
                    <div>
                        <h4 class="text-md font-semibold text-slate-700 dark:text-dark-300 text-center">Frontend</h4>
                        <ul class="space-y-2">
                            <li
                                class="border border-gray-300 dark:border-gray-600 rounded-lg p-2 bg-gray-100 dark:bg-gray-800 holographic-card">
                                <a href="https://tailwindcss.com/" class="text-blue-500 font-medium block text-center"
                                    target="_blank">
                                    Tailwind CSS
                                </a>
                            </li>
                            <li
                                class="border border-gray-300 dark:border-gray-600 rounded-lg p-2 bg-gray-100 dark:bg-gray-800 holographic-card">
                                <a href="https://vitejs.dev/" class="text-green-500 font-medium block text-center"
                                    target="_blank">
                                    Vite
                                </a>
                            </li>
                            <li
                                class="border border-gray-300 dark:border-gray-600 rounded-lg p-2 bg-gray-100 dark:bg-gray-800 holographic-card">
                                <a href="https://alpinejs.dev/" class="text-yellow-500 font-medium block text-center"
                                    target="_blank">
                                    Alpine.js
                                </a>
                            </li>
                            <li
                                class="border border-gray-300 dark:border-gray-600 rounded-lg p-2 bg-gray-100 dark:bg-gray-800 holographic-card">
                                <a href="https://animate.style/" class="text-purple-500 font-medium block text-center"
                                    target="_blank">
                                    Animate.css
                                </a>
                            </li>
                            <li
                                class="border border-gray-300 dark:border-gray-600 rounded-lg p-2 bg-gray-100 dark:bg-gray-800 holographic-card">
                                <a href="https://daisyui.com/" class="text-pink-500 font-medium block text-center"
                                    target="_blank">
                                    DaisyUI
                                </a>
                            </li>
                        </ul>
                    </div>
                    <li>📦 <strong>Dependencies:</strong>
                        <ul class="list-disc pl-5">
                            <li><a href="https://blade-ui-kit.com/" class="text-red-500 font-medium" target="_blank">Blade
                                    UI Kit</a></li>
                            <li><a href="https://laravel-livewire.com/" class="text-purple-500 font-medium"
                                    target="_blank">Livewire</a></li>
                            <li><a href="https://spatie.be/docs/laravel-permission/" class="text-blue-500 font-medium"
                                    target="_blank">Spatie Laravel Permission</a></li>
                            <li><a href="https://spatie.be/docs/laravel-settings/" class="text-blue-500 font-medium"
                                    target="_blank">Spatie Laravel Settings</a></li>
                            <li><a href="https://filamentphp.com/" class="text-blue-500 font-medium"
                                    target="_blank">Filament Widgets</a></li>
                            {{-- <li><a href="https://github.com/flowframe/laravel-trend" class="text-purple-500 font-medium"
                                    target="_blank">Flowframe Laravel Trend</a></li> --}}
                            <li><a href="https://laravel.com/docs/fortify" class="text-red-500 font-medium"
                                    target="_blank">Laravel Fortify</a></li>
                            <li><a href="https://github.com/laravel/tinker" class="text-yellow-500 font-medium"
                                    target="_blank">Laravel Tinker</a></li>
                            <li><a href="https://livewire-powergrid.com/" class="text-purple-500 font-medium"
                                    target="_blank">Power Components Livewire PowerGrid</a></li>
                            <li><a href="https://github.com/realodix/timezone" class="text-green-500 font-medium"
                                    target="_blank">Realodix Timezone</a></li>
                            <li><a href="https://github.com/endroid/qr-code" class="text-yellow-500 font-medium"
                                    target="_blank">Endroid QR Code</a></li>
                        </ul>
                    </li>

                    <li>🛠 <strong>Development Tools:</strong>
                        <ul class="list-disc pl-5">
                            <li><a href="https://github.com/barryvdh/laravel-debugbar" class="text-green-500 font-medium"
                                    target="_blank">Laravel Debugbar</a></li>
                            <li><a href="https://github.com/paratestphp/paratest" class="text-green-500 font-medium"
                                    target="_blank">Paratest</a></li>
                            <li><a href="https://fakerphp.github.io/" class="text-yellow-500 font-medium"
                                    target="_blank">FakerPHP</a></li>
                            <li><a href="https://github.com/nunomaduro/larastan" class="text-green-500 font-medium"
                                    target="_blank">Larastan</a></li>
                            <li><a href="https://laravel.com/docs/dusk" class="text-red-500 font-medium"
                                    target="_blank">Laravel Dusk</a></li>
                            <li><a href="https://github.com/mockery/mockery" class="text-yellow-500 font-medium"
                                    target="_blank">Mockery</a></li>
                            <li><a href="https://github.com/phpstan/phpstan-deprecation-rules"
                                    class="text-green-500 font-medium" target="_blank">PHPStan Deprecation Rules</a></li>
                            <li><a href="https://phpunit.de/" class="text-green-500 font-medium"
                                    target="_blank">PHPUnit</a></li>
                            <li><a href="https://github.com/realodix/relax" class="text-blue-500 font-medium"
                                    target="_blank">Realodix Relax</a></li>
                            <li><a href="https://spatie.be/docs/laravel-ignition/" class="text-blue-500 font-medium"
                                    target="_blank">Spatie Laravel Ignition</a></li>
                        </ul>
                    </li>

                </div>
                <p class="mt-4 font-medium text-primary-600 dark:text-cyan-300 text-center">
                    Start using P - Link today and simplify your link sharing!
                </p>
            </div>
        </div>
    </div>

    <br>


    {{-- <div class="content-container card card-fluid">
            <h3>Users</h3>
            <div class="mt-4 mb-6 px-0">
                <dl class="grid grid-cols-1 gap-2.5 sm:gap-3 md:gap-5 md:grid-cols-2 lg:grid-cols-3">
                    @php
                        $userCount = $user->count();
                        $guestUserCount = $user->guestUserCount();
                    @endphp
                    <div class="card !bg-gray-50 dark:!bg-dark-950/50 !rounded px-4 py-3">
                        <dt class="text-sm font-medium text-gray-600 dark:text-dark-400 md:mt-1">
                            User
                        </dt>
                        <dd class="-mt-1 font-normal text-gray-900 dark:text-dark-300 md:mt-1 md:text-xl">
                            <span title="{{ number_format($userCount) }}">{{ n_abb($userCount) }}</span>
                        </dd>
                    </div>
                    <div class="card !bg-gray-50 dark:!bg-dark-950/50 !rounded px-4 py-3">
                        <dt class="text-sm font-medium text-gray-600 dark:text-dark-400 md:mt-1">
                            Guest
                        </dt>
                        <dd class="-mt-1 font-normal text-gray-900 dark:text-dark-300 md:mt-1 md:text-xl">
                            <span title="{{ number_format($guestUserCount) }}">{{ n_abb($guestUserCount) }}</span>
                        </dd>
                    </div>
                </dl>
            </div>

            <h3>Links</h3>
            <div class="mt-4 mb-6 px-0">
                <dl class="grid grid-cols-1 gap-2.5 sm:gap-3 md:gap-5 md:grid-cols-2 lg:grid-cols-3">
                    @php
                        $linkCount = $url->count();
                        $userLinks = $url->userLinks();
                        $userLinkVisits = $visit->userLinkVisits();
                        $guestUrlCount = $url->guestLinks();
                        $guestLinkVisits = $visit->guestLinkVisits();
                    @endphp

                    <div class="card !bg-gray-50 dark:!bg-dark-950/50 !rounded px-4 py-3">
                        <dt class="text-sm font-medium text-gray-600 dark:text-dark-400 md:mt-1">
                            Total
                        </dt>
                        <dd class="-mt-1 font-normal text-gray-900 dark:text-dark-300 md:mt-1 md:text-xl">
                            <span title="{{ number_format($linkCount) }}">{{ n_abb($linkCount) }}</span>
                        </dd>
                    </div>
                    <div class="card !bg-gray-50 dark:!bg-dark-950/50 !rounded px-4 py-3">
                        <dt class="text-sm font-medium text-gray-600 dark:text-dark-400 md:mt-1">
                            User
                        </dt>
                        <dd class="-mt-1 font-normal text-gray-900 dark:text-dark-300 md:mt-1 md:text-xl">
                            <span title="{{ number_format($userLinks) }}">{{ n_abb($userLinks) }}</span>
                            <span title="{{ number_format($userLinkVisits) }}">({{ n_abb($userLinkVisits) }}
                                visits)</span>
                        </dd>
                    </div>
                    <div class="card !bg-gray-50 dark:!bg-dark-950/50 !rounded px-4 py-3">
                        <dt class="text-sm font-medium text-gray-600 dark:text-dark-400 md:mt-1">
                            Guest
                        </dt>
                        <dd class="-mt-1 font-normal text-gray-900 dark:text-dark-300 md:mt-1 md:text-xl">
                            <span title="{{ number_format($guestUrlCount) }}">{{ n_abb($guestUrlCount) }}</span>
                            <span title="{{ number_format($guestLinkVisits) }}">({{ n_abb($guestLinkVisits) }}
                                visits)</span>
                        </dd>
                    </div>
                </dl>
            </div>

            <h3>Visits</h3>
            <div class="mt-4 mb-6 px-0">
                <dl class="grid grid-cols-1 gap-2.5 sm:gap-3 md:gap-5 md:grid-cols-2 lg:grid-cols-3">
                    <div class="card !bg-gray-50 dark:!bg-dark-950/50 !rounded px-4 py-3">
                        <dt class="text-sm font-medium text-gray-600 dark:text-dark-400 md:mt-1">
                            Total
                        </dt>
                        <dd class="-mt-1 font-normal text-gray-900 dark:text-dark-300 md:mt-1 md:text-xl">
                            <span title="{{ number_format($visit->count()) }}">{{ n_abb($visit->count()) }}</span>
                        </dd>
                    </div>
                    <div class="card !bg-gray-50 dark:!bg-dark-950/50 !rounded px-4 py-3">
                        <dt class="text-sm font-medium text-gray-600 dark:text-dark-400 md:mt-1">
                            User
                        </dt>
                        <dd class="-mt-1 font-normal text-gray-900 dark:text-dark-300 md:mt-1 md:text-xl">
                            <span
                                title="{{ number_format($visit->userVisits()) }}">{{ n_abb($visit->userVisits()) }}</span>
                        </dd>
                    </div>
                    <div class="card !bg-gray-50 dark:!bg-dark-950/50 !rounded px-4 py-3">
                        <dt class="text-sm font-medium text-gray-600 dark:text-dark-400 md:mt-1">
                            Guest
                        </dt>
                        <dd class="-mt-1 font-normal text-gray-900 dark:text-dark-300 md:mt-1 md:text-xl">
                            <span
                                title="{{ number_format($visit->guestVisits()) }}">{{ n_abb($visit->guestVisits()) }}</span>
                            /
                            <span
                                title="{{ number_format($visit->uniqueGuestVisits()) }}">{{ n_abb($visit->uniqueGuestVisits()) }}</span>
                        </dd>
                    </div>
                </dl>
            </div> --}}

    {{-- <h3>Random String</h3>
            <p class="font-light text-sm dark:text-dark-400">Random String Generator for Short URLs</p>
            <div class="mt-4 mb-6 px-0">
                <dl class="grid grid-cols-1 md:grid-flow-col md:auto-cols-auto gap-2.5 sm:gap-3">
                    <div class="card !bg-gray-50 dark:!bg-dark-950/50 !rounded px-4 py-3">
                        <dt class="text-sm font-medium text-gray-600 dark:text-dark-400 md:mt-1">
                            Max Unique Strings
                        </dt>
                        <dd class="-mt-1 font-normal text-gray-900 dark:text-dark-300 md:mt-1 md:text-xl">
                            @if ($keyGenerator->maxUniqueStrings() === PHP_INT_MAX)
                                (<code>PHP_INT_MAX</code>) {{ number_format(PHP_INT_MAX) }}
                            @else
                                @php
                                    $number = strlen(KeyGeneratorService::ALPHABET);
                                    $powNumber = settings()->keyword_length;
                                    $result = number_format($keyGenerator->maxUniqueStrings());
                                @endphp

                                ( {{ $number }}<sup>{{ $powNumber }}</sup> ) {{ $result }}
                            @endif
                        </dd>
                    </div>
                    <div class="card !bg-gray-50 dark:!bg-dark-950/50 !rounded px-4 py-3">
                        <dt class="text-sm font-medium text-gray-600 dark:text-dark-400 md:mt-1 md:w-64">
                            Generated
                        </dt>
                        <dd class="-mt-1 font-normal text-gray-900 dark:text-dark-300 md:mt-1 md:text-xl md:w-64">
                            {{ number_format($keyGenerator->keywordCount()) }}
                        </dd>
                    </div>
                </dl>
            </div>
        </div> --}}

    {{-- <br>

            @php
                $domainBlacklist = collect(config('urlhub.domain_blacklist'))->sort();
                $reservedActiveKeyList = $keyGenerator->reservedActiveKeyword()->toArray();
                $reservedKeyword = $keyGenerator->reservedKeyword();
            @endphp
            <div class="config content-container card card-fluid">
                <h1>
                    {{ __('Configuration') }}
                    <p class="font-light text-sm float-right"><span class="text-gray-500/85">.\config</span>\urlhub.php</p>
                </h1>

                <h3>Shortened Links</h3>
                <dl>
                    <dt class="mt-2">
                        <code>domain_blacklist</code>
                        <p class="font-light text-sm dark:text-dark-400">This is a list of domain names that are not allowed
                            to
                            be shortened.</p>
                    </dt>
                    <dd class="mt-2">
                        <div class="card !bg-gray-50 dark:!bg-dark-950/50 !rounded px-3 py-2 text-sm">
                            @if ($domainBlacklist->isNotEmpty())
                                <code>{{ $domainBlacklist->implode(', ') }}</code>
                            @else
                                <code>None</code>
                            @endif
                        </div>
                    </dd>

                    <dt class="mt-2 mb-2">
                        <code>reserved_keyword</code>
                        <p class="font-light text-sm dark:text-dark-400">
                            Reserved keywords are strings that cannot be used as a shortened URL keyword. The route list and
                            folder/file names in the public folder are also included in this list.
                        </p>
                    </dt>
                    <dd class="mt-2 mb-2">
                        <div class="card !bg-gray-50 dark:!bg-dark-950/50 !rounded px-3 py-2 text-sm">
                            <code class="text-slate-500 dark:text-dark-600">// {{ $reservedKeyword->count() }}
                                Strings</code>
                            <br>
                            @foreach ($reservedKeyword as $reservedKeywordItem)
                                @php $separator = $loop->last ? '.' : ','; @endphp
                                <code class="dark:text-dark-400">{{ $reservedKeywordItem }}</code>
                                {{ $separator }}
                            @endforeach

                            @if (!empty($reservedActiveKeyList))
                                <br><br>
                                <code class="text-red-400 dark:text-orange-500/70">// Unfortunately the list below is
                                    already
                                    used </code> <br>
                                <code class="text-red-400 dark:text-orange-500/70">// as shortened URL keyword</code> <br>

                                @foreach ($reservedActiveKeyList as $reservedActiveKey)
                                    @php $separator = $loop->last ? '.' : ','; @endphp
                                    <code><a href="{{ route('link_detail', $reservedActiveKey) }}" target="_blank"
                                            class="underline decoration-dotted">
                                            {{ $reservedActiveKey }}</a></code>
                                    {{ $separator }}
                                @endforeach
                            @endif
                        </div>
                    </dd>

                    <dt class="mt-2">
                        <code>redirection_status_code</code>
                        <p class="font-light text-sm dark:text-dark-400">
                            The HTTP status code to use when redirecting a visitor to the original URL.
                        </p>
                    </dt>
                    <dd class="mt-2">
                        {{ config('urlhub.redirection_status_code') }}
                    </dd>
                </dl>
            </div> --}}
    </div>
@endsection
