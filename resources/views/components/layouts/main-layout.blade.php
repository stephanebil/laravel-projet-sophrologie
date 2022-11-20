<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- import tailwind --}}
    @vite('resources/css/app.css')
    <title>Valérie Delcourt Sophrologue | {{ $title }}</title>
    {{-- animation --}}
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
    @include('partials._navigation')
    <div class="flex flex-col min-h-screen">
        <main className='flex-grow bg-[#fffcfa]'>{{ $slot }}</main>
    </div>
    
    @include('partials._footer')
    @vite('resources/js/app.js')
</body>
</html>