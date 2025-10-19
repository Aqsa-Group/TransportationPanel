<<<<<<< HEAD
=======
<aside id="sidebar" class="fixed inset-y-0 right-0 z-40 w-56 bg-white border-l border-gray-200 transform translate-x-full transition-transform duration-200 ease-out
         lg:static lg:translate-x-0 lg:flex lg:flex-col lg:w-60" aria-label="Sidebar">

  {{-- header --}}
  <div class="h-16 flex items-center justify-between border-gray-300">

    <div class="flex ">
      <img src="/img/Group 2.png" alt="badge" class="w-15 h-10" />

      <span class="text-gray-700 font-semibold">ادمین پنل</span>
    </div>

>>>>>>> c5697405bde666ff21fb3759eb07ffa64f455615
<aside id="sidebar"
  class="fixed inset-y-0 right-0 z-40 w-48 bg-white border-l border-gray-200 transform translate-x-full transition-transform duration-200 ease-out
         lg:static lg:translate-x-0 lg:flex lg:flex-col lg:w-52" aria-label="Sidebar">

  {{-- header --}}
  <div class="h-16 flex items-center justify-between border-gray-300 px-3">
    <div class="flex items-center space-x-2">
      <img src="/img/Group 2.png" alt="badge" class="w-14 h-10" />
      <span class="text-gray-700 font-semibold">ادمین پنل</span>
    </div>

    <button id="closeSidebar"
      class="lg:hidden inline-flex items-center justify-center rounded-lg border border-gray-200 p-2 hover:bg-gray-100 transition"
      aria-label="بستن">
      <i class="fa-solid fa-xmark"></i>
    </button>
  </div>

  {{-- menu --}}
  <nav id="menu" class="p-3 h-full flex flex-col justify-between">

    <div class="space-y-1">
      <button data-section="dashboard"
<<<<<<< HEAD
=======
        class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm bg-blue-600 text-white transition">

        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round" aria-label="dashboard">
          <rect x="3" y="3" width="8" height="8" rx="2" />
          <rect x="13" y="3" width="8" height="5" rx="2" />
          <rect x="13" y="10" width="8" height="11" rx="2" />
          <rect x="3" y="13" width="8" height="8" rx="2" />

>>>>>>> c5697405bde666ff21fb3759eb07ffa64f455615
        class="menu-btn active w-full text-right flex items-center gap-3 rounded-xl px-5 py-2 text-sm transition bg-blue-600 text-white">
        <svg width="24" height="24" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round"
             class="icon">
          <rect x="3" y="3" width="8" height="8" rx="2"/>
          <rect x="13" y="3" width="8" height="5" rx="2"/>
          <rect x="13" y="10" width="8" height="11" rx="2"/>
          <rect x="3" y="13" width="8" height="8" rx="2"/>
        </svg>
        <span>داشبورد</span>
      </button>

<<<<<<< HEAD
      <button onclick="window.location.href='{{ url('/orders-Page') }}'" data-section="orders" 
        class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
        <img src="/img/Vector (1).png" class="w-5 h-5" alt="سفارشات" />
=======

      <button onclick="window.location.href='{{ url('/orders-Page') }}'" data-section="orders"
        class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
        <img src="/img/Vector (1).png" class="w-5 h-5" alt="سفارشات" />

        <button data-section="orders"
          class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
          <!-- <img src="/img/Vector (1).png" class="w-5 h-5" alt="سفارشات" /> -->
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 23" fill="none"
            stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
            stroke-linejoin="round" aria-label="order-note">
            <path
              d="M1 6V20C1 20.83 1.93998 21.3 2.59998 20.8L4.31 19.52C4.71 19.22 5.27 19.26 5.63 19.62L7.28998 21.29C7.67998 21.68 8.32002 21.68 8.71002 21.29L10.39 19.61C10.74 19.26 11.3 19.22 11.69 19.52L13.4 20.8C14.06 21.29 15 20.82 15 20V3C15 1.9 15.9 1 17 1H6H5C2 1 1 2.79 1 5V6Z" />
          </svg>


          <span>سفارشات</span>
        </button>

        <button data-section="admins"
          class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
          <!-- <img src="/img/people.png" class="w-5 h-5" alt="ادمین‌ها" /> -->
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            aria-label="users-triangle">
            <!-- سر بالا چپ -->
            <circle cx="7" cy="8" r="2.5" />
            <!-- بدن بالا چپ -->
            <ellipse cx="7" cy="14" rx="3" ry="2" />
      <button  onclick="window.location.href='{{ url('/orders-Page') }}'" data-section="orders" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
        <img src="/img/Vector (1).png" class="w-5 h-5" alt="سفارشات" />
