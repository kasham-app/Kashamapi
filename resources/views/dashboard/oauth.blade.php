@extends('dashboard.dashboard-inc.app')
@section('title', "OAUTH PANEL")
@section('content')


<main class="cirqi">
    <div class="cjlpv c2ksj cxrsk c8syf c96ud cn2cr cxct7">

        <!-- Page header -->
        <div class="cs30q ciipl ccic9 c3lv0">

            <!-- Left: Title -->
            <div class="cmrml cjc22">
                <h1 class="text-slate-800 dark:text-slate-100 font-bold clxpd ctsdk">@yield('title') ✨</h1>
            </div>

            <!-- Right: Actions -->
            <div class="ckj66 c8n67 cosmg caxss cg2lx c3myn">

                <!-- Delete button -->
                <div class="table-items-action hidden">
                    <div class="flex items-center">
                        <div class="hidden text-sm mr-2 c6dbl caoys czskp"><span class="table-items-count"></span> items selected</div>
                        <button class="btn bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 c18nt czq29 ciajw">Delete</button>
                    </div>
                </div>

                <!-- Dropdown -->
                <div class="calrm" x-data="{ open: false, selected: 2 }">
                    <button class="btn bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-500 c18nt cy3na czq29 c8sur cywsn cc2cs c7d6t" aria-label="Select date range" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                        <span class="flex items-center">
                            <svg class="text-slate-500 dark:text-slate-400 mr-2 c7hxs cz1vo c29x4 cq5uz" viewBox="0 0 16 16">
                                <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
                            </svg>
                            <span x-text="$refs.options.children[selected].children[1].innerHTML"></span>
                        </span>
                        <svg class="c4cuk c7hxs cz1vo czb9f" width="11" height="7" viewBox="0 0 11 7">
                            <path d="M5.4 6.8L0 1.4 1.4 0l4 4 4-4 1.4 1.4z"></path>
                        </svg>
                    </button>
                    <div class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded cejl6 c21iq cwxu7 cnxcq chcol cl7jd c96ud cp2fw c318s" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="c64rw cuqwi ctadz cvn01" x-transition:enter-start="opacity-0 c1fzx" x-transition:enter-end="c0inn csmxb" x-transition:leave="c64rw cuqwi ctadz" x-transition:leave-start="c0inn" x-transition:leave-end="opacity-0" x-cloak="">
                        <div class="text-sm cywsn c24n3 cz4nn" x-ref="options">
                            <button tabindex="0" class="flex items-center cma30 c1g2r czxms c96ud c6s7w cwkie" :class="selected === 0 &amp;&amp; 'text-indigo-500'" @click="selected = 0;open = false" @focus="open = true" @focusout="open = false">
                                <svg class="mr-2 text-indigo-500 c7hxs cz1vo" :class="selected !== 0 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                    <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                </svg>
                                <span>Today</span>
                            </button>
                            <button tabindex="0" class="flex items-center cma30 c1g2r czxms c96ud c6s7w cwkie" :class="selected === 1 &amp;&amp; 'text-indigo-500'" @click="selected = 1;open = false" @focus="open = true" @focusout="open = false">
                                <svg class="mr-2 text-indigo-500 c7hxs cz1vo" :class="selected !== 1 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                    <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                </svg>
                                <span>Last 7 Days</span>
                            </button>
                            <button tabindex="0" class="flex items-center cma30 c1g2r czxms c96ud c6s7w cwkie" :class="selected === 2 &amp;&amp; 'text-indigo-500'" @click="selected = 2;open = false" @focus="open = true" @focusout="open = false">
                                <svg class="mr-2 text-indigo-500 c7hxs cz1vo" :class="selected !== 2 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                    <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                </svg>
                                <span>Last Month</span>
                            </button>
                            <button tabindex="0" class="flex items-center cma30 c1g2r czxms c96ud c6s7w cwkie" :class="selected === 3 &amp;&amp; 'text-indigo-500'" @click="selected = 3;open = false" @focus="open = true" @focusout="open = false">
                                <svg class="mr-2 text-indigo-500 c7hxs cz1vo" :class="selected !== 3 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                    <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                </svg>
                                <span>Last 12 Months</span>
                            </button>
                            <button tabindex="0" class="flex items-center cma30 c1g2r czxms c96ud c6s7w cwkie" :class="selected === 4 &amp;&amp; 'text-indigo-500'" @click="selected = 4;open = false" @focus="open = true" @focusout="open = false">
                                <svg class="mr-2 text-indigo-500 c7hxs cz1vo" :class="selected !== 4 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                    <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                </svg>
                                <span>All Time</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Filter button -->
                <div class="inline-flex calrm">
                    <button class="btn bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 c18nt cwg5b czq29 c8sur">
                        <span class="czsjw">Filter</span><wbr>
                        <svg class="c7hxs c29x4 cq5uz" viewBox="0 0 16 16">
                            <path d="M9 15H7a1 1 0 010-2h2a1 1 0 010 2zM11 11H5a1 1 0 010-2h6a1 1 0 010 2zM13 7H3a1 1 0 010-2h10a1 1 0 010 2zM15 3H1a1 1 0 010-2h14a1 1 0 010 2z"></path>
                        </svg>
                    </button>
                </div>

                <!-- Add order button -->
                <button class="btn c5e6b cdsge c7qs0">
                    <svg class="c7hxs c5282 cz1vo c29x4 cq5uz" viewBox="0 0 16 16">
                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                    </svg>
                    <a  href="{{ route('dashboard.registeroauth') }}" class="hidden cwx2v c4j6o">Add Order</a>
                </button>

            </div>

        </div>

        <!-- Table -->
        <div class="bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 c21iq c3lv0">
            <header class="c7q80 cpnas">
                <h2 class="text-slate-800 dark:text-slate-100 ca8f5">@yield('title') <span class="camw1 c4cuk cz4nn"> ( {{ $client_count }} )</span></h2>
            </header>
            <div x-data="handleSelect">

                <!-- Table -->
                <div class="cvh0j">
                    <table class="cn6i6 cywsn c4idw czmhm cjh4m c96ud">
                        <!-- Table header -->
                        <thead class="text-slate-500 dark:text-slate-400 border-slate-200 dark:border-slate-700 cx7ad clfnu clvip cannk cev1n">
                            <tr>
                                <th class="c6dbl ceem3 c1ctz cyb0x czv4r cks8x">
                                    <div class="flex items-center">
                                        <label class="inline-flex">
                                            <span class="czsjw">Select all</span>
                                            <input id="parent-checkbox" class="c6i33" type="checkbox" @click="toggleAll">
                                        </label>
                                    </div>
                                </th>
                                <th class="c6dbl ceem3 c1ctz czv4r cks8x">
                                    <div class="ca8f5 ckchq">Issued To</div>
                                </th>
                                <th class="c6dbl ceem3 c1ctz czv4r cks8x">
                                    <div class="ca8f5 ckchq">Client Secreet</div>
                                </th>
                                <th class="c6dbl ceem3 c1ctz czv4r cks8x">
                                    <div class="ca8f5 ckchq">Client ID</div>
                                </th>
                                <th class="c6dbl ceem3 c1ctz czv4r cks8x">
                                    <div class="ca8f5 ckchq">Redirect Url</div>
                                </th>
                                <th class="c6dbl ceem3 c1ctz czv4r cks8x">
                                    <div class="ca8f5 ckchq">Personal Client</div>
                                </th>
                                <th class="c6dbl ceem3 c1ctz czv4r cks8x">
                                    <div class="ca8f5 ckchq">Password Client</div>
                                </th>
                                <th class="c6dbl ceem3 c1ctz czv4r cks8x">
                                    <div class="ca8f5">Revoked</div>
                                </th>
                                <th class="c6dbl ceem3 c1ctz czv4r cks8x">
                                    <div class="ca8f5 ckchq">Date Created</div>
                                </th>
                                <th class="c6dbl ceem3 c1ctz czv4r cks8x">
                                    <div class="ca8f5 ckchq">Permissions</div>
                                </th>
                                <th class="c6dbl ceem3 c1ctz czv4r cks8x">
                                    <div class="ca8f5 ckchq">Actions</div>
                                </th>
                            </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody class="text-sm" x-data="{ open: false }">
                            <!-- Row -->


                            @forelse ($clients as $client)
                            <tr>
                                <td class="c6dbl ceem3 c1ctz cyb0x czv4r cks8x">
                                    <div class="flex items-center">
                                        <label class="inline-flex">
                                            <span class="czsjw">Select</span>
                                            <input class="table-item c6i33" type="checkbox" @click="uncheckParent">
                                        </label>
                                    </div>
                                </td>
                                <td class="c6dbl ceem3 c1ctz czv4r cks8x">
                                    <div class="flex items-center text-slate-800">
                                        {{-- <div class="flex items-center justify-center rounded-full mr-2 cbrl7 c4ceu cz1vo ckihb cgsvx c00j7">
                                            <img class="czb9f" src="./images/icon-01.svg" width="20" height="20" alt="Icon 01">
                                        </div> --}}
                                        <div class="c1yjl cz4nn">{{ ucfirst($client->name) }}</div>
                                    </div>
                                </td>
                                <td class="c6dbl ceem3 c1ctz czv4r cks8x">
                                    <div>{{ $client->secret }}</div>
                                </td>
                                <td class="c6dbl ceem3 c1ctz czv4r cks8x">
                                    <div class="text-slate-800 dark:text-slate-100 cz4nn">{{ $client->id }}</div>
                                </td>
                                <td class="c6dbl ceem3 c1ctz czv4r cks8x">
                                    <div class="cb1p4 cz4nn ckchq">{{ $client->redirect }}</div>
                                </td>
                                <td class="c6dbl ceem3 c1ctz czv4r cks8x">
                                    <div class="inline-flex rounded-full ctq14 cfrbp cifh5 ctpmn cd4ca cz4nn c60df c0b60">{{ $client->personal_access_client == true ? 'NO' : 'YES' }}</div>
                                </td>
                                <td class="c6dbl ceem3 c1ctz czv4r cks8x">
                                    <div class="cd4ca">{{ $client->password_client == true ? 'NO' : 'YES' }}</div>
                                </td>
                                <td class="c6dbl ceem3 c1ctz czv4r cks8x">
                                    <div class="ckchq">{{ $client->revoked == true ? 'Revoked' : 'Not Revoked' }}</div>
                                </td>
                                <td class="c6dbl ceem3 c1ctz czv4r cks8x">
                                    <div class="flex items-center">
                                        <svg class="mr-2 camw1 c4cuk c7hxs cz1vo c29x4 cq5uz" viewBox="0 0 16 16">
                                            <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"></path>
                                        </svg>
                                        <div>{{ $client->created_at }}</div>
                                    </div>
                                </td>
                                <td class="c6dbl ceem3 c1ctz czv4r cks8x">
                                    <div class="ckchq">
                                        Read,Write,view
                                    </div>
                                </td>
                                <td class="c6dbl ceem3 c1ctz cyb0x czv4r cks8x">
                                    <div class="flex items-center">
                                        <button class="cccp8 c3d0i camw1 c4cuk cvn01" :class="{ 'c6fjp': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-01">
                                            <span class="czsjw">Menu</span>
                                            <svg class="c7hxs cr790 cesa3" viewBox="0 0 32 32">
                                                <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @empty

                            @endforelse

                            <!--
                            Example of content revealing when clicking the button on the right side:
                            Note that you must set a "colspan" attribute on the <td> element,
                            and it should match the number of columns in your table
                            -->
                            <tr id="description-01" role="region" x-show="open" x-cloak="">
                                <td colspan="10" class="ceem3 c1ctz czv4r cks8x">
                                    <div class="flex items-center dark:text-slate-400 cfjk5 clfnu cedup co6nx">
                                        <a href="" class="btn btn-sm btn-danger">Delete</a><br />
                                        <a href="" class="btn btn-sm btn-info">Revoke</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>


                    </table>

                </div>
            </div>
        </div>
        <script>
            // A basic demo function to handle "select all" functionality
            document.addEventListener('alpine:init', () => {
                Alpine.data('handleSelect', () => ({
                    selectall: false,
                    selectAction() {
                        countEl = document.querySelector('.table-items-action');
                        if (!countEl) return;
                        checkboxes = document.querySelectorAll('input.table-item:checked');
                        document.querySelector('.table-items-count').innerHTML = checkboxes.length;
                        if (checkboxes.length > 0) {
                            countEl.classList.remove('hidden');
                        } else {
                            countEl.classList.add('hidden');
                        }
                    },
                    toggleAll() {
                        this.selectall = !this.selectall;
                        checkboxes = document.querySelectorAll('input.table-item');
                        [...checkboxes].map((el) => {
                            el.checked = this.selectall;
                        });
                        this.selectAction();
                    },
                    uncheckParent() {
                        this.selectall = false;
                        document.getElementById('parent-checkbox').checked = false;
                        this.selectAction();
                    }
                }))
            })
        </script>

        <!-- Pagination -->
        <div class="flex cs30q ciipl c6gbs cic9p">
            <nav class="c7np6 cmrml cjc22" role="navigation" aria-label="Navigation">
                <ul class="flex justify-center">
                    <li class="ml-3 cs3mj">
                        <span class="btn bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 cz6w8 c4d6r">&lt;- Previous</span>
                    </li>
                    <li class="ml-3 cs3mj">
                        <a class="btn bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-indigo-500 c18nt czq29" href="#0">Next -&gt;</a>
                    </li>
                </ul>
            </nav>
            <div class="text-sm text-slate-500 dark:text-slate-400 clig7 cd4ca">
                Showing <span class="cywsn c24n3 cz4nn">1</span> to <span class="cywsn c24n3 cz4nn">10</span> of <span class="cywsn c24n3 cz4nn">467</span> results
            </div>
        </div>

    </div>
</main>





@endsection
