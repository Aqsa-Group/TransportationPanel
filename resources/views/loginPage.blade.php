<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>ورود - سیستم حمل و نقل</title>
  
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
        
  <style>
    body {
      font-family: "Vazirmatn", sans-serif;
      background-color: #f5f7fb;
    }
  </style>
</head>
<body class="flex items-center justify-center min-h-screen">
  <div class="flex flex-col md:flex-row bg-white shadow-lg rounded-3xl overflow-hidden w-[1300px] h-[650px]">
    
    <!-- بخش فرم سمت راست -->
    <div class="md:w-1/2 w-full flex items-center justify-center bg-white">
      <div class="w-full max-w-md mt-8">
        
        <!-- لوگو -->
        <div class="flex justify-center">
          <img src="/img/Group 2.png" alt="logo" class="w-24 h-24 object-contain" />
        </div>

        <!-- عنوان -->
        <h1 class="text-2xl font-bold text-blue-700 flex items-center justify-center mb-8 mt-[-30px]">
          ادمین پنل حمل و نقل
        </h1>

        <!-- نمایش خطاها -->
        @if ($errors->any())
          <div class="mb-4 p-3 bg-red-100 border border-red-400 text-red-700 rounded-lg">
            @foreach ($errors->all() as $error)
              <p class="text-sm">{{ $error }}</p>
            @endforeach
          </div>
        @endif

        <!-- فرم ورود -->
        <form action="{{ route('login.post') }}" method="POST">
          @csrf
          
          <!-- ایمیل -->
          <div class="mb-8 relative">
            <svg class="absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-500 pointer-events-none"
                 fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z"
                    stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M20.5899 22C20.5899 18.13 16.7399 15 11.9999 15C7.25991 15 3.40991 18.13 3.40991 22"
                    stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="ایمیل" required
                   class="w-full border border-[#0084FF] text-[#000000] placeholder-[#000000] rounded-2xl pr-12 pl-4 py-5 text-right focus:outline-none focus:ring-2 focus:ring-blue-300" />
          </div>

          <!-- رمز عبور -->
          <div class="mb-2 relative">
            <svg class="absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-500 pointer-events-none"
                 fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M19.79 14.9299C17.73 16.9799 14.78 17.6099 12.19 16.7999L7.48002 21.4999C7.14002 21.8499 6.47002 22.0599 5.99002 21.9899L3.81002 21.6899C3.09002 21.5899 2.42002 20.9099 2.31002 20.1899L2.01002 18.0099C1.94002 17.5299 2.17002 16.8599 2.50002 16.5199L7.20002 11.8199C6.40002 9.21995 7.02002 6.26995 9.08002 4.21995C12.03 1.26995 16.82 1.26995 19.78 4.21995C22.74 7.16995 22.74 11.9799 19.79 14.9299Z"
                    stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M14.5 11C15.3284 11 16 10.3284 16 9.5C16 8.67157 15.3284 8 14.5 8C13.6716 8 13 8.67157 13 9.5C13 10.3284 13.6716 11 14.5 11Z"
                    stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <input type="password" name="password" placeholder="رمز عبور" required
                   class="w-full border mb-2 border-[#0084FF] rounded-2xl pr-12 pl-4 py-5 text-right text-[#000000] placeholder-[#000000] focus:outline-none focus:ring-2 focus:ring-blue-300" />
          </div>

          <!-- مرا بخاطر بسپار -->
          <div class="flex items-center justify-between text-sm mb-5">
            <label class="flex items-center space-x-2 rtl:space-x-reverse cursor-pointer">
              <input type="checkbox" name="remember"
                     class="w-6 h-6 border-2 border-[#0B35CC] rounded appearance-none checked:bg-blue-600 checked:border-blue-600 focus:ring-2 focus:ring-blue-300 cursor-pointer transition" />
              <span class="text-gray-800 select-none">مرا بخاطر بسپار</span>
            </label>
          </div>

          <!-- دکمه ورود -->
          <button type="submit"
                  class="w-full py-3 rounded-2xl text-white font-semibold bg-[#0B35CC] shadow-md hover:opacity-90 transition mb-5">
            ورود
          </button>
        </form>

        <!-- اطلاعات تست -->
        <div class="mt-4 p-3 bg-blue-50 rounded-lg text-sm">
          <p class="font-semibold text-blue-800 mb-2">اطلاعات تست:</p>
          <p class="text-blue-700">مدیر: admin@example.com / 123456</p>
          <p class="text-blue-700">اپراتور: operator@example.com / 123456</p>
        </div>
      </div>
    </div>

    <!-- بخش تصویر سمت چپ -->
    <div class="flex items-center justify-center">
      <div class="flex items-center justify-center">
        <img src="/img/car.jpg" alt="illustration" class="w-full object-contain" />
      </div>
    </div>
  </div>
</body>
</html>