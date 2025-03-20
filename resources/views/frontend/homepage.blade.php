@extends('layouts.frontend')

@section('css_class', 'frontend home')

@section('content')

    <div class="pt-16 sm:pt-28">
        @if (!auth()->check() && !settings()->anyone_can_shorten)
            <div class="flex flex-wrap md:justify-center">
                <div class="w-full md:w-8/12 font-thin text-5xl text-slate-600 text-center welcome-msg">
                    {{ __('Please login to shorten URLs') }}
                </div>
            </div>
        @else
            <div class="flex flex-wrap md:justify-center">
                <span
                    class="mx-auto max-w-md md:max-w-4xl
            font-bold text-center text-gray-700 dark:text-dark-300 md:text-4xl xl:text-5xl text-3xl">
                    Let's Create <span class="text-blue-500 hover-underline">Short </span> and <span
                        class="text-cyan-400 hover-underline">Eficient
                        Link</span>
                    <span class="block mt-4">for Your <span class="hero__emphasizing">Digital Needs</span>
                    </span>
            </div>
            <div class="flex flex-wrap justify-center mt-12 md:mt-16 px-4 lg:px-0">
                <div class="w-full max-w-4xl">
                    <form method="post" action="{{ route('link.create') }}" class="mb-4 mt-12">
                        @csrf

                        <div class="flex flex-wrap justify-center gap-2">
                            <input name="long_url" required value="{{ old('long_url') }}"
                                placeholder="{{ __('Paste or type your URL here...') }}"
                                class="w-full px-4 h-12 sm:h-14 text-xl outline-none rounded-md border border-border-300 focus:border-primary-600 dark:bg-dark-900 dark:border-dark-700 dark:focus:border-dark-600">
                        </div>

                        <div class="flex flex-wrap justify-center gap-2 mt-4">
                            <button type="button" id="toggle-custom-url" class="text-primary-600 hover:underline">
                                {{ __('Customize your link') }}
                            </button>
                            <button type="button" id="hide-custom-url" class="text-red-600 hover:underline hidden">
                                {{ __('Hide') }}
                            </button>
                        </div>

                        <div id="custom-url-section" class="hidden mt-2">
                            <span class="block mb-2 font-light dark:text-dark-400">
                                {{ __('Make your links more memorable and professional with a custom alias!') }}
                            </span>
                            <div class="flex items-center w-full">
                                <span class="text-2xl mr-2">{{ request()->getHttpHost() }}/</span>
                                <input name="custom_key" value="{{ old('custom_key') }}"
                                    placeholder="{{ __('Enter a custom alias') }}"
                                    class="flex-1 px-4 h-12 text-xl outline-none rounded-md border border-border-300 focus:border-primary-600 dark:bg-dark-900 dark:border-dark-700 dark:focus:border-dark-600">
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <button type="submit"
                                class="w-full md:w-1/6 h-12 sm:h-14 align-top rounded-md text-lg text-white bg-primary-600 hover:bg-primary-700 focus:bg-primary-800 
                                dark:text-white dark:bg-dark-950 dark:hover:bg-dark-700 dark:focus:bg-dark-800 dark:border dark:border-blue-600 dark:hover:border-blue-600 
                                holographic-card">
                                {{ __('Shorten') }}
                            </button>
                        </div>

                    </form>
                    <div class="mt-8">@include('partials/messages')</div>
                </div>
            </div>
            <div class="flex flex-wrap justify-center mt-12 md:mt-16">
                <div class="w-full max-w-4xl">
                    <div class="flex flex-wrap justify-center gap-4">
                        <div class="w-full text-center">
                            <div class="mt-2 text-gray-600 dark:text-dark-400 text-lg leading-relaxed">
                                {{ __('Want to get the most out of your link shortener?') }}
                                <a href="{{ route('register') }}" class="text-blue-600 hover:underline">
                                    {{ __(' Sign up today') }}
                                </a>
                                {{ __(' and unlock powerful features!') }}
                                <br>
                                {{ __('Track detailed analytics, create branded short links, and manage all your URLs effortlessly in one place.') }}
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <script>
        document.getElementById('toggle-custom-url').addEventListener('click', function() {
            let customSection = document.getElementById('custom-url-section');
            let toggleButton = document.getElementById('toggle-custom-url');
            let hideButton = document.getElementById('hide-custom-url');
            customSection.classList.remove('hidden');
            toggleButton.classList.add('hidden');
            hideButton.classList.remove('hidden');
        });

        document.getElementById('hide-custom-url').addEventListener('click', function() {
            let customSection = document.getElementById('custom-url-section');
            let toggleButton = document.getElementById('toggle-custom-url');
            let hideButton = document.getElementById('hide-custom-url');
            customSection.classList.add('hidden');
            toggleButton.classList.remove('hidden');
            hideButton.classList.add('hidden');
        });
        document.querySelector('form').addEventListener('submit', function() {
            let customKeyInput = document.querySelector('input[name="custom_key"]');
            if (customKeyInput) {
                customKeyInput.value = customKeyInput.value.toLowerCase();
            }
        });
    </script>
@endsection