>>>>>>> c5697405bde666ff21fb3759eb07ffa64f455615
        <span>سفارشات</span>
      </button>

      <button data-section="admins"
        class="menu-btn w-full text-right flex items-center gap-3 rounded-xl px-5 py-2 text-sm text-gray-700 transition hover:bg-blue-600 hover:text-white">
        <svg xmlns="http://www.w3.org/2000/svg"
             width="24" height="24" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round"
             class="icon">
          <circle cx="7" cy="8" r="2.5"/>
          <ellipse cx="7" cy="14" rx="3" ry="2"/>
          <circle cx="17" cy="8" r="2.5"/>
          <ellipse cx="17" cy="14" rx="3" ry="2"/>
          <circle cx="12" cy="16" r="3"/>
          <ellipse cx="12" cy="21" rx="4" ry="2.5"/>
        </svg>
        <span>ادمینها</span>
      </button>

<<<<<<< HEAD
      <button data-section="drivers" onclick="window.location.href='{{ url('/drivers-Page') }}'"
        class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
=======
            <!-- سر بالا راست -->
            <circle cx="17" cy="8" r="2.5" />
            <!-- بدن بالا راست -->
            <ellipse cx="17" cy="14" rx="3" ry="2" />

            <!-- سر پایین وسط -->
            <circle cx="12" cy="16" r="3" />
            <!-- بدن پایین وسط -->
            <ellipse cx="12" cy="21" rx="4" ry="2.5" />
          </svg>
          <span>ادمین ها</span>
        </button>

        <button data-section="reports"
          class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
          <img src="/img/note-2.png" class="w-5 h-5" alt="گزارشات" />

          </svg>
      <button data-section="drivers"   onclick="window.location.href='{{ url('/drivers-Page') }}'"
      class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
        {{-- آیکون لاری --}}
>>>>>>> c5697405bde666ff21fb3759eb07ffa64f455615
        <svg xmlns="http://www.w3.org/2000/svg"
             width="24" height="24" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round" aria-label="truck">
          <rect x="1" y="7" width="15" height="10" rx="2"/>
          <rect x="16" y="10" width="7" height="7" rx="1"/>
          <circle cx="6" cy="19" r="2"/>
          <circle cx="18" cy="19" r="2"/>
        </svg>
        <span>رانندگان</span>
      </button>

      <button data-section="maps"
        class="menu-btn w-full text-right flex items-center gap-3 rounded-xl px-5 py-2 text-sm text-gray-700 transition hover:bg-blue-600 hover:text-white">
<<<<<<< HEAD
        <svg xmlns="http://www.w3.org/2000/svg"  
             width="24" height="24" viewBox="0 0 24 24"  
             fill="none" stroke="currentColor" stroke-width="2"  
             stroke-linecap="round" stroke-linejoin="round" aria-label="map-pin">
          <path d="M21 10c0 6-9 12-9 12s-9-6-9-12a9 9 0 1 1 18 0z"/>  
          <circle cx="12" cy="10" r="3"/>  
        </svg>  
        <span>نقشه ها</span>  
=======
 <svg xmlns="http://www.w3.org/2000/svg"  
 width="24" height="24" viewBox="0 0 24 24"  
 fill="none" stroke="currentColor" stroke-width="2"  
 stroke-linecap="round" stroke-linejoin="round" aria-label="map-pin">

  <path d="M21 10c0 6-9 12-9 12s-9-6-9-12a9 9 0 1 1 18 0z"/>  
  <circle cx="12" cy="10" r="3"/>  
