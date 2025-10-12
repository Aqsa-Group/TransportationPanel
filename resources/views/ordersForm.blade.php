@extends('layouts.app')

@section('title','داشبورد')

@section('content')

<div class="bg-gray-100 font-sans text-gray-800">
  <div class="min-h-full flex items-center justify-center p-3 sm:p-4">
    
    <!-- باکس اصلی سفید -->
    <div class="w-full md:w-[600px] lg:w-[1100px] bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col lg:flex-row">

      <!-- ستون فرم -->
      <div class="flex-1 lg:w-5/12 flex items-start justify-center sm:p-4 order-1 lg:order-1">
        <div class="w-full max-w-md ">
          <h2 class="text-xl sm:text-2xl font-bold text-center lg:text-right flex items-center justify-center mt-2">
            اطلاعات سفارش
          </h2>
          <p class=" text-[10px] text-gray-500 text-center lg:text-right mb-6 mt-2 flex items-center justify-center">
            لطفا اطلاعات را وارد کنید.
          </p>
          <div class="border-t-2 border-blue-600 mb-4 "></div>
          
        <form action=""  class="space-y-6">
          @csrf

          <!-- شبکه اینپوت‌ها -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-12 gap-3">

            {{-- نام مشتری --}}
           <div class="relative w-full">
  <input 
    type="text" 
    name="customer" 
    placeholder="نام مشتری"
    class="w-full border rounded-xl py-3 p-x-14 pr-2 text-right"
  >

  <!-- آیکن سمت چپ -->
 <svg class="w-4 h-4  absolute left-2 top-1/2 -translate-y-1/2 text-gray-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M19.2101 15.74L15.67 19.2801C15.53 19.4201 15.4 19.68 15.37 19.87L15.18 21.22C15.11 21.71 15.45 22.05 15.94 21.98L17.29 21.79C17.48 21.76 17.75 21.63 17.88 21.49L21.42 17.95C22.03 17.34 22.32 16.63 21.42 15.73C20.53 14.84 19.8201 15.13 19.2101 15.74Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M18.7002 16.25C19.0002 17.33 19.8402 18.17 20.9202 18.47" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.41016 22C3.41016 18.13 7.26018 15 12.0002 15C13.0402 15 14.0402 15.15 14.9702 15.43" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</div>


            {{-- نام راننده --}}
  <div class="relative w-full">
  <input 
    type="text" 
    name="customer" 
    placeholder="نام راننده"
    class="w-full border rounded-xl py-3 p-x-14 pr-2 text-right "
  >

  <!-- آیکن سمت چپ -->
<svg class="w-4 h-4  absolute left-2 top-1/2 -translate-y-1/2 text-gray-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M19.2101 15.74L15.67 19.2801C15.53 19.4201 15.4 19.68 15.37 19.87L15.18 21.22C15.11 21.71 15.45 22.05 15.94 21.98L17.29 21.79C17.48 21.76 17.75 21.63 17.88 21.49L21.42 17.95C22.03 17.34 22.32 16.63 21.42 15.73C20.53 14.84 19.8201 15.13 19.2101 15.74Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M18.7002 16.25C19.0002 17.33 19.8402 18.17 20.9202 18.47" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.41016 22C3.41016 18.13 7.26018 15 12.0002 15C13.0402 15 14.0402 15.15 14.9702 15.43" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>


</div>

            {{-- مبدا --}}
         <div class="relative w-full">
  <input 
    type="text" 
    name="customer" 
    placeholder=" مبدا"
    class="w-full border rounded-xl py-3 p-x-14 pr-2 text-right"
  >

  <!-- آیکن سمت چپ -->
<svg class="w-4 h-4  absolute left-2 top-1/2 -translate-y-1/2 text-gray-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.25 11H14.75" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"/>
<path d="M12 13.75V8.25" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"/>
<path d="M3.6202 8.49C5.5902 -0.169998 18.4202 -0.159997 20.3802 8.5C21.5302 13.58 18.3702 17.88 15.6002 20.54C13.5902 22.48 10.4102 22.48 8.3902 20.54C5.6302 17.88 2.4702 13.57 3.6202 8.49Z" stroke="#292D32" stroke-width="1.5"/>
</svg>


</div>

            {{-- مقصد --}}
       <div class="relative w-full">
  <input 
    type="text" 
    name="customer" 
    placeholder=" مقصد"
    class="w-full border rounded-xl py-3 p-x-14 pr-2 text-right"
  >

  <!-- آیکن سمت چپ -->
<svg class="w-4 h-4  absolute left-2 top-1/2 -translate-y-1/2 text-gray-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.9999 13.4299C13.723 13.4299 15.1199 12.0331 15.1199 10.3099C15.1199 8.58681 13.723 7.18994 11.9999 7.18994C10.2768 7.18994 8.87988 8.58681 8.87988 10.3099C8.87988 12.0331 10.2768 13.4299 11.9999 13.4299Z" stroke="#292D32" stroke-width="1.5"/>
<path d="M3.6202 8.49C5.5902 -0.169998 18.4202 -0.159997 20.3802 8.5C21.5302 13.58 18.3702 17.88 15.6002 20.54C13.5902 22.48 10.4102 22.48 8.3902 20.54C5.6302 17.88 2.4702 13.57 3.6202 8.49Z" stroke="#292D32" stroke-width="1.5"/>
</svg>
</div>

            {{-- تاریخ شروع --}}
       <div class="relative w-full">
  <input 
    type="text" 
    name="customer" 
    placeholder=" تاریخ شروع"
    class="w-full border rounded-xl py-3 p-x-14 pr-2 text-right "
  >

  <!-- آیکن سمت چپ -->
