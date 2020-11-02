Hello {{ $user->name }}

You changed your email address. Please verify this new email address using the link below;

{{ route('verify', $user->verification_token ==null ? 'already-verified':$user->verification_token) }}
