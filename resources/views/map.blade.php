@extends('layouts.app')

@section('title', 'نقشه')

@section('content')
<main class="p-3 overflow-x-hidden">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

        {{-- کارت‌های بالایی --}}
        <div class="lg:col-span-2 bg-white text-center shadow-lg rounded-2xl justify-center items-center grid px-4 py-2 grid-cols-4 lg:grid-cols-6 gap-4">
            @foreach (range(1,6) as $i)
                <div class="{{ $i == 6 ? 'text-sm  border border-gray-400 w-[100px] rounded-lg shadow-lg p-2 text-gray-700' : 'text-xs text-gray-500' }}">
                    <p class="{{ $i == 6 ? 'font-bold text-gray-800' : '' }}">جمعه، 20 ثور</p>
                    <p>مبلغ 3000؋</p>
                </div>
            @endforeach
        </div>

        {{-- مشخصات بالا سمت راست --}}
        <div class="bg-white flex items-center py-4 rounded-2xl shadow-lg">
            <table class="w-full text-center text-sm text-gray-700">
                <tr>
                    <td class="border-l border-gray-800">
                        <h3 class="font-bold">توقف گاه ها</h3>
                        <p class="text-gray-500 text-[12px]">همه</p>
                    </td>
                    <td class="border-l border-gray-800">
                        <h3 class="font-bold">تایم ها</h3>
                        <p class="text-gray-500 text-[12px]">همه</p>
                    </td>
                    <td class="border-l border-gray-800">
                        <h3 class="font-bold">سفرها</h3>
                        <p class="text-gray-500 text-[12px]">همه</p>
                    </td>
                    <td>
                        <h3 class="font-bold">مبلغ</h3>
                        <p class="text-gray-500 text-[12px]">همه</p>
                    </td>
                </tr>
            </table>
        </div>

        {{-- جدول سفرها --}}
    <div class="lg:col-span-2 flex justify-center bg-white shadow-lg rounded-2xl h-[650px] overflow-y-auto overflow-x-hidden items-start p-4">
    <div class="border border-gray-300 rounded-lg w-full">
        @foreach (range(1,6) as $i)
            <div class="w-full border-dotted border-b border-gray-500 flex flex-col md:flex-row py-4 space-y-2 md:space-y-0 hover:bg-[#D9D9D94D] group text-right">

                <!-- مبدا و مقصد -->
                <div class="md:border-l border-gray-800 w-full md:w-auto">
                    <div class="flex time-info justify-between md:justify-center gap-3 items-center md:px-6 text-center px-2">
                        <div class="text-center leading-4">
                            <h1 class="font-bold">04:00</h1>
                            <p class="text-gray-500 text-sm">هرات</p>
                        </div>
                        <div class="leading-4 text-gray-500 px-2 md:px-5">
                            <p class="text-gray-800 text-[6px]">2 ساعت 5 دقیقه</p>
                            <p class="text-[14px]">{{ $i % 2 == 0 ? 'ایستگاه' : 'مستقیم' }}</p>
                        </div>
                        <div class="leading-4">
                            <h1 class="font-bold">09:00</h1>
                            <p class="text-gray-500 text-sm">کابل</p>
                        </div>
                    </div>
                </div>

                <!-- راننده -->
                <div class="flex items-center gap-2 md:border-l border-gray-800 px-3 md:px-4 w-full md:w-auto justify-center">
                    <img src="{{ asset('img/barber_team_03.jpg') }}" alt="" class="rounded-full w-10 h-10">
                    <div class="text-xs text-gray-600">
                        <h1 class="font-bold">احمد عزیزی</h1>
                        <p class="text-[10px]">تویوتا <span class="text-gray-500">929298ه.ش</span></p>
                    </div>
                </div>

                <!-- قیمت -->
                <div class="flex stop w-full md:w-[80px] items-center justify-between md:justify-center text-xs text-gray-500 border-t md:border-t-0 md:border-l border-gray-800 px-3 py-2 md:px-3">
                    <p class="text-[10px]">نفر/<span class="text-[#0D00FF]">700؋</span></p>
                    <p class="text-[10px]"> کل/<span class="text-[#0D00FF]"> 1000؋</span> </p>
                </div>

                <!-- ایستگاه و دکمه -->
                <div class="flex w-full but-group md:w-auto flex-row md:flex-col md:items-center md:gap-4 md:px-4 px-3 space-y-2 md:space-y-0 justify-between">
                    <div class="flex  flex-row lg:text-center lg:flex-col gap-2 text-xs text-gray-700">
                        <p class="text-[#FF0000]">{{ $i % 3 }}</p>
                        <p>ایستگاه</p>
                    </div>
                    <button class="text-gray-500 text-[10px] h-[30px] items-center justify-center border border-gray-300 px-3 py-1 rounded-lg w-20 group-hover:text-white group-hover:bg-[#0D00FF]">
                        انتخاب
                    </button>
                </div>

            </div>
        @endforeach
    </div>