<svg class="w-4 h-4  absolute left-2 top-1/2 -translate-y-1/2 text-gray-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8 2V5" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M16 2V5" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.5 9.08997H20.5" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M19.21 15.77L15.6701 19.31C15.5301 19.45 15.4 19.71 15.37 19.9L15.18 21.25C15.11 21.74 15.45 22.0801 15.94 22.0101L17.29 21.82C17.48 21.79 17.75 21.66 17.88 21.52L21.4201 17.9801C22.0301 17.3701 22.3201 16.6601 21.4201 15.7601C20.5301 14.8701 19.82 15.16 19.21 15.77Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M18.7002 16.28C19.0002 17.36 19.8402 18.2 20.9202 18.5" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5V12" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M11.9955 13.7H12.0045" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8.29431 13.7H8.30329" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8.29431 16.7H8.30329" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</div>
            {{-- تاریخ ختم --}}
  <div class="relative w-full">
  <input 
    type="text" 
    name="customer" 
    placeholder=" تاریخ ختم"
    class="w-full border rounded-xl py-3 p-x-14 pr-2 text-right "
  >

  <!-- آیکن سمت چپ -->
<svg class="w-4 h-4  absolute left-2 top-1/2 -translate-y-1/2 text-gray-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.30566 2.04004V4.97266" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M16.0835 2.04004V4.97266" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.93066 8.97083H20.4584" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M20.9443 8.39404V16.7031C20.9443 19.6357 19.486 21.5908 16.0832 21.5908H8.30545C4.90267 21.5908 3.44434 19.6357 3.44434 16.7031V8.39404C3.44434 5.46143 4.90267 3.50635 8.30545 3.50635H16.0832C19.486 3.50635 20.9443 5.46143 20.9443 8.39404Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M15.7864 13.4773H15.7952" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M15.7864 16.4099H15.7952" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12.1902 13.4773H12.199" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12.1902 16.4099H12.199" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8.59161 13.4773H8.60034" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8.59161 16.4099H8.60034" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>


</div>

            {{-- تایم احتمالی --}}
  <div class="relative w-full">
  <input 
    type="text" 
    name="customer" 
    placeholder=" تایم احتمالی"
    class="w-full border rounded-xl py-3 p-x-14 pr-2 text-right "
  >

  <!-- آیکن سمت چپ -->
<svg class="w-4 h-4  absolute left-2 top-1/2 -translate-y-1/2 text-gray-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2C17.52 2 22 6.48 22 12Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M15.7099 15.18L12.6099 13.33C12.0699 13.01 11.6299 12.24 11.6299 11.61V7.51001" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</div>
        

            {{-- مبلغ --}}
            <div class="relative w-full">
              <input type="number" name="price" placeholder="مبلغ"
              class="w-full border rounded-xl py-3 p-x-14 pr-2 text-right "
                class="w-full border rounded-xl py-2.5 pr-12 pl-4 text-right focus:ring-2 focus:ring-blue-500 focus:outline-none">
              <svg class="w-4 h-4  absolute left-2 top-1/2 -translate-y-1/2 text-gray-500"viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.67188 14.3298C8.67188 15.6198 9.66188 16.6598 10.8919 16.6598H13.4019C14.4719 16.6598 15.3419 15.7498 15.3419 14.6298C15.3419 13.4098 14.8119 12.9798 14.0219 12.6998L9.99187 11.2998C9.20187 11.0198 8.67188 10.5898 8.67188 9.36984C8.67188 8.24984 9.54187 7.33984 10.6119 7.33984H13.1219C14.3519 7.33984 15.3419 8.37984 15.3419 9.66984" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 6V18" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

            </div>
          </div>

          <!-- دکمه‌ها -->
<!-- دکمه‌ها -->
<div class="flex flex-col sm:flex-row sm:mt-6 justify-between mt-6 gap-4">
  <a 
    type="reset" 
    class="w-full sm:w-[48%] py-3 rounded-xl bg-red-600 text-white text-base font-semibold text-center">
    برگشت
  </a>

  <a  
    href="{{ url('/orders-Information') }}"
    class="w-full sm:w-[48%] py-3 rounded-xl bg-blue-700 text-white text-base font-semibold flex items-center justify-center">
    ثبت
  </a>
</div>

        </form>
        </div>
      </div>

      <!-- ستون تصویر -->
  <div class="flex-1 lg:w-5/12 flex items-center justify-center p-5 sm:p-5 order-1 lg:order-2">
      <div class="w-full max-w-[500px]">
        <img src="/img/photo.jpg" alt="Success Illustration"
             class="w-full h-auto object-cover rounded-2xl">
      </div>
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
