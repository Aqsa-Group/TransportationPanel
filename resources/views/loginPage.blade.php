<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>@yield('title','داشبورد')</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
  />

  <style>
    body {
      font-family: "Vazirmatn", sans-serif;
      background-color: #f5f7fb;
    }
  </style>
</head>
<body class="flex items-center justify-center min-h-screen overflow-x-hidden overflow-y-auto">

  <!-- کانتینر اصلی -->
  <div
    class="flex flex-col lg:flex-row bg-white shadow-lg rounded-3xl overflow-hidden w-full max-w-[800px] min-h-[500px] mx-4 my-8"
  >
    <!-- بخش فرم سمت راست -->
    <div class="lg:w-1/2 w-full flex items-center justify-center bg-white p-6">
      <div class="w-full max-w-md">
        <!-- لوگو -->
        <div class="flex justify-center mb-3">
          <img src="/img/Group 2.png" alt="logo" class="w-20 h-20 object-contain" />
        </div>

        <!-- عنوان -->
        <h1 class="text-2xl font-bold text-blue-700 text-center mb-6">
          ادمین پنل حمل و نقل
        </h1>

        <!-- فرم ورود -->
        <form action="#" method="POST" class="space-y-5">
          <!-- نام کاربری -->
          <div class="relative">
            <svg
              class="absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-500 pointer-events-none"
              fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M12 12C14.76 12 17 9.76 17 7C17 4.24 14.76 2 12 2C9.24 2 7 4.24 7 7C7 9.76 9.24 12 12 12Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M20.59 22C20.59 18.13 16.74 15 12 15C7.26 15 3.41 18.13 3.41 22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <input
              type="text"
              placeholder="نام کاربری"
              class="w-full border border-[#0084FF] text-[#000000] placeholder-[#000000] rounded-2xl pr-12 pl-4 py-4 text-right focus:outline-none focus:ring-2 focus:ring-blue-300"
            />
          </div>

          <!-- رمز عبور -->
          <div class="relative">
            <svg
              class="absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-500 pointer-events-none"
              fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M19.79 14.93C17.73 16.98 14.78 17.61 12.19 16.8L7.48 21.5C7.14 21.85 6.47 22.06 5.99 21.99L3.81 21.69C3.09 21.59 2.42 20.91 2.31 20.19L2.01 18.01C1.94 17.53 2.17 16.86 2.5 16.52L7.2 11.82C6.4 9.22 7.02 6.27 9.08 4.22C12.03 1.27 16.82 1.27 19.78 4.22C22.74 7.17 22.74 11.98 19.79 14.93Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.89 17.49L9.19 19.79" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M14.5 11C15.33 11 16 10.33 16 9.5C16 8.67 15.33 8 14.5 8C13.67 8 13 8.67 13 9.5C13 10.33 13.67 11 14.5 11Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <input
              type="password"
              placeholder="رمز عبور"
              class="w-full border border-[#0084FF] text-[#000000] placeholder-[#000000] rounded-2xl pr-12 pl-4 py-4 text-right focus:outline-none focus:ring-2 focus:ring-blue-300"
            />
          </div>

          <!-- مرا بخاطر بسپار + فراموشی -->
          <div class="flex flex-col sm:flex-row items-center justify-between text-sm gap-3">
            <label class="flex items-center gap-2 cursor-pointer">
              <input type="checkbox"
                class="w-5 h-5 border-2 border-[#0B35CC] rounded appearance-none checked:bg-blue-600 checked:border-blue-600 focus:ring-2 focus:ring-blue-300 transition"
              />
              <span class="text-gray-800 select-none">مرا بخاطر بسپار</span>
            </label>

            <button
              type="button"
              class="flex items-center gap-1 text-[#0400FF] font-semibold hover:text-blue-800 focus:outline-none"
            >
              <i class="fa-solid fa-key text-xs"></i>
              <span class="underline underline-offset-4 decoration-dotted">بازیابی رمز عبور</span>
            </button>
          </div>

          <!-- دکمه ورود -->
          <button
            type="button"
            onclick="window.location.href='{{ url('/welcome') }}'"
            class="w-full py-3 rounded-2xl text-white font-semibold bg-[#0B35CC] shadow-md hover:opacity-90 transition"
          >
            ورود
          </button>
        </form>
      </div>
    </div>

    <!-- بخش تصویر سمت چپ -->
    <div class="lg:w-1/2 w-full flex items-center justify-center bg-white-500">
      <img
        src="/img/car.jpg"
        alt="illustration"
        class="w-full h-auto object-contain max-h-[400px] sm:max-h-[500px] lg:max-h-[650px]"
      />
    </div>
  </div>
</body>
</html>
