@extends('layouts.app')

@section('title','رانندگان')

@section('content')

@php
    $drivers = collect([
        (object)[
            'photo' => '/img/barber_team_03.jpg',
            'driver_name' => 'فرهاد نظری',
            'phone' => '+93700000000',
            'degree' => 'لیسانس',
            'address' => 'هرات، سرک قول اردو',
            'income' => '70,886',
            'trips' => 30,
            'gmail' => 'farhad@example.com',
            'rating' => 4.5,
            'status' => 'تکمیل شد',
        ],
        (object)[
            'photo' => '/img/barber_team_03.jpg',
            'driver_name' => 'شهاب قاسمی',
            'phone' => '+93700000001',
            'degree' => 'ماستر',
            'address' => 'کابل، ناحیه 3',
            'income' => '64,320',
            'trips' => 80,
            'gmail' => 'shahab@example.com',
            'rating' => 4.8,
            'status' => 'تکمیل شد',
        ],
        (object)[
            'photo' => '/img/barber_team_03.jpg',
            'driver_name' => 'الیاس کریمی',
            'phone' => '+93700000002',
            'degree' => 'لیسانس',
            'address' => 'مزار، سرک دانشگاه',
            'income' => '51,500',
            'trips' => 50,
            'gmail' => 'ilyas@example.com',
            'rating' => 4.2,
            'status' => 'تکمیل شد',
        ],
         (object)[
            'photo' => '/img/barber_team_03.jpg',
            'driver_name' => 'فرهاد نظری',
            'phone' => '+93700000000',
            'degree' => 'لیسانس',
            'address' => 'هرات، سرک قول اردو',
            'income' => '70,886',
            'trips' => 15,
            'gmail' => 'farhad@example.com',
            'rating' => 4.5,
            'status' => 'در سفر',
        ],
        (object)[
            'photo' => '/img/barber_team_03.jpg',
            'driver_name' => 'شهاب قاسمی',
            'phone' => '+93700000001',
            'degree' => 'ماستر',
            'address' => 'کابل، ناحیه 3',
            'income' => '64,320',
            'trips' => 63,
            'gmail' => 'shahab@example.com',
            'rating' => 4.8,
            'status' => 'در سفر',
        ],
        (object)[
            'photo' => '/img/barber_team_03.jpg',
            'driver_name' => 'الیاس کریمی',
            'phone' => '+93700000002',
            'degree' => 'لیسانس',
            'address' => 'مزار، سرک دانشگاه',
            'income' => '51,500',
            'trips' => 50,
            'gmail' => 'ilyas@example.com',
            'rating' => 4.2,
            'status' => 'در سفر',
        ],
    ]);
@endphp

<div class="responsive-wrapper p-4 bg-white rounded-2xl shadow mx-auto mt-4">

  <!-- نوار بالایی -->
  <div class="flex flex-col sm:flex-row justify-between items-center mb-6">
    <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-800 mb-3 sm:mb-0">
      رانندگان
    </h2>
    <button onclick="window.location.href='{{ url('/drivers-Form') }}'"
      class="bg-[#0800FF] hover:bg-[#0B35CC] text-white rounded-lg px-4 py-2 flex items-center gap-1 text-sm sm:text-base">
      اضافه کردن راننده جدید
<svg class="w-5 h-5" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.325 17.1627C16.2649 17.1627 17.8375 15.5901 17.8375 13.6502C17.8375 11.7103 16.2649 10.1377 14.325 10.1377C12.3851 10.1377 10.8125 11.7103 10.8125 13.6502C10.8125 15.5901 12.3851 17.1627 14.325 17.1627Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M20.8124 25.2504C20.8124 22.3379 17.9124 19.9629 14.3249 19.9629C10.7374 19.9629 7.8374 22.3254 7.8374 25.2504" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M26.25 15.625C26.25 22.1875 20.9375 27.5 14.375 27.5C7.8125 27.5 2.5 22.1875 2.5 15.625C2.5 9.0625 7.8125 3.75 14.375 3.75C16.0125 3.75 17.575 4.07499 19 4.67499C18.8375 5.17499 18.75 5.7 18.75 6.25C18.75 7.1875 19.0125 8.075 19.475 8.825C19.725 9.25 20.05 9.63746 20.425 9.96246C21.3 10.7625 22.4625 11.25 23.75 11.25C24.3 11.25 24.825 11.1625 25.3125 10.9875C25.9125 12.4125 26.25 13.9875 26.25 15.625Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M28.75 6.25C28.75 6.65 28.7 7.03749 28.6 7.41249C28.4875 7.91249 28.2875 8.4 28.025 8.825C27.425 9.8375 26.4625 10.625 25.3125 10.9875C24.825 11.1625 24.3 11.25 23.75 11.25C22.4625 11.25 21.3 10.7625 20.425 9.96246C20.05 9.63746 19.725 9.25 19.475 8.825C19.0125 8.075 18.75 7.1875 18.75 6.25C18.75 5.7 18.8375 5.17499 19 4.67499C19.2375 3.94999 19.6375 3.30003 20.1625 2.76253C21.075 1.82503 22.35 1.25 23.75 1.25C25.225 1.25 26.5625 1.88752 27.4625 2.91252C28.2625 3.80002 28.75 4.975 28.75 6.25Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M25.6127 6.22559H21.8877" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M23.75 4.40039V8.13788" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

    </button>
  </div>
