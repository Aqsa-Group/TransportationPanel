<aside id="sidebar"
  class="fixed inset-y-0 right-0 z-40 w-48 bg-white border-l border-gray-200 transform translate-x-full transition-transform duration-200 ease-out
         lg:static lg:translate-x-0 lg:flex lg:flex-col lg:w-52" aria-label="Sidebar">

  <!-- header -->
  <div class="h-16 flex items-center justify-between border-b border-gray-200 px-3">
    <div class="flex items-center gap-2">
      <img src="/img/Group 2.png" alt="badge" class="w-14 h-10" />
      <span class="text-gray-700 font-semibold">ادمین پنل</span>
    </div>

    <a id="closeSidebar"
            class="lg:hidden inline-flex items-center justify-center rounded-lg border border-gray-200 p-2 hover:bg-gray-100 transition"
            aria-label="بستن">
      <i class="fa-solid fa-xmark"></i>
    </a>
  </div>

  <!-- menu -->
  <nav id="menu"
       class="p-3 h-full flex flex-col justify-start lg:justify-between">

    <!-- بالا -->
    <div class="space-y-1">
      <a href="{{ route('home') }}" data-section="dashboard"
        class="menu-btn active w-full text-right flex items-center gap-3 rounded-xl px-5 py-2 text-sm transition
        {{ request()->routeIs('home') ? 'bg-[#0800FF] text-white' : 'text-gray-700 hover:bg-[#0800FF] hover:text-white' }}">
        <svg width="24" height="24" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round" class="icon">
          <rect x="3" y="3" width="8" height="8" rx="2"/>
          <rect x="13" y="3" width="8" height="5" rx="2"/>
          <rect x="13" y="10" width="8" height="11" rx="2"/>
          <rect x="3" y="13" width="8" height="8" rx="2"/>
        </svg>
        <span>داشبورد</span>
      </a>

      <a data-section="orders" href="{{ route('orders.page') }}"
        class="menu-btn w-full text-right flex items-center gap-3 rounded-xl px-5 py-2 text-sm text-gray-700 transition
        {{ request()->routeIs('orders.*') ? 'bg-[#0800FF] text-white' : 'text-gray-700 hover:bg-[#0800FF] hover:text-white' }}">
        <svg xmlns="http://www.w3.org/2000/svg"
             width="24" height="24" viewBox="0 0 18 23"
             fill="none" stroke="currentColor" stroke-width="1.5"
             stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" class="icon">
          <path d="M1 6V20C1 20.83 1.93998 21.3 2.59998 20.8L4.31 19.52C4.71 19.22 5.27 19.26 5.63 19.62L7.28998 21.29C7.67998 21.68 8.32002 21.68 8.71002 21.29L10.39 19.61C10.74 19.26 11.3 19.22 11.69 19.52L13.4 20.8C14.06 21.29 15 20.82 15 20V3C15 1.9 15.9 1 17 1H6H5C2 1 1 2.79 1 5V6Z"/>
        </svg>
        <span>سفارشات</span>
      </a>

      <a  href="{{ route('admins.index') }}" data-section="admins"
        class="menu-btn w-full text-right flex items-center gap-3 rounded-xl px-5 py-2 text-sm text-gray-700 transition
        {{ request()->routeIs('admins.*') ? 'bg-[#0800FF] text-white' : 'text-gray-700 hover:bg-[#0800FF] hover:text-white' }}">
        <svg xmlns="http://www.w3.org/2000/svg"
             width="24" height="24" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round" class="icon">
          <circle cx="7" cy="8" r="2.5"/>
          <ellipse cx="7" cy="14" rx="3" ry="2"/>
          <circle cx="17" cy="8" r="2.5"/>
          <ellipse cx="17" cy="14" rx="3" ry="2"/>
          <circle cx="12" cy="16" r="3"/>
          <ellipse cx="12" cy="21" rx="4" ry="2.5"/>
        </svg>
        <span>ادمین‌ها</span>
