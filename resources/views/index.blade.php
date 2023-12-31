<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CAFFELOKA | Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
  <div class="-m-6 max-h-[768px] w-[calc(100%+48px)] overflow-scroll">
    <nav
      class="sticky top-0 z-10 block w-full max-w-full px-4 py-2 text-white bg-white border rounded-none shadow-md h-max border-white/80 bg-opacity-80 backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-4">
      <div class="flex items-center justify-between text-">
        <a href="#"
          class="mr-4 block cursor-pointer py-1.5 font-sans text-black text-base font-medium leading-relaxed text-inherit antialiased">
        </a>
        <div class="flex items-center gap-4">
          <div class="hidden mr-4 lg:block">
            
          </div>
          @if (Route::has('login'))
          <div class="flex items-center gap-x-1">
            <a href="{{ route('login') }}">
            <button
              class="hidden px-4 py-2 font-sans text-xs font-bold text-center text-gray-900 uppercase align-middle transition-all rounded-lg select-none hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:inline-block"
              type="button">
              Log In
            </button>
            </a>
            @endif
            @if (Route::has('register'))
            <a href="{{ route('register') }}">
            <button
              class="hidden select-none rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:inline-block"
              type="button">
              Sign in
            </button>
            </a>
            @endif
          </div>
          <button
            class="relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-inherit transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden"
            type="button">
            <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
            </span>
          </button>
        </div>
      </div>
    </nav>
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
  </div>
</div>
</body>
</html>