<!-- جدول دسکتاپ و تبلت -->
<div class=" rounded-lg mt-4 hidden md:block ">
  <table class="min-w-full bg-white text-right text-sm ">
    <thead class="bg-gray-100 text-gray-900">
      <tr class="text-xs sm:text-sm md:text-[13px] lg:text-sm">
        <th class="p-2 md:p-3">عکس</th>
        <th class="p-2 md:p-3">نام راننده</th>
        <th class="p-2 md:p-3">تلفن</th>
        <th class="p-2 md:p-3 hidden md:table-cell">مدرک</th>
        <th class="p-2 md:p-3 hidden md:table-cell">آدرس</th>
        <th class="p-2 md:p-3">درآمد</th>
        <th class="p-2 md:p-3">سفرها</th>
        <th class="p-2 md:p-3 hidden md:table-cell">ایمیل</th>
        <th class="p-2 md:p-3">امتیاز</th>
        <th class="p-2 md:p-3">وضعیت</th>
        <th class="p-2 md:p-3">ویرایش</th>
        <th class="p-2 md:p-3">حذف</th>
      </tr>
    </thead>

    <tbody class="divide-y divide-gray-200 text-xs sm:text-sm md:text-[13px] lg:text-sm">
      @foreach ($drivers as $driver)
        <tr class="hover:bg-gray-50 transition border-b border-dashed ">
          <td class="p-2 md:p-3">
            <img src="{{ $driver->photo }}" alt="{{ $driver->driver_name }}"
              class="w-10 h-10 md:w-12 md:h-12 rounded-2xl object-cover border border-gray-300 mx-auto">
          </td>
          <td class="p-2 md:p-3 font-semibold text-gray-800 whitespace-nowrap">{{ $driver->driver_name }}</td>
          <td class="p-2 md:p-3 whitespace-nowrap">{{ $driver->phone }}</td>
          <td class="p-2 md:p-3 hidden md:table-cell whitespace-nowrap">{{ $driver->degree }}</td>
          <td class="p-2 md:p-3 hidden md:table-cell truncate max-w-[150px]">{{ $driver->address }}</td>
          <td class="p-2 md:p-3 font-medium whitespace-nowrap">{{ $driver->income }}؋</td>

          <td class="p-2 md:p-3">
            <div class="flex flex-col gap-1">
              <span class="text-gray-700 text-xs font-semibold m-auto">
                100 / {{ $driver->trips }}
              </span>
              <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden relative">
                <div
                  class="h-2 rounded-full absolute left-0 transition-all duration-500"
                  style="width: {{ $driver->trips }}%; background-color: {{ $driver->trips <= 50 ? '#EF4444' : '#2563EB' }};">
                </div>
              </div>
            </div>
          </td>

          <td class="p-2 md:p-3 hidden md:table-cell">{{ $driver->gmail }}</td>

          <td class="p-2 md:p-3 text-center">
            <div class="flex items-center justify-center text-blue-600 font-bold text-base md:text-lg">
              <span class="text-blue-700 font-extrabold text-base md:text-xl mt-1">{{ $driver->rating }}</span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                class="w-4 h-4 md:w-5 md:h-5 ml-1">
                <path d="M12 .587l3.668 7.568L24 9.423l-6 5.847 1.417 8.253L12 18.897l-7.417 4.626L6 15.27 0 9.423l8.332-1.268z"/>
              </svg>
            </div>
          </td>

          <td class="p-2 md:p-3 text-center">
            @if($driver->status == 'در حال انجام')
              <span class="border border-gray-300 py-1 px-2 rounded-lg text-xs text-gray-600">در حال انجام</span>
            @elseif($driver->status == 'تکمیل شد')
              <span class="border border-gray-300 py-1 px-2 rounded-lg text-xs text-gray-600">تکمیل شد</span>
            @else
              <span class="border border-gray-300 py-1 px-2 rounded-lg text-xs text-gray-600">در انتظار</span>
            @endif
          </td>

          <td class="p-2 md:p-3">
            <button class="text-indigo-600">
              <svg class="w-4 h-4 md:w-5 md:h-5 mx-auto" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M11 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V13"
                  stroke="#0009FF" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M16.04 3.02001L8.16 10.9C7.86 11.2 7.56 11.79 7.5 12.22L7.07 15.23C6.91 16.32 7.68 17.08 8.77 16.93L11.78 16.5C12.2 16.44 12.79 16.14 13.1 15.84L20.98 7.96001C22.34 6.60001 22.98 5.02001 20.98 3.02001C18.98 1.02001 17.4 1.66001 16.04 3.02001Z"
                  stroke="#0009FF" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </button>
          </td>

          <td class="p-2 md:p-3">
            <button class="text-red-600">
              <svg class="w-4 h-4 md:w-5 md:h-5 mx-auto" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M8.81 2L5.19 5.63" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15.19 2L18.81 5.63" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2 7.84998C2 5.99998 2.99 5.84998 4.22 5.84998H19.78C21.01 5.84998 22 5.99998 22 7.84998C22 9.99998 21.01 9.84998 19.78 9.84998H4.22C2.99 9.84998 2 9.99998 2 7.84998Z" stroke="#FF0000" stroke-width="1.5"/>
                <path d="M9.76001 14V17.55" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M14.36 14V17.55" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M3.5 10L4.91 18.64C5.23 20.58 6 22 8.86 22H14.89C18 22 18.46 20.64 18.82 18.76L20.5 10" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>


