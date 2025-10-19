@extends('layouts.app')
@section('title','داشبورد')
@section('content')

@php
$orders = collect([
    (object)[ 'id' => 1020009, 'customer_name' => 'احمد رسولی', 'driver_name' => 'الیاس کریمی', 'origin' => 'هرات', 'destination' => 'کابل', 'status' => 'در انتظار', 'start_date' => '1404/6/10', 'end_date' => '1404/6/12', 'estimated_time' => '8hr', 'price' => '2891' ],
    (object)[ 'id' => 829890, 'customer_name' => 'محمد عزیزی', 'driver_name' => 'الیاس کریمی', 'origin' => 'م ش د', 'destination' => 'هرات', 'status' => 'در حال انجام', 'start_date' => '1404/6/10', 'end_date' => '1404/6/12', 'estimated_time' => '8hr', 'price' => '2891' ],
    (object)[ 'id' => 8298198, 'customer_name' => 'ظفرالله احمدی', 'driver_name' => 'الیاس کریمی', 'origin' => 'غزنی', 'destination' => 'هرات', 'status' => 'تکمیل', 'start_date' => '1404/6/10', 'end_date' => '1404/6/12', 'estimated_time' => '8hr', 'price' => '2891' ],
    (object)[ 'id' => 8298198, 'customer_name' => 'ظفرالله احمدی', 'driver_name' => 'الیاس کریمی', 'origin' => 'غزنی', 'destination' => 'هرات', 'status' => 'تکمیل', 'start_date' => '1404/6/10', 'end_date' => '1404/6/12', 'estimated_time' => '8hr', 'price' => '2891' ],
    (object)[ 'id' => 8298198, 'customer_name' => 'ظفرالله احمدی', 'driver_name' => 'الیاس کریمی', 'origin' => 'غزنی', 'destination' => 'هرات', 'status' => 'تکمیل', 'start_date' => '1404/6/10', 'end_date' => '1404/6/12', 'estimated_time' => '8hr', 'price' => '2891' ],
    (object)[ 'id' => 8298198, 'customer_name' => 'ظفرالله احمدی', 'driver_name' => 'الیاس کریمی', 'origin' => 'غزنی', 'destination' => 'هرات', 'status' => 'تکمیل', 'start_date' => '1404/6/10', 'end_date' => '1404/6/12', 'estimated_time' => '8hr', 'price' => '2891' ],
    (object)[ 'id' => 8298198, 'customer_name' => 'ظفرالله احمدی', 'driver_name' => 'الیاس کریمی', 'origin' => 'غزنی', 'destination' => 'هرات', 'status' => 'تکمیل', 'start_date' => '1404/6/10', 'end_date' => '1404/6/12', 'estimated_time' => '8hr', 'price' => '2891' ],
    (object)[ 'id' => 8298198, 'customer_name' => 'ظفرالله احمدی', 'driver_name' => 'الیاس کریمی', 'origin' => 'غزنی', 'destination' => 'هرات', 'status' => 'تکمیل', 'start_date' => '1404/6/10', 'end_date' => '1404/6/12', 'estimated_time' => '8hr', 'price' => '2891' ],
    (object)[ 'id' => 8298198, 'customer_name' => 'ظفرالله احمدی', 'driver_name' => 'الیاس کریمی', 'origin' => 'غزنی', 'destination' => 'هرات', 'status' => 'تکمیل', 'start_date' => '1404/6/10', 'end_date' => '1404/6/12', 'estimated_time' => '8hr', 'price' => '2891' ],
    (object)[ 'id' => 8298198, 'customer_name' => 'ظفرالله احمدی', 'driver_name' => 'الیاس کریمی', 'origin' => 'غزنی', 'destination' => 'هرات', 'status' => 'تکمیل', 'start_date' => '1404/6/10', 'end_date' => '1404/6/12', 'estimated_time' => '8hr', 'price' => '2891' ],
    (object)[ 'id' => 8298198, 'customer_name' => 'ظفرالله احمدی', 'driver_name' => 'الیاس کریمی', 'origin' => 'غزنی', 'destination' => 'هرات', 'status' => 'تکمیل', 'start_date' => '1404/6/10', 'end_date' => '1404/6/12', 'estimated_time' => '8hr', 'price' => '2891' ],
]);
@endphp

