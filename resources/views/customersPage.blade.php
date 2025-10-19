@extends('layouts.app')

@section('title','مشتریان')

@section('content')

@php
    $customers = collect([
        (object)[
            'photo' => '/img/barber_team_03.jpg',
            'customer_name' => 'فرهاد نظری',
            'phone' => '+93700000000',
            'pay' => 'آنلاین',
            'origin' => 'هرات',
            'price' => '70,886',
            'weight' => '25kg',
            'gmail' => 'farhad@example.com',
            'rating' => 4.5,
            'distination' => 'کابل ',
        ],
        (object)[
            'photo' => '/img/barber_team_03.jpg',
            'customer_name' => 'حمید احمدی',
            'phone' => '+93711111111',
            'pay' => 'نقدی',
            'origin' => 'مزارشریف',
            'price' => '45,200',
            'weight' => '25kg',
            'gmail' => 'hamid@example.com',
            'rating' => 4.8,
            'distination' => 'کابل ',
        ],
                (object)[
            'photo' => '/img/barber_team_03.jpg',
            'customer_name' => 'فرهاد نظری',
            'phone' => '+93700000000',
            'pay' => 'آنلاین',
            'origin' => 'هرات',
            'price' => '70,886',
            'weight' => '30kg',
            'gmail' => 'farhad@example.com',
            'rating' => 4.5,
            'distination' => 'کابل ',
        ],
        (object)[
            'photo' => '/img/barber_team_03.jpg',
            'customer_name' => 'حمید احمدی',
            'phone' => '+93711111111',
            'pay' => 'نقدی',
            'origin' => 'مزارشریف',
            'price' => '45,200',
            'weight' => '25kg',
            'gmail' => 'hamid@example.com',
            'rating' => 4.8,
            'distination' => 'کابل ',
        ],
                (object)[
            'photo' => '/img/barber_team_03.jpg',
            'customer_name' => 'فرهاد نظری',
            'phone' => '+93700000000',
            'pay' => 'آنلاین',
            'origin' => 'هرات',
            'price' => '70,886',
            'weight' => '25kg',
            'gmail' => 'farhad@example.com',
            'rating' => 4.5,
            'distination' => 'کابل ',
        ],
        (object)[
            'photo' => '/img/barber_team_03.jpg',
            'customer_name' => 'حمید احمدی',
            'phone' => '+93711111111',
            'pay' => 'نقدی',
            'origin' => 'مزارشریف',
            'price' => '45,200',
            'weight' =>'45kg',
            'gmail' => 'hamid@example.com',
            'rating' => 4.8,
            'distination' => 'کابل ',
        ],
                (object)[
            'photo' => '/img/barber_team_03.jpg',
            'customer_name' => 'حمید احمدی',
            'phone' => '+93711111111',
            'pay' => 'نقدی',
            'origin' => 'مزارشریف',
            'price' => '45,200',
            'weight' => '25kg',
            'gmail' => 'hamid@example.com',
            'rating' => 4.8,
            'distination' => 'کابل ',
        ],
    ]);
@endphp

<div class="p-4 bg-white rounded-2xl shadow mx-auto mt-4 w-full max-w-[1150px] overflow-x-hidden overflow-y-visible">

    <!-- نوار بالایی -->
    <div class="flex flex-col sm:flex-row justify-between sm:items-center mb-4 gap-3">
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 text-center sm:text-right">
            مشتریان
        </h2>

        <!-- دکمه -->
        <div class="flex justify-center sm:justify-end w-full sm:w-auto">
            <button onclick="window.location.href='{{ url('/customers-Form') }}'"
                class="bg-[#0800FF] hover:bg-[#0B35CC] text-white rounded-lg px-4 py-2 flex items-center justify-center gap-2 text-sm sm:text-base">
                <span>اضافه کردن مشتری جدید</span>
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
    </div>

    <!-- جدول دسکتاپ -->
    <div class="overflow-x-auto  mt-4 hidden md:block max-w-full">
        <table class="min-w-full bg-white text-right text-sm">
            <thead class="bg-gray-100 text-gray-900">
                <tr class="text-center">
                    <th class="p-3">عکس</th>
                    <th class="p-3">نام مشتری</th>
                    <th class="p-3">تلفن</th>
                    <th class="p-3">ایمیل</th>
                    <th class="p-3">پرداخت</th>
                    <th class="p-3">مبلغ</th>
                    <th class="p-3">مبدا</th>
                    <th class="p-3">مقصد</th>
                    <th class="p-3">وزن</th>
                    <th class="p-3">امتیاز</th>
                    <th class="p-3">ادیت</th>
                    <th class="p-3">حذف</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @foreach ($customers as $customer)
                <tr class="hover:bg-gray-100 text-center border-b border-dashed border-gray-700">
                    <td class="p-3"><img src="{{ $customer->photo }}" class="w-10 h-10 rounded-xl mx-auto"></td>
                    <td class="p-3">{{ $customer->customer_name }}</td>
                    <td class="p-3">{{ $customer->phone }}</td>
                    <td class="p-3">{{ $customer->gmail }}</td>
                    <td class="p-3">
                       <button class="border border-black/30 py-1 rounded-lg   text-xs font-medium border-dashed w-35 p-4  text-gray-600">
                      {{ $customer->pay }}
                      </button>
                    </td>
                    <td class="p-3">{{ $customer->price }}؋</td>
                    <td class="p-3">{{ $customer->origin }}</td>
                    <td class="p-3">{{ $customer->distination }}</td>
                    <td class="p-3 rtl">  {{ $customer->weight }} </td>
                    <td class="p-3">
                    <button class="border border-black/30 py-1 h-[35px] rounded-lg text-xs font-medium w-35 p-5  text-gray-600">
                      {{ $customer->rating }} -{{ $customer->customer_name }}
                    </button>
                    </td>
                    <td class="p-3 text-indigo-600 cursor-pointer">
             <svg class="w-5 h-5 mx-auto" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M11 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V13"
                  stroke="#0009FF" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M16.04 3.02001L8.16 10.9C7.86 11.2 7.56 11.79 7.5 12.22L7.07 15.23C6.91 16.32 7.68 17.08 8.77 16.93L11.78 16.5C12.2 16.44 12.79 16.14 13.1 15.84L20.98 7.96001C22.34 6.60001 22.98 5.02001 20.98 3.02001C18.98 1.02001 17.4 1.66001 16.04 3.02001Z"
                  stroke="#0009FF" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
                    </td>
                    <td class="p-3 text-red-500 cursor-pointer">
   <svg class="w-5 h-5  mx-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.81 2L5.19 5.63" stroke="#FF0000" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M15.19 2L18.81 5.63" stroke="#FF0000" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M2 7.84998C2 5.99998 2.99 5.84998 4.22 5.84998H19.78C21.01 5.84998 22 5.99998 22 7.84998C22 9.99998 21.01 9.84998 19.78 9.84998H4.22C2.99 9.84998 2 9.99998 2 7.84998Z" stroke="#FF0000" stroke-width="1.5"/>
