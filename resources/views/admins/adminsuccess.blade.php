@extends('layouts.app')

@section('content')

<body class="bg-gray-100 min-h-screen overflow-hidden flex items-center justify-center">

  <div class="m-3 sm:m-4 w-full max-w-2xl fade-scale" id="card">
    <div class="bg-white rounded-2xl shadow-lg p-2 sm:p-3">


      <div class="grid grid-cols-1 md:grid-cols-2 gap-3 items-stretch md:[&>div]:h-full mb-2 md:h-[460px]">


        <div class="relative order-3 md:order-2 rounded-lg overflow-hidden p-2">
          <img src="{{ asset('img/admin.jpg') }}" class="w-full h-full object-cover rounded-lg" alt="admin">
        </div>


        <div class="rounded-2xl px-2 pb-6 pt-4 flex flex-col order-2 md:order-1 h-full">
          <div class="mb-1">
            <h2 class="text-sm sm:text-base font-bold text-center">اطلاعات ادمین</h2>
          </div>


          <div id="stepper" class="flex items-center gap-3 justify-center text-[12px]">
            <!-- Step 1 -->
            <button class="step group flex flex-col items-center gap-1" data-step="1" type="button">
              <span class="step-dot grid place-items-center w-7 h-7 rounded-lg
                              bg-blue-300 text-[#1100FF] font-bold border-0
                               transition-colors">
                1
              </span>
              <span class="text-[11px] text-gray-500 ">اطلاعات شخصی</span>
            </button>

            <div class="flex-1 h-0 border-t-2 border-dashed border-gray-300" data-connector="1"></div>

            <!-- Step 2 -->
            <button class="step group flex flex-col items-center gap-1" data-step="2" type="button">
              <span class="step-dot grid place-items-center w-7 h-7 rounded-lg
                             bg-blue-300 text-[#1100FF] font-bold border-0
                             transition-colors">
                2
              </span>
              <span class="text-[11px] text-gray-500 ">رمز عبور</span>
            </button>

            <div class="flex-1 h-0 border-t-2 border-dashed border-gray-300" data-connector="2"></div>

            <!-- Step 3 -->
            <button class="step group flex flex-col items-center gap-1" data-step="3" type="button">
              <span class="step-dot grid place-items-center w-7 h-7 rounded-lg
                             bg-[#1100FF] text-white font-bold border-0
                             transition-colors">
                3
              </span>
              <span class="text-[11px] text-gray-500 ">پیام ثبت</span>
            </button>
          </div>


  <div class="flex justify-center w-full">
    <div class="flex items-center justify-center p-0">
      <img src="{{ asset('img/3.png') }}" alt="img3" class="h-56 sm:h-60 object-contain" />
    </div>
  </div>


  <p class="text-center text-gray-800 font-bold text-sm sm:text-base mt-0 mb-0">
    اطلاعات با موفقیت ثبت شد.
  </p>

  <div class="w-full mt-0">
    <a href="{{ route('admins.index') }}"
       class="block text-center bg-[#FF0000] hover:bg-[#CA0808] text-white w-full text-xs sm:text-sm p-2.5 rounded-lg transition">
       برگشت به صفحه اصلی
    </a>
  </div>
</div>
        </div>
      </div>

    </div>
  </div>

  <script>
    // انیمیشن نرم
    window.addEventListener('DOMContentLoaded', () => {
      const card = document.getElementById('card');
      setTimeout(() => card.classList.add('show'), 100);
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
    /* انیمیشن Fade-in + Scale */
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