<div class="p-4 bg-white rounded-2xl shadow mx-auto mt-4 w-full max-w-full overflow-x-hidden">

  <!-- نوار بالایی -->
  <div class="flex flex-col sm:flex-row justify-between items-center gap-3 sm:gap-2 md:gap-1 px-2 sm:px-3">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-800 text-center sm:text-right">
      سفارشات
    </h2>

    <div class="flex flex-col sm:flex-row items-center gap-2 w-full sm:w-auto justify-center sm:justify-end">
      <button
        class="bg-[#0800FF] hover:bg-[#0B35CC] text-white rounded-lg px-4 py-2 flex items-center justify-center gap-2 text-sm sm:text-base">
        <span>روزانه</span>
        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.5999 7.45833L11.1666 12.8917C10.5249 13.5333 9.4749 13.5333 8.83324 12.8917L3.3999 7.45833" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>

      </button>

      <button onclick="window.location.href='{{ url('/orders-Form') }}'"
        class="bg-[#0800FF] hover:bg-[#0B35CC] text-white rounded-lg px-4 py-2 flex items-center justify-center gap-2 text-sm sm:text-base">
        <span>اضافه کردن سفارش جدید</span>
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

  <!-- دسکتاپ و تبلت -->
  <div class="hidden sm:block mt-4">
    <div class="w-full max-w-full overflow-x-hidden sm:overflow-x-auto">
      <table class="w-full   text-right  text-[12px] md:text-[13px] lg:text-[14px]">
        <thead class="bg-gray-100   text-gray-700">
          <tr class="text-center ">
            <th class="p-2">ID</th>
            <th class="p-2">مشتری</th>
            <th class="p-2">راننده</th>
            <th class="p-2">مبدا</th>
            <th class="p-2">مقصد</th>
            <th class="p-2">وضعیت</th>
            <th class="p-2">شروع</th>
            <th class="p-2">پایان</th>
            <th class="p-2">تایم</th>
            <th class="p-2">مبلغ</th>
            <th class="p-2">ادیت</th>
            <th class="p-2">لغو</th>
          </tr>
        </thead>

        <tbody class="divide-y">
          @foreach($orders as $order)
          <tr class="hover:bg-gray-100 border-dashed border-gray-400 text-center">
            <td class="p-2 font-semibold">{{ $order->id }}</td>
            <td class="p-2">{{ $order->customer_name }}</td>
            <td class="p-2">{{ $order->driver_name }}</td>
            <td class="p-2">{{ $order->origin }}</td>
            <td class="p-2">{{ $order->destination }}</td>
            <td class="p-2">
              <span class="border border-dashed border-gray-400  py-1 px-2 rounded-lg inline-block text-center text-[12px] w-[80px]">
                {{ $order->status }}
              </span>
            </td>
            <td class="p-2">{{ $order->start_date }}</td>
            <td class="p-2">{{ $order->end_date }}</td>
            <td class="p-2">{{ $order->estimated_time }}</td>
            <td class="p-2">{{ $order->price }}؋</td>
            <td class="p-2">
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
            <td class="p-2">
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
  </div>

  <!-- موبایل -->
  <div class="sm:hidden mt-4 grid grid-cols-1 gap-2">
    @foreach($orders as $order)
    <div class="bg-white text-sm flex  flex-col p-3 rounded-lg shadow">
      <div><span class="font-semibold">ID:</span> {{ $order->id }}</div>
      <div><span class="font-semibold">مشتری:</span> {{ $order->customer_name }}</div>
      <div><span class="font-semibold">راننده:</span> {{ $order->driver_name }}</div>
      <div><span class="font-semibold">مبدا:</span> {{ $order->origin }}</div>
      <div><span class="font-semibold">مقصد:</span> {{ $order->destination }}</div>
      <div><span class="font-semibold">شروع:</span> {{ $order->start_date }}</div>
      <div><span class="font-semibold">پایان:</span> {{ $order->end_date }}</div>
      <div><span class="font-semibold">تایم:</span> {{ $order->estimated_time }}</div>
      <div><span class="font-semibold">مبلغ:</span> {{ $order->price }}؋</div>

      <div class="flex justify-between mt-2 items-center">
        <span class="border border-gray-300  px-2 py-1 rounded text-center text-xs">{{ $order->status }}</span>
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
    @endforeach
  </div>

  <!-- Pagination -->
  <div class="flex items-start justify-start mt-4 space-x-1 rtl:space-x-reverse">
    <button class=" w-7 h-7 rounded-md border border-gray-300 text-gray-500 bg-[#F3F3F3] hover:bg-gray-100">‹</button>
    <button class=" w-7 h-7 rounded-md border border-blue-500 text-blue-600 bg-[#F3F3F3] text-xs font-medium">1</button>
    <button class=" w-7 h-7 rounded-md border border-transparent text-gray-700 bg-[#F3F3F3] hover:border-gray-300 hover:bg-gray-100 text-xs">2</button>
    <button class=" w-7 h-7 rounded-md border border-transparent text-gray-700 bg-[#F3F3F3] text-xs">...</button>
    <button class=" w-7 h-7 rounded-md border border-transparent text-gray-700 bg-[#F3F3F3] hover:border-gray-300 hover:bg-gray-100 text-xs">25</button>
    <button class=" w-7 h-7 rounded-md border border-gray-300 text-gray-500 bg-[#F3F3F3] hover:bg-gray-100">›</button>
  </div>

</div>

<style>
/* رفع اسکرول افقی در موبایل  */
@media (max-width: 768px) {
  html, body {
    overflow-x: hidden !important;
    width: 100% !important;
  }

  body > * {
    max-width: 100vw !important;
    overflow-x: clip !important;
  }

  /* مخصوص divهای داخلی در حالت sm:hidden */
  .sm\:hidden, .p-4, .mx-auto, .grid {
    overflow-x: clip !important;
    max-width: 100% !important;
  }

  div, table, img, button {
    max-width: 100% !important;
  }
}

/* تنظیم حالت موبایل برای وسط‌چین کردن دکمه‌ها و پیجینیشن */
@media (max-width: 768px) {

  /* دکمه‌های روزانه و اضافه‌کردن سفارش */
  .flex.flex-col.sm\:flex-row.items-center.gap-2.w-full.sm\:w-auto.justify-center.sm\:justify-end {
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;
    text-align: center !important;
  }

  /* متن در وسط */
  .flex.flex-col.sm\:flex-row.items-center.gap-2.w-full.sm\:w-auto.justify-center.sm\:justify-end span {
    text-align: center !important;
  }

  /* دکمه‌ها وسط صفحه */
  .flex.flex-col.sm\:flex-row.items-center.gap-2.w-full.sm\:w-auto.justify-center.sm\:justify-end button {
    width: 100% !important;
    justify-content: center !important;
  }

  /* پیجینیشن وسط‌چین */
  .flex.items-start.justify-start.mt-4.space-x-1.rtl\:space-x-reverse {
    justify-content: center !important;
    align-items: center !important;
  }
}
</style>


@endsection
