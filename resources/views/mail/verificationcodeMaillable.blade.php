@component('mail::message')
# Dear {{ ucfirst(session('name')) }},

Thank you for signing up with <b>{{ strtoupper(config('app.name')) }}</b>. Use this code to verify
your email address.

<center>{{ session('emailcode') }}</center>

@component('mail::button', ['url' => '#'])
Call To Action
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
