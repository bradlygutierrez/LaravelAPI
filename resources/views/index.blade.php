<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-700 antialiased">
    <div class=" container mx-auto px-4">
        <div class="grid grid-cols-3 my-10">
            @foreach ($posts as $post)
                <div class="bg-white hover:bg-blue-100 rounded-lg p-6 m-4 shadow-md">
                    <h2 class="font-bold text-lg mb-4">{{ $post->title }}</h2>
                    <p class="text-xs"> {{ $post->excerpt }}</p>
                    <p class="text-xs text-right"> {{ $post->published_at }}</p>

                </div>

            @endforeach
        </div>

        <div class="mt-6 flex justify-center">
            {{ $posts->links('components.pagination') }}
        </div>
    </div>
</body>

</html>