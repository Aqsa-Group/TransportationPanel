@extends('layouts.app')
@section('title','پروفایل من')
@section('content')

<body class="bg-gray-100 overflow-hidden flex items-center justify-center ">


  <div id="card"
       class="fade-scale bg-white shadow-lg rounded-2xl w-[95%] max-w-2xl m-4
              grid grid-cols-1 md:grid-cols-2 overflow-hidden md:h-[480px] sm:h-[550px]">


    <div class="p-3 sm:p-4 flex flex-col gap-2 items-center text-sm">
      <h2 class="text-base sm:text-lg font-bold">پروفایل من</h2>
      <p class="text-gray-500 text-xs">شما می‌توانید اطلاعات خود را بروز کنید.</p>
      <div class="h-px bg-[#0400FF] w-full mb-2"></div>


      <div class="relative inline-block">
        <div class="w-16 h-16 rounded-full overflow-hidden shadow-md">
          <img src="/img/barber_team_03.jpg" alt="profile" class="w-full h-full object-cover">
        </div>
        <label for="avatarInput"
               class="absolute bottom-[-2px] left-[-2px] bg-[#0400FF] hover:bg-blue-700 text-white
                      w-5 h-5 rounded-full grid place-items-center shadow z-10 cursor-pointer">
         <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M21.81 3.94012C20.27 7.78012 16.41 13.0001 13.18 15.5901L11.21 17.1701C10.96 17.3501 10.71 17.5101 10.43 17.6201C10.43 17.4401 10.42 17.2401 10.39 17.0501C10.28 16.2101 9.9 15.4301 9.23 14.7601C8.55 14.0801 7.72 13.6801 6.87 13.5701C6.67 13.5601 6.47 13.5401 6.27 13.5601C6.38 13.2501 6.55 12.9601 6.76 12.7201L8.32 10.7501C10.9 7.52012 16.14 3.64012 19.97 2.11012C20.56 1.89012 21.13 2.05012 21.49 2.42012C21.87 2.79012 22.05 3.36012 21.81 3.94012Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.43 17.6201C10.43 18.7201 10.01 19.77 9.22 20.57C8.61 21.18 7.78 21.6001 6.79 21.7301L4.33 22.0001C2.99 22.1501 1.84 21.01 2 19.65L2.27 17.1901C2.51 15.0001 4.34 13.6001 6.28 13.5601C6.48 13.5501 6.69 13.56 6.88 13.57C7.73 13.68 8.56 14.0701 9.24 14.7601C9.91 15.4301 10.29 16.21 10.4 17.05C10.41 17.24 10.43 17.4301 10.43 17.6201Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14.24 14.47C14.24 11.86 12.12 9.73999 9.50999 9.73999" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
          <span class="sr-only">ویرایش عکس پروفایل</span>
        </label>
        <input id="avatarInput" type="file" accept="image/*" class="hidden" />
      </div>

      <p class="mt-1 font-semibold text-[13px] sm:text-sm">احمد عزیزی</p>


      <form class="w-full mt-2 flex flex-wrap justify-between gap-y-3" dir="rtl" onsubmit="event.preventDefault()">
        <div class="relative basis-full sm:basis-[48%]">
          <input type="text" placeholder="نام"
                 class="w-full border border-gray-300 rounded-xl px-3 pl-9 py-2 text-right
                        outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
          <span class="absolute left-2.5 top-1/2 -translate-y-1/2">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.5 11.3V7.04001C20.5 3.01001 19.56 2 15.78 2H8.22C4.44 2 3.5 3.01001 3.5 7.04001V18.3C3.5 20.96 4.96001 21.59 6.73001 19.69L6.73999 19.68C7.55999 18.81 8.80999 18.88 9.51999 19.83L10.53 21.18" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8 7H16" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M9 11H15" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18.211 14.7703L14.671 18.3103C14.531 18.4503 14.401 18.7103 14.371 18.9003L14.181 20.2503C14.111 20.7403 14.451 21.0803 14.941 21.0103L16.291 20.8203C16.481 20.7903 16.751 20.6603 16.881 20.5203L20.421 16.9803C21.031 16.3703 21.321 15.6603 20.421 14.7603C19.531 13.8703 18.821 14.1603 18.211 14.7703Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M17.6992 15.2803C17.9992 16.3603 18.8392 17.2003 19.9192 17.5003" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
        </div>

        <div class="relative basis-full sm:basis-[48%]">
          <input type="text" placeholder="تخلص"
                 class="w-full border border-gray-300 rounded-xl px-3 pl-9 py-2 text-right
                        outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
          <span class="absolute left-2.5 top-1/2 -translate-y-1/2">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.5 11.3V7.04001C20.5 3.01001 19.56 2 15.78 2H8.22C4.44 2 3.5 3.01001 3.5 7.04001V18.3C3.5 20.96 4.96001 21.59 6.73001 19.69L6.73999 19.68C7.55999 18.81 8.80999 18.88 9.51999 19.83L10.53 21.18" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8 7H16" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M9 11H15" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18.211 14.7703L14.671 18.3103C14.531 18.4503 14.401 18.7103 14.371 18.9003L14.181 20.2503C14.111 20.7403 14.451 21.0803 14.941 21.0103L16.291 20.8203C16.481 20.7903 16.751 20.6603 16.881 20.5203L20.421 16.9803C21.031 16.3703 21.321 15.6603 20.421 14.7603C19.531 13.8703 18.821 14.1603 18.211 14.7703Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M17.6992 15.2803C17.9992 16.3603 18.8392 17.2003 19.9192 17.5003" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
        </div>

        <div class="relative basis-full sm:basis-[48%]">
          <input type="email" placeholder="ایمیل"
                 class="w-full border border-gray-300 rounded-xl px-3 pl-9 py-2 text-right
                        outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
          <span class="absolute left-2.5 top-1/2 -translate-y-1/2">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.6 10.2H12.2V13.9H17.7C17.6 14.8 17 16.2 15.7 17.1C14.9 17.7 13.7 18.1 12.2 18.1C9.59995 18.1 7.29995 16.4 6.49995 13.9C6.29995 13.3 6.19995 12.6 6.19995 11.9C6.19995 11.2 6.29995 10.5 6.49995 9.9C6.59995 9.7 6.59995 9.5 6.69995 9.4C7.59995 7.3 9.69995 5.8 12.2 5.8C14.1 5.8 15.3 6.6 16.1 7.3L18.9 4.5C17.1999 3 14.9 2 12.2 2C8.29995 2 4.89995 4.2 3.29995 7.5C2.59995 8.9 2.19995 10.4 2.19995 12C2.19995 13.6 2.59995 15.1 3.29995 16.5C4.89995 19.8 8.29995 22 12.2 22C14.9 22 17.1999 21.1 18.7999 19.6C20.6999 17.9 21.7999 15.3 21.7999 12.2C21.7999 11.4 21.7 10.8 21.6 10.2Z" stroke="#17191C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
        </div>

        <div class="relative  basis-full sm:basis-[48%]">
          <input type="password" placeholder="رمز عبور قبلی"
                 class="w-full border border-gray-300 rounded-xl px-3 pl-9 py-2 text-right
                        outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
          <span class="absolute left-2.5 top-1/2 -translate-y-1/2">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.79 14.9299C17.73 16.9799 14.78 17.6099 12.19 16.7999L7.48002 21.4999C7.14002 21.8499 6.47002 22.0599 5.99002 21.9899L3.81002 21.6899C3.09002 21.5899 2.42002 20.9099 2.31002 20.1899L2.01002 18.0099C1.94002 17.5299 2.17002 16.8599 2.50002 16.5199L7.20002 11.8199C6.40002 9.21995 7.02002 6.26995 9.08002 4.21995C12.03 1.26995 16.82 1.26995 19.78 4.21995C22.74 7.16995 22.74 11.9799 19.79 14.9299Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.89001 17.49L9.19001 19.79" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M14.5 11C15.3284 11 16 10.3284 16 9.5C16 8.67157 15.3284 8 14.5 8C13.6716 8 13 8.67157 13 9.5C13 10.3284 13.6716 11 14.5 11Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
        </div>

        <div class="relative basis-full sm:basis-[48%]">
          <input type="password" placeholder="رمز عبور جدید"
                 class="w-full border border-gray-300 rounded-xl px-3 pl-9 py-2 text-right
                        outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
          <span class="absolute left-2.5 top-1/2 -translate-y-1/2">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 10V8C6 4.69 7 2 12 2C17 2 18 4.69 18 8V10" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 18.5C13.3807 18.5 14.5 17.3807 14.5 16C14.5 14.6193 13.3807 13.5 12 13.5C10.6193 13.5 9.5 14.6193 9.5 16C9.5 17.3807 10.6193 18.5 12 18.5Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M17 22H7C3 22 2 21 2 17V15C2 11 3 10 7 10H17C21 10 22 11 22 15V17C22 21 21 22 17 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
        </div>

        <div class="relative basis-full sm:basis-[48%]">
          <input type="password" placeholder="تأیید رمز عبور "
                 class="w-full border border-gray-300 rounded-xl px-3 pl-9 py-2 text-right
                        outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
          <span class="absolute left-2.5 top-1/2 -translate-y-1/2">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 10V8C6 4.69 7 2 12 2C17 2 18 4.69 18 8V10" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 18.5C13.3807 18.5 14.5 17.3807 14.5 16C14.5 14.6193 13.3807 13.5 12 13.5C10.6193 13.5 9.5 14.6193 9.5 16C9.5 17.3807 10.6193 18.5 12 18.5Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M17 22H7C3 22 2 21 2 17V15C2 11 3 10 7 10H17C21 10 22 11 22 15V17C22 21 21 22 17 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
        </div>
      </form>


      <div class="flex flex-col sm:flex-row gap-2 mt-3 w-full">
          <a href="{{ route('home') }}"
           class="w-full text-center bg-[#FF0000] text-white px-5 py-2 text-xs sm:text-sm rounded-xl hover:bg-red-600">
          برگشت
        </a>
        <a href="{{ route('profile.complete') }}" class=" text-center w-full bg-[#0400FF] text-white px-5 py-2 text-xs sm:text-sm rounded-xl hover:bg-blue-800">
          ثبت
</a>

      </div>
    </div>



    <div class="relative overflow-hidden flex items-center justify-center">
      <div class="relative w-full py-4 max-w-[300px] h-full">

        <img src="{{ asset('img/2.png') }}"
             class="w-full max-w-[360px] rounded-lg object-contain opacity-100" alt="">

        <div class="absolute inset-0 flex items-center justify-center p-6">
          <img src="{{ asset('img/1.png') }}"
               class="w-full h-full rounded-xl object-contain opacity-100" alt="">
        </div>
      </div>
    </div>
    <!-- /ستون تصویر -->

  </div>

  <script>
    // اجرای انیمیشن بعد از لود
    window.addEventListener('DOMContentLoaded', () => {
      const card = document.getElementById('card');
      if (card) setTimeout(() => card.classList.add('show'), 80);
    });
  </script>
   <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Fade-in + Scale */
    .fade-scale{opacity:0;transform:scale(.98);transition:opacity .45s ease,transform .45s ease}
    .fade-scale.show{opacity:1;transform:scale(1)}
  </style>
</body>
@endsection