</svg>  <span>نقشه ها</span>  
>>>>>>> c5697405bde666ff21fb3759eb07ffa64f455615
      </button>

      <button data-section="customers"
        class="menu-btn w-full text-right flex items-center gap-3 rounded-xl px-5 py-2 text-sm text-gray-700 transition hover:bg-blue-600 hover:text-white">
<<<<<<< HEAD
        <svg xmlns="http://www.w3.org/2000/svg"  
             width="24" height="24" viewBox="0 0 24 24"  
             fill="none" stroke="currentColor" stroke-width="2"  
             stroke-linecap="round" stroke-linejoin="round" aria-label="user-alt">
          <circle cx="12" cy="8" r="4"/>    
          <ellipse cx="12" cy="19" rx="7" ry="4"/>  
        </svg>  
        <span>مشتریان</span>  
      </button>
=======
  <svg xmlns="http://www.w3.org/2000/svg"  
 width="24" height="24" viewBox="0 0 24 24"  
 fill="none" stroke="currentColor" stroke-width="2"  
 stroke-linecap="round" stroke-linejoin="round" aria-label="user-alt">

          <span>گزارشات</span>
        </button>

        <button data-section="drivers"
          class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
          {{-- آیکون لاری --}}
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-label="truck">
            <rect x="1" y="7" width="15" height="10" rx="2" />
            <rect x="16" y="10" width="7" height="7" rx="1" />
            <circle cx="6" cy="19" r="2" />
            <circle cx="18" cy="19" r="2" />
          </svg>
          <span>رانندگان</span>
        </button>


        <button data-section="maps"
          class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
          <img src="/img/location.png" class="w-5 h-5" alt="نقشه‌ها" />

          <button data-section="maps"
            class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
            <!-- <img src="/img/location.png" class="w-5 h-5 hover:bg-blue-700" alt="نقشه‌ها" /> -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              aria-label="map-pin">
              <path d="M21 10c0 6-9 12-9 12s-9-6-9-12a9 9 0 1 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>

            <span>نقشه ها</span>
          </button>
          <!-- <button type="button" onclick="window.location.href='{{ url('/orders-Map') }}'" data-section="maps" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
    <img src="/img/location.png" class="w-5 h-5" alt="نقشه‌ها" />
    <span>نقشه ها</span>
</button> -->
  <circle cx="12" cy="8" r="4"/>    <ellipse cx="12" cy="19" rx="7" ry="4"/>  
</svg>  
        <span>مشتریان</span>  
      </button>


      
      <button    data-section="maps" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
        <img src="/img/location.png" class="w-5 h-5" alt="نقشه‌ها" />
        <span>نقشه ها</span>
      </button>




          <button data-section="stats"
            class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
            <img src="/img/colorfilter.png" class="w-5 h-5" alt="ارقام" />
            <span>ارقام</span>
          </button>


          <button data-section="customers"
            class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
            <!-- <img src="/img/profile.png" class="w-5 h-5" alt="مشتریان" /> -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              aria-label="user-alt">

              <circle cx="12" cy="8" r="4" />

              <ellipse cx="12" cy="19" rx="7" ry="4" />
            </svg>
            <span>مشتریان</span>
          </button>
      <button data-section="customers" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
        <img src="/img/profile.png" class="w-5 h-5" alt="مشتریان" />
        <span>مشتریان</span>
      </button>

      <button  onclick="window.location.href='{{ url('/customers-Page') }}'"
      data-section="customers" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
        <img src="/img/profile.png" class="w-5 h-5" alt="مشتریان" />
        <span>مشتریان</span>
      </button>

>>>>>>> c5697405bde666ff21fb3759eb07ffa64f455615
    </div>

    {{-- پایین --}}
    <div class="space-y-1">
<<<<<<< HEAD
      <form action="{{ route('logout') }}" method="POST" class="w-full">
        @csrf
        <button type="submit" data-section="logout"
          class="menu-btn w-full text-right flex items-center gap-3 rounded-xl px-5 py-2 text-sm text-gray-700 
          transition-all duration-300 hover:bg-red-600 active:bg-red-700 focus:bg-red-600 focus:ring-0 
          focus:outline-none group relative overflow-hidden">
          <div class="relative w-5 h-5">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                 xmlns="http://www.w3.org/2000/svg"
                 class="stroke-gray-700 transition-all duration-300 group-hover:stroke-white group-active:stroke-white group-focus:stroke-white">
              <path d="M13 11L21.2 2.80005" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M22 6.8V2H17.2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M11 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <span class="transition-all duration-300 group-hover:text-white group-active:text-white group-focus:text-white">خارج شدن</span>
        </button>
      </form>
