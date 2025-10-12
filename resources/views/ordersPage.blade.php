@extends('layouts.app')
 @section('title','داشبورد') 
 @section('content') 

 @php 
 $orders = collect
 ([
   (object)[ 
    'id' => 1020009, 
    'customer_name' => 'احمد رسولی', 
    'driver_name' => 'الیاس کریمی', 
    'origin' => 'هرات', 
    'destination' => 'کابل', 
    'status' => 'در انتظار', 
    'start_date' => '1404/6/10', 
    'end_date' => '1404/6/12', 
    'estimated_time' => '8hr', 
    'price' => ' 2891 '
    ], 
    (object)[ 
      'id' => 829890, 
      'customer_name' => 'محمد عزیزی', 
      'driver_name' => 'الیاس کریمی', 
      'origin' => 'م ش د', 
      'destination' => 'هرات', 
      'status' => 'در حال انجام', 
      'start_date' => '1404/6/10', 
      'end_date' => '1404/6/12', 
      'estimated_time' => '8hr', 
      'price' => ' 2891 ' 
      ], 
      (object) [ 
        'id' => 8298198, 
        'customer_name' => 'ظفرالله احمدی', 
        'driver_name' => 'الیاس کریمی', 
        'origin' => 'غزنی', 
        'destination' => 'هرات', 
        'status' => 'تکمیل', 
        'start_date' => '1404/6/10', 
        'end_date' => '1404/6/12', 
        'estimated_time' => '8hr', 
        'price' => ' 2891 ' 
        ], 
        (object)[ 'id' => 8298198, 
        'customer_name' => 'ظفرالله احمدی', 
        'driver_name' => 'الیاس کریمی', 
        'origin' => 'غزنی', 
        'destination' => 'هرات', 
        'status' => 'تکمیل', 
        'start_date' => '1404/6/10', 
        'end_date' => '1404/6/12', 
        'estimated_time' => '8hr', 
        'price' => ' 2891 '
         ],
          (object)[
             'id' => 8298198, 
             'customer_name' => 'ظفرالله احمدی', 
             'driver_name' => 'الیاس کریمی', 
             'origin' => 'غزنی', 
             'destination' => 'هرات', 
             'status' => 'تکمیل', 
             'start_date' => '1404/6/10', 
             'end_date' => '1404/6/12', 
             'estimated_time' => '8hr', 
             'price' => '؋2891' 
             ], 
             (object)[ 
              'id' => 8298198, 
              'customer_name' => 'ظفرالله احمدی', 
              'driver_name' => 'الیاس کریمی', 
              'origin' => 'غزنی', 
              'destination' => 'هرات', 
              'status' => 'تکمیل', 
              'start_date' => '1404/6/10', 
              'end_date' => '1404/6/12', 
              'estimated_time' => '8hr', 
              'price' => ' 2891 ' 
              ], 
              (object)[ 
                'id' => 8298198, 
                'customer_name' => 'ظفرالله احمدی', 
                'driver_name' => 'الیاس کریمی', 
                'origin' => 'غزنی', 
                'destination' => 'هرات', 
                'status' => 'تکمیل', 
                'start_date' => '1404/6/10', 
                'end_date' => '1404/6/12', 
                'estimated_time' => '8hr', 
                'price' => ' 2891 ' 
                ],
                 (object)[
                   'id' => 8298198, 
                   'customer_name' => 'ظفرالله احمدی', 
                   'driver_name' => 'الیاس کریمی', 
                   'origin' => 'غزنی', 
                   'destination' => 'هرات', 
                   'status' => 'تکمیل', 
                   'start_date' => '1404/6/10', 
                   'end_date' => '1404/6/12', 
                   'estimated_time' => '8hr', 
                   'price' => ' 2891 '
                    ],
                     ]); 
              @endphp 
              <div class="p-4 bg-[#FFFFFF] rounded-2xl shadow mx-auto mt-4 max-w-full md:w-[95%] lg:w-[1200px]"> 
                <!-- نوار بالایی --> 
                 <div class="flex flex-col sm:flex-row justify-between sm:items-center mb-4 gap-3"> 
                  <!-- عنوان -->
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 text-center sm:text-right">
                       سفارشات </h2> 
                       <!-- دکمه‌ها --> 
                        <div class="flex flex-col sm:flex-row items-center gap-2 w-full sm:w-auto justify-center sm:justify-end">
                           <!-- دکمه آبی -->
                             <button 
                             class="bg-indigo-600 hover:bg-blue-700 text-white rounded-lg px-4 
                             py-2 flex items-center justify-center gap-1 w-full sm:w-auto text-sm sm:text-base"> روزانه 
                             <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> 
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /> </svg> 
                            </button> 
                            <!-- دکمه بنفش --> 
                             <button 
                             onclick="window.location.href='{{ url('/orders-Form') }}'"
                             class="bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg px-4 py-2 flex items-center
                              justify-center gap-1 w-full sm:w-auto text-sm sm:text-base"> 
                              اضافه کردن سفارش جدید 
                              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                <path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z
                                " stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M8 12H16" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /> 
                                 <path d="M12 16V8" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /> 
                                </svg> </button> </div> </div> <!-- جدول سفارشات --> <div class="overflow-x-auto rounded-lg mt-4"> 
                                  <table class="hidden md:table min-w-full bg-white text-right text-sm border-t border-b border-gray-200"> 
                                    <thead class="bg-gray-100 text-gray-600"> <tr class="hover:bg-gray-50 text-center border-b border-dashed border-gray-300 last:border-b">
                                       <th class="p-4 border-x-0 rounded-tr-lg rounded-br-lg bg-gray-100">آی‌دی</th> 
                                       <th class="p-3">نام مشتری</th> 
                                       <th class="p-3">نام راننده</th> 
                                       <th class="p-3">مبدا</th> 
                                       <th class="p-3">مقصد</th> 
                                       <th class="p-3">وضعیت</th> 
                                       <th class="p-3">تاریخ شروع</th> 
                                       <th class="p-3">تاریخ ختم</th> 
                                       <th class="p-3">تایم احتمالی</th> 
                                       <th class="p-3">مبلغ</th> 
                                       <th class="p-3">ادیت</th> 
                                       <th class="p-3 border-x-0 rounded-tl-lg rounded-bl-lg bg-gray-100">لغو</th> 
                                      </tr> </thead> <tbody class="divide-y">
                                         @foreach ($orders as $order) 
                                         <tr class="hover:bg-gray-50 text-center border-b border-dashed border-gray-300 last:border-b"> 
                                         <td class="p-3 font-semibold">{{ $order->id }}</td> 
                                         <td class="p-3">{{ $order->customer_name }}</td> 
                                         <td class="p-3">{{ $order->driver_name }}</td> 
                                         <td class="p-3">{{ $order->origin }}</td> 
                                         <td class="p-3">{{ $order->destination }}</td> 
                                         <td class="p-3 text-center"> @if($order->status == 'در حال انجام') 
                                          <button class="border border-black/30 py-1 rounded-lg text-xs font-medium w-20 text-gray-600"> در حال انجام 
                                        </button>
                                         @elseif($order->status == 'تکمیل')
                                          <button class="border border-black/30 py-1 rounded-lg text-xs font-medium w-20 text-gray-600"> 
                                            تکمیل </button>
                                             @else 
                                             <button class="border border-black/30 py-1 rounded-lg text-xs font-medium w-20 text-gray-600">
                                               در انتظار </button>
                                                @endif </td> 
                                                <td class="p-3">{{ $order->start_date }}</td> 
                                                <td class="p-3">{{ $order->end_date }}</td> 
                                                <td class="p-3">{{ $order->estimated_time }}</td> 
                                                <td class="p-3 flex items-center justify-center">{{ $order->price }} <span>؋</span></td> 
                                                <td class="p-3 text-indigo-600 cursor-pointer"> 
                                                  <!-- آیکن ادیت --> 
                                                   <svg class="w-5 h-5 mx-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                                    <path d="M11 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V13" stroke="#0009FF" 
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /> 
                                                    <path d="M16.04 3.02001L8.16 10.9C7.86 11.2 7.56 11.79 7.5 12.22L7.07 15.23C6.91 16.32 7.68 17.08 8.77 
                                                    16.93L11.78 16.5C12.2 16.44 12.79 16.14 13.1 15.84L20.98 7.96001C22.34 6.60001 22.98 5.02001 20.98 3.02001C18.98 1.02001 17.4 1.66001 16.04 3.02001Z"
                                                     stroke="#0009FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /> 
                                                    </svg> </td> 
                                                    <td class="p-3 text-red-500 cursor-pointer"> 
                                                      <!-- آیکن حذف --> 
                                                       <svg class="w-5 h-5 mx-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                                        <path d="M8.81 2L5.19 5.63" stroke="#FF0000" stroke-width="1.5" stroke-miterlimit="10" 
                                                        stroke-linecap="round" stroke-linejoin="round"/> <path d="M15.19 2L18.81 5.63" 
                                                        stroke="#FF0000" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/> 
                                                        <path d="M2 7.84998C2 5.99998 2.99 5.84998 4.22 5.84998H19.78C21.01 5.84998 22 5.99998 
                                                        22 7.84998C22 9.99998 21.01 9.84998 19.78 9.84998H4.22C2.99 9.84998 2 9.99998 2 7.84998Z" 
                                                        stroke="#FF0000" stroke-width="1.5"/> <path d="M9.76001 14V17.55" stroke="#FF0000" 
                                                        stroke-width="1.5" stroke-linecap="round"/> <path d="M14.36 14V17.55" stroke="#FF0000" 
                                                        stroke-width="1.5" stroke-linecap="round"/> 
                                                        <path d="M3.5 10L4.91 18.64C5.23 20.58 6 22 8.86 22H14.89C18 22 18.46 20.64 18.82 18.76L20.5 10"
                                                         stroke="#FF0000" stroke-width="1.5" stroke-linecap="round"/> 
                                                        </svg> 
                                                      </td> 
                                                    </tr> 
                                                    @endforeach 
                                                  </tbody> 
                                                </table> 
                                                <!-- نسخه موبایل --> 
                                                 <div class="md:hidden space-y-4">
                                                   @foreach ($orders as $order) 
                                                   <div class="bg-white p-4 rounded-xl shadow border border-gray-200"> 
                                                    <div class="flex justify-between items-start mb-3"> 
                                                      <!-- ستون راست: اطلاعات سفارش --> 
                                                       <div class="space-y-1 text-right"> 
                                                        <p class="text-sm text-gray-700">
                                                          <span class="font-medium" > نام مشتری : </span> {{ $order->customer_name }}</p> 
                                                          <p class="text-sm text-gray-700"><span class="font-medium"> نام راننده: </span> {{ $order->driver_name }}</p> 
                                                          <p class="text-sm text-gray-700"><span class="font-medium">مبدا:</span> {{ $order->origin }} </p> 
                                                          <p class="text-sm text-gray-700"><span class="font-medium">مقصد:</span> {{ $order->origin }} </p> 
                                                          <p class="text-sm text-gray-700"><span class="font-medium">وضعیت:</span> {{ $order->destination }}</p> 
                                                          <p class="text-sm text-gray-700"><span class="font-medium"> شروع تاریخ:</span> {{ $order->start_date }} </p> 
                                                          <p class="text-sm text-gray-700"><span class="font-medium">تاریخ ختم:</span> {{ $order->end_date }} </p> 
                                                          <p class="text-sm text-gray-700"><span class="font-medium">تایم احتمالی:</span> {{ $order->estimated_time }} </p> 
                                                          <p class="text-sm text-gray-700"><span class="font-medium"> قیمت:</span> {{ $order->price }}؋ </p> 
                                                          <div class="flex flex-col items-end gap-2"> 
                                                            <!-- وضعیت --> 
                                                             @if($order->status == 'در حال انجام') 
                                                             <span class="inline-block border p-3 border-black/30 py-1 rounded-lg text-xs font-medium w-25 text-gray-600"> 
                                                              {{ $order->status }} 
                                                            </span>
                                                             @elseif($order->status == 'تکمیل')
                                                              <span class="inline-block border p-3 border-black/30 py-1 rounded-lg text-xs font-medium w-25 text-gray-600">
                                                                 {{ $order->status }} 
                                                                </span> @else 
                                                                <span class="inline-block border p-3 border-black/30 py-1 rounded-lg text-xs font-medium w-25 text-gray-600"> 
                                                                  {{ $order->status }} </span> @endif 
                                                                  <div class="flex gap-2"> 
                                                                    <button class="text-indigo-600 border border-indigo-200 bg-indigo-50 p-2 rounded-lg hover:bg-indigo-100 transition"> 
                                                                      <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                                                        <path d="M11 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V13" stroke="#0009FF" stroke-width="1.5" 
                                                                        stroke-linecap="round" stroke-linejoin="round" /> 
                                                                        <path d="M16.04 3.02001L8.16 10.9C7.86 11.2 7.56 11.79 7.5 12.22L7.07 15.23C6.91 
                                                                        16.32 7.68 17.08 8.77 16.93L11.78 16.5C12.2 16.44 12.79 16.14 13.1 15.84L20.98 7.96001C22.34 6.60001 
                                                                        22.98 5.02001 20.98 3.02001C18.98 1.02001 17.4 1.66001 16.04 3.02001Z" stroke="#0009FF" 
                                                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                       </svg>
                                                                       </button> 
  <button class="text-red-600 border border-red-200 bg-red-50 p-2 rounded-lg hover:bg-red-100 transition"> 
    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> 
      <path d="M8.81 2L5.19 5.63" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /> 
      <path d="M15.19 2L18.81 5.63" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /> 
      <path d="M2 7.84998C2 5.99998 2.99 5.84998 4.22 5.84998H19.78C21.01 5.84998 22 5.99998 22 7.84998C22 9.99998 21.01 9.84998 
      19.78 9.84998H4.22C2.99 9.84998 2 9.99998 2 7.84998Z" stroke="#FF0000" stroke-width="1.5" /> 
      <path d="M9.76001 14V17.55" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round" /> 
      <path d="M14.36 14V17.55" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round" /> 
      <path d="M3.5 10L4.91 18.64C5.23 20.58 6 22 8.86 22H14.89C18 22 18.46 20.64 18.82 18.76L20.5 10" 
      stroke="#FF0000" stroke-width="1.5" stroke-linecap="round" /> 
    </svg> 
  </button> 
