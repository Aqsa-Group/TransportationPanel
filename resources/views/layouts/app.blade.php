<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>@yield('title','داشبورد')</title>


  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @stack('head')

</head>

<body class="bg-gray-100 text-gray-900">
  <div class="min-h-screen flex">

    {{-- Sidebar (Partial) --}}
    @include('partials.sidbar')

    {{-- Backdrop (برای موبایل) --}}
    <div id="backdrop"
         class="fixed inset-0 z-30 bg-black/40 opacity-0 pointer-events-none transition-opacity duration-200 lg:hidden"></div>

    {{-- Main --}}
    <div class="flex-1 flex flex-col min-w-0 ">

      {{-- Navbar (Partial) --}}
      @include('partials.navbar')

      {{-- کانتینر سکشن‌ها --}}
      <main id="sections" class=" px-4 sm:px-6 lg:px-5 py-6 space-y-6">
        @yield('content')
      </main>
    </div>
  </div>

  {{-- Drawer & Active menu logic --}}
  @stack('scripts')
</body>
</html>
