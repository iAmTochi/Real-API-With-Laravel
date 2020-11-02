@component('mail::message')
# Hello {{ $user->name }}

You changed your email address. Please verify this new email address by clicking the button below:


@component('mail::button', ['url' =>  route('verify', $user->verification_token ==null ? 'already-verified':$user->verification_token)  ])
Verify Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
