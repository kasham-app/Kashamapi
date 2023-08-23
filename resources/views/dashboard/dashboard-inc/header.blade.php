<!DOCTYPE html><html lang="en"><head>
    <meta charset="utf-8">
    <title>@section('title', env('APP_NAME')) @yield('title')</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="{{ asset('user-assets/css/vendors/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user-assets/css/vendors/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user-assets/style.css') }}" rel="stylesheet">
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
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="{{ route('homepage') }}">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">HomePage</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="{{ route('dashboard') }}">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Dashboard</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <!-- Developers -->
                            <li class="rounded-sm cai4l cocs2 c6s7w ctfj7" x-data="{ open: false }">
                                <a class="block cce0w cvkcf ccku6 c64rw chd3l" href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                                    <div class="flex items-center cc2cs">
                                        <div class="flex items-center">
                                            <svg class="cz1vo cf7mc ceup6" viewbox="0 0 24 24">
                                                <path class="c4cuk c7hxs" d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z"></path>
                                                <path class="ccmw1 c7hxs" d="M13 15L0 7v9c0 .355.189.685.496.864L13 24v-9z"></path>
                                                <path class="c24n3 c7hxs" d="M13 15.047V24l10.573-7.181A.999.999 0 0024 16V8l-11 7.047z"></path>
                                            </svg>
                                            <span class="text-sm ml-3 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">API</span>
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
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="{{ route('dashboard.allclient') }}">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Oauth v2.0</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="orders.html">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">developers kit</span>
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
                                            <span class="text-sm ml-3 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Payments</span>
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
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="#">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Received Transactions</span>
                                            </a>
                                        </li>
                                        <li class="cai4l ca5ph">
                                            <a class="block c2qko c4cuk ccku6 c64rw chd3l" href="#">
                                                <span class="text-sm 2xl:opacity-100 cwmrq criah cwrar cl6tz cz4nn">Sent Transactions</span>
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
