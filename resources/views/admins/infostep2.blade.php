<!DOCTYPE html>
<html lang="fa" dir="rtl" class="overflow-x-hidden">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title> اطلاعات ادمین</title>
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


  <div id="card" class="fade-scale p-4 bg-white m-6 sm:m-10 shadow-lg rounded-2xl w-full max-w-3xl grid grid-cols-1 md:grid-cols-2 overflow-hidden">

    <div class="p-3 flex flex-col gap-3 items-center text-sm">
      <h2 class="text-lg font-bold">اطلاعات ادمین</h2>
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
          <span class="text-[11px] text-gray-500 ">رمز عبور</span>
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
          <input type="email" placeholder="ایمیل"
            class="w-full border border-gray-400 rounded-xl px-3 pl-10 py-2 text-right
                   outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
          <span class="absolute left-3 top-1/2 -translate-y-1/2 flex items-center justify-center">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.6002 10.2H12.2002V13.9H17.7002C17.6002 14.8 17.0002 16.2 15.7002 17.1C14.9002 17.7 13.7002 18.1 12.2002 18.1C9.6002 18.1 7.3002 16.4 6.5002 13.9C6.3002 13.3 6.2002 12.6 6.2002 11.9C6.2002 11.2 6.3002 10.5 6.5002 9.9C6.6002 9.7 6.6002 9.5 6.7002 9.4C7.6002 7.3 9.7002 5.8 12.2002 5.8C14.1002 5.8 15.3002 6.6 16.1002 7.3L18.9002 4.5C17.2002 3 14.9002 2 12.2002 2C8.3002 2 4.9002 4.2 3.3002 7.5C2.6002 8.9 2.2002 10.4 2.2002 12C2.2002 13.6 2.6002 15.1 3.3002 16.5C4.9002 19.8 8.3002 22 12.2002 22C14.9002 22 17.2002 21.1 18.8002 19.6C20.7002 17.9 21.8002 15.3 21.8002 12.2C21.8002 11.4 21.7002 10.8 21.6002 10.2Z" stroke="#17191C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
        </div>

        <div class="relative basis-full sm:basis-[48%]">
          <input type="password" placeholder="رمز عبور "
            class="w-full border border-gray-400 rounded-xl px-3 pl-10 py-2 text-right
                   outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
          <span class="absolute left-3 top-1/2 -translate-y-1/2 flex items-center justify-center">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_539_728)">
<path d="M19.7901 14.9298C17.7301 16.9798 14.7801 17.6098 12.1901 16.7998L7.48015 21.4998C7.14015 21.8498 6.47015 22.0598 5.99015 21.9898L3.81015 21.6898C3.09015 21.5898 2.42015 20.9098 2.31015 20.1898L2.01015 18.0098C1.94015 17.5298 2.17015 16.8598 2.50015 16.5198L7.20015 11.8198C6.40015 9.21982 7.02015 6.26982 9.08015 4.21982C12.0301 1.26982 16.8201 1.26982 19.7801 4.21982C22.7401 7.16982 22.7401 11.9798 19.7901 14.9298Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M6.89014 17.4902L9.19014 19.7902" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14.5 11C15.3284 11 16 10.3284 16 9.5C16 8.67157 15.3284 8 14.5 8C13.6716 8 13 8.67157 13 9.5C13 10.3284 13.6716 11 14.5 11Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_539_728">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg>

          </span>
        </div>

        <div class="relative basis-full sm:basis-[48%]">
          <input type="password" placeholder="تایید رمز عبور "
            class="w-full border border-gray-400 rounded-xl px-3 pl-10 py-2 text-right
                   outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
          <span class="absolute left-3 top-1/2 -translate-y-1/2 flex items-center justify-center">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_539_728)">
<path d="M19.7901 14.9298C17.7301 16.9798 14.7801 17.6098 12.1901 16.7998L7.48015 21.4998C7.14015 21.8498 6.47015 22.0598 5.99015 21.9898L3.81015 21.6898C3.09015 21.5898 2.42015 20.9098 2.31015 20.1898L2.01015 18.0098C1.94015 17.5298 2.17015 16.8598 2.50015 16.5198L7.20015 11.8198C6.40015 9.21982 7.02015 6.26982 9.08015 4.21982C12.0301 1.26982 16.8201 1.26982 19.7801 4.21982C22.7401 7.16982 22.7401 11.9798 19.7901 14.9298Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M6.89014 17.4902L9.19014 19.7902" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14.5 11C15.3284 11 16 10.3284 16 9.5C16 8.67157 15.3284 8 14.5 8C13.6716 8 13 8.67157 13 9.5C13 10.3284 13.6716 11 14.5 11Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_539_728">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg>

          </span>
        </div>
      </form>

      <div class="flex flex-col sm:flex-row gap-3 mt-4 w-full">
        <button class="w-full bg-[#FF0000] hover:bg-[#CA0808]  text-white px-6 py-2 text-sm rounded-lg ">
          <a href="{{ route('admins.infoadmin') }}">مرحله قبلی</a>
        </button>
        <a href="{{ route('admins.adminsuccess') }}" class="w-full text-center hover:bg-blue-800 bg-[#0400FF] text-white px-6 py-2 text-sm rounded-lg ">
           مرحله بعدی
        </a>
      </div>
    </div>
 <div class="relative order-1 md:order-2 rounded-lg overflow-hidden p-4" >
          <img src="{{ asset('img/admin.jpg') }}" class="w-full h-full rounded-lg" alt="admin">
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
