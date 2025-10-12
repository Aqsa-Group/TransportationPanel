@extends('layouts.app')

@section('title','داشبورد')

@section('content')

<div class="bg-gray-100 font-sans text-gray-800">
  <div class="min-h-full flex items-center justify-center p-3 sm:p-4">
    
    <!-- باکس اصلی سفید -->
    <div class="w-full md:w-[600px] lg:w-[1100px] bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col lg:flex-row">

      <!-- ستون فرم -->
      <div class="flex-1 lg:w-5/12 flex items-start justify-center sm:p-4 order-1 lg:order-1">
        <div class="w-full max-w-md">
          <h2 class="text-[40px] sm:text-2xl font-bold text-center lg:text-right flex items-center justify-center mt-[30px]">
            اطلاعات مشتری
          </h2>
          <p class="text-[10px] text-gray-500 text-center lg:text-right mb-6 mt-2 flex items-center justify-center">
            لطفا اطلاعات را وارد کنید.
          </p>

          <!-- نوار مراحل -->
          <div class="flex items-center justify-center mb-[30px] gap-10 sm:gap-20">
            <div class="flex items-center justify-between relative w-full">
              
              <!-- خط بین دکمه 1 و 2 -->
              <div class="absolute top-6 left-[calc(16.5%+1.5rem)] right-[calc(50%+3rem)] z-0">
                <div class="w-[125px] border-t-2 border-dashed border-gray-400"></div>
              </div>

              <!-- خط بین دکمه 2 و 3 -->
              <div class="absolute top-6 left-[calc(50%+3rem)] right-[calc(16.5%+1.5rem)] z-0">
                <div class="w-[140px] border-t-2 border-dashed border-gray-400"></div>
              </div>

              <!-- مرحله 1 -->
              <div class="flex flex-col items-center relative z-10">
                <div class="w-12 h-12 flex items-center justify-center rounded-2xl 
                            text-white font-bold bg-[#1100FF] shadow-md text-[25px]">
                  1
                </div>
                <p class="text-sm mt-2 text-gray-700">اطلاعات شخصی</p>
              </div>

              <!-- مرحله 2 -->
              <div class="flex flex-col items-center relative z-10 bg-white px-2">
                <div class="w-12 h-12 flex items-center justify-center rounded-2xl 
                            text-[#0D00C8] font-bold bg-[#1100FF]/20 shadow-md text-[25px]">
                  2
                </div>
                <p class="text-sm mt-2 text-gray-700">اطلاعات سفر</p>
              </div>

              <!-- مرحله 3 -->
              <div class="flex flex-col items-center relative z-10 bg-white px-2">
                <div class="w-12 h-12 flex items-center justify-center rounded-2xl 
                            text-[#1100FF] font-bold bg-[#1100FF]/20 text-[25px] shadow-md">
                  3
                </div>
                <p class="text-sm mt-2 text-gray-700">پیام ثبت</p>
              </div>
            </div>
          </div>

          <!-- فرم -->
          <form action="" class="space-y-8">
            @csrf

            <!-- شبکه اینپوت‌ها -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-12 gap-3">

              {{-- نام مشتری --}}
              <div class="relative w-full">
                <input type="text" name="customer" placeholder="نام مشتری"
                  class="w-full border rounded-xl py-3 pr-2 text-right">
                <!-- آیکن -->
                <svg class="w-4 h-4 absolute left-2 top-1/2 -translate-y-1/2 text-gray-500" 
                     viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z" 
                        stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M3.41016 22C3.41016 18.13 7.26018 15 12.0002 15C13.0402 15 14.0402 15.15 14.9702 15.43" 
                        stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>

              {{-- تخلص --}}
              <div class="relative w-full">
                <input type="text" name="lastname" placeholder="تخلص" 
                  class="w-full border rounded-xl py-3 pr-2 text-right">
                <svg class="w-4 h-4 absolute left-2 top-1/2 -translate-y-1/2 text-gray-500" 
                     viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 12C14.7614 12 17 9.76142 17 7..." stroke="#292D32" stroke-width="1.5" />
                </svg>
              </div>

              {{-- عکس --}}
              <div class="relative w-full">
                <input type="text" placeholder="عکس" class="w-full border rounded-xl py-3 pr-2 text-right">
                <svg class="w-4 h-4 absolute left-2 top-1/2 -translate-y-1/2 text-gray-500" 
                     viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 22H15C20 22 22 20..." stroke="#292D32" stroke-width="1.5" />
                </svg>
              </div>

              {{-- شماره تماس --}}
              <div class="relative w-full">
                <input type="text" placeholder="شماره تماس" class="w-full border rounded-xl py-3 pr-2 text-right">
                <svg class="w-4 h-4 absolute left-2 top-1/2 -translate-y-1/2 text-gray-500" 
                     viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M21.97 18.33C21.97 18.69..." stroke="#292D32" stroke-width="1.5" />
                </svg>
              </div>

              {{-- ایمیل --}}
              <div class="relative w-full">
                <input type="text" placeholder="ایمیل" class="w-full border rounded-xl py-3 pr-2 text-right">
                <svg class="w-4 h-4 absolute left-2 top-1/2 -translate-y-1/2 text-gray-500" 
                     viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M21.6002 10.2H12.2002..." stroke="#17191C" stroke-width="1.5"/>
                </svg>
              </div>

            </div>

            <!-- دکمه‌ها -->
            <div class="flex flex-col sm:flex-row sm:mt-6 justify-between mt-6 gap-4">
              <a class="w-full sm:w-[48%] py-3 rounded-xl bg-[#FF0000] text-white text-base font-semibold text-center">
                برگشت
              </a>
              <a href="{{ url('/customers-Information') }}"
                 class="w-full sm:w-[48%] py-3 rounded-xl bg-[#1100FF] text-white text-base font-semibold flex items-center justify-center">
                مرحله بعدی
              </a>
            </div>
          </form>
        </div>
      </div>

      <!-- ستون تصویر -->
      <div class="flex-1 lg:w-5/12 flex items-center justify-center p-5 sm:p-5 order-2 lg:order-2 mt-6 lg:mt-0">
        <div class="w-full max-w-[500px]">
          <img src="/img/customer.jpg" alt="Success Illustration"
               class="w-full h-auto object-cover rounded-2xl">
        </div>
      </div>

    </div>
  </div>
</div>

<!-- ✅ فونت وزیر از گوگل -->
<link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
  * {
    font-family: "Vazirmatn", sans-serif !important;
  }
</style>

@endsection