=======
      <button data-section="logout"
        class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-red-600 transition">
        <img src="/img/export.png" class="w-5 h-5" alt="خروج" />
        <span>خارج شدن</span>
      </button>
>>>>>>> c5697405bde666ff21fb3759eb07ffa64f455615

      <button data-section="help"
        class="menu-btn w-full text-right flex items-center gap-3 rounded-xl px-5 py-2 text-sm text-gray-700 transition hover:bg-blue-600 hover:text-white">
        <svg xmlns="http://www.w3.org/2000/svg"  
             width="24" height="24" viewBox="0 0 24 24"  
             fill="none" stroke="currentColor" stroke-width="2"  
             stroke-linecap="round" stroke-linejoin="round" aria-label="help">
          <circle cx="12" cy="12" r="10"/>    
          <line x1="12" y1="8" x2="12" y2="14"/>  
          <circle cx="12" cy="17" r="1"/>  
        </svg>  
        <span>کمک</span>   
      </button>

      <button data-section="settings"
<<<<<<< HEAD
=======
        class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
        {{-- آیکون تنظیمات --}}
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-label="settings">
          <circle cx="12" cy="12" r="3" />
          <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 
                   2 0 0 1-2.83 2.83l-.06-.06a1.65 
                   1.65 0 0 0-1.82-.33 1.65 1.65 0 0 
                   0-1 1.51V21a2 2 0 0 1-4 0v-.09a1.65 
                   1.65 0 0 0-1-1.51 1.65 1.65 0 0 
                   0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 
                   1.65 0 0 0 .33-1.82 1.65 1.65 0 0 
                   0-1.51-1H3a2 2 0 0 1 0-4h.09a1.65 
                   1.65 0 0 0 1.51-1 1.65 1.65 0 0 
                   0-.33-1.82l-.06-.06a2 2 0 1 
                   1 2.83-2.83l.06.06a1.65 1.65 0 0 
                   0 1.82.33h.09A1.65 1.65 0 0 0 9 4.6V4a2 
                   2 0 0 1 4 0v.09a1.65 1.65 0 0 
                   0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 
                   2 0 1 1 2.83 2.83l-.06.06a1.65 
                   1.65 0 0 0-.33 1.82v.09a1.65 
                   1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 
                   1.65 0 0 0-1.51 1z" />
        </svg>
        <span>تنظیمات</span>
 <button data-section="logout"
  class="menu-btn w-full text-right flex items-center gap-3 rounded-xl px-5 py-2 text-sm text-gray-700 
  transition-all duration-300 hover:bg-red-600 active:bg-red-700 focus:bg-red-600 focus:ring-0 
  focus:outline-none group relative overflow-hidden">

  <div class="relative w-5 h-5">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
         xmlns="http://www.w3.org/2000/svg"
         class="stroke-gray-700 transition-all duration-300 group-hover:stroke-white group-active:stroke-white group-focus:stroke-white">
      <path d="M13 11L21.2 2.80005" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M22 6.8V2H17.2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M11 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </div>

  <span class="transition-all duration-300 group-hover:text-white group-active:text-white group-focus:text-white">خارج شدن</span>
