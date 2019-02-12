@component('mail::message')
# Introduction

There is a new message from {{ $name }}
<p>
{{ $message }}
</p>
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
