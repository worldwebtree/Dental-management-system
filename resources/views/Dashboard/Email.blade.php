@component('mail::message')

{{ config('mail.from.message') }}

@component('mail::button', ['url' => $url, 'color', 'success'])
Back to Site !
@endcomponent

Thanks,<br>
{{ config('mail.from.name') }}
@endcomponent