</button>       <button data-section="help"
>>>>>>> c5697405bde666ff21fb3759eb07ffa64f455615
        class="menu-btn w-full text-right flex items-center gap-3 rounded-xl px-5 py-2 text-sm text-gray-700 transition hover:bg-blue-600 hover:text-white">
        <svg xmlns="http://www.w3.org/2000/svg"  
             width="24" height="24" viewBox="0 0 24 24"  
             fill="none" stroke="currentColor" stroke-width="2"  
             stroke-linecap="round" stroke-linejoin="round" aria-label="settings">  
          <circle cx="12" cy="12" r="3"/>  
          <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2   
                   2 0 0 1-2.83 2.83l-.06-.06a1.65   
                   1.65 0 0 0-1.82-.33 1.65 1.65 0 0   
                   0-1 1.51V21a2 2 0 0 1-4 0v-.09a1.65   
                   1.65 0 0 0-1-1.51 1.65 1.65 0 0   
                   0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65   
                   1.65 0 0 0 .33-1.82 1.65 1.65 0 0   
                   0-1.51-1H3a2 2 0 0 1 0-4h.09a1.65   
                   1.65 0 0 0 1.51-1 1.65 1.65 0 0   
                   0-.33-1.82l-.06-.06a2 2 0 1
                   1 2.83-2.83l.06.06a1.65 1.65 0 0   
                   0 1.82.33h.09A1.65 1.65 0 0 0 9 4.6V4a2   
                   2 0 0 1 4 0v.09a1.65 1.65 0 0   
                   0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2   
                   2 0 1 1 2.83 2.83l-.06.06a1.65   
                   1.65 0 0 0-.33 1.82v.09a1.65   
                   1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65   
                   1.65 0 0 0-1.51 1z"/>  
        </svg>  
        <span>تنظیمات</span>  
<<<<<<< HEAD
=======

       
>>>>>>> c5697405bde666ff21fb3759eb07ffa64f455615
      </button>
    </div>
  </nav>
</aside>

<script>
  document.addEventListener('DOMContentLoaded', () => {
<<<<<<< HEAD
=======
    const openBtn = document.getElementById('openSidebar');
    const sidebar = document.getElementById('sidebar');
    const closeBtn = document.getElementById('closeSidebar');

    if (!sidebar || !openBtn) return;


>>>>>>> c5697405bde666ff21fb3759eb07ffa64f455615
    const openBtn  = document.getElementById('openSidebar');
    const sidebar  = document.getElementById('sidebar');
    const closeBtn = document.getElementById('closeSidebar');
    const menuButtons = document.querySelectorAll('.menu-btn');
<<<<<<< HEAD

=======
    // 🔹 حالت باز و بسته شدن سایدبار
>>>>>>> c5697405bde666ff21fb3759eb07ffa64f455615
    let backdrop = document.getElementById('sidebarBackdrop');
    if (!backdrop) {
      backdrop = document.createElement('div');
      backdrop.id = 'sidebarBackdrop';
      backdrop.className = 'lg:hidden fixed inset-0 z-30 bg-black/30 hidden';
      document.body.appendChild(backdrop);
    }

    const open = () => {
      sidebar.classList.remove('translate-x-full');
      backdrop.classList.remove('hidden');
      document.documentElement.classList.add('overflow-hidden');
<<<<<<< HEAD
=======
      openBtn.setAttribute('aria-expanded', 'true');
>>>>>>> c5697405bde666ff21fb3759eb07ffa64f455615
      openBtn?.setAttribute('aria-expanded', 'true');
    };

    const close = () => {
      sidebar.classList.add('translate-x-full');
      backdrop.classList.add('hidden');
      document.documentElement.classList.remove('overflow-hidden');
      openBtn?.setAttribute('aria-expanded', 'false');
    };

    openBtn?.addEventListener('click', open);
    closeBtn?.addEventListener('click', close);
    backdrop.addEventListener('click', close);

<<<<<<< HEAD
    // کنترل دکمه فعال
=======

    const mql = window.matchMedia('(min-width: 1024px)');
    const sync = (e) => {
      if (e.matches) {
        sidebar.classList.remove('translate-x-full');
        backdrop.classList.add('hidden');
        document.documentElement.classList.remove('overflow-hidden');
      } else {
        sidebar.classList.add('translate-x-full');
      }
    };
    mql.addEventListener?.('change', sync);
    sync(mql);
    // 🔹 کنترل دکمه فعال (Active)
>>>>>>> c5697405bde666ff21fb3759eb07ffa64f455615
    menuButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        menuButtons.forEach(b => b.classList.remove('active', 'bg-blue-600', 'text-white'));
        btn.classList.add('active', 'bg-blue-600', 'text-white');
      });
    });
  });
</script>