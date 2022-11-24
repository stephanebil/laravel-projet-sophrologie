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
    <div class="relative">
        @include('partials._navigation')
        {{-- message de confirmation --}}
        <div class=" absolute z-200 mt-32 rounded-lg ml-6 sm:ml-[25%] text-center w-52 bg-green-500 text-green-100">
            {{ Session::get('status') }}
        </div>
    </div>
    
    <div class="flex flex-col ">
        <main className='flex-grow bg-[#fffcfa]'>{{ $slot }}</main>
    </div>
    
    @include('partials._footer')
    @vite('resources/js/app.js')
</body>
</html>