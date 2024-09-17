<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

        @vite('resources/css/app.css')
    </head>
    <body class="font-tajawal">
{{--        {{ $slot }}--}}
{{--<p>Current Language: {{  session()->get('locale') }}</p>--}}
{{--<p>Current Language: {{ app()->getLocale() }}</p>--}}

<livewire:sana-header :selected-nav="$nav"/>
{{ $slot }}
<livewire:sana-footer/>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

    </body>
</html>
