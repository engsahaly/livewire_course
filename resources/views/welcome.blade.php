<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="{{ asset('assets') }}/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- @livewireStyles --}}
    <livewire:styles />
</head>

<body class="antialiased">
    {{-- @livewire('test-properties', ['name' => 'Mahmoud'])
        <livewire:test-properties name="Ahmed"> --}}
    {{-- @livewire('inline-comp') --}}
    {{-- <livewire:show-post /> --}}
    {{-- @livewire('test-actions') --}}
    {{-- @livewire('first-event') --}}
    {{-- @livewire('try-hooks') --}}
    {{-- @livewire('parent-component') --}}
    {{-- @livewire('validation-component') --}}
    {{-- @livewire('files-component') --}}
    {{-- @livewire('search-component') --}}
    {{-- @livewire('flash-component') --}}
    {{-- @livewire('loading-component') --}}
    {{-- @livewire('polling-component') --}}
    {{-- @livewire('fetch-component') --}}

    {{-- @livewireScripts --}}
    <livewire:scripts />
    <script>
        // Livewire.on('fire', function() {
        //     alert('A javascript listener for fire event');
        // })
        // window.addEventListener('fire', function() {
        //     alert('This is the second way of receing javascript listener');
        // })
        // Livewire.hook('component.initialized', (component) => {
        //     alert('Hello from javascript hook');
        //     console.log(component.fingerprint['name']);
        // })
    </script>
    <script src="{{ asset('assets') }}/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
