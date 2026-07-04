<!doctype html>
<html class="light" lang="id">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>SeminarKu - Platform Seminar &amp; Workshop Terbaik</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&amp;display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet"
        />
        <script id="tailwind-config">
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        colors: {
                            "on-surface-variant": "#44474d",
                            "on-primary-container": "#7689a4",
                            "on-primary-fixed": "#081c32",
                            "secondary-fixed": "#9eefff",
                            "error-container": "#ffdad6",
                            "secondary-fixed-dim": "#77d4e5",
                            "on-secondary-container": "#006d7b",
                            "surface-variant": "#d9e5e8",
                            error: "#ba1a1a",
                            "surface-container-low": "#eaf6fa",
                            "inverse-primary": "#b5c8e5",
                            "surface-container": "#e4f0f4",
                            "on-tertiary-fixed": "#002117",
                            "surface-container-highest": "#d9e5e8",
                            "tertiary-container": "#00261c",
                            outline: "#74777d",
                            "outline-variant": "#c4c6cd",
                            background: "#f0fbff",
                            "on-tertiary": "#ffffff",
                            primary: "#000917",
                            "on-surface": "#121d20",
                            surface: "#f0fbff",
                            "on-error-container": "#93000a",
                            "on-secondary-fixed": "#001f24",
                            "primary-fixed-dim": "#b5c8e5",
                            "surface-bright": "#f0fbff",
                            "tertiary-fixed": "#65fbcf",
                            "primary-container": "#0d2137",
                            "surface-tint": "#4d6079",
                            "secondary-container": "#92edff",
                            "surface-dim": "#d0dce0",
                            "tertiary-fixed-dim": "#40deb3",
                            secondary: "#006876",
                            "on-tertiary-container": "#009a79",
                            "on-error": "#ffffff",
                            "primary-fixed": "#d2e4ff",
                            "on-secondary-fixed-variant": "#004e59",
                            "surface-container-high": "#deeaee",
                            "on-primary-fixed-variant": "#364860",
                            "inverse-surface": "#273235",
                            "on-primary": "#ffffff",
                            "on-secondary": "#ffffff",
                            "inverse-on-surface": "#e7f3f7",
                            "surface-container-lowest": "#ffffff",
                            "on-background": "#121d20",
                            tertiary: "#000c07",
                            "on-tertiary-fixed-variant": "#00513e",
                        },
                        borderRadius: {
                            DEFAULT: "0.25rem",
                            lg: "0.5rem",
                            xl: "0.75rem",
                            full: "9999px",
                        },
                        spacing: {
                            base: "8px",
                            "margin-desktop": "48px",
                            gutter: "24px",
                            "margin-mobile": "16px",
                            "container-max": "1280px",
                        },
                        fontFamily: {
                            "headline-lg-mobile": ["Montserrat"],
                            "label-lg": ["Montserrat"],
                            "body-lg": ["Montserrat"],
                            "headline-lg": ["Montserrat"],
                            "label-md": ["Montserrat"],
                            "headline-xl": ["Montserrat"],
                            "headline-md": ["Montserrat"],
                            "body-md": ["Montserrat"],
                        },
                        fontSize: {
                            "headline-lg-mobile": [
                                "24px",
                                { lineHeight: "1.2", fontWeight: "700" },
                            ],
                            "label-lg": [
                                "14px",
                                { lineHeight: "1.2", fontWeight: "600" },
                            ],
                            "body-lg": [
                                "18px",
                                { lineHeight: "1.6", fontWeight: "400" },
                            ],
                            "headline-lg": [
                                "32px",
                                {
                                    lineHeight: "1.2",
                                    letterSpacing: "-0.01em",
                                    fontWeight: "700",
                                },
                            ],
                            "label-md": [
                                "12px",
                                { lineHeight: "1.2", fontWeight: "500" },
                            ],
                            "headline-xl": [
                                "48px",
                                {
                                    lineHeight: "1.1",
                                    letterSpacing: "-0.02em",
                                    fontWeight: "700",
                                },
                            ],
                            "headline-md": [
                                "24px",
                                { lineHeight: "1.3", fontWeight: "600" },
                            ],
                            "body-md": [
                                "16px",
                                { lineHeight: "1.5", fontWeight: "400" },
                            ],
                        },
                    },
                },
            };
        </script>
        <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
    </head>
    <body class="bg-background text-on-background font-body-md selection:bg-on-tertiary-container selection:text-white overflow-x-hidden">
        @include('layouts.nav')

        <main class="pt-20">
            @yield('content')
        </main>

        @include('layouts.footer')

        <script src="{{ asset('js/home.js') }}"></script>
    </body>
</html>
