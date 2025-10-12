@extends('layouts.app')

@section('title','داشبورد')

@section('content')

<div class="bg-gray-100 font-sans text-gray-800 flex items-center justify-center p-3 sm:p-4">

  <!-- باکس اصلی سفید -->
  <div class="w-full md:w-[600px] lg:w-[1000px] bg-white rounded-2xl shadow-lg flex flex-col lg:flex-row overflow-hidden">

    <!-- ستون پیام موفقیت (در موبایل اول بیاد) -->
    <div class="flex-1 lg:w-7/12 flex items-center justify-center p-5 sm:p-6 order-1 lg:order-1">
      <div class="w-full max-w-md text-center lg:text-right">

        <!-- عنوان -->
        <h2 class="text-lg sm:text-[40px] lg:text-[45px] md:text-2xl text-gray-800 mb-6 text-center">
          اطلاعات سفارش
        </h2>

        <div class="border-t-2 border-blue-600 w-auto mx-auto lg:mx-0 mb-6"></div>

        <!-- تصویر موفقیت -->
        <div class="flex justify-center mb-2">
          <img src="/img/photo_2025.jpg" alt="Success" 
               class="w-[120px] sm:w-80 md:w-90 rounded-xl shadow-md">
        </div>

        <!-- پیام موفقیت -->
        <div class="flex justify-center">
          <h1 class=" w-56 flex justify-center mb-3 font-extrabold tracking-wide text-base sm:text-lg">
            اطلاعات با موفقیت ثبت شد
          </h1>
        </div>

        <!-- دکمه بازگشت -->
        <div class="flex justify-center">
          <a 
             class=" w-56 flex justify-center py-2.5 rounded-xl bg-[#FF0000] text-white text-sm sm:text-base font-semibold transition-all duration-200">
            بازگشت به صفحه اصلی
          </a>
        </div>

      </div>
    </div>

    <!-- ستون عکس (در موبایل پایین بیاد) -->
    <div class="flex-1 lg:w-7/12 flex items-center justify-center p-4 sm:p-5 order-2 lg:order-2">
      <div class="w-full max-w-[1000px] rounded-2xl overflow-hidden">
        <img src="/img/customer.jpg" alt="Success Illustration"
             class="w-full h-auto object-cover rounded-2xl">
      </div>
    </div>

  </div>
</div>
<!-- ✅ فونت وزیر از گوگل -->
<link 
href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
  * {
    font-family: "Vazirmatn", sans-serif !important;
  }
</style>

@endsection