</a>

      <a data-section="reports" href="{{ route('reports.page') }}"
        class="menu-btn w-full text-right flex items-center gap-3 rounded-xl px-5 py-2 text-sm text-gray-700 transition
        {{ request()->routeIs('reports.*') ? 'bg-[#0800FF] text-white' : 'text-gray-700 hover:bg-[#0800FF] hover:text-white' }}">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
             xmlns="http://www.w3.org/2000/svg"
             class="stroke-gray-700 group-hover:stroke-white transition">
          <path d="M21.6601 10.44L20.6801 14.62C19.8401 18.23 18.1801 19.69 15.0601 19.39C14.5601 19.35 14.0201 19.26 13.4401 19.12L11.7601 18.72C7.59006 17.73 6.30006 15.67 7.28006 11.49L8.26006 7.30001C8.46006 6.45001 8.70006 5.71001 9.00006 5.10001C10.1701 2.68001 12.1601 2.03001 15.5001 2.82001L17.1701 3.21001C21.3601 4.19001 22.6401 6.26001 21.6601 10.44Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M15.06 19.39C14.44 19.81 13.66 20.16 12.71 20.47L11.13 20.99C7.15998 22.27 5.06997 21.2 3.77997 17.23L2.49997 13.28C1.21997 9.30998 2.27997 7.20998 6.24997 5.92998L7.82997 5.40998C8.23997 5.27998 8.62997 5.16998 8.99997 5.09998C8.69997 5.70998 8.45997 6.44998 8.25997 7.29998L7.27997 11.49C6.29997 15.67 7.58998 17.73 11.76 18.72L13.44 19.12C14.02 19.26 14.56 19.35 15.06 19.39Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M12.64 8.53003L17.49 9.76003" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11.66 12.4L14.56 13.14" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span>گزارشات</span>
      </a>

      <a data-section="drivers" href="{{ route('drivers.page') }}"
        class="menu-btn w-full text-right flex items-center gap-3 rounded-xl px-5 py-2 text-sm text-gray-700 transition
        {{ request()->routeIs('drivers.*') ? 'bg-[#0800FF] text-white' : 'text-gray-700 hover:bg-[#0800FF] hover:text-white' }}">
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
      </a>

      <a data-section="maps" href="{{ route('map.page') }}"
        class="menu-btn w-full text-right flex items-center gap-3 rounded-xl px-5 py-2 text-sm text-gray-700 transition
        {{ request()->routeIs('map.page') ? 'bg-[#0800FF] text-white' : 'text-gray-700 hover:bg-[#0800FF] hover:text-white' }}">
        <svg xmlns="http://www.w3.org/2000/svg"
             width="24" height="24" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round" aria-label="map-pin">
          <path d="M21 10c0 6-9 12-9 12s-9-6-9-12a9 9 0 1 1 18 0z"/>
          <circle cx="12" cy="10" r="3"/>
        </svg>
        <span>نقشه ها</span>
      </a>

      <a data-section="customers" href="{{ route('customers.page') }}"
        class="menu-btn w-full text-right flex items-center gap-3 rounded-xl px-5 py-2 text-sm text-gray-700 transition
                {{ request()->routeIs('customers.*') ? 'bg-[#0800FF] text-white' : 'text-gray-700 hover:bg-[#0800FF] hover:text-white' }}">
        <svg xmlns="http://www.w3.org/2000/svg"
             width="24" height="24" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round" aria-label="user-alt">
          <circle cx="12" cy="8" r="4"/>
          <ellipse cx="12" cy="19" rx="7" ry="4"/>
        </svg>
        <span>مشتریان</span>
      </a>
    </div>

    <!-- پایین -->
    <div class="space-y-1 mt-2 lg:mt-0">
      <a data-section="logout"
        class="menu-btn w-full text-right flex items-center gap-3 rounded-xl px-5 py-2 text-sm text-gray-700
               transition-all duration-300 hover:bg-[#FF0004] active:bg-[#FF0004] focus:bg-red-600 focus:ring-0
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
      </a>

      <a data-section="help"
        class="menu-btn w-full text-right flex items-center gap-3 rounded-xl px-5 py-2 text-sm text-gray-700 transition hover:bg-[#0800FF] hover:text-white">
        <svg xmlns="http://www.w3.org/2000/svg"
             width="24" height="24" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round" aria-label="help">
          <circle cx="12" cy="12" r="10"/>
          <line x1="12" y1="8" x2="12" y2="14"/>
          <circle cx="12" cy="17" r="1"/>
        </svg>
        <span>کمک</span>
      </a>

      <a data-section="settings" href="{{ route('settings.page') }}"
        class="menu-btn w-full text-right flex items-center gap-3 rounded-xl px-5 py-2 text-sm text-gray-700 transition
        {{ request()->routeIs('settings.*') ? 'bg-[#0800FF] text-white' : 'text-gray-700 hover:bg-[#0800FF] hover:text-white' }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-label="settings"> <circle cx="12" cy="12" r="3"/> <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09a1.65 1.65 0 0 0-1-1.51 1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09a1.65 1.65 0 0 0 1.51-1 1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33h.09A1.65 1.65 0 0 0 9 4.6V4a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82v.09a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/> </svg>
        <span>تنظیمات</span>
      </a>
    </div>
  </nav>
</aside>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const openBtn  = document.getElementById('openSidebar');
    const sidebar  = document.getElementById('sidebar');
    const closeBtn = document.getElementById('closeSidebar');
    const menuButtons = document.querySelectorAll('.menu-btn');

    // بک‌دراپ (موبایل)
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

    // Active state
    menuButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        menuButtons.forEach(b => b.classList.remove('active', 'bg-[#0800FF]', 'text-white'));
        btn.classList.add('active', 'bg-[#0800FF]', 'text-white');
        // بستن خودکار در موبایل
        if (window.innerWidth < 1024) close();
      });
    });
  });
</script>