<path d="M9.76001 14V17.55" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.36 14V17.55" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round"/>
<path d="M3.5 10L4.91 18.64C5.23 20.58 6 22 8.86 22H14.89C18 22 18.46 20.64 18.82 18.76L20.5 10" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round"/>
</svg>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- نسخه موبایل و تبلت -->
    <div class="space-y-4 md:hidden mt-4">
        @foreach ($customers as $customer)
        <div class="bg-white p-4 rounded-2xl shadow border border-gray-200">
            <!-- عکس در وسط -->
            <img src="{{ $customer->photo }}" class="w-16 h-16 rounded-2xl border mb-2 mx-auto block">

            <!-- نام و ایمیل زیر عکس -->
            <h3 class="font-semibold text-gray-800 text-center truncate">{{ $customer->customer_name }}</h3>
            <p class="text-gray-500 text-center text-sm truncate">{{ $customer->gmail }}</p>

            <div class="text-sm text-gray-700 space-y-1 text-right">
                <p><span class="font-medium">تلفن:</span> {{ $customer->phone }}</p>
                <p><span class="font-medium">پرداخت:</span> {{ $customer->pay }}</p>
                <p><span class="font-medium">مبلغ:</span> {{ $customer->price }}؋</p>
                <p><span class="font-medium">مبدا:</span> {{ $customer->origin }}</p>
                <p><span class="font-medium">مقصد:</span> {{ $customer->distination }}</p>
                <p><span class="font-medium">وزن وسایل:</span> {{ $customer->weight }} </p>

            </div>

            <div class="flex justify-end gap-2 mt-3">
              <button class="text-indigo-600 border border-indigo-200  p-2 rounded-lg hover:bg-indigo-100 transition">
                  <p ><span class="font-medium">امتیاز:</span>  {{ $customer->rating }}</p>
              </button>
                <button class="text-indigo-600 border border-indigo-200  p-2 rounded-lg hover:bg-indigo-100 transition">
             <svg class="w-5 h-5 mx-auto" viewBox="0 0 24 24" fill="none"
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
                <button class="text-red-600 border border-red-200  p-2 rounded-lg hover:bg-red-100 transition">
                      <svg class="w-5 h-5  mx-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.81 2L5.19 5.63" stroke="#FF0000" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.19 2L18.81 5.63" stroke="#FF0000" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2 7.84998C2 5.99998 2.99 5.84998 4.22 5.84998H19.78C21.01 5.84998 22 5.99998 22 7.84998C22 9.99998 21.01 9.84998 19.78 9.84998H4.22C2.99 9.84998 2 9.99998 2 7.84998Z" stroke="#FF0000" stroke-width="1.5"/>
                    <path d="M9.76001 14V17.55" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M14.36 14V17.55" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M3.5 10L4.91 18.64C5.23 20.58 6 22 8.86 22H14.89C18 22 18.46 20.64 18.82 18.76L20.5 10" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </button>
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
        {{ $customers->count() }}
        </span>
      </div>
    </div>
</div>
<style>
/* جلوگیری از اسکرول افقی در حالت موبایل */
@media (max-width: 768px) {
  html, body {
    overflow-x: hidden !important;
    width: 100% !important;
  }

  body > * {
    max-width: 100vw !important;
    overflow-x: clip !important;
  }

  /* در موبایل باکس‌ها و دکمه‌ها عرضشان از صفحه بیشتر نشود */
  div, table, img, button {
    max-width: 100% !important;
  }

  /* جلوگیری از ایجاد اسکرول به خاطر پدینگ یا بوردرهای داخلی */
  .p-4, .px-4, .mx-auto {
    overflow-x: clip !important;
  }
}

</style>

@endsection
