@extends('dashboard.dashboard-inc.app')
@section('content')
    <main class="cirqi">
        <div class="cjlpv c2ksj cxrsk c8syf c96ud cn2cr cxct7">

            <!-- Page header -->
            <div class="cs30q ciipl ccic9 cpti8">

                <!-- Left: Title -->
                <div class="cmrml cjc22">
                    <h1 class="text-slate-800 dark:text-slate-100 font-bold clxpd ctsdk">{{ strtoupper(config('app.name')) }} ✨</h1>
                </div>

                <!-- Right: Actions -->
                <div class="ckj66 c8n67 cosmg caxss cg2lx c3myn">

                    <!-- Datepicker built with flatpickr -->
                    <div class="calrm">
                        <input class="datepicker dark:bg-slate-800 text-slate-500 cy3na c8sur cywsn c9jn2 cz4nn c04hc cwkx2"
                            placeholder="Select dates" data-class="flatpickr-right">
                        <div class="flex items-center pointer-events-none cligw cwxu7 cryht">
                            <svg class="text-slate-500 dark:text-slate-400 ml-3 c7hxs c29x4 cq5uz" viewbox="0 0 16 16">
                                <path
                                    d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <!-- Add account button -->
                    <a class="btn c5e6b cdsge c7qs0" href="#">
                        <svg class="c7hxs c5282 cz1vo c29x4 cq5uz" viewbox="0 0 16 16">
                            <path
                                d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z">
                            </path>
                        </svg>
                        <span class="hidden cwx2v c4j6o">Download App</span>
                    </a>

                </div>

            </div>

            <!-- Cards -->
            <div class="ch27r cgs8f c3myn">

                <!-- Page Intro -->
                <div
                    class="flex bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 c0gox c21iq cic9p">
                    <div class="c7q80 cm12e">

                        <div class="crfvz cx1gu c04br">
                            <!-- Left side -->
                            <div class="flex items-center ck4r4 cjc22">
                                <!-- Avatar -->
                                <div class="mr-4">
                                    <img class="inline-flex rounded-full" src="images/user-64-14.jpg" width="64"
                                        height="64" alt="User">
                                </div>
                                <!-- User info -->
                                <div>
                                    <div class="c3ys4">Hey <strong
                                            class="text-slate-800 dark:text-slate-100 cz4nn">Mary</strong> 👋, this is your
                                        current balance:</div>
                                    <div class="text-3xl font-bold cb1p4">$47,347.09</div>
                                </div>
                            </div>
                            <!-- Right side -->
                            <ul class="flex flex-wrap justify-end ck0jw cflwy cz1vo c6kzm">
                                <li>
                                    <a class="block" href="#0">
                                        <img class="rounded-full cpvr1 cxytf" src="images/company-icon-01.svg"
                                            width="36" height="36" alt="Account 01">
                                    </a>
                                </li>
                                <li>
                                    <a class="block" href="#0">
                                        <img class="rounded-full cpvr1 cxytf" src="images/company-icon-02.svg"
                                            width="36" height="36" alt="Account 02">
                                    </a>
                                </li>
                                <li>
                                    <a class="block" href="#0">
                                        <img class="rounded-full cpvr1 cxytf" src="images/company-icon-03.svg"
                                            width="36" height="36" alt="Account 03">
                                    </a>
                                </li>
                                <li>
                                    <a class="block" href="#0">
                                        <img class="rounded-full cpvr1 cxytf" src="images/company-icon-04.svg"
                                            width="36" height="36" alt="Account 04">
                                    </a>
                                </li>
                                <li>
                                    <button
                                        class="flex justify-center items-center rounded-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-indigo-500 c18nt czq29 ccku6 c64rw cbnz0 cpvr1 cxytf">
                                        <span class="czsjw">Add new user</span>
                                        <svg class="c7hxs c29x4 cq5uz" viewbox="0 0 16 16">
                                            <path
                                                d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z">
                                            </path>
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>





                <!-- Bar chart (Cash Flow) -->
                <div
                    class="flex bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cdpco c0gox c21iq cic9p">
                    <header class="dark:border-slate-700 cktrg cqyqv c7q80 cpnas">
                        <h2 class="text-slate-800 dark:text-slate-100 ca8f5">Activities</h2>
                    </header>
                    <div class="c7q80 cks8x">
                        <div class="flex flex-wrap items-center cc2cs">
                            {{-- <div class="flex items-center">
                            <div class="text-3xl font-bold text-slate-800 dark:text-slate-100 mr-2">$1,347.09</div>
                            <div class="text-sm text-slate-500 dark:text-slate-400">Net</div>
                        </div> --}}
                            <div id="fintech-card-03-legend" class="ca5ph c4j6o cirqi">
                                <ul class="flex flex-wrap justify-end"></ul>
                            </div>
                        </div>
                    </div>
                    <!-- Chart built with Chart.js 3 -->
                    <!-- Check out src/js/fintech-charts.js for config -->
                    <div class="cirqi">
                        <!-- Change the height attribute to adjust the chart height -->
                        {!! $dashboard_statchart->container() !!}
                    </div>
                </div>

                <!-- Horizontal bar chart (Cash Flow by Account) -->
                <!-- Table (Recent Expenses) -->
                <div
                    class="bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 c1p79 c0gox c21iq">
                    <header class="dark:border-slate-700 cktrg cqyqv c7q80 cpnas">
                        <h2 class="text-slate-800 dark:text-slate-100 ca8f5">Recent Expenses</h2>
                    </header>
                    <div class="co6nx">

                        <!-- Table -->
                        <div class="cvh0j">
                            <table class="cywsn czmhm c96ud">
                                <!-- Table header -->
                                <thead class="rounded-sm camw1 cfpks cbrl7 c4cuk clfnu clvip cev1n">
                                    <tr>
                                        <th class="c6dbl cj7ph">
                                            <div class="ca8f5 ckchq">Counterparty</div>
                                        </th>
                                        <th class="c6dbl cj7ph">
                                            <div class="ca8f5 ckchq">Account</div>
                                        </th>
                                        <th class="c6dbl cj7ph">
                                            <div class="ca8f5 ckchq">Date</div>
                                        </th>
                                        <th class="c6dbl cj7ph">
                                            <div class="ca8f5 cyo0j">Amount</div>
                                        </th>
                                    </tr>
                                </thead>
                                <!-- Table body -->
                                <tbody class="text-sm cn6i6 c9op3 cjh4m">
                                    <!-- Row -->
                                    <tr>
                                        <td class="c6dbl cj7ph">
                                            <div class="flex items-center">
                                                <div class="rounded-full mr-2 cdsge cz1vo ckihb">
                                                    <svg class="text-indigo-50 c7hxs cpvr1 cxytf" viewbox="0 0 36 36">
                                                        <path
                                                            d="M24.446 19.335a2.5 2.5 0 00-3.522 3.194c-.845.63-1.87.97-2.924.971a4.979 4.979 0 01-1.113-.135 4.436 4.436 0 01-1.343 1.682 6.91 6.91 0 006.9-1.165 2.5 2.5 0 002-4.547h.002zM20.431 11.938a2.5 2.5 0 10-.4 2.014 5.027 5.027 0 012.723 3.078c.148-.018.297-.028.446-.03a4.5 4.5 0 011.7.334 7.023 7.023 0 00-4.469-5.396zM14.969 20.25a2.49 2.49 0 00-1.932-1.234A4.624 4.624 0 0113 18.5a4.97 4.97 0 011.348-3.391 4.456 4.456 0 01-.788-2.016A6.989 6.989 0 0011 18.5c.003.391.04.781.11 1.166a2.5 2.5 0 103.859.584z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="text-slate-800 dark:text-slate-100 cz4nn">Form Builder CP</div>
                                            </div>
                                        </td>
                                        <td class="c6dbl cj7ph">
                                            <div>Revolut</div>
                                        </td>
                                        <td class="c6dbl cj7ph">
                                            <div>22/01/2022</div>
                                        </td>
                                        <td class="c6dbl cj7ph">
                                            <div class="text-slate-800 dark:text-slate-100 cz4nn cyo0j">-$1,299.22</div>
                                        </td>
                                    </tr>
                                    <!-- Row -->
                                    <tr>
                                        <td class="c6dbl cj7ph">
                                            <div class="flex items-center">
                                                <div class="rounded-full mr-2 bg-slate-900 cz1vo ckihb">
                                                    <svg class="c4cuk c7hxs cpvr1 cxytf" viewbox="0 0 36 36">
                                                        <path
                                                            d="M12.014 25.752v-4.998c.196.42.495.749.896.987s.877.357 1.428.357a3.08 3.08 0 0 0 1.694-.483c.504-.322.9-.789 1.19-1.4.29-.611.434-1.328.434-2.149s-.145-1.535-.434-2.142c-.29-.607-.686-1.071-1.19-1.393a3.08 3.08 0 0 0-1.694-.483c-.55 0-1.027.119-1.428.357a2.21 2.21 0 0 0-.896.987v-1.246H9.256v11.606h2.758Zm1.414-6.062a1.34 1.34 0 0 1-1.022-.434c-.27-.29-.406-.686-.406-1.19 0-.495.135-.887.406-1.176a1.34 1.34 0 0 1 1.022-.434c.43 0 .777.142 1.043.427.266.285.399.679.399 1.183 0 .513-.133.912-.399 1.197-.266.285-.614.427-1.043.427Zm10.108 2.408c.924 0 1.771-.217 2.541-.651a4.8 4.8 0 0 0 1.827-1.813c.448-.775.672-1.647.672-2.618 0-.97-.222-1.843-.665-2.618a4.75 4.75 0 0 0-1.82-1.813 5.113 5.113 0 0 0-2.555-.651c-.924 0-1.773.217-2.548.651a4.786 4.786 0 0 0-1.834 1.813c-.448.775-.672 1.647-.672 2.618 0 .97.224 1.843.672 2.618a4.786 4.786 0 0 0 1.834 1.813 5.125 5.125 0 0 0 2.548.651Zm0-2.562c-.7 0-1.25-.229-1.652-.686-.401-.457-.602-1.069-.602-1.834 0-.784.2-1.402.602-1.855.401-.453.952-.679 1.652-.679s1.248.226 1.645.679c.397.453.595 1.071.595 1.855 0 .765-.2 1.377-.602 1.834-.401.457-.947.686-1.638.686Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="text-slate-800 dark:text-slate-100 cz4nn">PublicOne Inc.</div>
                                            </div>
                                        </td>
                                        <td class="c6dbl cj7ph">
                                            <div>Qonto</div>
                                        </td>
                                        <td class="c6dbl cj7ph">
                                            <div>22/01/2022</div>
                                        </td>
                                        <td class="c6dbl cj7ph">
                                            <div class="text-slate-800 dark:text-slate-100 cz4nn cyo0j">-$272.88</div>
                                        </td>
                                    </tr>
                                    <!-- Row -->
                                    <tr>
                                        <td class="c6dbl cj7ph">
                                            <div class="flex items-center">
                                                <div class="rounded-full mr-2 cc2yu cz1vo ckihb">
                                                    <svg class="cjqkt c7hxs cpvr1 cxytf" viewbox="0 0 36 36">
                                                        <path
                                                            d="M15 17h-3v-5a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v5h-3v-2.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0-.5.5V17Zm10 2a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0v-1H12v1a1 1 0 0 1-2 0v-4a1 1 0 0 1 1-1h14Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="text-slate-800 dark:text-slate-100 cz4nn">Imperial Hotel ****
                                                </div>
                                            </div>
                                        </td>
                                        <td class="c6dbl cj7ph">
                                            <div>Revolut</div>
                                        </td>
                                        <td class="c6dbl cj7ph">
                                            <div>22/01/2022</div>
                                        </td>
                                        <td class="c6dbl cj7ph">
                                            <div class="text-slate-800 dark:text-slate-100 cz4nn cyo0j">-$999.44</div>
                                        </td>
                                    </tr>
                                    <!-- Row -->
                                    <tr>
                                        <td class="c6dbl cj7ph">
                                            <div class="flex items-center">
                                                <div class="rounded-full mr-2 c5lph cz1vo ckihb">
                                                    <svg class="c7hxs cciid cpvr1 cxytf" viewbox="0 0 36 36">
                                                        <path
                                                            d="m26.3 16.1-2.6-.9-1.8-4.6c-.1-.4-.5-.6-.9-.6h-9c-.6 0-1 .4-1 1v12c0 .6.4 1 1 1h3.3c.6 1.2 1.8 2 3.2 2 1.4 0 2.6-.8 3.2-2.1.1 0 .2.1.3.1h4c.6 0 1-.4 1-1v-6c0-.4-.3-.8-.7-.9ZM25 22h-3c-.2-1.7-1.7-3-3.5-3s-3.2 1.3-3.4 3H13V12h7.3l1.7 4.4c.1.3.3.5.6.6l2.4.7V22Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="text-slate-800 dark:text-slate-100 cz4nn">Uber</div>
                                            </div>
                                        </td>
                                        <td class="c6dbl cj7ph">
                                            <div>N26</div>
                                        </td>
                                        <td class="c6dbl cj7ph">
                                            <div>22/01/2022</div>
                                        </td>
                                        <td class="c6dbl cj7ph">
                                            <div class="text-slate-800 dark:text-slate-100 cz4nn cyo0j">-$1,029.77</div>
                                        </td>
                                    </tr>
                                    <!-- Row -->
                                    <tr>
                                        <td class="c6dbl cj7ph">
                                            <div class="flex items-center">
                                                <div class="rounded-full mr-2 cihbl cz1vo ckihb">
                                                    <svg class="c7hxs c7qs0 cpvr1 cxytf" viewbox="0 0 36 36">
                                                        <path
                                                            d="M18 17v2.4h4.1c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C21.6 11.7 20 11 18.1 11c-3.9 0-7 3.1-7 7s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H18Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="text-slate-800 dark:text-slate-100 cz4nn">Google Limited UK
                                                </div>
                                            </div>
                                        </td>
                                        <td class="c6dbl cj7ph">
                                            <div>N26</div>
                                        </td>
                                        <td class="c6dbl cj7ph">
                                            <div>22/01/2022</div>
                                        </td>
                                        <td class="c6dbl cj7ph">
                                            <div class="text-slate-800 dark:text-slate-100 cz4nn cyo0j">-$1,921.26</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                        <div class="dark:border-slate-700 cktrg cd4ca cannk czv4r">
                            <a class="block text-sm text-indigo-500 c4c56 ctd6x cz4nn ctlkf cp5ql" href="#0">View All
                                -&gt;</a>
                        </div>

                    </div>
                </div>




            </div>

        </div>
    </main>

<script src="{{ $dashboard_statchart->cdn() }}"></script>

{{ $dashboard_statchart->script() }}
@endsection
