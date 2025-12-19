<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="UTDQHUMnQs9GC9VYhC9EaF5Db5U3oNpH3LpUisuu">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Tailwise admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Tailwise Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>{{ $title ?? 'Tailwise - Admin Dashboard Template' }}</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('theme/dist/css/vendors/tippy.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/dist/css/vendors/simplebar.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/dist/css/themes/hook.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/dist/css/app.css') }}"> 
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body>

        /** JIKA INGIN CUSTOM THEME, BISA MENGGUNAKAN COMPONENT INI */
        <!-- <x-layouts.customize /> -->

        <div class="hook before:content-[''] before:z-[-1] before:w-screen before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:top-0 before:h-screen before:fixed before:bg-fixed">
            <div class="[&.loading-page--before-hide]:h-screen [&.loading-page--before-hide]:relative loading-page loading-page--before-hide [&.loading-page--before-hide]:before:block [&.loading-page--hide]:before:opacity-0 before:content-[''] before:transition-opacity before:duration-300 before:hidden before:inset-0 before:h-screen before:w-screen before:fixed before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:z-[60] [&.loading-page--before-hide]:after:block [&.loading-page--hide]:after:opacity-0 after:content-[''] after:transition-opacity after:duration-300 after:hidden after:h-16 after:w-16 after:animate-pulse after:fixed after:opacity-50 after:inset-0 after:m-auto after:bg-loading-puff after:bg-cover after:z-[61]">
                <div class="xl:ml-0 shadow-xl transition-[margin] duration-300 xl:shadow-none fixed top-0 left-0 z-50 side-menu group after:content-[''] after:fixed after:inset-0 after:bg-black/80 after:xl:hidden side-menu--collapsed [&.side-menu--mobile-menu-open]:ml-0 [&.side-menu--mobile-menu-open]:after:block -ml-[275px] after:hidden">
                    <div class="close-mobile-menu fixed ml-[275px] w-10 h-10 items-center justify-center xl:hidden z-50 [&.close-mobile-menu--mobile-menu-open]:flex hidden">
                        <a class="ml-5 mt-5" href="#">
                            <i data-tw-merge="" data-lucide="x" class="stroke-[1] h-8 w-8 text-white"></i>
                        </a>
                    </div>
                    <div class="side-menu__content z-20 relative w-[275px] border-slate-200/80 duration-300 transition-[width] group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000000f] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] h-screen flex flex-col before:content-[''] before:absolute before:inset-0 before:xl:rounded-[0_0.75rem_0.75rem_0/0_1.1rem_1.1rem_0] before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:border-slate-200/80 before:group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000000f] after:content-[''] after:absolute after:inset-0 after:xl:-mr-4 after:bg-texture-white after:bg-contain after:bg-fixed after:bg-[center_-20rem] after:bg-no-repeat">
                        <div class="relative z-10 hidden h-[65px] w-[275px] flex-none items-center overflow-hidden px-5 duration-300 xl:flex group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] group-[.side-menu--collapsed]:xl:w-[91px]">
                            <a class="flex items-center transition-[margin] duration-300 group-[.side-menu--collapsed.side-menu--on-hover]:xl:ml-0 group-[.side-menu--collapsed]:xl:ml-4" href="#">
                                <div class="transition-transform ease-in-out group-[.side-menu--collapsed.side-menu--on-hover]:xl:-rotate-180">
                                    <div class="relative h-[18px] w-[18px] -rotate-45 [&_div]:bg-white">
                                        <div class="absolute inset-y-0 left-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                                        </div>
                                        <div class="absolute inset-0 m-auto h-[120%] w-[21%] rounded-full"></div>
                                        <div class="absolute inset-y-0 right-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                                        </div>
                                    </div>
                                </div>
                                <div class="ml-3.5 font-medium text-white transition-opacity group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0">
                                    HOOK
                                </div>
                            </a>
                            <a class="toggle-compact-menu ml-auto hidden h-[20px] w-[20px] items-center justify-center rounded-full border border-white/40 text-white transition-[opacity,transform] hover:bg-white/5 group-[.side-menu--collapsed]:xl:rotate-180 group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0 3xl:flex" href="#">
                                <i data-tw-merge="" data-lucide="arrow-left" class="h-3.5 w-3.5 stroke-[1.3]"></i>
                            </a>
                        </div>

                        /** KOMPONEN ASIDE MENU */
                        <x-layouts.aside />

                    </div>
                    <x-layouts.top-bar />
                </div>
                
                /** KONTEN UTAMA */
                {{ $slot }}
            </div>
        </div>

        <script src="{{ asset('theme/dist/js/vendors/dom.js') }}"></script>
        <script src="{{ asset('theme/dist/js/vendors/tailwind-merge.js') }}"></script>
        <script src="{{ asset('theme/dist/js/vendors/tab.js') }}"></script>
        <script src="{{ asset('theme/dist/js/vendors/lucide.js') }}"></script>
        <script src="{{ asset('theme/dist/js/vendors/popper.js') }}"></script>
        <script src="{{ asset('theme/dist/js/vendors/dropdown.js') }}"></script>
        <script src="{{ asset('theme/dist/js/vendors/tippy.js') }}"></script>
        <script src="{{ asset('theme/dist/js/vendors/simplebar.js') }}"></script>
        <script src="{{ asset('theme/dist/js/vendors/transition.js') }}"></script>
        <script src="{{ asset('theme/dist/js/vendors/modal.js') }}"></script>
        <script src="{{ asset('theme/dist/js/components/base/theme-color.js') }}"></script>
        <script src="{{ asset('theme/dist/js/components/base/lucide.js') }}"></script>
        <script src="{{ asset('theme/dist/js/components/base/tippy.js') }}"></script>
        <script src="{{ asset('theme/dist/js/themes/hook.js') }}"></script>
        <script src="{{ asset('theme/dist/js/components/quick-search.js') }}"></script> 
    </body>
</html>