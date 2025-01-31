<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?? 'Default title' }}</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @endif
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/gitf.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
</head>

<body>
    @include('partials.navigation')
    @session('status')
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endsession
    {{ $slot }}

    @if (isset($sidebar))
        <div id="sidebar">
            <h3>Sidebar</h3>
            <div>{{ $sidebar }}</div>
        </div>
    @endif
</body>

</html>
