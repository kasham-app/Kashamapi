@extends('dashboard.dashboard-inc.app')
@section('title', 'Create Oauth')
@section('content')

<main class="cirqi">
    <div class="cjlpv c2ksj cxrsk c8syf c96ud cn2cr cxct7">

        <!-- Page header -->
        <div class="c3lv0">

            <!-- Title -->
            <h1 class="text-slate-800 dark:text-slate-100 font-bold clxpd ctsdk">@yield('title') ✨</h1>

        </div>

        <div class="bg-white dark:bg-slate-800 rounded-sm c21iq c3lv0">
            <div class="flex cxy0l clvq4 cic9p">


                <!-- Panel -->
                <div class="cirqi">

                    <!-- Panel body -->
                    <div class="c1dwg c4wiw">
                        <h2 class="text-slate-800 dark:text-slate-100 font-bold ctsdk cpti8">@yield('title')</h2>

                        <!-- Picture -->
                        <section>
                            <div class="flex items-center">
                                {{-- <div class="mr-4">
                                    <img class="rounded-full cea2a ckssj" src="./images/user-avatar-80.png" width="80" height="80" alt="User upload">
                                </div> --}}
                                <span class="c5e6b cdsge c7qs0 cijix">You are on the verge of generating a keypair for third-party access to your account. Please refrain from sharing this key with anyone.</button>

                                @if (session('success'))
                                <span class="c5e6b cdsge c7qs0 cijix">
                                    {{ session('success') }}
                                </button>

                                @endif
                            </div>
                        </section>

                        <form method="POST" action="/oauth/clients">
                            @csrf
                        <!-- Business Profile -->
                        <section>
                            <h3 class="text-slate-800 dark:text-slate-100 font-bold cmklr co3zg ca5ph">@yield('title')</h3>
                            <div class="text-sm">once you create this token, it can be used to grant access to third party services to make request on your behalf.</div>
                            <div class="ciipl cqkpt c1jvo cj3ez ccic9 coxdy">
                                <div class="cmd7e">
                                    <label class="block text-sm cz4nn ca5ph" for="name">Name | Company Name</label>
                                    <input id="name" class="c04hc c96ud" name="name" type="text" placeholder="Codedweb Inc. OR Chris">
                                    @error('name')<div class="c5e6b cdsge c7qs0 cijix">{{ $message }}</div> @enderror
                                </div>
                                <div class="cmd7e">
                                    <label class="block text-sm cz4nn ca5ph" for="business-id">Redirect Url</label>
                                    <input id="business-id" class="c04hc c96ud" name="redirect" type="url" placeholder="https://codedhub.net">
                                    @error('redirect')<div class="c5e6b cdsge c7qs0 cijix">{{ $message }}</div> @enderror
                                </div>
                                <div class="cmd7e">

                                    <input type="hidden" id="location" class="c04hc c96ud" value="{{ Auth::user()->name }}" name="user_id">
                                    <input type="hidden" id="location" class="c04hc c96ud" value="{{ 'users' }}" name="provider">
                                    <input type="hidden" id="location" class="c04hc c96ud" value="{{ 1 }}" name="password_client">
                                </div>
                            </div>
                        </section>


                    </div>

                    <!-- Panel footer -->
                    <footer>
                        <div class="flex border-slate-200 dark:border-slate-700 cic9p cannk cmtd2 c0l7b">
                            <div class="flex cgysv">
                                <a href="{{ route('dashboard.allclient') }}" class="btn dark:bg-slate-800 border-slate-200 dark:border-slate-700 c18nt czq29 cywsn c24n3">Cancel</a>
                                <button type="submit" class="btn ml-3 c5e6b cdsge c7qs0">Save Changes</button>
                            </div>
                        </div>
                    </footer>

                </form>
                </div>

            </div>
        </div>

    </div>
</main>
@endsection
