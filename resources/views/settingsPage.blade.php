<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تنظیمات</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
 <style>
    /* Fade-in + Scale */
    .fade-scale{opacity:0;transform:scale(.98);transition:opacity .45s ease,transform .45s ease}
    .fade-scale.show{opacity:1;transform:scale(1)}
  </style>
<body class="bg-gray-100 verflow-hidden flex items-center justify-center">

<div class="flex fade-scale  items-center justify-center min-h-screen w-full bg-gray-100 px-4 py-6" id="card">

    <!-- باکس کلی -->
    <div class="bg-white rounded-2xl shadow-lg flex flex-col md:flex-row w-full max-w-[1100px] lg:max-w-[800px] min-h-[80vh] md:min-h-[85vh] overflow-hidden">

        <!-- بخش تنظیمات -->
        <div class="flex flex-col justify-center w-full md:w-1/2 p-5 md:p-8 space-y-5">

            <!-- بخش تم‌ها -->
            <div>
                <h2 class="text-base md:text-lg font-bold mb-3 text-gray-700 text-right">تم‌ها</h2>
                <div class="flex flex-wrap gap-3 justify-between">

                    <!-- تم تاریک -->
                    <label class="flex-1 min-w-[120px] bg-gray-200 rounded-2xl overflow-hidden shadow-md cursor-pointer hover:shadow-lg transition">
                        <div class="w-full p-4 h-32 md:h-36 bg-gray-300 flex items-center justify-center">
                            <img src="/img/5.png" class="w-full h-full object-cover rounded-xl">
                        </div>
                        <div class="bg-white py-1 px-2 flex items-center gap-2">
                            <input type="radio" name="theme" value="dark" class="accent-[#001AFF] scale-110">
                            <span class="text-sm md:text-base text-gray-700 font-medium">تم تاریک</span>
                        </div>
                    </label>

                    <!-- تم روشن -->
                    <label class="flex-1 min-w-[120px] bg-gray-200 rounded-2xl overflow-hidden shadow-md cursor-pointer hover:shadow-lg transition ring-2 ring-blue-500">
                        <div class="w-full p-4 h-32 md:h-36 bg-gray-300 flex items-center justify-center">
                            <img src="/img/6.png" class="w-full h-full object-cover rounded-xl">
                        </div>
                        <div class="bg-white py-1 px-2 flex items-center gap-2">
                            <input type="radio" name="theme" value="light" checked class="accent-[#001AFF] scale-110">
                            <span class="text-sm md:text-base text-gray-700 font-medium">تم روشن</span>
                        </div>
                    </label>

                </div>
            </div>

            <!-- اندازه فونت -->
            <div class="text-right">
                <label class="block font-bold text-gray-600 mb-1 text-sm md:text-base">اندازه فونت</label>
                <div class="flex flex-col md:flex-row gap-2 items-center">
                    <div class="flex items-center justify-between border rounded-xl px-2 py-1 w-full">
                        <input type="range" min="12" max="24" value="16" class="w-full mx-2 accent-blue-600 h-2 bg-gray-200 cursor-pointer">
                        <span class="text-base md:text-lg pl-2">فونت</span>
                    </div>
                    <select class="border rounded-xl px-2 py-1 w-[120px] text-sm md:text-base">
                        <option>14px</option>
                        <option selected>16px</option>
                        <option>18px</option>
                        <option>20px</option>
                    </select>
                </div>
            </div>

            <!-- اعلان‌ها -->
            <div class="text-right">
                <label class="block font-bold text-gray-700 mb-2 text-sm md:text-base">اعلان‌ها</label>
                <div class="flex flex-wrap gap-3">
                    <label class="flex items-center gap-1 text-sm md:text-base font-medium text-gray-700 cursor-pointer">
                        <input type="checkbox" class="accent-blue-600 w-4 h-4 md:w-5 md:h-5">
                        سفارش جدید
                    </label>
                    <label class="flex items-center gap-1 text-sm md:text-base font-medium text-gray-700 cursor-pointer">
                        <input type="checkbox" class="accent-blue-600 w-4 h-4 md:w-5 md:h-5">
                        شکایات
                    </label>
                    <label class="flex items-center gap-1 text-sm md:text-base font-medium text-gray-700 cursor-pointer">
                        <input type="checkbox" class="accent-blue-600 w-4 h-4 md:w-5 md:h-5">
                        مبلغ دریافتی
                    </label>
                </div>
            </div>

            <!-- زوم -->
            <div class="text-right">
                <label class="block font-bold text-gray-600 mb-1 text-sm md:text-base">زوم صفحه</label>
                <select class="border rounded-xl px-2 py-1 w-full text-sm md:text-base">
                    <option>100% (نرمال)</option>
                    <option>125%</option>
                    <option>150%</option>
                    <option>75%</option>
                </select>
            </div>

            <!-- دکمه‌ها -->
            <div class="flex flex-nowrap justify-between items-center gap-4 mt-3">
                <div class="flex items-center gap-2 p-2 rounded-md hover:bg-gray-100 cursor-pointer transition">
                    <svg width="18" height="18" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.771 11.582C0.895996 11.9258 0.895996 19.0195 5.771 19.3633H7.77104" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M5.82335 11.5826C2.4796 2.28052 16.5837 -1.43822 18.1983 8.33261C22.7087 8.90553 24.5317 14.9159 21.115 17.9055C20.0733 18.8534 18.7296 19.3743 17.3233 19.3639H17.2296" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.7082 17.2181C17.7082 17.9889 17.5415 18.7181 17.229 19.3639C17.1456 19.5514 17.0519 19.7285 16.9478 19.8952C16.0519 21.4056 14.3957 22.4264 12.4998 22.4264C10.604 22.4264 8.94773 21.4056 8.0519 19.8952C7.94773 19.7285 7.85403 19.5514 7.77069 19.3639C7.45819 18.7181 7.2915 17.9889 7.2915 17.2181C7.2915 14.3431 9.62484 12.0098 12.4998 12.0098C15.3748 12.0098 17.7082 14.3431 17.7082 17.2181Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.875 17.2181L11.9062 18.2494L14.125 16.1973" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="text-sm md:text-base">پاک‌کاری داده‌ها</span>
                </div>

                <div class="flex items-center gap-2 p-2 rounded-md hover:bg-gray-100 cursor-pointer transition">
                    <svg width="18" height="18" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.2812 5.90558L6.71875 8.07227L5.09375 5.4056C4.5 4.42643 4.8125 3.13477 5.79166 2.54102C6.77083 1.94727 8.0625 2.25975 8.65625 3.23892L10.2812 5.90558Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.3123 9.54166L9.02059 11.5417C7.10392 12.7084 6.52058 15.0625 7.44766 16.9375L9.58308 21.2917C10.2706 22.6979 11.9373 23.1875 13.2706 22.3646L19.9685 18.2917C21.3122 17.4792 21.6352 15.7813 20.7081 14.5209L17.8227 10.625C16.5727 8.93753 14.2289 8.37499 12.3123 9.54166Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.2048 5.30992L5.8667 8.56055L8.03378 12.1193L13.3719 8.86867L11.2048 5.30992Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.9062 17.5117L16.625 20.3347" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.2397 19.1348L13.9585 21.9577" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.5732 15.8848L19.292 18.7077" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="text-sm md:text-base">پشتیبان‌گیری داده‌ها</span>
                </div>
            </div>

            <!-- دکمه ثبت -->
            <div class="w-full flex justify-center mt-3">
                <button class="bg-[#1C00F1] h-[50px] hover:bg-blue-700 text-white text-base md:text-lg font-semibold px-6 py-2 rounded-xl shadow transition w-full">
                    ثبت
                </button>
            </div>

        </div>

        <!-- تصویر سمت راست -->
        <div class="w-full md:w-1/2 rounded-xl  md:h-auto p-5">
            <img src="/img/4c7c5eb6-5a14-4ab3-aee0-92dde837d47e.jpeg" class="w-full h-full object-cover rounded-xl md:rounded-l-2xl " alt="setting">
        </div>

    </div>
</div>

  <script>
    // اجرای انیمیشن بعد از لود
    window.addEventListener('DOMContentLoaded', () => {
      const card = document.getElementById('card');
      if (card) setTimeout(() => card.classList.add('show'), 80);
    });
  </script>

</body>
</html>
