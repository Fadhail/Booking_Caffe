<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
            @include('layouts.navigation')           
        {{-- <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main> --}}
        <div class="max-w-screen-md py-12 mx-auto">
            <div
              class="relative flex flex-col mb-12 overflow-hidden text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
              <img alt="nature" class="h-[32rem] w-full object-cover object-center"
                src="https://images.unsplash.com/photo-1485470733090-0aae1788d5af?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2717&amp;q=80" />
            </div>
            <h2
              class="mb-2 block font-sans text-4xl font-semibold leading-[1.3] tracking-normal text-blue-gray-900 antialiased">
              What is Material Tailwind
            </h2>
            <p class="block font-sans text-base antialiased font-normal leading-relaxed text-gray-700">
              Can you help me out? you will get a lot of free exposure doing this
              can my website be in english?. There is too much white space do less
              with more, so that will be a conversation piece can you rework to
              make the pizza look more delicious other agencies charge much lesser
              can you make the blue bluer?. I think we need to start from scratch
              can my website be in english?, yet make it sexy i&apos;ll pay you in
              a week we don&apos;t need to pay upfront i hope you understand can
              you make it stand out more?. Make the font bigger can you help me
              out? you will get a lot of free exposure doing this that&apos;s
              going to be a chunk of change other agencies charge much lesser. Are
              you busy this weekend? I have a new project with a tight deadline
              that&apos;s going to be a chunk of change. There are more projects
              lined up charge extra the next time.
            </p>
          </div>
    </body>
</html>