</div>


        {{-- بخش سمت راست (پروفایل راننده) --}}
        <div>
             <div class="">
                    <!-- profile -->
                    <div class="bg-white shadow-lg rounded-2xl flex grid grid-cols-3 gap-2">
                        <div class="py-4 px-2">
                            <div class="flex gap-2 border-b w-[100px] h-[50px] border-gray-400">
                                <img src="{{ asset('img/barber_team_03.jpg') }}" alt="" class="rounded-full  w-[40px] h-[40px]">
                                <div class=" text-gray-600 mt-2  py-1">
                                    <h6 class="text-[10px] w-44 font-bold">احمد عزیزی</h6>
                                    <p class="text-[7px]">تویوتا |<span class="text-gray-500 text-[6px]">929298ه.ش</span></p>
                                </div>
                            </div>
                            <div class="text-[8px] text-gray-600 flex items-center mt-2 gap-1">
                               <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_633_936)">
                                    <path d="M5.0002 5.59609C5.71817 5.59609 6.3002 5.01406 6.3002 4.29609C6.3002 3.57812 5.71817 2.99609 5.0002 2.99609C4.28223 2.99609 3.7002 3.57812 3.7002 4.29609C3.7002 5.01406 4.28223 5.59609 5.0002 5.59609Z" stroke="#292D32"/>
                                    <path d="M1.50837 3.53718C2.32921 -0.0711579 7.67504 -0.0669911 8.49171 3.54134C8.97088 5.65801 7.65421 7.44968 6.50004 8.55801C5.66254 9.36634 4.33754 9.36634 3.49588 8.55801C2.34588 7.44968 1.02921 5.65384 1.50837 3.53718Z" stroke="#292D32"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_633_936">
                                    <rect width="10" height="10" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                                <p class="flex items-center gap-1">هرات
                                   <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_633_950)">
                                        <path d="M3.18984 1.97656L1.1665 3.9999L3.18984 6.02323" stroke="#292D32" stroke-opacity="0.6" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6.83314 4H1.22314" stroke="#292D32" stroke-opacity="0.6" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_633_950">
                                        <rect width="8" height="8" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    کابل
                                </p>
                            </div>
                            <div class="text-[8px] text-gray-600 flex items-center gap-1">
                               <svg width="14" height="14" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.16683 4.99967C9.16683 7.29967 7.30016 9.16634 5.00016 9.16634C2.70016 9.16634 0.833496 7.29967 0.833496 4.99967C0.833496 2.69967 2.70016 0.833008 5.00016 0.833008C7.30016 0.833008 9.16683 2.69967 9.16683 4.99967Z" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6.5457 6.32474L5.25404 5.55391C5.02904 5.42057 4.8457 5.09974 4.8457 4.83724V3.12891" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <p class="mt-3">2 ساعت 2 دقیقه / <span class="text-[#FF0000] ">3</span> توقف گاه</p>
                            </div>
                            <div class="text-[8px] text-gray-600 flex items-center mt-1 gap-1">
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.33318 9.16667H6.66651C8.34151 9.16667 8.64151 8.49583 8.72901 7.67917L9.04151 4.34583C9.15401 3.32917 8.86235 2.5 7.08318 2.5H2.91651C1.13735 2.5 0.84568 3.32917 0.95818 4.34583L1.27068 7.67917C1.35818 8.49583 1.65818 9.16667 3.33318 9.16667Z" stroke="#292D32" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3.3335 2.49967V2.16634C3.3335 1.42884 3.3335 0.833008 4.66683 0.833008H5.3335C6.66683 0.833008 6.66683 1.42884 6.66683 2.16634V2.49967" stroke="#292D32" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5.83317 5.41667V5.83333C5.83317 5.8375 5.83317 5.8375 5.83317 5.84167C5.83317 6.29583 5.829 6.66667 4.99984 6.66667C4.17484 6.66667 4.1665 6.3 4.1665 5.84583V5.41667C4.1665 5 4.1665 5 4.58317 5H5.4165C5.83317 5 5.83317 5 5.83317 5.41667Z" stroke="#292D32" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.021 4.58301C8.0585 5.28301 6.9585 5.69967 5.8335 5.84134" stroke="#292D32" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1.0918 4.69629C2.0293 5.33796 3.08763 5.72546 4.1668 5.84629" stroke="#292D32" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <p>وزن وسایل / نفر<span class="text-[#0D00FF] text-[8px]">6kg</span></p>
                            </div>
                            <div class="text-[7px] text-gray-600 flex items-center mt-1 gap-1">
                                <svg width="17" height="17" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_636_1023)">
                                    <path d="M7.0415 9.16634H2.95817C2.24984 9.16634 1.6665 8.58717 1.6665 7.87467V2.12468C1.6665 1.41634 2.24567 0.833008 2.95817 0.833008H7.0415C7.74983 0.833008 8.33317 1.41218 8.33317 2.12468V7.87467C8.33317 8.58717 7.754 9.16634 7.0415 9.16634Z" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7.70817 5.41634H2.2915C1.94567 5.41634 1.6665 5.13717 1.6665 4.79134V3.95801C1.6665 3.61217 1.94567 3.33301 2.2915 3.33301H7.70817C8.054 3.33301 8.33317 3.61217 8.33317 3.95801V4.79134C8.33317 5.13717 8.054 5.41634 7.70817 5.41634Z" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3.53954 7.37533H3.54328" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6.45604 7.37533H6.45979" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3.9585 2.08301H6.04183" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_636_1023">
                                    <rect width="10" height="10" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                                <p class="mt-2">ست خالی <span class="text-[#0D00FF] text-[8px]">6عدد</span>/تعداد مسافران<span class="text-[#0D00FF] text-[8px]">30نفر</span></p>
                            </div>
                            <div class="text-[8px] text-gray-600 flex items-center mt-1 gap-1">
                                <svg width="12" height="12" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.9585 5.72877C3.9585 6.13294 4.271 6.45794 4.65434 6.45794H5.43766C5.77099 6.45794 6.04183 6.17461 6.04183 5.82044C6.04183 5.44127 5.87517 5.30378 5.62933 5.21628L4.37516 4.77877C4.12933 4.69127 3.96267 4.55794 3.96267 4.17461C3.96267 3.82461 4.23349 3.53711 4.56683 3.53711H5.35016C5.73349 3.53711 6.046 3.86211 6.046 4.26628" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5 3.125V6.875" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.16683 4.99967C9.16683 7.29967 7.30016 9.16634 5.00016 9.16634C2.70016 9.16634 0.833496 7.29967 0.833496 4.99967C0.833496 2.69967 2.70016 0.833008 5.00016 0.833008" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7.0835 1.25V2.91667H8.75016" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.16683 0.833008L7.0835 2.91634" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <p>درآمد کل <span class="text-[#0D00FF] ">1000؋</span></p>
                            </div>
                            <div class="text-[8px] text-gray-600 flex items-center mt-1 gap-1">
                               <svg width="12" height="12" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.8335 2.08301H8.3335" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5.8335 3.33301H7.0835" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.75016 4.79134C8.75016 6.97884 6.97933 8.74967 4.79183 8.74967C2.60433 8.74967 0.833496 6.97884 0.833496 4.79134C0.833496 2.60384 2.60433 0.833008 4.79183 0.833008" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.16683 9.16634L8.3335 8.33301" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round"/>
                               </svg>
                                <p>در حال انجام</p>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <img src="{{ asset('img/75c56641-73a2-4f2d-bc99-e82e0ff1afdf.jpeg') }}" alt="" class="h-full rounded-2xl">
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="bg-white rounded-2xl shadow-lg p-4 mt-4 overflow-auto h-[400px] relative">
                        <!-- Buttons zoom-->
                        <div class="absolute top-4 left-4  z-10">
                            <button id="zoomOut" class="bg-[#0800FF] text-white px-3 py-1 rounded-md font-bold hover:bg-blue-700">−</button>
                            <button id="zoomIn" class="bg-[#0800FF] text-white px-3 py-1 rounded-md font-bold hover:bg-blue-700">+</button>
                        </div>

                        <!-- map -->
                        <div id="mapBox" class="map-container pt-3">
                            <iframe src="https://www.google.com/maps?q=Afghanistan&output=embed"
                            width="100%"
                            height="350px"
                            style="border: 0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
        </div>

    </div>
</main>
<style>
    html, body {
  overflow-x: hidden !important;
}
/* مخصوص بخش جدول سفرها */
.lg\:col-span-2 {
  overflow-x: hidden !important;
}

/* رفع بیرون‌زدگی محتوا در موبایل */
@media (max-width: 768px) {
  .pr-16 {
    padding-right: 0 !important;
  }
}
/* جلوگیری از افتادن دکمه انتخاب به خط بعدی */
.group {
  display: flex;
  flex-wrap: nowrap !important;
  align-items: center;
  justify-content: space-between;
}

.but-group{
  flex-wrap: nowrap !important;
}
.stop{
  flex-wrap: wrap !important;
}
/* برای باکس‌های داخلی که باعث شکست خط می‌شوند */
.group > div {
  flex: 1 1 auto;
  min-width: 0; /* جلوگیری از overflow و شکستن خط */
}

/* دکمه انتخاب همیشه در یک‌خط بماند */
.group button {
  white-space: nowrap !important;
}

/* وسط‌چینی کامل تایم و مسیر مستقیم */
.time-info {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 6px;
  flex-wrap: nowrap;
  text-align: center;
}
</style>
@endsection
