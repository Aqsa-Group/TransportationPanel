@extends('layouts.app')
@section('title','داشبورد')

@section('content')

    <!-- ✅ Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- ✅ Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- ✅ Jalaali JS -->
    <script src="https://cdn.jsdelivr.net/npm/jalaali-js@1.2.3/dist/jalaali.min.js"></script>

    <main class="p-3">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">

            <!-- Graph -->
                <div class="bg-white shadow-xl rounded-2xl p-6 w-full max-w-3xl  animate-fade-in">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-bold text-gray-800">گراف توضیحی درآمد هفته وار</h2>
                        <span class="text-sm text-gray-500 flex items-center gap-1">
                            <div class="flex items-center gap-1">
                                <button id="calendar-toggle" aria-expanded="false" class="group relative p-2 rounded-lg hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-red-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-7 text-red-600 group-hover:text-red-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                        <rect x="3" y="5" width="18" height="16" rx="2" />
                                        <path d="M16 3v4M8 3v4" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M3 11h18" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>

                                <div>
                                    <div id="short-date" class="font-semibold text-slate-900">—</div>
                                </div>
                            </div>
                            <div id="month-popover" class="absolute z-10 top-40 -mr-36 hidden">
                                <div class="bg-white rounded-2xl shadow-xl p-4 w-72 ring-1 ring-slate-200">
                                <div class="flex items-center justify-between mb-3">
                                    <button id="prev-month" class="p-1 rounded hover:bg-slate-100">‹</button>
                                    <div id="month-title" class="font-medium"></div>
                                    <button id="next-month" class="p-1 rounded hover:bg-slate-100">›</button>
                                </div>
                                <div class="grid grid-cols-7 gap-1 text-center text-xs text-slate-500">
                                    <div>ش</div><div>ی</div><div>د</div><div>س</div><div>چ</div><div>پ</div><div>ج</div>
                                </div>
                                <div id="month-grid" class="grid grid-cols-7 gap-1 mt-2"></div>
                                </div>
                            </div>
                        </span>
                    </div>
                    <!-- Chart -->
                    <div class="relative">
                        <canvas id="weeklyChart" height="35" width="80%"></canvas>
                        <div id="chartjs-tooltip" class="chartjs-custom-tooltip"></div>
                    </div>

                    <div class="flex flex-wrap justify-around items-center gap-3 text-sm mt-3">
                        <div class="">
                            <div class="flex items-center gap-1">
                                <svg width="18" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.67188 14.3298C8.67188 15.6198 9.66188 16.6598 10.8919 16.6598H13.4019C14.4719 16.6598 15.3419 15.7498 15.3419 14.6298C15.3419 13.4098 14.8119 12.9798 14.0219 12.6998L9.99187 11.2998C9.20187 11.0198 8.67188 10.5898 8.67188 9.36984C8.67188 8.24984 9.54187 7.33984 10.6119 7.33984H13.1219C14.3519 7.33984 15.3419 8.37984 15.3419 9.66984" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 6V18" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                            در آمد
                            </div>
                            <div class="flex items-center gap-1">
                                <svg width="18" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2C17.52 2 22 6.48 22 12Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.71 15.18L12.61 13.33C12.07 13.01 11.63 12.24 11.63 11.61V7.51001" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                            تایم
                            </div>
                        </div>
                        <div class="">
                            <div class="flex items-center gap-1">
                                <svg width="18" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 2V12C15 13.1 14.1 14 13 14H2V6C2 3.79 3.79 2 6 2H15Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 14V17C22 18.66 20.66 20 19 20H18C18 18.9 17.1 18 16 18C14.9 18 14 18.9 14 20H10C10 18.9 9.1 18 8 18C6.9 18 6 18.9 6 20H5C3.34 20 2 18.66 2 17V14H13C14.1 14 15 13.1 15 12V5H16.84C17.56 5 18.22 5.39001 18.58 6.01001L20.29 9H19C18.45 9 18 9.45 18 10V13C18 13.55 18.45 14 19 14H22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 22C9.10457 22 10 21.1046 10 20C10 18.8954 9.10457 18 8 18C6.89543 18 6 18.8954 6 20C6 21.1046 6.89543 22 8 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16 22C17.1046 22 18 21.1046 18 20C18 18.8954 17.1046 18 16 18C14.8954 18 14 18.8954 14 20C14 21.1046 14.8954 22 16 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 12V14H19C18.45 14 18 13.55 18 13V10C18 9.45 18.45 9 19 9H20.29L22 12Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                            تعداد سفرها
                            </div>
                            <div class="flex items-center gap-1">
                                <svg width="18" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 6V8.42C22 10 21 11 19.42 11H16V4.01C16 2.9 16.91 2 18.02 2C19.11 2.01 20.11 2.45 20.83 3.17C21.55 3.9 22 4.9 22 6Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 7V21C2 21.83 2.94 22.3 3.6 21.8L5.31 20.52C5.71 20.22 6.27 20.26 6.63 20.62L8.29 22.29C8.68 22.68 9.32 22.68 9.71 22.29L11.39 20.61C11.74 20.26 12.3 20.22 12.69 20.52L14.4 21.8C15.06 22.29 16 21.82 16 21V4C16 2.9 16.9 2 18 2H7H6C3 2 2 3.79 2 6V7Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.27002 13.73L11.73 8.27002" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.9247 13.5H11.9337" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.1947 8.5H6.20368" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                            فیصدی فایده یا ضرر
                            </div>
                        </div>
                        <div class="">
                            <div class="flex items-center gap-2"><span class="w-4 h-4 bg-[#FF00A6] rounded shadow"></span> فایده متوسط</div>
                            <div class="flex items-center gap-2"><span class="w-4 h-4 bg-[#1E00FF] rounded shadow"></span> فایده بالا</div>
                        </div>
                        <div class="flex items-center gap-2"><span class="w-4 h-4 bg-[#FF0004] rounded shadow"></span> ضرر</div>
                    </div>
                </div>


                <!-- Complaints -->
                <div class="bg-white rounded-xl shadow p-5 flex flex-col">
                    <div class="flex items-center mb-2">
                        <span class="text-2xl font-bold flex-1 text-right">شکایات</span>
                        <div class="flex items-center rounded-lg border rounded-md py-1 text-sm ml-3 overflow-hidden">
                            <span class="flex items-center px-1 text-gray-600 shrink-0">
                                <svg width="16" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 22L20 20" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <input type="text" placeholder="جستجو" class="outline-none text-sm placeholder-gray-400" />
                        </div>
                        <button>
                            <select name="" id="" class="bg-[#0800FF] justify-cenyer hover:bg-blue-800 text-white px-3 py-1.5 rounded-md text-sm text-center focus:outline-none focus:border-none">
                                <option class="bg-white border-b text-gray-800" value="daliy">روزانه</option>
                                <option class="bg-white border-b text-gray-800" value="daliy">هفته وار</option>
                                <option class="bg-white border-b text-gray-800" value="daliy">ماهانه</option>
                            </select>
                        </button>
                    </div>
                    <table class="w-full text-center text-sm space-y-1">
                        <thead class="bg-[#F2F2F2] p-6 rounded-md">
                            <tr>
                                <th>سفارش</th>
                                <th>راننده</th>
                                <th><div class="py-2">تاریخ</div></th>
                                <th>حالت</th>
                                <th>شکایت</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-dashed border-b border-gray-500">
                                <td>89289</td>
                                <td>احمد عزیزی</td>
                                <td><div class="py-3">1404/3/1</div></td>
                                <td>
                                    <span class="border rounded px-1 w-14 text-gray-500">جدید</span>
                                </td>
                                <td>تاخیر زیاد</td>
                            </tr>
                            <tr class="border-dashed border-b border-gray-500">
                                <td>89289</td>
                                <td>احمد عزیزی</td>
                                <td><div class="py-3">1404/3/1</div></td>
                                <td>
                                    <span class="border rounded w-14 text-gray-500">حل شد</span>
                                </td>
                                <td>تاخیر زیاد</td>
                            </tr>
                            <tr class="border-dashed border-b border-gray-500">
                                <td>89289</td>
                                <td>احمد عزیزی</td>
                                <td><div class="py-3">1404/3/1</div></td>
                                <td>
                                    <span class="border rounded w-14 text-gray-500">بررسی</span>
                                </td>
                                <td>خسارت به بار</td>
                            </tr>
                            <tr class="border-dashed border-b border-gray-500">
                                <td>89289</td>
                                <td>احمد عزیزی</td>
                                <td><div class="py-3">1404/3/1</div></td>
                                <td>
                                    <span class="border rounded w-14 text-gray-500">حل شد</span>
                                </td>
                                <td>خسارت به بار</td>
                            </tr>
                            <tr class="border-dashed border-b border-gray-500">
                                <td>89289</td>
                                <td>احمد عزیزی</td>
                                <td><div class="py-3">1404/3/1</div></td>
                                <td>
                                    <span class="border rounded px-1 w-14 text-gray-500">جدید</span>
                                </td>
                                <td>خسارت به بار</td>
                            </tr>
                            <tr class="border-dashed border-b border-gray-500">
                                <td>89289</td>
                                <td>احمد عزیزی</td>
                                <td><div class="py-3">1404/3/1</div></td>
                                <td>
                                    <span class="border rounded w-14 text-gray-500">بررسی</span>
                                </td>
                                <td>تاخیر زیاد</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <!-- Completion Chart -->
                <div class="space-y-6 bg-white rounded-xl shadowxl p-4">

                    <!-- graph-->
                    <div class="card p-5">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="font-semibold">گراف سفرهای تکمیلی هفته وار</h3>
                            <span class="text-sm text-gray-500 flex items-center gap-1">
                                <div id="afg-date-card" class="flex items-center justify-between gap-4 relative">
                                    <div class="flex items-center gap-1">
                                        <!-- Icon -->
                                        <button id="afg-calendar-btn" class="group relative p-2 rounded-lg hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-red-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-7 text-red-600 group-hover:text-red-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                            <rect x="3" y="5" width="18" height="16" rx="2" />
                                            <path d="M16 3v4M8 3v4" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M3 11h18" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        </button>

                                        <!-- Date OF Af -->
                                        <div>
                                        <div id="afg-short-date" class="font-semibold text-slate-900">—</div>
                                        </div>
                                    </div>

                                    <!-- Montly -->
                                    <div id="afg-month-popup" class="absolute hidden top-16 -right-40 z-50">
                                        <div class="bg-white rounded-2xl shadow-xl p-4 w-72 ring-1 ring-slate-200">
                                        <div class="flex items-center justify-between mb-3">
                                            <button id="afg-prev-month" class="p-1 rounded hover:bg-slate-100">‹</button>
                                            <div id="afg-month-title" class="font-medium"></div>
                                            <button id="afg-next-month" class="p-1 rounded hover:bg-slate-100">›</button>
                                        </div>
                                        <div class="grid grid-cols-7 gap-1 text-center text-xs text-slate-500">
                                            <div>ش</div><div>ی</div><div>د</div><div>س</div><div>چ</div><div>پ</div><div>ج</div>
                                        </div>
                                        <div id="afg-month-grid" class="grid grid-cols-7 gap-1 mt-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </span>
                        </div>

                        <div class="grid grid-cols-4 justify-center gap-4">
                            <div class="relative p-2 flex flex-col items-center">
                                <h1 class="font-bold">ش</h1>
                                <canvas id="donut1" class="chart flex items-center justify-center text-white font-bold" data-tooltip="50 سفر" height="120"></canvas>
                                <div class="center-text mt-6 text-[#00e6e6]" id="donut1text"></div>
                            </div>
                            <div class="relative p-2 flex flex-col items-center">
                                <h1 class="font-bold">ی</h1>
                                <canvas id="donut2" class="chart flex items-center justify-center text-white font-bold" data-tooltip="100 سفر" height="120"></canvas>
                                <div class="center-text mt-6 text-[#FF00BB]" id="donut2text"></div>
                            </div>
                                <div class="relative p-2 flex flex-col items-center">
                                <h1 class="font-bold">د</h1>
                                <canvas id="donut3" class="chart flex items-center justify-center text-white font-bold" data-tooltip="80 سفر" height="120"></canvas>
                            <div class="center-text mt-6 text-[#3700FF]" id="donut3text"></div>
                            </div>
                                <div class="relative p-2 flex flex-col items-center">
                                <h1 class="font-bold">س</h1>
                                <canvas id="donut4" class="chart flex items-center justify-center text-white font-bold" data-tooltip="65 سفر" height="120"></canvas>
                                <div class="center-text mt-6 text-[#FF0004]" id="donut4text"></div>
                            </div>
                            <div class="relative p-2 flex flex-col items-center">
                                <h1 class="font-bold">چ</h1>
                                <canvas id="donut5" class="chart flex items-center justify-center text-white font-bold" data-tooltip="40 سفر" height="120"></canvas>
                                <div class="center-text mt-6 text-[#06b6d4]" id="donut5text"></div>
                            </div>
                            <div class="relative p-2 flex flex-col items-center">
                                <h1 class="font-bold">پ</h1>
                                <canvas id="donut6" class="chart flex items-center justify-center text-white font-bold" data-tooltip="70 سفر" height="120"></canvas>
                                <div class="center-text mt-6 text-[#00FF40]" id="donut6text"></div>
                            </div>
                            <div class="relative p-2 flex flex-col items-center">
                                <h1 class="font-bold">ج</h1>
                                <canvas id="donut7" class="chart flex items-center justify-center text-white font-bold" data-tooltip="90 سفر" height="120"></canvas>
                                <div class="center-text mt-6 text-[#E5FF00]" id="donut7text"></div>
                            </div>
                        </div>
                        <div id="tooltip" class="tooltip"></div>
                    </div>
                </div>


                <!-- Top Drivers -->
                <div class="bg-white rounded-xl shadow p-5 flex flex-col">
                    <div class="flex items-center mb-2">
                        <h1 class="font-bold flex-1 text-2xl">رانندگان برتر</h1>
                        <div class="flex items-center rounded-lg border rounded-md py-1 text-sm ml-3 overflow-hidden">
                            <span class="flex items-center px-1 text-gray-600 shrink-0">
                                <svg width="16" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 22L20 20" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <input type="text" placeholder="جستجو" class="outline-none text-sm placeholder-gray-400" />
                        </div>

                        <button class="bg-[#0800FF] hover:bg-blue-800 text-white px-3 py-1 rounded-lg text-sm flex items-center gap-1">
                            صادر کردن
                            <svg width="15" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.44 8.8999C20.04 9.2099 21.51 11.0599 21.51 15.1099V15.2399C21.51 19.7099 19.72 21.4999 15.25 21.4999H8.73998C4.26998 21.4999 2.47998 19.7099 2.47998 15.2399V15.1099C2.47998 11.0899 3.92998 9.2399 7.46998 8.9099" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 15.0001V3.62012" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.35 5.85L12 2.5L8.65002 5.85" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                    <table class="w-full text-center text-sm mt-2">
                        <thead class="bg-[#F2F2F2] rounded-2xl">
                            <tr class="">
                                <th>
                                    <div class="p-2">راننده</div>
                                </th>
                                <th>امتیاز کسب شده</th>
                                <th>کامنت ها</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-dashed border-b border-gray-500">
                                <td>احمد عزیزی</td>
                                <td>
                                    <span class="flex justify-center text-blue-500 gap-1 py-3">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                    </span>
                                </td>
                                <td>اخلاق خوب</td>
                            </tr>
                            <tr class="border-dashed border-b border-gray-500">
                                <td>احمد عزیزی</td>
                                <td>
                                    <span class="flex justify-center text-blue-500 gap-1 py-3">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.5549 2.29976L13.1387 5.49359C13.3547 5.93818 13.9306 6.36463 14.4166 6.44629L17.2872 6.92718C19.123 7.23567 19.555 8.57853 18.2321 9.90325L16.0004 12.1534C15.6224 12.5345 15.4154 13.2695 15.5324 13.7957L16.1714 16.5812C16.6753 18.7861 15.5144 19.639 13.5796 18.4867L10.8889 16.8807C10.403 16.5903 9.60209 16.5903 9.10714 16.8807L6.41644 18.4867C4.49065 19.639 3.32078 18.777 3.82473 16.5812L4.46366 13.7957C4.58064 13.2695 4.37367 12.5345 3.99571 12.1534L1.76395 9.90325C0.4501 8.57853 0.873053 7.23567 2.70885 6.92718L5.57953 6.44629C6.05648 6.36463 6.63242 5.93818 6.84839 5.49359L8.43222 2.29976C9.29612 0.566747 10.7 0.566747 11.5549 2.29976Z" stroke="#0022FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </td>
                                <td>اخلاق خوب</td>
                            </tr>
                            <tr class="border-dashed border-b border-gray-500">
                                <td>احمد عزیزی</td>
                                <td>
                                    <span class="flex justify-center text-blue-500 gap-1 py-3">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.5549 2.29976L13.1387 5.49359C13.3547 5.93818 13.9306 6.36463 14.4166 6.44629L17.2872 6.92718C19.123 7.23567 19.555 8.57853 18.2321 9.90325L16.0004 12.1534C15.6224 12.5345 15.4154 13.2695 15.5324 13.7957L16.1714 16.5812C16.6753 18.7861 15.5144 19.639 13.5796 18.4867L10.8889 16.8807C10.403 16.5903 9.60209 16.5903 9.10714 16.8807L6.41644 18.4867C4.49065 19.639 3.32078 18.777 3.82473 16.5812L4.46366 13.7957C4.58064 13.2695 4.37367 12.5345 3.99571 12.1534L1.76395 9.90325C0.4501 8.57853 0.873053 7.23567 2.70885 6.92718L5.57953 6.44629C6.05648 6.36463 6.63242 5.93818 6.84839 5.49359L8.43222 2.29976C9.29612 0.566747 10.7 0.566747 11.5549 2.29976Z" stroke="#0022FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.5549 2.29976L13.1387 5.49359C13.3547 5.93818 13.9306 6.36463 14.4166 6.44629L17.2872 6.92718C19.123 7.23567 19.555 8.57853 18.2321 9.90325L16.0004 12.1534C15.6224 12.5345 15.4154 13.2695 15.5324 13.7957L16.1714 16.5812C16.6753 18.7861 15.5144 19.639 13.5796 18.4867L10.8889 16.8807C10.403 16.5903 9.60209 16.5903 9.10714 16.8807L6.41644 18.4867C4.49065 19.639 3.32078 18.777 3.82473 16.5812L4.46366 13.7957C4.58064 13.2695 4.37367 12.5345 3.99571 12.1534L1.76395 9.90325C0.4501 8.57853 0.873053 7.23567 2.70885 6.92718L5.57953 6.44629C6.05648 6.36463 6.63242 5.93818 6.84839 5.49359L8.43222 2.29976C9.29612 0.566747 10.7 0.566747 11.5549 2.29976Z" stroke="#0022FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.5549 2.29976L13.1387 5.49359C13.3547 5.93818 13.9306 6.36463 14.4166 6.44629L17.2872 6.92718C19.123 7.23567 19.555 8.57853 18.2321 9.90325L16.0004 12.1534C15.6224 12.5345 15.4154 13.2695 15.5324 13.7957L16.1714 16.5812C16.6753 18.7861 15.5144 19.639 13.5796 18.4867L10.8889 16.8807C10.403 16.5903 9.60209 16.5903 9.10714 16.8807L6.41644 18.4867C4.49065 19.639 3.32078 18.777 3.82473 16.5812L4.46366 13.7957C4.58064 13.2695 4.37367 12.5345 3.99571 12.1534L1.76395 9.90325C0.4501 8.57853 0.873053 7.23567 2.70885 6.92718L5.57953 6.44629C6.05648 6.36463 6.63242 5.93818 6.84839 5.49359L8.43222 2.29976C9.29612 0.566747 10.7 0.566747 11.5549 2.29976Z" stroke="#0022FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </td>
                                <td>اخلاق خوب</td>
                            </tr>
                            <tr class="border-dashed border-b border-gray-500">
                                <td>احمد عزیزی</td>
                                <td>
                                    <span class="flex justify-center text-blue-500 gap-1 py-3">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.5549 2.29976L13.1387 5.49359C13.3547 5.93818 13.9306 6.36463 14.4166 6.44629L17.2872 6.92718C19.123 7.23567 19.555 8.57853 18.2321 9.90325L16.0004 12.1534C15.6224 12.5345 15.4154 13.2695 15.5324 13.7957L16.1714 16.5812C16.6753 18.7861 15.5144 19.639 13.5796 18.4867L10.8889 16.8807C10.403 16.5903 9.60209 16.5903 9.10714 16.8807L6.41644 18.4867C4.49065 19.639 3.32078 18.777 3.82473 16.5812L4.46366 13.7957C4.58064 13.2695 4.37367 12.5345 3.99571 12.1534L1.76395 9.90325C0.4501 8.57853 0.873053 7.23567 2.70885 6.92718L5.57953 6.44629C6.05648 6.36463 6.63242 5.93818 6.84839 5.49359L8.43222 2.29976C9.29612 0.566747 10.7 0.566747 11.5549 2.29976Z" stroke="#0022FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </td>
                                <td>اخلاق خوب</td>
                            </tr>
                            <tr class="border-dashed border-b border-gray-500">
                                <td>احمد عزیزی</td>
                                <td>
                                    <span class="flex justify-center text-blue-500 gap-1 py-3">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.5549 2.29976L13.1387 5.49359C13.3547 5.93818 13.9306 6.36463 14.4166 6.44629L17.2872 6.92718C19.123 7.23567 19.555 8.57853 18.2321 9.90325L16.0004 12.1534C15.6224 12.5345 15.4154 13.2695 15.5324 13.7957L16.1714 16.5812C16.6753 18.7861 15.5144 19.639 13.5796 18.4867L10.8889 16.8807C10.403 16.5903 9.60209 16.5903 9.10714 16.8807L6.41644 18.4867C4.49065 19.639 3.32078 18.777 3.82473 16.5812L4.46366 13.7957C4.58064 13.2695 4.37367 12.5345 3.99571 12.1534L1.76395 9.90325C0.4501 8.57853 0.873053 7.23567 2.70885 6.92718L5.57953 6.44629C6.05648 6.36463 6.63242 5.93818 6.84839 5.49359L8.43222 2.29976C9.29612 0.566747 10.7 0.566747 11.5549 2.29976Z" stroke="#0022FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </td>
                                <td>اخلاق خوب</td>
                            </tr>
                            <tr class="border-dashed border-b border-gray-500">
                                <td>احمد عزیزی</td>
                                <td>
                                    <span class="flex justify-center text-blue-500 gap-1 py-3">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.5549 2.29976L13.1387 5.49359C13.3547 5.93818 13.9306 6.36463 14.4166 6.44629L17.2872 6.92718C19.123 7.23567 19.555 8.57853 18.2321 9.90325L16.0004 12.1534C15.6224 12.5345 15.4154 13.2695 15.5324 13.7957L16.1714 16.5812C16.6753 18.7861 15.5144 19.639 13.5796 18.4867L10.8889 16.8807C10.403 16.5903 9.60209 16.5903 9.10714 16.8807L6.41644 18.4867C4.49065 19.639 3.32078 18.777 3.82473 16.5812L4.46366 13.7957C4.58064 13.2695 4.37367 12.5345 3.99571 12.1534L1.76395 9.90325C0.4501 8.57853 0.873053 7.23567 2.70885 6.92718L5.57953 6.44629C6.05648 6.36463 6.63242 5.93818 6.84839 5.49359L8.43222 2.29976C9.29612 0.566747 10.7 0.566747 11.5549 2.29976Z" stroke="#0022FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </td>
                                <td>اخلاق خوب</td>
                            </tr>
                            <tr class="border-dashed border-b border-gray-500">
                                <td>احمد عزیزی</td>
                                <td>
                                    <span class="flex justify-center text-blue-500 gap-1 py-3">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.5549 2.29976L13.1387 5.49359C13.3547 5.93818 13.9306 6.36463 14.4166 6.44629L17.2872 6.92718C19.123 7.23567 19.555 8.57853 18.2321 9.90325L16.0004 12.1534C15.6224 12.5345 15.4154 13.2695 15.5324 13.7957L16.1714 16.5812C16.6753 18.7861 15.5144 19.639 13.5796 18.4867L10.8889 16.8807C10.403 16.5903 9.60209 16.5903 9.10714 16.8807L6.41644 18.4867C4.49065 19.639 3.32078 18.777 3.82473 16.5812L4.46366 13.7957C4.58064 13.2695 4.37367 12.5345 3.99571 12.1534L1.76395 9.90325C0.4501 8.57853 0.873053 7.23567 2.70885 6.92718L5.57953 6.44629C6.05648 6.36463 6.63242 5.93818 6.84839 5.49359L8.43222 2.29976C9.29612 0.566747 10.7 0.566747 11.5549 2.29976Z" stroke="#0022FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </td>
                                <td>اخلاق خوب</td>
                            </tr>
                               <tr class="border-dashed border-b border-gray-500">
                                <td>احمد عزیزی</td>
                                <td>
                                    <span class="flex justify-center text-blue-500 gap-1 py-3">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.5549 2.29976L13.1387 5.49359C13.3547 5.93818 13.9306 6.36463 14.4166 6.44629L17.2872 6.92718C19.123 7.23567 19.555 8.57853 18.2321 9.90325L16.0004 12.1534C15.6224 12.5345 15.4154 13.2695 15.5324 13.7957L16.1714 16.5812C16.6753 18.7861 15.5144 19.639 13.5796 18.4867L10.8889 16.8807C10.403 16.5903 9.60209 16.5903 9.10714 16.8807L6.41644 18.4867C4.49065 19.639 3.32078 18.777 3.82473 16.5812L4.46366 13.7957C4.58064 13.2695 4.37367 12.5345 3.99571 12.1534L1.76395 9.90325C0.4501 8.57853 0.873053 7.23567 2.70885 6.92718L5.57953 6.44629C6.05648 6.36463 6.63242 5.93818 6.84839 5.49359L8.43222 2.29976C9.29612 0.566747 10.7 0.566747 11.5549 2.29976Z" stroke="#0022FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </td>
                                <td>اخلاق خوب</td>
                            </tr>
                               <tr class="border-dashed border-b border-gray-500">
                                <td>احمد عزیزی</td>
                                <td>
                                    <span class="flex justify-center text-blue-500 gap-1 py-3">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5549 1.29976L12.1387 4.49359C12.3547 4.93818 12.9306 5.36463 13.4166 5.44629L16.2872 5.92718C18.123 6.23567 18.555 7.57853 17.2321 8.90325L15.0004 11.1534C14.6224 11.5345 14.4154 12.2695 14.5324 12.7957L15.1714 15.5812C15.6753 17.7861 14.5144 18.639 12.5796 17.4867L9.88895 15.8807C9.403 15.5903 8.60209 15.5903 8.10714 15.8807L5.41644 17.4867C3.49065 18.639 2.32078 17.777 2.82473 15.5812L3.46366 12.7957C3.58064 12.2695 3.37367 11.5345 2.99571 11.1534L0.763955 8.90325C-0.5499 7.57853 -0.126947 6.23567 1.70885 5.92718L4.57953 5.44629C5.05648 5.36463 5.63242 4.93818 5.84839 4.49359L7.43222 1.29976C8.29612 -0.433253 9.69997 -0.433253 10.5549 1.29976Z" fill="#0022FF"/>
                                        </svg>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.5549 2.29976L13.1387 5.49359C13.3547 5.93818 13.9306 6.36463 14.4166 6.44629L17.2872 6.92718C19.123 7.23567 19.555 8.57853 18.2321 9.90325L16.0004 12.1534C15.6224 12.5345 15.4154 13.2695 15.5324 13.7957L16.1714 16.5812C16.6753 18.7861 15.5144 19.639 13.5796 18.4867L10.8889 16.8807C10.403 16.5903 9.60209 16.5903 9.10714 16.8807L6.41644 18.4867C4.49065 19.639 3.32078 18.777 3.82473 16.5812L4.46366 13.7957C4.58064 13.2695 4.37367 12.5345 3.99571 12.1534L1.76395 9.90325C0.4501 8.57853 0.873053 7.23567 2.70885 6.92718L5.57953 6.44629C6.05648 6.36463 6.63242 5.93818 6.84839 5.49359L8.43222 2.29976C9.29612 0.566747 10.7 0.566747 11.5549 2.29976Z" stroke="#0022FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </td>
                                <td>اخلاق خوب</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

        </div>
    </main>
    <script>

        tailwind.config = {
        theme: {
            extend: {
            keyframes: {
                fadeIn: { '0%': { opacity: 0, transform: 'translateY(30px)' }, '100%': { opacity: 1, transform: 'translateY(0)' } },
                slideUp: { '0%': { opacity: 0, transform: 'translateY(50px)' }, '100%': { opacity: 1, transform: 'translateY(0)' } },
            },
            animation: {
                'fade-in': 'fadeIn 1s ease-out',
                'slide-up': 'slideUp 1s ease-out',
            }
            }
        }
        };


        const ctx = document.getElementById('weeklyChart').getContext('2d');
        const tooltipEl = document.getElementById('chartjs-tooltip');

        const data = {
        labels: ['ش', 'ی', 'د', 'س', 'چ', 'پ', 'ج'],
        datasets: [
            { label: 'ضرر', data: [1, 2, 3, 2, 4, 3, 2], backgroundColor: '#ef4444',},
            { label: 'فایده متوسط', data: [3, 4, 4.5, 4, 5, 4, 4], backgroundColor: '#ec4899', },
            { label: 'فایده بالا', data: [4.5, 5, 6, 5, 7, 5, 7], backgroundColor: '#3b82f6', },
        ]
        };

        const externalTooltipHandler = (context) => {
        const { chart, tooltip } = context;
        if (tooltip.opacity === 0) {
            tooltipEl.style.opacity = 0;
            return;
        }

        if (tooltip.body) {
            const value = tooltip.dataPoints[0].parsed.y;
            const price = value * 100;
            const trips = value * 10;
            const percent = value * 5;
            const time = ['8:00ق.ظ', '10:00ق.ظ', '12:00ب.ظ', '2:00ب.ظ', '4:00ب.ظ', '8:00ب.ظ'][value - 1] || '—';

            const svgMoney = `
            <svg width="11" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.67188 14.3298C8.67188 15.6198 9.66188 16.6598 10.8919 16.6598H13.4019C14.4719 16.6598 15.3419 15.7498 15.3419 14.6298C15.3419 13.4098 14.8119 12.9798 14.0219 12.6998L9.99187 11.2998C9.20187 11.0198 8.67188 10.5898 8.67188 9.36984C8.67188 8.24984 9.54187 7.33984 10.6119 7.33984H13.1219C14.3519 7.33984 15.3419 8.37984 15.3419 9.66984" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 6V18" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>`;
            const svgTrips = `
            <svg width="11" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 2V12C15 13.1 14.1 14 13 14H2V6C2 3.79 3.79 2 6 2H15Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M22 14V17C22 18.66 20.66 20 19 20H18C18 18.9 17.1 18 16 18C14.9 18 14 18.9 14 20H10C10 18.9 9.1 18 8 18C6.9 18 6 18.9 6 20H5C3.34 20 2 18.66 2 17V14H13C14.1 14 15 13.1 15 12V5H16.84C17.56 5 18.22 5.39001 18.58 6.01001L20.29 9H19C18.45 9 18 9.45 18 10V13C18 13.55 18.45 14 19 14H22Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8 22C9.10457 22 10 21.1046 10 20C10 18.8954 9.10457 18 8 18C6.89543 18 6 18.8954 6 20C6 21.1046 6.89543 22 8 22Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M16 22C17.1046 22 18 21.1046 18 20C18 18.8954 17.1046 18 16 18C14.8954 18 14 18.8954 14 20C14 21.1046 14.8954 22 16 22Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M22 12V14H19C18.45 14 18 13.55 18 13V10C18 9.45 18.45 9 19 9H20.29L22 12Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>`;
            const svgPercent = `
            <svg width="11" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 6V8.42C22 10 21 11 19.42 11H16V4.01C16 2.9 16.91 2 18.02 2C19.11 2.01 20.11 2.45 20.83 3.17C21.55 3.9 22 4.9 22 6Z" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2 7V21C2 21.83 2.94 22.3 3.6 21.8L5.31 20.52C5.71 20.22 6.27 20.26 6.63 20.62L8.29 22.29C8.68 22.68 9.32 22.68 9.71 22.29L11.39 20.61C11.74 20.26 12.3 20.22 12.69 20.52L14.4 21.8C15.06 22.29 16 21.82 16 21V4C16 2.9 16.9 2 18 2H7H6C3 2 2 3.79 2 6V7Z" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.27002 13.73L11.73 8.27002" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M11.9247 13.5H11.9337" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.1947 8.5H6.20368" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>`;
            const svgClock = `
            <svg width="11" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2C17.52 2 22 6.48 22 12Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15.71 15.18L12.61 13.33C12.07 13.01 11.63 12.24 11.63 11.61V7.51001" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>`;


            tooltipEl.innerHTML = `
            <div class="text-right text-[10px]">
                <div class="flex item-center gap-1">${svgMoney} <span class="mt-1"> ${price} ؋</span> &nbsp;&nbsp; ${svgPercent} <span class="mt-1"> ${percent}%</span></div>
                <div class="flex item-center gap-1">${svgClock} <span class="mt-1">${time}</span> &nbsp;&nbsp; ${svgTrips} <span class="mt-1"> ${trips}</span></div>
            </div>
            `;
        }

        const { offsetLeft: positionX, offsetTop: positionY } = chart.canvas;
        tooltipEl.style.opacity = 1;
        tooltipEl.style.left = positionX + tooltip.caretX - tooltipEl.clientWidth / 2 + 'px';
        tooltipEl.style.top = positionY + tooltip.caretY - 60 + 'px';
        };

        const config = {
        type: 'bar',
        data,
        options: {
            responsive: true,
            scales: {
            x: {
                grid: { color: '#eee' },
                ticks: { color: '#333', font: { size: 13 } }
            },
            y: {
                grid: { color: '#ddd' },
                ticks: {
                color: '#333',
                font: { size: 13 },
                callback: function(value) {
                    const times = [
                    '10:00 - 8:00ق.ظ',
                    '12:00 - 10:00ق.ظ',
                    '2:00 - 12:00ب.ظ',
                    '4:00 - 2:00 ب.ظ',
                    '6:00 - 4:00 ب.ظ',
                    '8:00 - 6:00 ب.ظ'
                    ];
                    return times[value - 1] || '';
                }
                }
            }
            },
            plugins: {
            legend: { display: false },
            tooltip: {
                enabled: false,
                external: externalTooltipHandler
            }
            }
        }
        };

        new Chart(ctx, config);


        let incomeData = {};

        let donutPercents = [50, 50, 70, 50, 40, 60, 70];
        const donutColors = ['#00e6e6','#FF00BB','#3700FF','#FF0004','#06b6d4','#00FF40', '#E5FF00'];

        // -----  doughnut -----
        const donutCharts = [];
        for (let i=0;i<7;i++){
        const ctx = document.getElementById(`donut${i+1}`).getContext('2d');
        const val = donutPercents[i];
        const chart = new Chart(ctx, {
            type: 'doughnut',
            data: {
            labels: ['تکمیل','باقی'],
            datasets: [{
                data: [val, 100-val],
                backgroundColor: [donutColors[i], 'rgba(0,0,0,0.06)'],
                cutout: '70%',
                borderWidth: 0
            }]
            },
            options: {
            plugins: { legend: { display:false }, tooltip: { enabled:false } },
            animation: { animateRotate:true, animateScale:true, duration: 1200, easing:'easeOutCirc' }
            }
        });
        donutCharts.push(chart);
        document.getElementById(`donut${i+1}text`).textContent = val + '%';
        }

        document.getElementById('refreshData').addEventListener('click', ()=> {

        incomeChart.update();

        for (let i=0;i<donutCharts.length;i++){
            const newVal = [40,50,60,70,80,40][Math.floor(Math.random()*5)];
            donutCharts[i].data.datasets[0].data = [newVal, 100-newVal];
            donutCharts[i].update();
            document.getElementById(`donut${i+1}text`).textContent = newVal + '%';
        }


        if (sampleComplaints.length>8) sampleComplaints.pop();
        renderComplaints();
        });


        const locale = 'fa-AF';

        function formatFullDate(date) {
        return new Intl.DateTimeFormat(locale, { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' }).format(date);
        }

        function formatShortDate(date) {
        const pDate = new Intl.DateTimeFormat('fa-AF-u-ca-persian', {
            year: 'numeric',
            month: 'numeric',
            day: 'numeric'
        }).format(date);

        const [y, m, d] = pDate.replace(/[۰-۹]/g, t => '0123456789'['۰۱۲۳۴۵۶۷۸۹'.indexOf(t)]).split('/');
        return `${y}/${m}/${d}`;
        }

        function toPersianDigits(str){
        return str.replace(/\d/g, d => '۰۱۲۳۴۵۶۷۸۹'[d]);
        }


        const shortDateEl = document.getElementById('short-date');

        function updateTodayDisplay(date = new Date()){
        shortDateEl.textContent = formatShortDate(date);
        }

        updateTodayDisplay();

        const calendarToggle = document.getElementById('calendar-toggle');
        const monthPopover = document.getElementById('month-popover');
        const monthTitle = document.getElementById('month-title');
        const monthGrid = document.getElementById('month-grid');
        const prevBtn = document.getElementById('prev-month');
        const nextBtn = document.getElementById('next-month');

        let visibleDate = new Date();

        calendarToggle.addEventListener('click', () => {
        monthPopover.classList.toggle('hidden');
        calendarToggle.setAttribute('aria-expanded', (!monthPopover.classList.contains('hidden')).toString());
        positionPopover();
        });

        window.addEventListener('click', (e) => {
        if (!calendarToggle.contains(e.target) && !monthPopover.contains(e.target)){
            monthPopover.classList.add('hidden');
            calendarToggle.setAttribute('aria-expanded', 'false');
        }
        });

        function positionPopover(){
        const btnRect = calendarToggle.getBoundingClientRect();
        monthPopover.style.top = (btnRect.bottom + window.scrollY + 8) + 'px';
        monthPopover.style.right = (window.innerWidth - btnRect.right + 6) + 'px';
        }

        function renderMonth(date){
        monthGrid.innerHTML = '';
        const year = date.getFullYear();
        const month = date.getMonth();

        monthTitle.textContent = new Intl.DateTimeFormat(locale, { month: 'long', year: 'numeric' }).format(date);

        const firstDay = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        let startBlanks = (firstDay + 6) % 7;
        for (let i=0;i<startBlanks;i++){
            const cell = document.createElement('div');
            cell.className = 'h-9 flex items-center justify-center text-sm text-slate-400';
            monthGrid.appendChild(cell);
        }

        const today = new Date();
        for (let d=1; d<=daysInMonth; d++){
            const cell = document.createElement('button');
            cell.className = 'h-9 flex items-center justify-center text-sm rounded hover:bg-slate-100 focus:outline-none';
            cell.textContent = toPersianDigits(String(d));

            if (d===today.getDate() && month===today.getMonth() && year===today.getFullYear()){
            cell.classList.add('bg-red-600','text-white','font-medium');
            }

            cell.addEventListener('click', ()=>{
            updateTodayDisplay(new Date(year, month, d));
            monthPopover.classList.add('hidden');
            calendarToggle.setAttribute('aria-expanded','false');
            });

            monthGrid.appendChild(cell);
        }
        }

        prevBtn.addEventListener('click', ()=>{
        visibleDate = new Date(visibleDate.getFullYear(), visibleDate.getMonth()-1, 1);
        renderMonth(visibleDate);
        positionPopover();
        });
        nextBtn.addEventListener('click', ()=>{
        visibleDate = new Date(visibleDate.getFullYear(), visibleDate.getMonth()+1, 1);
        renderMonth(visibleDate);
        positionPopover();
        });

        renderMonth(visibleDate);
        window.addEventListener('resize', positionPopover);


        (function() {
        function toAfghanSolarDate(date) {
            const gYear = date.getFullYear();
            const gMonth = date.getMonth() + 1;
            const gDay = date.getDate();
            const { jy, jm, jd } = jalaali.toJalaali(gYear, gMonth, gDay);
            return { jy, jm, jd, formatted: `${jy}/${jm}/${jd}` };
        }

        const afghanMonths = [
            "حمل", "ثور", "جوزا", "سرطان", "اسد", "سنبله",
            "میزان", "عقرب", "قوس", "جدی", "دلو", "حوت"
        ];

        const shortDateEl = document.getElementById('afg-short-date');
        const calendarBtn = document.getElementById('afg-calendar-btn');
        const monthPopup = document.getElementById('afg-month-popup');
        const monthTitle = document.getElementById('afg-month-title');
        const monthGrid = document.getElementById('afg-month-grid');
        const prevBtn = document.getElementById('afg-prev-month');
        const nextBtn = document.getElementById('afg-next-month');


        let visibleDate = new Date();

        function updateAfghanDate(date = new Date()) {
            const { formatted } = toAfghanSolarDate(date);
            shortDateEl.textContent = formatted;
        }

        function renderAfghanMonth(date) {
            monthGrid.innerHTML = "";

            const gYear = date.getFullYear();
            const gMonth = date.getMonth() + 1;
            const { jy, jm } = jalaali.toJalaali(gYear, gMonth, 1);

            const daysInMonth = jalaali.jalaaliMonthLength(jy, jm);

            const firstDayGregorian = jalaali.toGregorian(jy, jm, 1);
            const firstDayWeek = new Date(firstDayGregorian.gy, firstDayGregorian.gm - 1, firstDayGregorian.gd).getDay();

            monthTitle.textContent = `${afghanMonths[jm - 1]} ${jy}`;

            let startBlanks = (firstDayWeek + 6) % 7;
            for (let i = 0; i < startBlanks; i++) {
            const emptyCell = document.createElement('div');
            emptyCell.className = 'h-9';
            monthGrid.appendChild(emptyCell);
            }

            const today = toAfghanSolarDate(new Date());

            for (let d = 1; d <= daysInMonth; d++) {
            const cell = document.createElement('button');
            cell.className = 'h-9 flex items-center justify-center text-sm rounded hover:bg-slate-100';
            cell.textContent = d;

            if (d === today.jd && jm === today.jm && jy === today.jy) {
                cell.classList.add('bg-red-600', 'text-white', 'font-medium');
            }

            cell.addEventListener('click', () => {
                const gSelected = jalaali.toGregorian(jy, jm, d);
                updateAfghanDate(new Date(gSelected.gy, gSelected.gm - 1, gSelected.gd));
                monthPopup.classList.add('hidden');
            });

            monthGrid.appendChild(cell);
            }
        }

        prevBtn.addEventListener('click', () => {
            const { jy, jm } = jalaali.toJalaali(visibleDate.getFullYear(), visibleDate.getMonth() + 1, 1);
            let newMonth = jm - 1;
            let newYear = jy;
            if (newMonth < 1) { newMonth = 12; newYear--; }
            const gNew = jalaali.toGregorian(newYear, newMonth, 1);
            visibleDate = new Date(gNew.gy, gNew.gm - 1, gNew.gd);
            renderAfghanMonth(visibleDate);
        });

        nextBtn.addEventListener('click', () => {
            const { jy, jm } = jalaali.toJalaali(visibleDate.getFullYear(), visibleDate.getMonth() + 1, 1);
            let newMonth = jm + 1;
            let newYear = jy;
            if (newMonth > 12) { newMonth = 1; newYear++; }
            const gNew = jalaali.toGregorian(newYear, newMonth, 1);
            visibleDate = new Date(gNew.gy, gNew.gm - 1, gNew.gd);
            renderAfghanMonth(visibleDate);
        });

        calendarBtn.addEventListener('click', () => {
            monthPopup.classList.toggle('hidden');
            renderAfghanMonth(visibleDate);
        });

        window.addEventListener('click', (e) => {
            if (!calendarBtn.contains(e.target) && !monthPopup.contains(e.target)) {
            monthPopup.classList.add('hidden');
            }
        });

        updateAfghanDate();
        renderAfghanMonth(visibleDate);

        })();

        const charts = document.querySelectorAll(".chart");
        const tooltip = document.getElementById("tooltip");

        charts.forEach(chart => {
        chart.addEventListener("mousemove", (e) => {
            const text = chart.getAttribute("data-tooltip");
            tooltip.textContent = text;
            tooltip.style.opacity = "1";
            tooltip.style.left = e.pageX + 10 + "px";
            tooltip.style.top = e.pageY - 25 + "px";
        });

        chart.addEventListener("mouseleave", () => {
            tooltip.style.opacity = "0";
        });
        });
    </script>
    @section('styles')
    <style>
            html, body { overflow-x: hidden !important; }
            .lg\:col-span-2 { overflow-x: hidden !important; }
            @media (max-width: 768px) {
                .pr-16 { padding-right: 0 !important; }
            }
                body {
            font-family: 'MyCustomFont', sans-serif;
            font-family: 'BYekan', sans-serif;
            }
            canvas {
            transition: all 0.6s ease-in-out;
            }
            table.space-y-1 tr{
                padding-bottom: 20px;
            }
            .card canvas {
                width: 100% !important;
                height: auto !important;
            }
            .center-text {
                position: absolute;
                inset: 0;
                display:flex;
                align-items:center;
                justify-content:center;
                pointer-events:none;
                font-weight:700;
            }
        .tooltip {
            position: fixed;
            background-color: rgb(0, 0, 0);
            color: white;
            padding: 8px;
            border-radius: 6px;
            font-size: 12px;
            white-space: nowrap;
            pointer-events: none;
            transition: opacity 0.2s ease;
            z-index: 50;
            opacity: 0;
            }
            .tooltip::after {
            content: "";
            position: absolute;
            top: 50%;
            right: 100%;
            margin-top: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: transparent black transparent transparent;
            }
            .chartjs-custom-tooltip {
            position: absolute;
            margin-left: -70px;
            margin-top: 50px;
            background-color: #000;
            color: #fff;
            border-radius: 10px;
            padding: 10px 14px;
            font-size: 13px;
            line-height: 1.6;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.2s ease;
            }
            .chartjs-custom-tooltip::after {
            content: "";
            position: absolute;
            top: 50%;
            left: 100%;
            margin-top: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: transparent transparent transparent black;
            }
            /* رفع اسکرول افقی در موبایل  */
        @media (max-width: 768px) {
        html, body {
            overflow-x: hidden !important;
            width: 100% !important;
        }

        body > * {
            max-width: 100vw !important;
            overflow-x: clip !important;
        }

        /* مخصوص divهای داخلی در حالت sm:hidden */
        .sm\:hidden, .p-4, .mx-auto, .grid {
            overflow-x: clip !important;
            max-width: 100% !important;
        }

        div, table, img, button {
            max-width: 100% !important;
        }
        }
    </style>
@endsection

@endsection
