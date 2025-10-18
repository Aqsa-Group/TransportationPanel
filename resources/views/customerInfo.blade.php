<!DOCTYPE html>
<html lang="fa" dir="rtl" class="overflow-x-hidden">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title> اطلاعات مشتری</title>
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
</head>
<body class="bg-gray-100 flex items-center justify-center">


  <div id="card" class="fade-scale bg-white m-6 sm:m-10 shadow-lg rounded-2xl p-4 w-full max-w-3xl grid grid-cols-1 md:grid-cols-2 overflow-hidden">

    <div class="p-3 flex flex-col gap-3 items-center text-sm">
      <h2 class="text-lg font-bold">اطلاعات مشتری</h2>
      <p class="text-gray-500 text-xs">لطفاً اطلاعات خود را وارد کنید.</p>


      <div id="stepper" class="w-full flex items-center gap-3 justify-center text-[12px]">

        <button class="step group flex flex-col items-center gap-1" data-step="1" type="button">
          <span class="step-dot grid place-items-center w-7 h-7 rounded-lg
                        bg-blue-300 text-[#1100FF] font-bold border-0
                         transition-colors">
            1
          </span>
          <span class="text-[11px] text-gray-500 ">اطلاعات شخصی</span>
        </button>


        <div class="flex-1 h-0 border-t-2 border-dashed border-gray-300" data-connector="1"></div>


        <button class="step group flex flex-col items-center gap-1" data-step="2" type="button">
          <span class="step-dot grid place-items-center w-7 h-7 rounded-lg
                       bg-[#1100FF] text-white font-bold border-0
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
    <input type="email" placeholder="مبدا"
      class="w-full border border-gray-400 rounded-xl px-3 pl-10 py-2 text-right
             outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
<span class="absolute left-3 top-1/2 -translate-y-1/2 flex items-center justify-center">
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.9999 13.4304C13.723 13.4304 15.1199 12.0336 15.1199 10.3104C15.1199 8.5873 13.723 7.19043 11.9999 7.19043C10.2768 7.19043 8.87988 8.5873 8.87988 10.3104C8.87988 12.0336 10.2768 13.4304 11.9999 13.4304Z" stroke="#292D32" stroke-width="1.5"/>
<path d="M3.6202 8.49C5.5902 -0.169998 18.4202 -0.159997 20.3802 8.5C21.5302 13.58 18.3702 17.88 15.6002 20.54C13.5902 22.48 10.4102 22.48 8.3902 20.54C5.6302 17.88 2.4702 13.57 3.6202 8.49Z" stroke="#292D32" stroke-width="1.5"/>
</svg>

</span>

  </div>
   <div class="relative basis-full sm:basis-[48%]">
    <input type="email" placeholder="مقصد"
      class="w-full border border-gray-400 rounded-xl px-3 pl-10 py-2 text-right
             outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
   <span class="absolute left-3 top-1/2 -translate-y-1/2 flex items-center justify-center">
   <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.6202 8.49C5.5902 -0.169998 18.4202 -0.159997 20.3802 8.5C21.5302 13.58 18.3702 17.88 15.6002 20.54C13.5902 22.48 10.4102 22.48 8.3902 20.54C5.6302 17.88 2.4702 13.57 3.6202 8.49Z" stroke="#292D32" stroke-width="1.5"/>
<path d="M9.25 11.5L10.75 13L14.75 9" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</span>

  </div>
 <div class="relative basis-full sm:basis-[48%]">
    <input type="text" placeholder=" وزن وسایل"
      class="w-full border border-gray-400 rounded-xl px-3 pl-10 py-2 text-right
             outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
     <span class="absolute left-3 top-1/2 -translate-y-1/2 flex items-center justify-center">
<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.99983 22H15.9998C20.0198 22 20.7398 20.39 20.9498 18.43L21.6998 10.43C21.9698 7.99 21.2698 6 16.9998 6H6.99983C2.72983 6 2.02983 7.99 2.29983 10.43L3.04983 18.43C3.25983 20.39 3.97983 22 7.99983 22Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8 6V5.2C8 3.43 8 2 11.2 2H12.8C16 2 16 3.43 16 5.2V6" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14 13V14C14 14.01 14 14.01 14 14.02C14 15.11 13.99 16 12 16C10.02 16 10 15.12 10 14.03V13C10 12 10 12 11 12H13C14 12 14 12 14 13Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M21.65 11C19.34 12.68 16.7 13.68 14 14.02" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M2.62012 11.2695C4.87012 12.8095 7.41012 13.7395 10.0001 14.0295" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>


</span>

  </div>


  <div class="relative basis-full sm:basis-[48%]">
    <input type="number" placeholder="مبلغ"
      class="w-full border border-gray-400 rounded-xl px-3 pl-10 py-2 text-right
             outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
     <span class="absolute left-3 top-1/2 -translate-y-1/2 flex items-center justify-center">
<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.67188 14.3298C8.67188 15.6198 9.66188 16.6598 10.8919 16.6598H13.4019C14.4719 16.6598 15.3419 15.7498 15.3419 14.6298C15.3419 13.4098 14.8119 12.9798 14.0219 12.6998L9.99187 11.2998C9.20187 11.0198 8.67188 10.5898 8.67188 9.36984C8.67188 8.24984 9.54187 7.33984 10.6119 7.33984H13.1219C14.3519 7.33984 15.3419 8.37984 15.3419 9.66984" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 6V18" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>


</span>

  </div>


  <div class="relative basis-full sm:basis-[48%]">
    <input type="text" placeholder=" روشهای پرداخت"
      class="w-full border border-gray-400 rounded-xl px-3 pl-10 py-2 text-right
             outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
      <span class="absolute left-3 top-1/2 -translate-y-1/2 flex items-center justify-center">
<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.5 13.7502C9.5 14.7202 10.25 15.5002 11.17 15.5002H13.05C13.85 15.5002 14.5 14.8202 14.5 13.9702C14.5 13.0602 14.1 12.7302 13.51 12.5202L10.5 11.4702C9.91 11.2602 9.51001 10.9402 9.51001 10.0202C9.51001 9.18023 10.16 8.49023 10.96 8.49023H12.84C13.76 8.49023 14.51 9.27023 14.51 10.2402" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 7.5V16.5" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M22 6V2H18" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M17 7L22 2" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>


</span>

  </div>

</form>

     <div class="flex flex-col sm:flex-row gap-3 mt-4 w-full">
        <button class="w-full bg-[#FF0000] hover:bg-[#CA0808] text-white px-6 py-2 text-sm rounded-lg ">
          <a href="#" >مرحله قبلی</a>
        </button>
        <a href="#" class="w-full text-center hover:bg-blue-800 bg-[#0400FF] text-white px-6 py-2 text-sm rounded-lg ">
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
</body>
</html>