<!-- نسخه موبایل و تبلت -->


    <div class="sm:hidden mt-4 grid grid-cols-1 gap-2">
    @foreach($drivers as $driver)
    <div class="bg-white text-sm flex flex-col p-3 rounded-lg shadow">


      <!-- عکس در وسط -->
      <img src="{{ $driver->photo }}" class="w-16 h-16 rounded-2xl border mb-2">

      <!-- نام و ایمیل زیر عکس -->
      <h3 class="font-semibold text-gray-800 text-center truncate">{{ $driver->driver_name }}</h3>
      <p class="text-gray-500 text-center text-sm truncate">{{ $driver->gmail }}</p>

      <!-- اطلاعات دیگر -->
      <div class="text-right w-full mt-2 space-y-1 text-[11px]">
        <p><span class="font-medium">تلفن:</span> {{ $driver->phone }}</p>
        <p><span class="font-medium">درجه:</span> {{ $driver->degree }}</p>
        <p><span class="font-medium">آدرس:</span> {{ $driver->address }}</p>
        <p><span class="font-medium">درآمد:</span> {{ $driver->income }}؋</p>

        <!-- نوار پیشرفت سفرها -->
        <p><span class="font-medium">100</span>/ {{ $driver->trips }}</p>
        <div class="w-full bg-gray-200 rounded-full h-2">
          <div class="h-2 rounded-full"
              style="width: {{ $driver->trips }}%; background-color: {{ $driver->trips <= 50 ? '#EF4444' : '#2563EB' }};">
          </div>
        </div>

        <p><span class="font-medium">امتیاز:</span> {{ $driver->rating }}</p>
         <div class="flex justify-between mt-2 items-center">
            <span class="border border-gray-300 px-2 py-1 rounded text-center text-xs">{{ $driver->status }}</span>
            <button class="text-red-600">
              <svg class="w-4 h-4 md:w-5 md:h-5 mx-auto" viewBox="0 0 24 24" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M8.81 2L5.19 5.63" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M15.19 2L18.81 5.63" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M2 7.84998C2 5.99998 2.99 5.84998 4.22 5.84998H19.78C21.01 5.84998 22 5.99998 22 7.84998C22 9.99998 21.01 9.84998 19.78 9.84998H4.22C2.99 9.84998 2 9.99998 2 7.84998Z" stroke="#FF0000" stroke-width="1.5"/>
              <path d="M9.76001 14V17.55" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M14.36 14V17.55" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M3.5 10L4.91 18.64C5.23 20.58 6 22 8.86 22H14.89C18 22 18.46 20.64 18.82 18.76L20.5 10" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </button>
            <button class="text-indigo-600">
                <svg class="w-4 h-4 md:w-5 md:h-5 mx-auto" viewBox="0 0 24 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V13"
                    stroke="#0009FF" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path
                    d="M16.04 3.02001L8.16 10.9C7.86 11.2 7.56 11.79 7.5 12.22L7.07 15.23C6.91 16.32 7.68 17.08 8.77 16.93L11.78 16.5C12.2 16.44 12.79 16.14 13.1 15.84L20.98 7.96001C22.34 6.60001 22.98 5.02001 20.98 3.02001C18.98 1.02001 17.4 1.66001 16.04 3.02001Z"
                    stroke="#0009FF" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
            </button>
         </div>

      </div>
    </div>
    @endforeach
  </div>



    <!-- شماره‌گذاری پایین صفحه -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mt-4 space-y-3 md:space-y-0">
      <!-- Pagination -->
      <div class="flex items-center justify-center md:justify-start space-x-0.5 rtl:space-x-reverse mr-2">
        <!-- Previous Button -->
        <button class="flex items-center justify-center w-6 h-6 rounded-md border border-gray-300 text-gray-500 bg-[#F3F3F3] hover:bg-gray-100">
          <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.91003 19.9201L15.43 13.4001C16.2 12.6301 16.2 11.3701 15.43 10.6001L8.91003 4.08008" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
        <!-- Page Numbers -->
        <div class="flex space-x-0.5 rtl:space-x-reverse">
          <button class="flex items-center justify-center w-6 h-6 rounded-md border border-blue-500 text-blue-600 bg-[#F3F3F3] text-xs font-medium">1</button>
          <button class="flex items-center justify-center w-6 h-6 rounded-md border border-transparent text-gray-700 bg-[#F3F3F3] hover:border-gray-300 hover:bg-gray-100 text-xs">2</button>
          <button class="flex items-center justify-center w-6 h-6 rounded-md border border-transparent text-gray-700 bg-[#F3F3F3] hover:border-gray-300 hover:bg-gray-100 text-xs">3</button>
          <button class="flex items-center justify-center w-6 h-6 rounded-md border border-transparent text-gray-700 bg-[#F3F3F3] text-xs">...</button>
          <button class="flex items-center justify-center w-6 h-6 rounded-md border border-transparent text-gray-700 bg-[#F3F3F3] hover:border-gray-300 hover:bg-gray-100 text-xs">25</button>
        </div>
        <!-- Next Button -->
        <button class="flex items-center justify-center w-6 h-6 rounded-md border border-gray-300 text-gray-500 bg-[#F3F3F3] hover:bg-gray-100">
          <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15 19.9201L8.47997 13.4001C7.70997 12.6301 7.70997 11.3701 8.47997 10.6001L15 4.08008" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </div>
      <!-- Total Drivers -->
      <div class="flex items-center justify-center md:justify-end space-x-2 rtl:space-x-reverse">
        <span class="text-gray-700 text-sm font-medium">
        تعداد کل رانندگان
        </span>
        <span class="border border-gray-300 rounded-lg px-4 py-1 text-gray-800 text-sm font-semibold">
        {{ $drivers->count() }}
        </span>
      </div>
    </div>

  </div>
  </div>
