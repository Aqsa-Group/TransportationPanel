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
        <p class="text-[10px] text-gray-500 text-center mb-6 mt-2">لطفا اطلاعات را وارد کنید.</p>
        <div class="border-t-2 border-[#0400FF] mb-4"></div>

        <form action="#" class="space-y-6 w-full">
          <!-- شبکه اینپوت‌ها -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-9">

            <!-- نام مشتری -->
            <div class="relative">
              <input type="text" name="customer" placeholder="نام مشتری"
                class="w-full border border-gray-400 rounded-xl px-3 pl-10 py-2 text-right outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
              <span class="absolute left-3 top-1/2 -translate-y-1/2">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M19.2101 15.74L15.67 19.2801C15.53 19.4201 15.4 19.68 15.37 19.87L15.18 21.22C15.11 21.71 15.45 22.05 15.94 21.98L17.29 21.79C17.48 21.76 17.75 21.63 17.88 21.49L21.42 17.95C22.03 17.34 22.32 16.63 21.42 15.73C20.53 14.84 19.8201 15.13 19.2101 15.74Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18.7002 16.25C19.0002 17.33 19.8402 18.17 20.9202 18.47" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3.41016 22C3.41016 18.13 7.26018 15 12.0002 15C13.0402 15 14.0402 15.15 14.9702 15.43" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

              </span>
            </div>

            <!-- نام راننده -->
            <div class="relative">
              <input type="text" name="driver" placeholder="نام راننده"
                class="w-full border border-gray-400 rounded-xl px-3 pl-10 py-2 text-right outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
              <span class="absolute left-3 top-1/2 -translate-y-1/2">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M19.2101 15.74L15.67 19.2801C15.53 19.4201 15.4 19.68 15.37 19.87L15.18 21.22C15.11 21.71 15.45 22.05 15.94 21.98L17.29 21.79C17.48 21.76 17.75 21.63 17.88 21.49L21.42 17.95C22.03 17.34 22.32 16.63 21.42 15.73C20.53 14.84 19.8201 15.13 19.2101 15.74Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18.7002 16.25C19.0002 17.33 19.8402 18.17 20.9202 18.47" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M3.41016 22C3.41016 18.13 7.26018 15 12.0002 15C13.0402 15 14.0402 15.15 14.9702 15.43" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>

              </span>
            </div>

            <!-- مبدا -->
            <div class="relative">
              <input type="text" name="origin" placeholder="مبدا"
                class="w-full border border-gray-400 rounded-xl px-3 pl-10 py-2 text-right outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
              <span class="absolute left-3 top-1/2 -translate-y-1/2">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.25 11H14.75" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M12 13.75V8.25" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M3.6202 8.49C5.5902 -0.169998 18.4202 -0.159997 20.3802 8.5C21.5302 13.58 18.3702 17.88 15.6002 20.54C13.5902 22.48 10.4102 22.48 8.3902 20.54C5.6302 17.88 2.4702 13.57 3.6202 8.49Z" stroke="#292D32" stroke-width="1.5"/>
            </svg>


              </span>
            </div>

            <!-- مقصد -->
            <div class="relative">
              <input type="text" name="destination" placeholder="مقصد"
                class="w-full border border-gray-400 rounded-xl px-3 pl-10 py-2 text-right outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
              <span class="absolute left-3 top-1/2 -translate-y-1/2">
               <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.9999 13.4299C13.723 13.4299 15.1199 12.0331 15.1199 10.3099C15.1199 8.58681 13.723 7.18994 11.9999 7.18994C10.2768 7.18994 8.87988 8.58681 8.87988 10.3099C8.87988 12.0331 10.2768 13.4299 11.9999 13.4299Z" stroke="#292D32" stroke-width="1.5"/>
                <path d="M3.6202 8.49C5.5902 -0.169998 18.4202 -0.159997 20.3802 8.5C21.5302 13.58 18.3702 17.88 15.6002 20.54C13.5902 22.48 10.4102 22.48 8.3902 20.54C5.6302 17.88 2.4702 13.57 3.6202 8.49Z" stroke="#292D32" stroke-width="1.5"/>
               </svg>

              </span>
            </div>

            <!-- تاریخ شروع -->
            <div class="relative">
              <input type="text" name="start_date" placeholder="تاریخ شروع"
                class="w-full border border-gray-400 rounded-xl px-3 pl-10 py-2 text-right outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
              <span class="absolute left-3 top-1/2 -translate-y-1/2">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
              </span>
            </div>

            <!-- تاریخ ختم -->
            <div class="relative">
              <input type="text" name="end_date" placeholder="تاریخ ختم"
                class="w-full border border-gray-400 rounded-xl px-3 pl-10 py-2 text-right outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
              <span class="absolute left-3 top-1/2 -translate-y-1/2">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.77783 1.95508V4.8877" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15.5557 1.95508V4.8877" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M3.40283 8.88586H19.9306" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20.4165 8.30908V16.6182C20.4165 19.5508 18.9582 21.5059 15.5554 21.5059H7.77761C4.37484 21.5059 2.9165 19.5508 2.9165 16.6182V8.30908C2.9165 5.37646 4.37484 3.42139 7.77761 3.42139H15.5554C18.9582 3.42139 20.4165 5.37646 20.4165 8.30908Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15.2586 13.3923H15.2673" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15.2586 16.325H15.2673" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M11.6624 13.3923H11.6711" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M11.6624 16.325H11.6711" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.06378 13.3923H8.07251" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.06378 16.325H8.07251" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>

              </span>
            </div>

            <!-- تایم احتمالی -->
            <div class="relative">
              <input type="text" name="estimated_time" placeholder="تایم احتمالی"
                class="w-full border border-gray-400 rounded-xl px-3 pl-10 py-2 text-right outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
              <span class="absolute left-3 top-1/2 -translate-y-1/2">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2C17.52 2 22 6.48 22 12Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.7099 15.18L12.6099 13.33C12.0699 13.01 11.6299 12.24 11.6299 11.61V7.51001" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

              </span>
            </div>

            <!-- مبلغ -->
            <div class="relative">
              <input type="number" name="price" placeholder="مبلغ"
                class="w-full border border-gray-400 rounded-xl px-3 pl-10 py-2 text-right outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-gray-500 bg-white"/>
              <span class="absolute left-3 top-1/2 -translate-y-1/2">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.67188 14.3298C8.67188 15.6198 9.66188 16.6598 10.8919 16.6598H13.4019C14.4719 16.6598 15.3419 15.7498 15.3419 14.6298C15.3419 13.4098 14.8119 12.9798 14.0219 12.6998L9.99187 11.2998C9.20187 11.0198 8.67188 10.5898 8.67188 9.36984C8.67188 8.24984 9.54187 7.33984 10.6119 7.33984H13.1219C14.3519 7.33984 15.3419 8.37984 15.3419 9.66984" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 6V18" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

              </span>
            </div>
          </div>

          <!-- دکمه‌ها -->
          <div class="flex flex-col sm:flex-row justify-between mt-6 gap-4">
            <button type="reset" class="w-full sm:w-[48%] py-3 rounded-xl bg-[#FF0000] hover:bg-[#CA0808] text-white text-base font-semibold text-center">
              برگشت
            </button>

            <a href="#" class="w-full sm:w-[48%] py-3 rounded-xl hover:bg-blue-800 bg-[#0400FF] text-white text-base font-semibold text-center">
              ثبت
            </a>
          </div>
        </form>
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
