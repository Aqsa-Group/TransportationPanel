@extends('layouts.app')
@section('content')

<body class="bg-gray-100 flex items-center justify-center">


  <div id="card" class="fade-scale bg-white m-6 sm:m-10 shadow-lg rounded-2xl p-4 w-full max-w-3xl grid grid-cols-1 md:grid-cols-2 overflow-hidden">

    <div class="p-3 flex flex-col gap-3 items-center text-sm">
      <h2 class="text-lg font-bold">اطلاعات مشتری</h2>
      <p class="text-gray-500 text-xs">لطفاً اطلاعات خود را وارد کنید.</p>


      <div id="stepper" class="w-full flex items-center gap-3 justify-center text-[12px]">

        <button class="step group flex flex-col items-center gap-1" data-step="1" type="button">
          <span class="step-dot grid place-items-center w-7 h-7 rounded-lg
                       bg-[#1100FF] text-white font-bold border-0
                         transition-colors">
            1
          </span>
          <span class="text-[11px] text-gray-500 ">اطلاعات شخصی</span>
        </button>


        <div class="flex-1 h-0 border-t-2 border-dashed border-gray-300" data-connector="1"></div>


        <button class="step group flex flex-col items-center gap-1" data-step="2" type="button">
          <span class="step-dot grid place-items-center w-7 h-7 rounded-lg
                       bg-blue-300 text-[#1100FF] font-bold border-0
                         transition-colors">
            2
          </span>
          <span class="text-[11px] text-gray-500 ">اطلاعات سفر</span>
        </button>


        <div class="flex-1 h-0 border-t-2 border-dashed border-gray-300" data-connector="2"></div>


        <button class="step group flex flex-col items-center gap-1" data-step="3" type="button">
          <span class="step-dot grid place-items-center w-7 h-7 rounded-lg
                       bg-blue-300 text-[#1100FF] font-bold border-0
                         transition-colors">
            3
          </span>
          <span class="text-[11px] text-gray-500 ">پیام ثبت</span>
        </button>
      </div>
<form class="w-full mt-3 flex flex-wrap justify-between gap-y-9" dir="rtl" onsubmit="event.preventDefault()">

    <div class="relative basis-full sm:basis-[48%]">
    <input type="email" placeholder="نام"
      class="w-full border border-gray-400 rounded-xl px-3 pl-10 py-2 text-right
             outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
<span class="absolute left-3 top-1/2 -translate-y-1/2 flex items-center justify-center">
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M19.2101 15.74L15.67 19.2801C15.53 19.4201 15.4 19.68 15.37 19.87L15.18 21.22C15.11 21.71 15.45 22.05 15.94 21.98L17.29 21.79C17.48 21.76 17.75 21.63 17.88 21.49L21.42 17.95C22.03 17.34 22.32 16.63 21.42 15.73C20.53 14.84 19.8201 15.13 19.2101 15.74Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M18.7002 16.25C19.0002 17.33 19.8402 18.17 20.9202 18.47" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M3.41016 22C3.41016 18.13 7.26018 15 12.0002 15C13.0402 15 14.0402 15.15 14.9702 15.43" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</span>

  </div>
   <div class="relative basis-full sm:basis-[48%]">
    <input type="email" placeholder="تخلص"
      class="w-full border border-gray-400 rounded-xl px-3 pl-10 py-2 text-right
             outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
   <span class="absolute left-3 top-1/2 -translate-y-1/2 flex items-center justify-center">
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M19.2101 15.74L15.67 19.2801C15.53 19.4201 15.4 19.68 15.37 19.87L15.18 21.22C15.11 21.71 15.45 22.05 15.94 21.98L17.29 21.79C17.48 21.76 17.75 21.63 17.88 21.49L21.42 17.95C22.03 17.34 22.32 16.63 21.42 15.73C20.53 14.84 19.8201 15.13 19.2101 15.74Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M18.7002 16.25C19.0002 17.33 19.8402 18.17 20.9202 18.47" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M3.41016 22C3.41016 18.13 7.26018 15 12.0002 15C13.0402 15 14.0402 15.15 14.9702 15.43" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</span>

  </div>
 <div class="relative basis-full sm:basis-[48%]">
    <input type="text" placeholder=" عکس"
      class="w-full border border-gray-400 rounded-xl px-3 pl-10 py-2 text-right
             outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
     <span class="absolute left-3 top-1/2 -translate-y-1/2 flex items-center justify-center">
  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9 10C10.1046 10 11 9.10457 11 8C11 6.89543 10.1046 6 9 6C7.89543 6 7 6.89543 7 8C7 9.10457 7.89543 10 9 10Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</span>

  </div>


  <div class="relative basis-full sm:basis-[48%]">
    <input type="number" placeholder="شماره تماس"
      class="w-full border border-gray-400 rounded-xl px-3 pl-10 py-2 text-right
             outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
     <span class="absolute left-3 top-1/2 -translate-y-1/2 flex items-center justify-center">
  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"/>
<path d="M18.5 9C18.5 8.4 18.03 7.48 17.33 6.73C16.69 6.04 15.84 5.5 15 5.5" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M22 9C22 5.13 18.87 2 15 2" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</span>

  </div>


  <div class="relative basis-full sm:basis-[48%]">
    <input type="text" placeholder=" ایمیل"
      class="w-full border border-gray-400 rounded-xl px-3 pl-10 py-2 text-right
             outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
      <span class="absolute left-3 top-1/2 -translate-y-1/2 flex items-center justify-center">
<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M21.6002 10.2H12.2002V13.9H17.7002C17.6002 14.8 17.0002 16.2 15.7002 17.1C14.9002 17.7 13.7002 18.1 12.2002 18.1C9.6002 18.1 7.3002 16.4 6.5002 13.9C6.3002 13.3 6.2002 12.6 6.2002 11.9C6.2002 11.2 6.3002 10.5 6.5002 9.9C6.6002 9.7 6.6002 9.5 6.7002 9.4C7.6002 7.3 9.7002 5.8 12.2002 5.8C14.1002 5.8 15.3002 6.6 16.1002 7.3L18.9002 4.5C17.2002 3 14.9002 2 12.2002 2C8.3002 2 4.9002 4.2 3.3002 7.5C2.6002 8.9 2.2002 10.4 2.2002 12C2.2002 13.6 2.6002 15.1 3.3002 16.5C4.9002 19.8 8.3002 22 12.2002 22C14.9002 22 17.2002 21.1 18.8002 19.6C20.7002 17.9 21.8002 15.3 21.8002 12.2C21.8002 11.4 21.7002 10.8 21.6002 10.2Z" stroke="#17191C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</span>

  </div>

</form>

     <div class="flex flex-col sm:flex-row gap-3 mt-4 w-full">
        <button class="w-full bg-[#FF0000] hover:bg-[#CA0808] text-white px-6 py-2 text-sm rounded-lg ">
          <a href="{{ route('customers.page') }}" >برگشت</a>
        </button>
        <a href="{{ route('customers.info1') }}" class="w-full text-center hover:bg-blue-800 bg-[#0400FF] text-white px-6 py-2 text-sm rounded-lg ">
          مرحله بعدی
        </a>
      </div>
    </div>
  <div class="relative order-1 md:order-2 overflow-hidden p-4 rounded-lg  ">
          <img src="{{ asset('img/Embark on your dream holiday with confidence! 🏖️….jpeg') }}" class="w-full h-full rounded-lg  " alt="admin">
        </div>
  </div>
    </div>


  </div>

  <script>
    // انیمیشن نرم
    window.addEventListener('DOMContentLoaded', () => {
      const card = document.getElementById('card');
      if (card) setTimeout(() => card.classList.add('show'), 80);
    });

    // استپر
    let current = 1;
    const stepper = document.getElementById('stepper');
    const steps = [...stepper.querySelectorAll('.step')];
    const connectors = [...stepper.querySelectorAll('[data-connector]')];

    function render() {
      steps.forEach(btn => {
        const s = Number(btn.dataset.step);
        btn.classList.toggle('active', s === current);
      });
      connectors.forEach(c => {
        const idx = Number(c.dataset.connector);
        c.classList.toggle('border-blue-700', current > idx);
        c.classList.toggle('border-gray-300', !(current > idx));
      });
    }
    steps.forEach(btn => btn.addEventListener('click', () => {
      current = Number(btn.dataset.step);
      render();
    }));
    render();
  </script>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Fade-in + Scale */
    .fade-scale {
      opacity: 0;
       transform: scale(0.95);
      transition: opacity 0.5s ease, transform 0.5s ease;
    }
    .fade-scale.show {
      opacity: 1;
      transform: scale(1);
    }
  </style>
</body>
@endsection
