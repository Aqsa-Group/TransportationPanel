<aside id="sidebar"
  class="fixed inset-y-0 right-0 z-40 w-64 bg-white border-l border-gray-200 transform translate-x-full transition-transform duration-200 ease-out
         lg:static lg:translate-x-0 lg:flex lg:flex-col" aria-label="Sidebar">

  {{-- header --}}
  <div class="h-16 flex items-center justify-between px-4  border-gray-200">
    <div class="flex items-center gap-2">
      <img src="/img/Group 2.png" alt="badge" class="w-12 h-8"/>
      <span>ادمین پنل</span>
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
      <button data-section="dashboard" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm bg-blue-600 text-white transition">
        
        <svg width="24" height="24" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round" aria-label="dashboard">
          <rect x="3" y="3" width="8" height="8" rx="2"/>
          <rect x="13" y="3" width="8" height="5" rx="2"/>
          <rect x="13" y="10" width="8" height="11" rx="2"/>
          <rect x="3" y="13" width="8" height="8" rx="2"/>
        </svg>
        <span>داشبورد</span>
      </button>

      <button data-section="orders" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
        <img src="/img/Vector (1).png" class="w-5 h-5" alt="سفارشات" />
        <span>سفارشات</span>
      </button>

      <button data-section="admins" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
        <img src="/img/people.png" class="w-5 h-5" alt="ادمین‌ها" />
        <span>ادمین ها</span>
      </button>

      <button data-section="reports" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
        <img src="/img/note-2.png" class="w-5 h-5" alt="گزارشات" />
        <span>گزارشات</span>
      </button>

      <button data-section="drivers" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
        {{-- آیکون لاری --}}
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

      <button data-section="maps" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
        <img src="/img/location.png" class="w-5 h-5" alt="نقشه‌ها" />
        <span>نقشه ها</span>
      </button>

      <button data-section="stats" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
        <img src="/img/colorfilter.png" class="w-5 h-5" alt="ارقام" />
        <span>ارقام</span>
      </button>

      <button data-section="customers" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
        <img src="/img/profile.png" class="w-5 h-5" alt="مشتریان" />
        <span>مشتریان</span>
      </button>
    </div>

    {{-- پایین: خروج، کمک، تنظیمات --}}
    <div class="space-y-1">
      <button data-section="logout" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-red-600 transition">
        <img src="/img/export.png" class="w-5 h-5" alt="خروج" />
        <span>خارج شدن</span>
      </button>

      <button data-section="help" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
        <img src="/img/info-circle.png" class="w-5 h-5" alt="کمک" />
        <span>کمک</span>
      </button>

      <button data-section="settings" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
        {{-- آیکون تنظیمات --}}
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
      </button>
    </div>
  </nav>
</aside>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const openBtn  = document.getElementById('openSidebar');   
    const sidebar  = document.getElementById('sidebar');     
    const closeBtn = document.getElementById('closeSidebar'); 

    if (!sidebar || !openBtn) return; 

    
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
      openBtn.setAttribute('aria-expanded', 'true');
    };

    const close = () => {
      sidebar.classList.add('translate-x-full');
      backdrop.classList.add('hidden');
      document.documentElement.classList.remove('overflow-hidden');
      openBtn.setAttribute('aria-expanded', 'false');
    };

    openBtn.addEventListener('click', open);
    closeBtn?.addEventListener('click', close);
    backdrop.addEventListener('click', close);
    window.addEventListener('keydown', (e) => { if (e.key === 'Escape') close(); });

    
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
  });
</script>
