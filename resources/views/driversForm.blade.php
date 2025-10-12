@extends('layouts.app')

@section('title','داشبورد')

@section('content')

<div class="bg-gray-100 font-sans text-gray-800">
  <div class="min-h-full flex items-center justify-center p-3 sm:p-4">
    
    <!-- باکس اصلی سفید -->
    <div class="w-full md:w-[600px] lg:w-[1100px] bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col lg:flex-row">

      <!-- ستون فرم -->
      <div class="flex-1 lg:w-7/12 flex items-start justify-center sm:p-4 order-1 lg:order-1">
        <div class="w-full max-w-md ">
          <h2 class="text-xl sm:text-2xl font-bold text-center lg:text-right flex items-center justify-center mt-2">
            اطلاعات رانندگان
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
    placeholder="نام راننده"
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


            {{--  عکس --}}
  <div class="relative w-full">
  <input 
    type="text" 
    name="customer" 
    placeholder="عکس "
    class="w-full border rounded-xl py-3 p-x-14 pr-2 text-right "
  >

  <!-- آیکن سمت چپ -->
<svg class="w-4 h-4  absolute left-2 top-1/2 -translate-y-1/2 text-gray-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9 10C10.1046 10 11 9.10457 11 8C11 6.89543 10.1046 6 9 6C7.89543 6 7 6.89543 7 8C7 9.10457 7.89543 10 9 10Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M2.66992 18.9496L7.59992 15.6396C8.38992 15.1096 9.52992 15.1696 10.2399 15.7796L10.5699 16.0696C11.3499 16.7396 12.6099 16.7396 13.3899 16.0696L17.5499 12.4996C18.3299 11.8296 19.5899 11.8296 20.3699 12.4996L21.9999 13.8996" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>



</div>

            {{-- شماره تماس--}}
         <div class="relative w-full">
  <input 
    type="text" 
    name="customer" 
    placeholder=" شماره تماس"
    class="w-full border rounded-xl py-3 p-x-14 pr-2 text-right"
  >

  <!-- آیکن سمت چپ -->
<svg class="w-4 h-4  absolute left-2 top-1/2 -translate-y-1/2 text-gray-500"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"/>
<path d="M18.5 9C18.5 8.4 18.03 7.48 17.33 6.73C16.69 6.04 15.84 5.5 15 5.5" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M22 9C22 5.13 18.87 2 15 2" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>



</div>

            {{-- مدرک --}}
       <div class="relative w-full">
  <input 
    type="text" 
    name="customer" 
    placeholder=" مدرک"
    class="w-full border rounded-xl py-3 p-x-14 pr-2 text-right"
  >

  <!-- آیکن سمت چپ -->
<svg class="w-4 h-4  absolute left-2 top-1/2 -translate-y-1/2 text-gray-500"   viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.3701 8.87988H17.6201" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M6.37988 8.87988L7.12988 9.62988L9.37988 7.37988" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12.3701 15.8799H17.6201" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M6.37988 15.8799L7.12988 16.6299L9.37988 14.3799" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</div>

            {{-- آدرس خانه --}}
       <div class="relative w-full">
  <input 
    type="text" 
    name="customer" 
    placeholder=" آدرس خانه"
    class="w-full border rounded-xl py-3 p-x-14 pr-2 text-right "
  >

  <!-- آیکن سمت چپ -->
<svg class="w-4 h-4  absolute left-2 top-1/2 -translate-y-1/2 text-gray-500"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2 22H22" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M2.9502 22.0003L3.0002 9.97023C3.0002 9.36023 3.2902 8.78029 3.7702 8.40029L10.7702 2.95027C11.4902 2.39027 12.5002 2.39027 13.2302 2.95027L20.2302 8.39028C20.7202 8.77028 21.0002 9.35023 21.0002 9.97023V22.0003" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round"/>
<path d="M15.5 11H8.5C7.67 11 7 11.67 7 12.5V22H17V12.5C17 11.67 16.33 11 15.5 11Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10 16.25V17.75" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.5 7.5H13.5" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</div>
            {{-- درآمد --}}
  <div class="relative w-full">
  <input 
    type="text" 
    name="customer" 
    placeholder=" درآمد "
    class="w-full border rounded-xl py-3 p-x-14 pr-2 text-right "
  >

  <!-- آیکن سمت چپ -->