</div>

<!-- ✅ فونت وزیر -->
<link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;600;700;800&display=swap" rel="stylesheet">
<style>
  * { font-family: "Vazirmatn", sans-serif !important; }


  /* ✅ جلوگیری از اسکرول افقی در کل صفحه */
  html, body {
    overflow-x: hidden !important;
    width: 100% !important;
  }

  /* ✅ محدودسازی جدول در کانتینر بدون ایجاد اسکرول */
  .container-responsive {
    max-width: 100vw !important;
    overflow-x: clip !important; /* از scroll بهتر عمل می‌کند */
  }


  /* ✅ حذف margin یا padding اضافی که ممکن است باعث اسکرول شود */
  body > * {
    max-width: 100vw !important;
  }
  * {
    font-family: "Vazirmatn", sans-serif !important;
  }

  /* ✅ دیو سفید مرکزی */
  .responsive-wrapper {
    width: 100%;
    max-width: 1280px; /* محدودیت عرض */
    box-sizing: border-box;
    overflow: hidden; /* جلوگیری از بیرون‌زدن محتوا */
  }

  /* ✅ در حالت کوچک، padding کم شود تا فشرده‌تر شود */
  @media (max-width: 768px) {
    .responsive-wrapper {
      padding: 0.75rem !important;
      border-radius: 1rem;
      margin-top: 1rem;
    }
  }

  /* ✅ جدول داخل */
  table {
    width: 100%;
    border-collapse: collapse;
    table-layout: fixed; /* ستون‌ها به اندازه مساوی */
  }

  th, td {
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    padding: 0.5rem;
  }

  /* ✅ جلوگیری از اسکرول افقی جدول */
  .rounded-lg {
    overflow-x: auto;
  }

  /* ✅ تنظیم padding دکمه‌ها و متون در حالت کوچک */
  @media (max-width: 640px) {
    th, td {
      padding: 0.35rem !important;
      font-size: 12px !important;
    }
  }
</style>


+
@endsection
