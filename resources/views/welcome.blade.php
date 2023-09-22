<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sigecom</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity))
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Inicio</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Iniciar
                        Sesion</a>
                @endauth
            </div>
        @endif
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" width="343.000000pt" height="104.450000pt" viewBox="0 0 343.82 104.45">
                    <defs>
                        <style>
                            .cls-1,
                            .cls-4 {
                                fill: #fff;
                            }
                            .cls-1,
                            .cls-2,
                            .cls-3,
                            .cls-4 {
                                stroke: #000;
                                stroke-miterlimit: 10;
                            }
                            .cls-1 {
                                stroke-width: 7px;
                            }
                            .cls-2 {
                                stroke-width: 2px;
                            }
                            .cls-4 {
                                stroke-linecap: round;
                                stroke-width: 5px;
                            }
                        </style>
                    </defs>
                    <circle class="cls-1" cx="52.23" cy="52.23" r="48.73" />
                    <path class="cls-2"
                        d="M80.87,53.54c-1.3,0-2.49,0-3.68,0a1,1,0,0,1-.75-.52c-1.26-6.4-7.2-8-13-6.92-4.51.81-6.72,4.08-5.82,8.42a5,5,0,0,0,2,3.14c2.15,1.57,4.71,2.1,7.18,2.9a69,69,0,0,1,8.74,3.18C80.27,66,82.12,70,81.64,75.18a10.7,10.7,0,0,1-7.32,9.65c-5.67,2.12-11.41,2.08-16.8-.9-4-2.23-6-6-6.46-10.58h4.3c.21.67.39,1.36.63,2a9.4,9.4,0,0,0,6.9,6.38,16.35,16.35,0,0,0,9-.22,6.87,6.87,0,0,0,5.19-6c.43-3.35-.33-6.33-3.52-8a62.27,62.27,0,0,0-7.11-2.76c-2.66-1-5.42-1.71-8-2.87a9.06,9.06,0,0,1-5.56-8.91,10.34,10.34,0,0,1,5.4-9.4c5.22-3,13.62-2.48,18.17,1.15A12,12,0,0,1,80.87,53.54Z"
                        transform="translate(-14.16 -11.77)" />
                    <path class="cls-3"
                        d="M346,41.78V85.12h-4.17v-37c-.25.56-.39.86-.52,1.17q-7,17.52-13.94,35a1.14,1.14,0,0,1-1.22.84c-3,0-3,0-4.1-2.75q-6.15-16.29-12.28-32.6l-.46-1.21V85.08h-4.13V41.86H311l14.33,37.06c.18-.41.34-.73.47-1.06q7.07-17.48,14.11-35a1.46,1.46,0,0,1,1.65-1.13C343,41.84,344.39,41.78,346,41.78Z"
                        transform="translate(-14.16 -11.77)" />
                    <path class="cls-3"
                        d="M156.34,65.94v-4H174V85c-.11,0-.18.11-.24.11-3.94-.1-3.44,1-3.77-3.56,0-.47,0-.94,0-1.51-.24.09-.38.1-.43.17-2.85,3.65-6.76,5.09-11.2,5.36-10.65.65-18.21-5.39-20-16a29.86,29.86,0,0,1,1.9-17.73c3.34-7.34,9.83-11.06,18.58-10.63,5.79.28,10.7,2.37,13.7,7.62a44.71,44.71,0,0,1,2.34,5.93c-1.68,0-2.93,0-4.18,0a.82.82,0,0,1-.51-.4,6.3,6.3,0,0,1-.34-.89c-1.64-4.58-4.82-7.43-9.68-8a22,22,0,0,0-6.77.23c-4.59.92-7.65,3.91-9.27,8.21a25.52,25.52,0,0,0,0,19,14,14,0,0,0,19.33,7.42c3.89-1.88,5.43-5.34,6.07-9.33.26-1.61.33-3.25.5-5.06Z"
                        transform="translate(-14.16 -11.77)" />
                    <path class="cls-3"
                        d="M297,63.22a28.89,28.89,0,0,1-3.19,12.84c-3.85,7-10,10-17.77,9.68-9.68-.37-16.23-7.27-17.93-17.06a28.9,28.9,0,0,1,.65-13.17c2.76-9.5,9.95-14.67,19.82-14.28,8.57.33,15.32,6.1,17.39,15C296.48,58.53,296.65,60.9,297,63.22Zm-4.75.29a22.43,22.43,0,0,0-1.5-8.83c-2.38-5.89-6.64-9.3-13.12-9.42-5.75-.12-10.35,2.19-12.95,7.43a22.74,22.74,0,0,0,.1,21.31,13.24,13.24,0,0,0,12.43,7.74c5.64,0,10-2.35,12.68-7.49A23,23,0,0,0,292.23,63.51Z"
                        transform="translate(-14.16 -11.77)" />
                    <path class="cls-3"
                        d="M188.38,60.32h21.43v4H188.38V81.07h23.67c-.22,1.4-.41,2.66-.62,4H184.15V41.84H210.9v3.95H188.38Z"
                        transform="translate(-14.16 -11.77)" />
                    <path class="cls-3"
                        d="M252.19,72.82c-1.29,4.63-3.55,8.27-7.57,10.63-5.94,3.49-17,3.45-23.06-4A21.88,21.88,0,0,1,217,68.76c-1-6.53-.38-12.83,3-18.68,6.54-11.47,21.43-10.47,27.38-5a15.59,15.59,0,0,1,4.88,9.31c-1.33,0-2.54,0-3.76,0-.21,0-.43-.26-.62-.44a.91.91,0,0,1-.13-.33c-2-5.66-6.1-8.39-12.06-8.39-5.69,0-9.87,2.64-12.24,7.73a23.78,23.78,0,0,0-.05,20.87c3.48,7.47,13.1,10.21,19.63,5.81a13,13,0,0,0,4.55-5.9,1.25,1.25,0,0,1,1.41-.93C249.93,72.86,251,72.82,252.19,72.82Z"
                        transform="translate(-14.16 -11.77)" />
                    <path class="cls-3" d="M129.49,85.15h-4.15V41.84h4.15Z" transform="translate(-14.16 -11.77)" />
                    <!--<line class="cls-4" x1="91.49" y1="81.09" x2="341.32" y2="81.09" />-->
                </svg>
            </div>
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs"
                                    class="underline text-gray-900 dark:text-white">Documentation</a></div>
                        </div>
                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laravel has wonderful, thorough documentation covering every aspect of the framework.
                                Whether you are new to the framework or have previous experience with Laravel, we
                                recommend reading all of the documentation from beginning to end.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                                </path>
                                <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com"
                                    class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript
                                development. Check them out, see for yourself, and massively level up your development
                                skills in the process.
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                </div>
                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
</body>

</html>
