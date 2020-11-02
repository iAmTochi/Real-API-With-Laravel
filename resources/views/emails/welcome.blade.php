@component('mail::message')
# Hello {{ $user->name }}

Thank you for creating an account. Please verify your email address using the button below:


@component('mail::button', ['url' =>  route('verify', $user->verification_token ==null ? 'already-verified':$user->verification_token)  ])
Verify Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
