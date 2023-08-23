<!DOCTYPE html><html lang="en"><head>
    <meta charset="utf-8">
    <title>@section('title', env('APP_NAME')) @yield('title')</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="{{ asset('admin-assets/css/vendors/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/css/vendors/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/style.css') }}" rel="stylesheet">
    <script>
        if (localStorage.getItem('dark-mode') === 'false' || !('dark-mode' in localStorage)) {
            document.querySelector('html').classList.remove('dark');
            document.querySelector('html').style.colorScheme = 'light';
        } else {
            document.querySelector('html').classList.add('dark');
            document.querySelector('html').style.colorScheme = 'dark';
        }
    </script>
</head>

<body class="dark:text-slate-400 crfg5 c24n3 c4ceu cz2nz cfjjf" :class="{ 'sidebar-expanded': sidebarExpanded }" x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }" x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))">

    <script>
        if (localStorage.getItem('sidebar-expanded') == 'true') {
            document.querySelector('body').classList.add('sidebar-expanded');
        } else {
            document.querySelector('body').classList.remove('sidebar-expanded');
        }
    </script>

    <!-- Page wrapper -->
    <div class="flex cejl6 cix4s">

        <!-- Sidebar -->
        <div class="ce17d">
            <!-- Sidebar backdrop (mobile only) -->
            <div class="bg-slate-900 cw1h6 cn21v cl6tz csc34 ccry3 cryht cl8sr c0uo5" :class="sidebarOpen ? 'c0inn' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak=""></div>

            <!-- Sidebar -->
            <div id="sidebar" class="flex 2xl:!w-64 c30yn cwb6j cfdd9 cnri3 cjsir cazz8 cqm4l cj1np cix4s cof4d cl6tz c58qk cw5sv ch38m cwxu7 cz1vo cic9p cmjch crq08 cjgij c0uo5 cqpb2 cjzon" :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false" @keydown.escape.window="sidebarOpen = false" x-cloak="lg">

                <!-- Sidebar header -->
                <div class="flex cc2cs cv568 cqbif cx8jo">
                    <!-- Close button -->
                    <button class="text-slate-500 c3v5g ccry3" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen">
                        <span class="czsjw">Close sidebar</span>
                        <svg class="c7hxs cf7mc ceup6" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
                        </svg>
                    </button>
                    <!-- Logo -->
                    <a class="block" href="index.html">
                        <svg width="32" height="32" viewbox="0 0 32 32">
                            <defs>
                                <lineargradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%" id="logo-a">
                                    <stop stop-color="#A5B4FC" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#A5B4FC" offset="100%"></stop>
                                </lineargradient>
                                <lineargradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%" id="logo-b">
                                    <stop stop-color="#38BDF8" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#38BDF8" offset="100%"></stop>
                                </lineargradient>
                            </defs>
                            <rect fill="#6366F1" width="32" height="32" rx="16"></rect>
                            <path d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z" fill="#4F46E5"></path>
                            <path d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z" fill="url(#logo-a)"></path>
                            <path d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z" fill="url(#logo-b)"></path>
                        </svg>
                    </a>
                </div>

                <!-- Links -->
                <div class="cmo3i">
                    <!-- Pages group -->
                    <div>
                        <h3 class="text-slate-500 ca8f5 clvip cev1n c543w">
                            <span class="hidden 2xl:hidden cio77 cfj0h cd4ca cdjcj ceup6" aria-hidden="true">•••</span>
                            <span class="2xl:block cfvlm c14am ccry3">Pages</span>
                        </h3>
                        <ul class="ceh8i">
                            <!-- Dashboard -->
                            <li class="rounded-sm bg-slate-900 cai4l cocs2 c6s7w ctfj7" x-data="{ open: true }">
                                <a class="block cvkcf ccku6 c64rw chd3l" href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                                    <div class="flex items-center cc2cs">
                                        <div class="flex items-center">
                                            <svg class="cz1vo cf7mc ceup6" viewbox="0 0 24 24">
                                                <path class="text-indigo-500 c7hxs" d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z"></path>
                                                <path class="text-indigo-600 c7hxs" d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z"></path>
                                                <path class="text-indigo-200 c7hxs" d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z"></path>
                                            </svg>
                                            <span class="text-sm ml-3 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Dashboard</span>
                                        </div>
                                        <!-- Icon -->
                                        <div class="flex 2xl:opacity-100 cwmrq criah cwrar cl6tz cz1vo c4j6o">
                                            <svg class="w-3 h-3 c4cuk c7hxs cz1vo czb9f" :class="open ? 'c6fjp' : 'c4dch'" viewbox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="2xl:block cfvlm c14am ccry3">
                                    <ul class="c318s cwkx2" :class="open ? 'cpgqg' : 'hidden'">
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="index.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Main</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="analytics.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Analytics</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block text-indigo-500 ccku6 c64rw chd3l" href="fintech.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Fintech</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- E-Commerce -->
                            <li class="rounded-sm cai4l cocs2 c6s7w ctfj7" x-data="{ open: false }">
                                <a class="block cce0w cvkcf ccku6 c64rw chd3l" href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                                    <div class="flex items-center cc2cs">
                                        <div class="flex items-center">
                                            <svg class="cz1vo cf7mc ceup6" viewbox="0 0 24 24">
                                                <path class="c4cuk c7hxs" d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z"></path>
                                                <path class="ccmw1 c7hxs" d="M13 15L0 7v9c0 .355.189.685.496.864L13 24v-9z"></path>
                                                <path class="c24n3 c7hxs" d="M13 15.047V24l10.573-7.181A.999.999 0 0024 16V8l-11 7.047z"></path>
                                            </svg>
                                            <span class="text-sm ml-3 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">E-Commerce</span>
                                        </div>
                                        <!-- Icon -->
                                        <div class="flex 2xl:opacity-100 cwmrq criah cwrar cl6tz cz1vo c4j6o">
                                            <svg class="w-3 h-3 c4cuk c7hxs cz1vo czb9f" :class="open ? 'c6fjp' : 'c4dch'" viewbox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="2xl:block cfvlm c14am ccry3">
                                    <ul class="hidden c318s cwkx2" :class="open ? 'cpgqg' : 'hidden'">
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="customers.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Customers</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="orders.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Orders</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="invoices.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Invoices</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="shop.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Shop</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="shop-2.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Shop 2</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="product.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Single Product</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="cart.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Cart</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="cart-2.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Cart 2</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="cart-3.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Cart 3</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="pay.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Pay</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Community -->
                            <li class="rounded-sm cai4l cocs2 c6s7w ctfj7" x-data="{ open: false }">
                                <a class="block cce0w cvkcf ccku6 c64rw chd3l" href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                                    <div class="flex items-center cc2cs">
                                        <div class="flex items-center">
                                            <svg class="cz1vo cf7mc ceup6" viewbox="0 0 24 24">
                                                <path class="c24n3 c7hxs" d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z"></path>
                                                <path class="c4cuk c7hxs" d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z"></path>
                                            </svg>
                                            <span class="text-sm ml-3 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Community</span>
                                        </div>
                                        <!-- Icon -->
                                        <div class="flex 2xl:opacity-100 cwmrq criah cwrar cl6tz cz1vo c4j6o">
                                            <svg class="w-3 h-3 c4cuk c7hxs cz1vo czb9f" :class="open ? 'c6fjp' : 'c4dch'" viewbox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="2xl:block cfvlm c14am ccry3">
                                    <ul class="hidden c318s cwkx2" :class="open ? 'cpgqg' : 'hidden'">
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="users-tabs.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Users - Tabs</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="users-tiles.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Users - Tiles</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="profile.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Profile</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="feed.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Feed</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="forum.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Forum</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="forum-post.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Forum - Post</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="meetups.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Meetups</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="meetups-post.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Meetups - Post</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Finance -->
                            <li class="rounded-sm cai4l cocs2 c6s7w ctfj7" x-data="{ open: false }">
                                <a class="block cce0w cvkcf ccku6 c64rw chd3l" href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                                    <div class="flex items-center cc2cs">
                                        <div class="flex items-center">
                                            <svg class="cz1vo cf7mc ceup6" viewbox="0 0 24 24">
                                                <path class="c4cuk c7hxs" d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z"></path>
                                                <path class="ccmw1 c7hxs" d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z"></path>
                                                <path class="c24n3 c7hxs" d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z"></path>
                                            </svg>
                                            <span class="text-sm ml-3 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Finance</span>
                                        </div>
                                        <!-- Icon -->
                                        <div class="flex 2xl:opacity-100 cwmrq criah cwrar cl6tz cz1vo c4j6o">
                                            <svg class="w-3 h-3 c4cuk c7hxs cz1vo czb9f" :class="open ? 'c6fjp' : 'c4dch'" viewbox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="2xl:block cfvlm c14am ccry3">
                                    <ul class="hidden c318s cwkx2" :class="open ? 'cpgqg' : 'hidden'">
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="credit-cards.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Cards</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="transactions.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Transactions</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="transaction-details.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Transaction Details</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Job Board -->
                            <li class="rounded-sm cai4l cocs2 c6s7w ctfj7" x-data="{ open: false }">
                                <a class="block cce0w cvkcf ccku6 c64rw chd3l" href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                                    <div class="flex items-center cc2cs">
                                        <div class="flex items-center">
                                            <svg class="cz1vo cf7mc ceup6" viewbox="0 0 24 24">
                                                <path class="ccmw1 c7hxs" d="M4.418 19.612A9.092 9.092 0 0 1 2.59 17.03L.475 19.14c-.848.85-.536 2.395.743 3.673a4.413 4.413 0 0 0 1.677 1.082c.253.086.519.131.787.135.45.011.886-.16 1.208-.474L7 21.44a8.962 8.962 0 0 1-2.582-1.828Z"></path>
                                                <path class="c24n3 c7hxs" d="M10.034 13.997a11.011 11.011 0 0 1-2.551-3.862L4.595 13.02a2.513 2.513 0 0 0-.4 2.645 6.668 6.668 0 0 0 1.64 2.532 5.525 5.525 0 0 0 3.643 1.824 2.1 2.1 0 0 0 1.534-.587l2.883-2.882a11.156 11.156 0 0 1-3.861-2.556Z"></path>
                                                <path class="c4cuk c7hxs" d="M21.554 2.471A8.958 8.958 0 0 0 18.167.276a3.105 3.105 0 0 0-3.295.467L9.715 5.888c-1.41 1.408-.665 4.275 1.733 6.668a8.958 8.958 0 0 0 3.387 2.196c.459.157.94.24 1.425.246a2.559 2.559 0 0 0 1.87-.715l5.156-5.146c1.415-1.406.666-4.273-1.732-6.666Zm.318 5.257c-.148.147-.594.2-1.256-.018A7.037 7.037 0 0 1 18.016 6c-1.73-1.728-2.104-3.475-1.73-3.845a.671.671 0 0 1 .465-.129c.27.008.536.057.79.146a7.07 7.07 0 0 1 2.6 1.711c1.73 1.73 2.105 3.472 1.73 3.846Z"></path>
                                            </svg>
                                            <span class="text-sm ml-3 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Job Board</span>
                                        </div>
                                        <!-- Icon -->
                                        <div class="flex 2xl:opacity-100 cwmrq criah cwrar cl6tz cz1vo c4j6o">
                                            <svg class="w-3 h-3 c4cuk c7hxs cz1vo czb9f" :class="open ? 'c6fjp' : 'c4dch'" viewbox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="2xl:block cfvlm c14am ccry3">
                                    <ul class="hidden c318s cwkx2" :class="open ? 'cpgqg' : 'hidden'">
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="job-listing.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Listing</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="job-post.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Job Post</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="company-profile.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Company Profile</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Tasks -->
                            <li class="rounded-sm cai4l cocs2 c6s7w ctfj7" x-data="{ open: false }">
                                <a class="block cce0w cvkcf ccku6 c64rw chd3l" href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                                    <div class="flex items-center cc2cs">
                                        <div class="flex items-center">
                                            <svg class="cz1vo cf7mc ceup6" viewbox="0 0 24 24">
                                                <path class="c24n3 c7hxs" d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z"></path>
                                                <path class="c24n3 c7hxs" d="M1 1h22v23H1z"></path>
                                                <path class="c4cuk c7hxs" d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z"></path>
                                            </svg>
                                            <span class="text-sm ml-3 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Tasks</span>
                                        </div>
                                        <!-- Icon -->
                                        <div class="flex 2xl:opacity-100 cwmrq criah cwrar cl6tz cz1vo c4j6o">
                                            <svg class="w-3 h-3 c4cuk c7hxs cz1vo czb9f" :class="open ? 'c6fjp' : 'c4dch'" viewbox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="2xl:block cfvlm c14am ccry3">
                                    <ul class="hidden c318s cwkx2" :class="open ? 'cpgqg' : 'hidden'">
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="tasks-kanban.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Kanban</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="tasks-list.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">List</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Messages -->
                            <li class="rounded-sm cai4l cocs2 c6s7w ctfj7">
                                <a class="block cce0w cvkcf ccku6 c64rw chd3l" href="messages.html">
                                    <div class="flex items-center cc2cs">
                                        <div class="flex items-center cirqi">
                                            <svg class="cz1vo cf7mc ceup6" viewbox="0 0 24 24">
                                                <path class="c24n3 c7hxs" d="M14.5 7c4.695 0 8.5 3.184 8.5 7.111 0 1.597-.638 3.067-1.7 4.253V23l-4.108-2.148a10 10 0 01-2.692.37c-4.695 0-8.5-3.184-8.5-7.11C6 10.183 9.805 7 14.5 7z"></path>
                                                <path class="c4cuk c7hxs" d="M11 1C5.477 1 1 4.582 1 9c0 1.797.75 3.45 2 4.785V19l4.833-2.416C8.829 16.85 9.892 17 11 17c5.523 0 10-3.582 10-8s-4.477-8-10-8z"></path>
                                            </svg>
                                            <span class="text-sm ml-3 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Messages</span>
                                        </div>
                                        <!-- Badge -->
                                        <div class="flex ca68g c4j6o">
                                            <span class="inline-flex items-center justify-center rounded cdsge cz4nn c7qs0 cev1n czv4r cxjrs">4</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- Inbox -->
                            <li class="rounded-sm cai4l cocs2 c6s7w ctfj7">
                                <a class="block cce0w cvkcf ccku6 c64rw chd3l" href="inbox.html">
                                    <div class="flex items-center">
                                        <svg class="cz1vo cf7mc ceup6" viewbox="0 0 24 24">
                                            <path class="c24n3 c7hxs" d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z"></path>
                                            <path class="c4cuk c7hxs" d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z"></path>
                                        </svg>
                                        <span class="text-sm ml-3 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Inbox</span>
                                    </div>
                                </a>
                            </li>
                            <!-- Calendar -->
                            <li class="rounded-sm cai4l cocs2 c6s7w ctfj7">
                                <a class="block cce0w cvkcf ccku6 c64rw chd3l" href="calendar.html">
                                    <div class="flex items-center">
                                        <svg class="cz1vo cf7mc ceup6" viewbox="0 0 24 24">
                                            <path class="c24n3 c7hxs" d="M1 3h22v20H1z"></path>
                                            <path class="c4cuk c7hxs" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z"></path>
                                        </svg>
                                        <span class="text-sm ml-3 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Calendar</span>
                                    </div>
                                </a>
                            </li>
                            <!-- Campaigns -->
                            <li class="rounded-sm cai4l cocs2 c6s7w ctfj7">
                                <a class="block cce0w cvkcf ccku6 c64rw chd3l" href="campaigns.html">
                                    <div class="flex items-center">
                                        <svg class="cz1vo cf7mc ceup6" viewbox="0 0 24 24">
                                            <path class="c24n3 c7hxs" d="M20 7a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 0120 7zM4 23a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 014 23z"></path>
                                            <path class="c4cuk c7hxs" d="M17 23a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 010-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1zM7 13a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 112 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"></path>
                                        </svg>
                                        <span class="text-sm ml-3 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Campaigns</span>
                                    </div>
                                </a>
                            </li>
                            <!-- Settings -->
                            <li class="rounded-sm cai4l cocs2 c6s7w ctfj7" x-data="{ open: false }">
                                <a class="block cce0w cvkcf ccku6 c64rw chd3l" href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                                    <div class="flex items-center cc2cs">
                                        <div class="flex items-center">
                                            <svg class="cz1vo cf7mc ceup6" viewbox="0 0 24 24">
                                                <path class="c24n3 c7hxs" d="M19.714 14.7l-7.007 7.007-1.414-1.414 7.007-7.007c-.195-.4-.298-.84-.3-1.286a3 3 0 113 3 2.969 2.969 0 01-1.286-.3z"></path>
                                                <path class="c4cuk c7hxs" d="M10.714 18.3c.4-.195.84-.298 1.286-.3a3 3 0 11-3 3c.002-.446.105-.885.3-1.286l-6.007-6.007 1.414-1.414 6.007 6.007z"></path>
                                                <path class="c24n3 c7hxs" d="M5.7 10.714c.195.4.298.84.3 1.286a3 3 0 11-3-3c.446.002.885.105 1.286.3l7.007-7.007 1.414 1.414L5.7 10.714z"></path>
                                                <path class="c4cuk c7hxs" d="M19.707 9.292a3.012 3.012 0 00-1.415 1.415L13.286 5.7c-.4.195-.84.298-1.286.3a3 3 0 113-3 2.969 2.969 0 01-.3 1.286l5.007 5.006z"></path>
                                            </svg>
                                            <span class="text-sm ml-3 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Settings</span>
                                        </div>
                                        <!-- Icon -->
                                        <div class="flex 2xl:opacity-100 cwmrq criah cwrar cl6tz cz1vo c4j6o">
                                            <svg class="w-3 h-3 c4cuk c7hxs cz1vo czb9f" :class="open ? 'c6fjp' : 'c4dch'" viewbox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="2xl:block cfvlm c14am ccry3">
                                    <ul class="hidden c318s cwkx2" :class="open ? 'cpgqg' : 'hidden'">
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="settings.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">My Account</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="notifications.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">My Notifications</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="connected-apps.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Connected Apps</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="plans.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Plans</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="billing.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Billing &amp; Invoices</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="feedback.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Give Feedback</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Utility -->
                            <li class="rounded-sm cai4l cocs2 c6s7w ctfj7" x-data="{ open: false }">
                                <a class="block cce0w cvkcf ccku6 c64rw chd3l" href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                                    <div class="flex items-center cc2cs">
                                        <div class="flex items-center">
                                            <svg class="cz1vo cf7mc ceup6" viewbox="0 0 24 24">
                                                <circle class="c4cuk c7hxs" cx="18.5" cy="5.5" r="4.5"></circle>
                                                <circle class="c24n3 c7hxs" cx="5.5" cy="5.5" r="4.5"></circle>
                                                <circle class="c24n3 c7hxs" cx="18.5" cy="18.5" r="4.5"></circle>
                                                <circle class="c4cuk c7hxs" cx="5.5" cy="18.5" r="4.5"></circle>
                                            </svg>
                                            <span class="text-sm ml-3 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Utility</span>
                                        </div>
                                        <!-- Icon -->
                                        <div class="flex 2xl:opacity-100 cwmrq criah cwrar cl6tz cz1vo c4j6o">
                                            <svg class="w-3 h-3 c4cuk c7hxs cz1vo czb9f" :class="open ? 'c6fjp' : 'c4dch'" viewbox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="2xl:block cfvlm c14am ccry3">
                                    <ul class="hidden c318s cwkx2" :class="open ? 'cpgqg' : 'hidden'">
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="changelog.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Changelog</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="roadmap.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Roadmap</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="faqs.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">FAQs</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="empty-state.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Empty State</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="404.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">404</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="knowledge-base.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Knowledge Base</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- More group -->
                    <div>
                        <h3 class="text-slate-500 ca8f5 clvip cev1n c543w">
                            <span class="hidden 2xl:hidden cio77 cfj0h cd4ca cdjcj ceup6" aria-hidden="true">•••</span>
                            <span class="2xl:block cfvlm c14am ccry3">More</span>
                        </h3>
                        <ul class="ceh8i">
                            <!-- Authentication -->
                            <li class="rounded-sm cai4l cocs2 c6s7w ctfj7" x-data="{ open: false }">
                                <a class="block cce0w cvkcf ccku6 c64rw" :class="open &amp;&amp; 'c2qko'" href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                                    <div class="flex items-center cc2cs">
                                        <div class="flex items-center">
                                            <svg class="cz1vo cf7mc ceup6" viewbox="0 0 24 24">
                                                <path class="c24n3 c7hxs" d="M8.07 16H10V8H8.07a8 8 0 110 8z"></path>
                                                <path class="c4cuk c7hxs" d="M15 12L8 6v5H0v2h8v5z"></path>
                                            </svg>
                                            <span class="text-sm ml-3 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Authentication</span>
                                        </div>
                                        <!-- Icon -->
                                        <div class="flex 2xl:opacity-100 cwmrq criah cwrar cl6tz cz1vo c4j6o">
                                            <svg class="w-3 h-3 c4cuk c7hxs cz1vo czb9f" :class="open ? 'c6fjp' : 'c4dch'" viewbox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="2xl:block cfvlm c14am ccry3">
                                    <ul class="hidden c318s cwkx2" :class="open ? 'cpgqg' : 'hidden'">
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="signin.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Sign In</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="signup.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Sign up</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="reset-password.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Reset Password</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Onboarding -->
                            <li class="rounded-sm cai4l cocs2 c6s7w ctfj7" x-data="{ open: false }">
                                <a class="block cce0w cvkcf ccku6 c64rw" :class="open &amp;&amp; 'c2qko'" href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                                    <div class="flex items-center cc2cs">
                                        <div class="flex items-center">
                                            <svg class="cz1vo cf7mc ceup6" viewbox="0 0 24 24">
                                                <path class="c24n3 c7hxs" d="M19 5h1v14h-2V7.414L5.707 19.707 5 19H4V5h2v11.586L18.293 4.293 19 5Z"></path>
                                                <path class="c4cuk c7hxs" d="M5 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8ZM5 23a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8Z"></path>
                                            </svg>
                                            <span class="text-sm ml-3 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Onboarding</span>
                                        </div>
                                        <!-- Icon -->
                                        <div class="flex 2xl:opacity-100 cwmrq criah cwrar cl6tz cz1vo c4j6o">
                                            <svg class="w-3 h-3 c4cuk c7hxs cz1vo czb9f" :class="open ? 'c6fjp' : 'c4dch'" viewbox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="2xl:block cfvlm c14am ccry3">
                                    <ul class="hidden c318s cwkx2" :class="open ? 'cpgqg' : 'hidden'">
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="onboarding-01.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Step 1</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="onboarding-02.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Step 2</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="onboarding-03.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Step 3</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="onboarding-04.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Step 4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Components -->
                            <li class="rounded-sm cai4l cocs2 c6s7w ctfj7" x-data="{ open: false }">
                                <a class="block cce0w cvkcf ccku6 c64rw" :class="open &amp;&amp; 'c2qko'" href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                                    <div class="flex items-center cc2cs">
                                        <div class="flex items-center">
                                            <svg class="cz1vo cf7mc ceup6" viewbox="0 0 24 24">
                                                <circle class="c24n3 c7hxs" cx="16" cy="8" r="8"></circle>
                                                <circle class="c4cuk c7hxs" cx="8" cy="16" r="8"></circle>
                                            </svg>
                                            <span class="text-sm ml-3 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Components</span>
                                        </div>
                                        <!-- Icon -->
                                        <div class="flex 2xl:opacity-100 cwmrq criah cwrar cl6tz cz1vo c4j6o">
                                            <svg class="w-3 h-3 c4cuk c7hxs cz1vo czb9f" :class="open ? 'c6fjp' : 'c4dch'" viewbox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="2xl:block cfvlm c14am ccry3">
                                    <ul class="hidden c318s cwkx2" :class="open ? 'cpgqg' : 'hidden'">
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="component-button.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Button</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="component-form.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Input Form</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="component-dropdown.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Dropdown</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="component-alert.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Alert &amp; Banner</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="component-modal.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Modal</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="component-pagination.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Pagination</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="component-tabs.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Tabs</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="component-breadcrumb.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Breadcrumb</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="component-badge.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Badge</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="component-avatar.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Avatar</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="component-tooltip.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Tooltip</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="component-accordion.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Accordion</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="component-icons.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Icons</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Expand / collapse button -->
                <div class="hidden 2xl:hidden justify-end cmx4v cfj0h cduev ct88l">
                    <div class="c6s7w ctfj7">
                        <button @click="sidebarExpanded = !sidebarExpanded">
                            <span class="czsjw">Expand / collapse sidebar</span>
                            <svg class="c7jmk c7hxs cf7mc ceup6" viewbox="0 0 24 24">
                                <path class="c4cuk" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z"></path>
                                <path class="c24n3" d="M3 23H1V1h2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Content area -->
        <div class="flex caro7 cukpw calrm cic9p cdy6k">

            <!-- Site header -->
            <header class="bg-white border-slate-200 dark:border-slate-700 cma9g cqyqv cjxzq cjgij cqjq5">
                <div class="c2ksj cxrsk cn2cr">
                    <div class="flex items-center cc2cs cpjdt cwdma">

                        <!-- Header: Left side -->
                        <div class="flex">
                            <!-- Hamburger button -->
                            <button class="text-slate-500 c8sur ccry3" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen">
                                <span class="czsjw">Open sidebar</span>
                                <svg class="c7hxs cf7mc ceup6" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="4" y="5" width="16" height="2"></rect>
                                    <rect x="4" y="11" width="16" height="2"></rect>
                                    <rect x="4" y="17" width="16" height="2"></rect>
                                </svg>
                            </button>

                        </div>

                        <!-- Header: Right side -->
                        <div class="flex items-center c7zsv">

                            <!-- Search button -->
                            <div x-data="{ searchOpen: false }">
                                <!-- Button -->
                                <button class="flex items-center justify-center rounded-full cx7uh cav4d cbrl7 c4ceu cr790 cesa3" :class="{ 'cok8r': searchOpen }" @click.prevent="searchOpen = true;if (searchOpen) $nextTick(()=>{$refs.searchInput.focus()});" aria-controls="search-modal">
                                    <span class="czsjw">Search</span>
                                    <svg class="c29x4 cq5uz" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path class="text-slate-500 dark:text-slate-400 c7hxs" d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                        <path class="camw1 c4cuk c7hxs" d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                    </svg>
                                </button>
                                <!-- Modal backdrop -->
                                <div class="bg-slate-900 cw1h6 cn21v cryht cl8sr cmayk" x-show="searchOpen" x-transition:enter="c64rw cuqwi cl6tz" x-transition:enter-start="opacity-0" x-transition:enter-end="c0inn" x-transition:leave="c64rw cuqwi ctadz" x-transition:leave-start="c0inn" x-transition:leave-end="opacity-0" aria-hidden="true" x-cloak=""></div>
                                <!-- Modal dialog -->
                                <div id="search-modal" class="flex justify-center cejl6 cvtpv c2ksj cryht ccfek cl8sr cmayk cjc22 cn2cr" role="dialog" aria-modal="true" x-show="searchOpen" x-transition:enter="c64rw cw5sv cl6tz" x-transition:enter-start="opacity-0 c1x7j" x-transition:enter-end="c0inn csmxb" x-transition:leave="c64rw cw5sv cl6tz" x-transition:leave-start="c0inn csmxb" x-transition:leave-end="opacity-0 c1x7j" x-cloak="">
                                    <div class="bg-white dark:bg-slate-800 border dark:border-slate-700 rounded cpxun cm7c4 c5gd2 cokt6 c21iq c96ud" @click.outside="searchOpen = false" @keydown.escape.window="searchOpen = false">
                                        <!-- Search form -->
                                        <form class="border-slate-200 dark:border-slate-700 cqyqv">
                                            <div class="calrm">
                                                <label for="modal-search" class="czsjw">Search</label>
                                                <input id="modal-search" class="bg-white dark:bg-slate-800 cqyeu cw2h7 cnduz cywsn c1eij c530q c96ud chua1 cks8x c7wp5" type="search" placeholder="Search Anything…" x-ref="searchInput">
                                                <button class="cligw cwxu7 cryht cdqk7" type="submit" aria-label="Search">
                                                    <svg class="mr-2 cpmdq cnvcu camw1 c4cuk c7hxs cz1vo cs7wd c29x4 cq5uz" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                                        <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </form>
                                        <div class="czv4r cpnas">
                                            <!-- Recent searches -->
                                            <div class="cai4l cm3dd">
                                                <div class="camw1 c4cuk ca8f5 clvip cev1n c3ys4 czv4r">Recent searches</div>
                                                <ul class="text-sm">
                                                    <li>
                                                        <a class="flex items-center text-slate-800 dark:text-slate-100 rounded csant cce0w cdqk7 cj7ph" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="cmpxa cjodq camw1 c4cuk c7hxs cz1vo c5huv c29x4 cq5uz" viewbox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg>
                                                            <span>Form Builder - 23 hours on-demand video</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center text-slate-800 dark:text-slate-100 rounded csant cce0w cdqk7 cj7ph" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="cmpxa cjodq camw1 c4cuk c7hxs cz1vo c5huv c29x4 cq5uz" viewbox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg>
                                                            <span>Access Mosaic on mobile and TV</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center text-slate-800 dark:text-slate-100 rounded csant cce0w cdqk7 cj7ph" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="cmpxa cjodq camw1 c4cuk c7hxs cz1vo c5huv c29x4 cq5uz" viewbox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg>
                                                            <span>Product Update - Q4 2021</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center text-slate-800 dark:text-slate-100 rounded csant cce0w cdqk7 cj7ph" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="cmpxa cjodq camw1 c4cuk c7hxs cz1vo c5huv c29x4 cq5uz" viewbox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg>
                                                            <span>Master Digital Marketing Strategy course</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center text-slate-800 dark:text-slate-100 rounded csant cce0w cdqk7 cj7ph" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="cmpxa cjodq camw1 c4cuk c7hxs cz1vo c5huv c29x4 cq5uz" viewbox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg>
                                                            <span>Dedicated forms for products</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center text-slate-800 dark:text-slate-100 rounded csant cce0w cdqk7 cj7ph" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="cmpxa cjodq camw1 c4cuk c7hxs cz1vo c5huv c29x4 cq5uz" viewbox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg>
                                                            <span>Product Update - Q4 2021</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Recent pages -->
                                            <div class="cai4l cm3dd">
                                                <div class="camw1 c4cuk ca8f5 clvip cev1n c3ys4 czv4r">Recent pages</div>
                                                <ul class="text-sm">
                                                    <li>
                                                        <a class="flex items-center text-slate-800 dark:text-slate-100 rounded csant cce0w cdqk7 cj7ph" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="cmpxa cjodq camw1 c4cuk c7hxs cz1vo c5huv c29x4 cq5uz" viewbox="0 0 16 16">
                                                                <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z"></path>
                                                            </svg>
                                                            <span><span class="cz4nn">Messages</span> - <span class="dark:text-slate-400 cjodq c24n3">Conversation / … / Mike Mills</span></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center text-slate-800 dark:text-slate-100 rounded csant cce0w cdqk7 cj7ph" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="cmpxa cjodq camw1 c4cuk c7hxs cz1vo c5huv c29x4 cq5uz" viewbox="0 0 16 16">
                                                                <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z"></path>
                                                            </svg>
                                                            <span><span class="cz4nn">Messages</span> - <span class="dark:text-slate-400 cjodq c24n3">Conversation / … / Eva Patrick</span></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Notifications button -->
                            <div class="inline-flex calrm" x-data="{ open: false }">
                                <button class="flex items-center justify-center rounded-full cx7uh cav4d cbrl7 c4ceu cr790 cesa3" :class="{ 'cok8r': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                    <span class="czsjw">Notifications</span>
                                    <svg class="c29x4 cq5uz" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path class="text-slate-500 dark:text-slate-400 c7hxs" d="M6.5 0C2.91 0 0 2.462 0 5.5c0 1.075.37 2.074 1 2.922V12l2.699-1.542A7.454 7.454 0 006.5 11c3.59 0 6.5-2.462 6.5-5.5S10.09 0 6.5 0z"></path>
                                        <path class="camw1 c4cuk c7hxs" d="M16 9.5c0-.987-.429-1.897-1.147-2.639C14.124 10.348 10.66 13 6.5 13c-.103 0-.202-.018-.305-.021C7.231 13.617 8.556 14 10 14c.449 0 .886-.04 1.307-.11L15 16v-4h-.012C15.627 11.285 16 10.425 16 9.5z"></path>
                                    </svg>
                                    <div class="rounded-full c9vxs csmag cs9rh cwxu7 cvb0b chcol cby1i cemou cjgij"></div>
                                </button>
                                <div class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded c5rkx cejl6 c21iq cwxu7 cnxcq cif1s cy4q1 chcol cl7jd cwiar cp2fw c318s" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="c64rw cuqwi cl6tz cvn01" x-transition:enter-start="opacity-0 c1fzx" x-transition:enter-end="c0inn csmxb" x-transition:leave="c64rw cuqwi cl6tz" x-transition:leave-start="c0inn" x-transition:leave-end="opacity-0" x-cloak="">
                                    <div class="camw1 c4cuk ca8f5 clvip cntti cev1n cn2cr cerq8">Notifications</div>
                                    <ul>
                                        <li class="border-slate-200 dark:border-slate-700 ccjsc cqyqv">
                                            <a class="block cs8md c1g2r cn2cr ctfj7" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                                <span class="block text-sm c3ys4">📣 <span class="text-slate-800 dark:text-slate-100 cz4nn">Edit your information in a swipe</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                                                <span class="block camw1 c4cuk cz4nn cev1n">Feb 12, 2021</span>
                                            </a>
                                        </li>
                                        <li class="border-slate-200 dark:border-slate-700 ccjsc cqyqv">
                                            <a class="block cs8md c1g2r cn2cr ctfj7" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                                <span class="block text-sm c3ys4">📣 <span class="text-slate-800 dark:text-slate-100 cz4nn">Edit your information in a swipe</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                                                <span class="block camw1 c4cuk cz4nn cev1n">Feb 9, 2021</span>
                                            </a>
                                        </li>
                                        <li class="border-slate-200 dark:border-slate-700 ccjsc cqyqv">
                                            <a class="block cs8md c1g2r cn2cr ctfj7" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                                <span class="block text-sm c3ys4">🚀<span class="text-slate-800 dark:text-slate-100 cz4nn">Say goodbye to paper receipts!</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                                                <span class="block camw1 c4cuk cz4nn cev1n">Jan 24, 2020</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Info button -->
                            <div class="inline-flex calrm" x-data="{ open: false }">
                                <button class="flex items-center justify-center rounded-full cx7uh cav4d cbrl7 c4ceu cr790 cesa3" :class="{ 'cok8r': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                    <span class="czsjw">Info</span>
                                    <svg class="c29x4 cq5uz" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path class="text-slate-500 dark:text-slate-400 c7hxs" d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                </button>
                                <div class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded c5rkx cejl6 c21iq cwxu7 cnxcq c7d6t chcol cl7jd cp2fw c318s" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="c64rw cuqwi cl6tz cvn01" x-transition:enter-start="opacity-0 c1fzx" x-transition:enter-end="c0inn csmxb" x-transition:leave="c64rw cuqwi cl6tz" x-transition:leave-start="c0inn" x-transition:leave-end="opacity-0" x-cloak="">
                                    <div class="camw1 c4cuk ca8f5 clvip cntti cev1n c6s7w cerq8">Need help?</div>
                                    <ul>
                                        <li>
                                            <a class="text-sm text-indigo-500 flex items-center c4c56 ctd6x cz4nn c6s7w cwkie" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                                <svg class="w-3 h-3 text-indigo-300 mr-2 cdfkr c7hxs cz1vo" viewbox="0 0 12 12">
                                                    <rect y="3" width="12" height="9" rx="1"></rect>
                                                    <path d="M2 0h8v2H2z"></path>
                                                </svg>
                                                <span>Documentation</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-sm text-indigo-500 flex items-center c4c56 ctd6x cz4nn c6s7w cwkie" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                                <svg class="w-3 h-3 text-indigo-300 mr-2 cdfkr c7hxs cz1vo" viewbox="0 0 12 12">
                                                    <path d="M10.5 0h-9A1.5 1.5 0 000 1.5v9A1.5 1.5 0 001.5 12h9a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0010.5 0zM10 7L8.207 5.207l-3 3-1.414-1.414 3-3L5 2h5v5z"></path>
                                                </svg>
                                                <span>Support Site</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-sm text-indigo-500 flex items-center c4c56 ctd6x cz4nn c6s7w cwkie" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                                <svg class="w-3 h-3 text-indigo-300 mr-2 cdfkr c7hxs cz1vo" viewbox="0 0 12 12">
                                                    <path d="M11.854.146a.5.5 0 00-.525-.116l-11 4a.5.5 0 00-.015.934l4.8 1.921 1.921 4.8A.5.5 0 007.5 12h.008a.5.5 0 00.462-.329l4-11a.5.5 0 00-.116-.525z"></path>
                                                </svg>
                                                <span>Contact us</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Dark mode toggle -->
                            <div>
                                <input type="checkbox" name="light-switch" id="light-switch" class="light-switch czsjw">
                                <label class="flex items-center justify-center rounded-full cx7uh cav4d cbrl7 czxms c4ceu cr790 cesa3" for="light-switch">
                                    <svg class="czbde c29x4 cq5uz" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path class="c4cuk c7hxs" d="M7 0h2v2H7V0Zm5.88 1.637 1.414 1.415-1.415 1.413-1.414-1.414 1.415-1.414ZM14 7h2v2h-2V7Zm-1.05 7.433-1.415-1.414 1.414-1.414 1.415 1.413-1.414 1.415ZM7 14h2v2H7v-2Zm-4.02.363L1.566 12.95l1.415-1.414 1.414 1.415-1.415 1.413ZM0 7h2v2H0V7Zm3.05-5.293L4.465 3.12 3.05 4.535 1.636 3.121 3.05 1.707Z"></path>
                                        <path class="text-slate-500 c7hxs" d="M8 4C5.8 4 4 5.8 4 8s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4Z"></path>
                                    </svg>
                                    <svg class="hidden czqpa c29x4 cq5uz" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path class="c4cuk c7hxs" d="M6.2 2C3.2 2.8 1 5.6 1 8.9 1 12.8 4.2 16 8.1 16c3.3 0 6-2.2 6.9-5.2C9.7 12.2 4.8 7.3 6.2 2Z"></path>
                                        <path class="text-slate-500 c7hxs" d="M12.5 6a.625.625 0 0 1-.625-.625 1.252 1.252 0 0 0-1.25-1.25.625.625 0 1 1 0-1.25 1.252 1.252 0 0 0 1.25-1.25.625.625 0 1 1 1.25 0c.001.69.56 1.249 1.25 1.25a.625.625 0 1 1 0 1.25c-.69.001-1.249.56-1.25 1.25A.625.625 0 0 1 12.5 6Z"></path>
                                    </svg>
                                    <span class="czsjw">Switch to light / dark version</span>
                                </label>
                            </div>

                            <!-- Divider -->
                            <hr class="cbrl7 cok8r cfzy4 cyb0x cf7mc">

                            <!-- User button -->
                            <div class="inline-flex calrm" x-data="{ open: false }">
                                <button class="inline-flex justify-center items-center cdqk7" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                    <img class="rounded-full cr790 cesa3" src="images/user-avatar-32.png" width="32" height="32" alt="User">
                                    <div class="flex items-center chd3l">
                                        <span class="text-sm c5y01 c801e cywsn cz4nn chd3l c4j6o">Acme Inc.</span>
                                        <svg class="w-3 h-3 c4cuk c7hxs cz1vo czb9f" viewbox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </button>
                                <div class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded c5rkx cejl6 c21iq cwxu7 cnxcq c7d6t chcol cl7jd cp2fw c318s" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="c64rw cuqwi cl6tz cvn01" x-transition:enter-start="opacity-0 c1fzx" x-transition:enter-end="c0inn csmxb" x-transition:leave="c64rw cuqwi cl6tz" x-transition:leave-start="c0inn" x-transition:leave-end="opacity-0" x-cloak="">
                                    <div class="border-slate-200 dark:border-slate-700 cqyqv c2mml ca5ph c6s7w cerq8">
                                        <div class="text-slate-800 dark:text-slate-100 cz4nn">Acme Inc.</div>
                                        <div class="text-slate-500 dark:text-slate-400 cev1n czskp">Administrator</div>
                                    </div>
                                    <ul>
                                        <li>
                                            <a class="text-sm text-indigo-500 flex items-center c4c56 ctd6x cz4nn c6s7w cwkie" href="settings.html" @click="open = false" @focus="open = true" @focusout="open = false">Settings</a>
                                        </li>
                                        <li>
                                            <a class="text-sm text-indigo-500 flex items-center c4c56 ctd6x cz4nn c6s7w cwkie" href="signin.html" @click="open = false" @focus="open = true" @focusout="open = false">Sign Out</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </header>
