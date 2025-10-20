@extends('layouts.app')
@section('title','ادمین‌ها')
@section('content')
<section dir="rtl" class="h-full flex flex-col">
  <div class="px-0  py-0 md:px-2 md:pt-2  flex-1">
    <div class="w-full  mx-auto max-w-none   md:max-w-[1100px] xl:max-w-screen-xl">
      <div class="h-full w-full bg-white border-0 md:border rounded-2xl md:rounded-2xl p-0 md:p-6 shadow-none md:shadow-md overflow-hidden">

        {{-- هدر --}}
        <div class="px-3  sm:px-4 py-3 border-b flex items-center justify-between gap-2">
          <h1 class="text-lg sm:text-xl font-bold">ادمین‌ها</h1>

          <a href="{{ route('admins.infoadmin') }}"
             class="inline-flex items-center gap-2 px-3 flex-row-reverse sm:px-4 py-2 rounded-lg bg-[#0800FF] hover:bg-[#0B35CC] text-white text-xs sm:text-sm whitespace-nowrap focus:outline-none focus:ring-2 focus:ring-blue-300">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11.46 13.73C13.0119 13.73 14.27 12.4719 14.27 10.92C14.27 9.36806 13.0119 8.10999 11.46 8.10999C9.9081 8.10999 8.65002 9.36806 8.65002 10.92C8.65002 12.4719 9.9081 13.73 11.46 13.73Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M16.65 20.2C16.65 17.87 14.33 15.97 11.46 15.97C8.59002 15.97 6.27002 17.86 6.27002 20.2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M21 12.5C21 17.75 16.75 22 11.5 22C6.25 22 2 17.75 2 12.5C2 7.25 6.25 3 11.5 3C12.81 3 14.06 3.25999 15.2 3.73999C15.07 4.13999 15 4.56 15 5C15 5.75 15.21 6.46 15.58 7.06C15.78 7.4 16.04 7.70997 16.34 7.96997C17.04 8.60997 17.97 9 19 9C19.44 9 19.86 8.92998 20.25 8.78998C20.73 9.92998 21 11.19 21 12.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M23 5C23 5.32 22.96 5.62999 22.88 5.92999C22.79 6.32999 22.63 6.72 22.42 7.06C21.94 7.87 21.17 8.49998 20.25 8.78998C19.86 8.92998 19.44 9 19 9C17.97 9 17.04 8.60997 16.34 7.96997C16.04 7.70997 15.78 7.4 15.58 7.06C15.21 6.46 15 5.75 15 5C15 4.56 15.07 4.13999 15.2 3.73999C15.39 3.15999 15.71 2.64002 16.13 2.21002C16.86 1.46002 17.88 1 19 1C20.18 1 21.25 1.51002 21.97 2.33002C22.61 3.04002 23 3.98 23 5Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M20.49 4.97998H17.51" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M19 3.52002V6.51001" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>اضافه کردن ادمین جدید</span>
          </a>
        </div>

        {{-- جدول دسکتاپ --}}
        <div class="hidden lg:block">
          <div class="overflow-x-auto">
            <div>
             <div class="grid grid-cols-[64px,0.8fr,0.8fr,1.6fr,1.6fr,1.4fr,1fr,1fr,60px,60px]
            bg-gray-100   text-gray-700 text-[13px] xl:text-sm font-semibold text-center justify-items-center">

                <div class="p-3">عکس</div>
                <div class="p-3">نام</div>
                <div class="p-3">تخلص</div>
                <div class="p-3">تلفن</div>
                <div class="p-3">ایمیل</div>
                <div class="p-3">آدرس</div>
                <div class="p-3">برداشت</div>
                <div class="p-3">رمز عبور</div>
                <div class="p-3">ادیت</div>
                <div class="p-3">حذف</div>
              </div>

              @for($i=1;$i<=8;$i++)
            <div class="grid grid-cols-[64px,1fr,1.2fr,1.2fr,1.6fr,1.4fr,1fr,1fr,60px,60px]
            border-b hover:bg-gray-100 border-dashed border-gray-400  text-[13px] xl:text-sm justify-items-center place-items-center text-center">

                <div class="p-2">
                  <img class="w-10 h-10 rounded-lg object-cover" src="https://i.pravatar.cc/64?img={{ $i }}" alt="">
                </div>
                <div class="p-3 whitespace-nowrap">احمد</div>
                <div class="p-3 whitespace-nowrap">احمدی</div>
                <div class="p-3 whitespace-nowrap"><span dir="ltr" class="block text-center">+93 799 888 890</span></div>
                <div class="p-3 whitespace-nowrap"><span dir="ltr" class="block text-center">ahmad@example.com</span></div>
                <div class="p-3 whitespace-nowrap">هرات، سرک…</div>
                <div class="p-3 whitespace-nowrap">#892309999</div>
                <div class="p-3 whitespace-nowrap font-semibold">28sdhh</div>
                <div class="p-3">
                  <button class="text-blue-600 hover:text-blue-700" title="ویرایش">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_3195_635)">
                        <path d="M10.97 2H8.97C3.97 2 1.97 4 1.97 9V15C1.97 20 3.97 22 8.97 22H14.97C19.97 22 21.97 20 21.97 15V13" stroke="#0004FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21.88 3.55998C20.65 6.62998 17.56 10.81 14.98 12.88L13.4 14.14C13.2 14.29 13 14.41 12.77 14.5C12.77 14.35 12.76 14.2 12.74 14.04C12.65 13.37 12.35 12.74 11.81 12.21C11.26 11.66 10.6 11.35 9.92 11.26C9.76 11.25 9.6 11.24 9.44 11.25C9.53 11 9.66 10.77 9.83 10.58L11.09 8.99998C13.16 6.41998 17.35 3.30998 20.41 2.07998C20.88 1.89998 21.34 2.03998 21.63 2.32998C21.93 2.62998 22.07 3.08998 21.88 3.55998Z" stroke="#0004FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.78 14.49C12.78 15.37 12.44 16.21 11.81 16.85C11.32 17.34 10.66 17.68 9.87 17.78L7.9 17.99C6.83 18.11 5.91 17.2 6.03 16.11L6.24 14.14C6.43 12.39 7.89 11.27 9.45 11.24C9.61 11.23 9.77 11.24 9.93 11.25C10.61 11.34 11.27 11.65 11.82 12.2C12.36 12.74 12.66 13.36 12.75 14.03C12.77 14.19 12.78 14.35 12.78 14.49Z" stroke="#0004FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.82 11.9799C15.82 9.88994 14.13 8.18994 12.03 8.18994" stroke="#0004FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </g>
                      <defs><clipPath id="clip0_3195_635"><rect width="24" height="24" fill="white"/></clipPath></defs>
                    </svg>
                  </button>
                </div>
                <div class="p-3">
                  <button class="text-red-600 hover:text-red-700" title="حذف">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.81 2L5.19 5.63" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M15.19 2L18.81 5.63" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M2 7.84998C2 5.99998 2.99 5.84998 4.22 5.84998H19.78C21.01 5.84998 22 5.99998 22 7.84998C22 9.99998 21.01 9.84998 19.78 9.84998H4.22C2.99 9.84998 2 9.99998 2 7.84998Z" stroke="#ff0000" stroke-width="1.5"/>
                      <path d="M9.76001 14V17.55" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round"/>
                      <path d="M14.36 14V17.55" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round"/>
                      <path d="M3.5 10L4.91 18.64C5.23 20.58 6 22 8.86 22H14.89C18 22 18.46 20.64 18.82 18.76L20.5 10" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                  </button>
                </div>
              </div>
              @endfor
            </div>
          </div>
        </div>

        {{-- کارت‌های تبلت: --}}
        <div class="hidden md:grid lg:hidden grid-cols-1 md:grid-cols-2 gap-4 p-3">
          @for($i=1;$i<=8;$i++)
          <div class="border rounded-xl p-4 hover:shadow-sm transition ">
            <img class="w-30 h-20 rounded-xl object-cover  mb-3" src="https://i.pravatar.cc/64?img={{ $i }}" alt="">
            <div class="text-base font-semibold">احمد <span class="text-gray-600">| احمدی</span></div>

            <div class="mt-4 grid grid-cols-2 gap-3 text-[12px] sm:text-[13px]">
              <div class="col-span-1">
                <div class="text-gray-500 mb-0.5">تلفن</div>
                <div dir="ltr" class="font-medium break-words">+93 799 888 890</div>
              </div>

              <div class="col-span-1">
                <div class="text-gray-500 mb-0.5">آدرس</div>
                <div class="font-medium break-words">هرات، سرک…</div>
              </div>
               <div class="col-span-1">
                <div class="text-gray-500 mb-0.5">ایمیل</div>
                <div dir="ltr" class="font-medium ">ahmad@example.com</div>
              </div>
              <div class="col-span-1">
                <div class="text-gray-500 mb-0.5">برداشت</div>
                <div class="font-medium">#892309999</div>
              </div>
              <div class="col-span-1   ">
                <div class="text-gray-500 mb-0.5">رمز</div>
                <div class="font-semibold">28sdhh</div>
              </div>
              <div class="col-span-1 mt-2  ">

               <div>
                 <button class="text-blue-600 hover:text-blue-700" title="ویرایش">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_3195_635)">
                      <path d="M10.97 2H8.97C3.97 2 1.97 4 1.97 9V15C1.97 20 3.97 22 8.97 22H14.97C19.97 22 21.97 20 21.97 15V13" stroke="#0004FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M21.88 3.55998C20.65 6.62998 17.56 10.81 14.98 12.88L13.4 14.14C13.2 14.29 13 14.41 12.77 14.5C12.77 14.35 12.76 14.2 12.74 14.04C12.65 13.37 12.35 12.74 11.81 12.21C11.26 11.66 10.6 11.35 9.92 11.26C9.76 11.25 9.6 11.24 9.44 11.25C9.53 11 9.66 10.77 9.83 10.58L11.09 8.99998C13.16 6.41998 17.35 3.30998 20.41 2.07998C20.88 1.89998 21.34 2.03998 21.63 2.32998C21.93 2.62998 22.07 3.08998 21.88 3.55998Z" stroke="#0004FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M12.78 14.49C12.78 15.37 12.44 16.21 11.81 16.85C11.32 17.34 10.66 17.68 9.87 17.78L7.9 17.99C6.83 18.11 5.91 17.2 6.03 16.11L6.24 14.14C6.43 12.39 7.89 11.27 9.45 11.24C9.61 11.23 9.77 11.24 9.93 11.25C10.61 11.34 11.27 11.65 11.82 12.2C12.36 12.74 12.66 13.36 12.75 14.03C12.77 14.19 12.78 14.35 12.78 14.49Z" stroke="#0004FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M15.82 11.9799C15.82 9.88994 14.13 8.18994 12.03 8.18994" stroke="#0004FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <defs><clipPath id="clip0_3195_635"><rect width="24" height="24" fill="white"/></clipPath></defs>
                  </svg>
                </button>
                <button class="text-red-600 hover:text-red-700" title="حذف">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.81 2L5.19 5.63" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.19 2L18.81 5.63" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2 7.84998C2 5.99998 2.99 5.84998 4.22 5.84998H19.78C21.01 5.84998 22 5.99998 22 7.84998C22 9.99998 21.01 9.84998 19.78 9.84998H4.22C2.99 9.84998 2 9.99998 2 7.84998Z" stroke="#ff0000" stroke-width="1.5"/>
                    <path d="M9.76001 14V17.55" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M14.36 14V17.55" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M3.5 10L4.91 18.64C5.23 20.58 6 22 8.86 22H14.89C18 22 18.46 20.64 18.82 18.76L20.5 10" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round"/>
                  </svg>
                </button>
               </div>
              </div>
            </div>

          </div>
          @endfor
        </div>

        {{-- کارت‌های موبایل: md --}}
       <div class="md:hidden p-3 space-y-3" dir="rtl">
  @for($i=1;$i<=8;$i++)
  <div class="border rounded-xl p-3">
    <!-- هدر کارت: عکس و نام/تخلص وسط -->
    <div class="flex flex-col items-center text-center">
      <img class="w-14 h-14 rounded-xl object-cover mb-2.5" src="https://i.pravatar.cc/64?img={{ $i }}" alt="">
      <div class="font-semibold text-[13px] leading-truncateها">
        احمد <span class="text-gray-600">| احمدی</span>
      </div>
    </div>

    <!-- بدنه اطلاعات (بدون تغییر) -->
    <div class="mt-3 grid grid-cols-2 gap-4 text-[12px]">
      <div class="space-y-2">
        <div>
          <div class="text-gray-500">تلفن</div>
          <div dir="ltr" class="font-medium break-words">+93 799 888 890</div>
        </div>
        <div>
          <div class="text-gray-500">ایمیل</div>
          <div dir="ltr" class="font-medium break-words">ahmad@example.com</div>
        </div>
        <div>
          <div class="text-gray-500">آدرس</div>
          <div class="font-medium break-words">هرات، سرک…</div>
        </div>
      </div>

      <div class="space-y-2 flex flex-col">
        <div>
          <div class="text-gray-500">برداشت</div>
          <div class="font-medium">#892309999</div>
        </div>
        <div>
          <div class="text-gray-500">رمز</div>
          <div class="font-semibold">28sdhh</div>
        </div>

        <!-- اکشن‌ها با بوردر و متن کنار آیکن -->

 <div class="flex flex-wrap items-center gap-1 mt-2 min-w-0">
  <button
    class="inline-flex items-center gap-1 px-2 py-2 border rounded-md text-blue-600 hover:bg-blue-50 text-[11px] leading-none min-w-0"
    title="ویرایش" aria-label="ویرایش">
     <span class=" ">ویرایش</span>
    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" class="shrink-0" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_3195_635)">
                <path d="M10.97 2H8.97C3.97 2 1.97 4 1.97 9V15C1.97 20 3.97 22 8.97 22H14.97C19.97 22 21.97 20 21.97 15V13"
                      stroke="#0004FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M21.88 3.55998C20.65 6.62998 17.56 10.81 14.98 12.88L13.4 14.14C13.2 14.29 13 14.41 12.77 14.5C12.77 14.35 12.76 14.2 12.74 14.04C12.65 13.37 12.35 12.74 11.81 12.21C11.26 11.66 10.6 11.35 9.92 11.26C9.76 11.25 9.6 11.24 9.44 11.25C9.53 11 9.66 10.77 9.83 10.58L11.09 8.99998C13.16 6.41998 17.35 3.30998 20.41 2.07998C20.88 1.89998 21.34 2.03998 21.63 2.32998C21.93 2.62998 22.07 3.08998 21.88 3.55998Z"
                      stroke="#0004FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12.78 14.49C12.78 15.37 12.44 16.21 11.81 16.85C11.32 17.34 10.66 17.68 9.87 17.78L7.9 17.99C6.83 18.11 5.91 17.2 6.03 16.11L6.24 14.14C6.43 12.39 7.89 11.27 9.45 11.24C9.61 11.23 9.77 11.24 9.93 11.25C10.61 11.34 11.27 11.65 11.82 12.2C12.36 12.74 12.66 13.36 12.75 14.03C12.77 14.19 12.78 14.35 12.78 14.49Z"
                      stroke="#0004FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15.82 11.9799C15.82 9.88994 14.13 8.18994 12.03 8.18994"
                      stroke="#0004FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </g>
              <defs><clipPath id="clip0_3195_635"><rect width="24" height="24" fill="white"/></clipPath></defs>
            </svg>

          </button>

         <button
    class="inline-flex items-center gap-1 px-2 py-2 border rounded-md text-red-600 hover:bg-red-50 text-[11px] leading-none min-w-0"
    title="حذف" aria-label="حذف">
      <span class="">حذف</span>
    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" class="shrink-0" xmlns="http://www.w3.org/2000/svg">

              <path d="M8.81 2L5.19 5.63" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M15.19 2L18.81 5.63" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M2 7.84998C2 5.99998 2.99 5.84998 4.22 5.84998H19.78C21.01 5.84998 22 5.99998 22 7.84998C22 9.99998 21.01 9.84998 19.78 9.84998H4.22C2.99 9.84998 2 9.99998 2 7.84998Z" stroke="#ff0000" stroke-width="1.5"/>
              <path d="M9.76001 14V17.55" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M14.36 14V17.55" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M3.5 10L4.91 18.64C5.23 20.58 6 22 8.86 22H14.89C18 22 18.46 20.64 18.82 18.76L20.5 10" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round"/>
            </svg>

          </button>
        </div>
      </div>
    </div>
  </div>
  @endfor
</div>



        {{-- فوتر --}}
        <div class="flex flex-col sm:flex-row items-center justify-between gap-3 p-3">
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
          <div class="text-sm text-gray-600 order-1 sm:order-2">
            تعداد کل ادمین‌ها:
            <span class="rounded-lg px-2 sm:px-3 py-1.5 border-[2px] border-gray-300 border-solid">20</span>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection
