<!DOCTYPE html>
<html lang="fa" dir="rtl" class="overflow-x-hidden">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>اطلاعات سفارش</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- فونت وزیر -->
  <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <style>
    * {
      font-family: "Vazirmatn", sans-serif !important;
      box-sizing: border-box !important;
    }
    html, body {
      overflow-x: hidden;
    }

    /* انیمیشن نرم ورود */
    .fade-scale {
      opacity: 0;
      transform: scale(0.95);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }
    .fade-scale.show {
      opacity: 1;
      transform: scale(1);
    }
  </style>
</head>
<body class="bg-gray-100 font-sans text-gray-800 w-full overflow-x-hidden overflow-y-auto min-h-screen flex items-center justify-center">

  <div class="w-full max-w-[800px] fade-scale bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col lg:flex-row mb-4 relative mx-auto m-3 sm:m-4" id="card">

    <!-- ستون فرم -->
    <div class="flex-1 flex items-start justify-center p-4 lg:p-6 order-1 lg:order-1">
      <div class="w-full max-w-md">
        <h2 class="text-xl sm:text-2xl font-bold text-center mt-2">اطلاعات سفارش</h2>
        <div class="border-t-2 mt-2 border-[#0400FF] mb-4"></div>
          <!-- تصویر موفقیت -->
          <div class="flex justify-center mb-2">
            <img src="/img/3.png" alt="Success"
                 class="w-[120px]  sm:w-80 md:w-90 rounded-xl shadow-md">
          </div>

          <!-- پیام -->
          <div class="flex justify-center">
            <h1 class="w-56 flex justify-center mb-3 font-extrabold tracking-wide text-base sm:text-lg">
              اطلاعات با موفقیت ثبت شد
            </h1>
          </div>
        <!-- دکمه -->
          <div class="flex  mb-2 justify-center">
            <a href="#"
               class="w-[330px] flex justify-center py-2.5 rounded-xl bg-[#FF0000] hover:bg-[#CA0808] text-white text-sm sm:text-base font-semibold transition-all duration-200">
              بازگشت به صفحه اصلی
            </a>
          </div>


      </div>
    </div>

    <!-- ستون تصویر -->
    <div class="flex-1 flex items-center justify-center p-4 order-2 lg:order-2">
      <div class="w-full max-w-[450px] overflow-hidden">
        <img src="/img/From Dreams to Destinations 🌍 Pack smart_ Fly….jpeg"
             alt="Success Illustration"
             class="w-full h-auto object-cover rounded-lg"/>
      </div>
    </div>

  </div>
  <script>
  window.addEventListener("DOMContentLoaded", () => {
    const card = document.getElementById("card");
    setTimeout(() => {
      card.classList.add("show");
    }, 100);
  });
</script>

</body>
</html>