<svg class="w-4 h-4  absolute left-2 top-1/2 -translate-y-1/2 text-gray-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.67188 14.3298C8.67188 15.6198 9.66188 16.6598 10.8919 16.6598H13.4019C14.4719 16.6598 15.3419 15.7498 15.3419 14.6298C15.3419 13.4098 14.8119 12.9798 14.0219 12.6998L9.99187 11.2998C9.20187 11.0198 8.67188 10.5898 8.67188 9.36984C8.67188 8.24984 9.54187 7.33984 10.6119 7.33984H13.1219C14.3519 7.33984 15.3419 8.37984 15.3419 9.66984" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 6V18" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>



</div>

            {{-- تعداد سفرها --}}
  <div class="relative w-full">
  <input 
    type="text" 
    name="customer" 
    placeholder=" تعداد سفر ها"
    class="w-full border rounded-xl py-3 p-x-14 pr-2 text-right "
  >

  <!-- آیکن سمت چپ -->
<svg class="w-4 h-4  absolute left-2 top-1/2 -translate-y-1/2 text-gray-500"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15 2V12C15 13.1 14.1 14 13 14H2V6C2 3.79 3.79 2 6 2H15Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M22 14V17C22 18.66 20.66 20 19 20H18C18 18.9 17.1 18 16 18C14.9 18 14 18.9 14 20H10C10 18.9 9.1 18 8 18C6.9 18 6 18.9 6 20H5C3.34 20 2 18.66 2 17V14H13C14.1 14 15 13.1 15 12V5H16.84C17.56 5 18.22 5.39001 18.58 6.01001L20.29 9H19C18.45 9 18 9.45 18 10V13C18 13.55 18.45 14 19 14H22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8 22C9.10457 22 10 21.1046 10 20C10 18.8954 9.10457 18 8 18C6.89543 18 6 18.8954 6 20C6 21.1046 6.89543 22 8 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M16 22C17.1046 22 18 21.1046 18 20C18 18.8954 17.1046 18 16 18C14.8954 18 14 18.8954 14 20C14 21.1046 14.8954 22 16 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M22 12V14H19C18.45 14 18 13.55 18 13V10C18 9.45 18.45 9 19 9H20.29L22 12Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>


</div>
        

            {{--  --}}
            <div class="relative w-full">
              <input type="number" name="price" placeholder="ایمیل"
              class="w-full border rounded-xl py-3 p-x-14 pr-2 text-right "
                class="w-full border rounded-xl py-2.5 pr-12 pl-4 text-right focus:ring-2 focus:ring-blue-500 focus:outline-none">
<svg class="w-4 h-4  absolute left-2 top-1/2 -translate-y-1/2 text-gray-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M21.6002 10.2H12.2002V13.9H17.7002C17.6002 14.8 17.0002 16.2 15.7002 17.1C14.9002 17.7 13.7002 18.1 12.2002 18.1C9.6002 18.1 7.3002 16.4 6.5002 13.9C6.3002 13.3 6.2002 12.6 6.2002 11.9C6.2002 11.2 6.3002 10.5 6.5002 9.9C6.6002 9.7 6.6002 9.5 6.7002 9.4C7.6002 7.3 9.7002 5.8 12.2002 5.8C14.1002 5.8 15.3002 6.6 16.1002 7.3L18.9002 4.5C17.2002 3 14.9002 2 12.2002 2C8.3002 2 4.9002 4.2 3.3002 7.5C2.6002 8.9 2.2002 10.4 2.2002 12C2.2002 13.6 2.6002 15.1 3.3002 16.5C4.9002 19.8 8.3002 22 12.2002 22C14.9002 22 17.2002 21.1 18.8002 19.6C20.7002 17.9 21.8002 15.3 21.8002 12.2C21.8002 11.4 21.7002 10.8 21.6002 10.2Z" stroke="#17191C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
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
    href="{{ url('/drivers-Information') }}"
    class="w-full sm:w-[48%] py-3 rounded-xl bg-blue-700 text-white text-base font-semibold flex items-center justify-center">
    ثبت
  </a>
</div>

        </form>
        </div>
      </div>

      <!-- ستون تصویر -->
  <div class="flex-1 lg:w-5/12 flex items-center justify-center p-4 sm:p-5 order-1 lg:order-2">
      <div class="w-full max-w-[420px]">
        <img src="/img/img_2025.jpg" alt="Success Illustration"
             class="w-full  h-[550px] object-cover rounded-2xl">
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