</div> 
</div> 
</div> 
</div> 
</div> 
@endforeach 
</div> 
<!-- شماره‌گذاری پایین صفحه --> 
 <div class="flex flex-wrap justify-center sm:justify-start items-center mr-0 sm:mr-2 mt-4 gap-1 sm:space-x-0.5">
   <!-- Previous Button -->
     <button class="flex items-center justify-center w-7 h-7 sm:w-6 sm:h-6 rounded-md border border-gray-300 
     text-gray-500 bg-[#F3F3F3] hover:bg-gray-100"> 
     <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> 
      <path d="M8.91003 19.9201L15.43 13.4001C16.2 12.6301 16.2 11.3701 15.43 10.6001L8.91003 4.08008" 
      stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /> 
    </svg> </button> 
    <!-- Page Numbers --> 
     <button class="flex items-center justify-center w-7 h-7 sm:w-6 sm:h-6 rounded-md border
      border-blue-500 text-blue-600 bg-[#F3F3F3] text-xs font-medium"> 1 </button> 
      <button class="flex items-center justify-center w-7 h-7 sm:w-6 sm:h-6 rounded-md border border-transparent 
      text-gray-700 bg-[#F3F3F3] hover:border-gray-300 hover:bg-gray-100 text-xs"> 2 </button>
       <button class="flex items-center justify-center w-7 h-7 sm:w-6 sm:h-6 rounded-md border border-transparent 
       text-gray-700 bg-[#F3F3F3] hover:border-gray-300 hover:bg-gray-100 text-xs"> 3 </button> 
       <!-- Hidden some pages on mobile --> 
        <button class="hidden sm:flex items-center justify-center w-6 h-6 rounded-md border 
        border-transparent text-gray-700 bg-[#F3F3F3] text-xs"> ... </button> 
        <button class="hidden sm:flex items-center justify-center w-7 h-7 sm:w-6 sm:h-6 rounded-md border
         border-transparent text-gray-700 bg-[#F3F3F3] hover:border-gray-300 hover:bg-gray-100 text-xs"> 25 </button>
          <!-- Next Button --> 
           <button class="flex items-center justify-center w-7 h-7 sm:w-6 sm:h-6 rounded-md border border-gray-300
            text-gray-500 bg-[#F3F3F3] hover:bg-gray-100"> <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" 
            xmlns="http://www.w3.org/2000/svg"> <path d="M15 19.9201L8.47997 13.4001C7.70997 12.6301 7.70997 11.3701 8.47997 10.6001L15 4.08008" 
            stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
           </svg>
           </button> 
          </div> 
        </div>
         @endsection