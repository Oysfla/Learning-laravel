@component('mail::message')

# Introduction

Thanks so much for registering!

@component('mail::button', ['url' => 'http://127.0.0.1:3232'])

Start Browsing. 

@endcomponent

@component('mail::panel', ['url' => ''])

Lorem ipsum dolar sit amet. 

@endcomponent


Thanks,<br>

{{ config('app.name') }}

@endcomponent
