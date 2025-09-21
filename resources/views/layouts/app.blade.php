
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>ادمین پنل</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  
</head>
<body class="bg-gray-100 text-gray-900">
  <div class="min-h-screen flex">

    <!-- Sidebar -->
    <aside id="sidebar"
      class="fixed inset-y-0 left-0 z-40 w-64 bg-white border-r border-gray-200 transform -translate-x-full transition-transform duration-200 ease-out
             lg:static lg:translate-x-0 lg:flex lg:flex-col" aria-label="Sidebar">

      <!-- header -->
      <div class="h-16 flex items-center justify-between px-4 border-b border-gray-200">
        <div class="flex items-center gap-2">
          <img src="/img/Group 2.png" alt="badge" class="w-12 h-8"/>
          <span class="">ادمین پنل</span>
        </div>
        <button id="closeSidebar"
                class="lg:hidden inline-flex items-center justify-center rounded-lg border border-gray-200 p-2 hover:bg-gray-100 transition"
                aria-label="بستن">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <!-- menu -->
      <nav id="menu" class="p-3 space-y-1 overflow-y-auto">
        
        <button data-section="dashboard" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm bg-blue-600 text-white transition">
          <img src="/img/Vector.png" class="w-5 h-5" alt="داشبورد" />
          <span>داشبورد</span>
         
        </button>

        <button data-section="orders" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
          <img src="/img/Vector (1).png" class="w-5 h-5" alt="سفارشات" />
          <span>سفارشات</span>
        </button>

        <button data-section="admins" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
          <img src="/img/people.png" class="w-5 h-5" alt="گروه ادمین‌ها" />
          <span> ادمین ها</span>
        </button>

        <button data-section="reports" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
          <img src="/img/note-2.png" class="w-5 h-5" alt="گزارشات" />
          <span>گزارشات</span>
         
        </button>

        <button data-section="drivers" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
          <i class="fa-regular fa-truck"></i>
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
        <button data-section="stats" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
          <img src="/img/profile.png" class="w-5 h-5" alt="ارقام" />
          <span>مشتریان</span>
        </button>

        <div class="pt-2 mt-2 border-t border-gray-200"></div>
<button data-section="help" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
          <img src="/img/export.png" class="w-5 h-5" alt="کمک" />
          <span>خارج شدن</span>
        </button>
        <button data-section="help" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
          <img src="/img/info-circle.png" class="w-5 h-5" alt="کمک" />
          <span>کمک</span>
        </button>

        <button data-section="settings" class="w-full text-right flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-700 transition">
          <img src="/img/Icon Frame.png" class="w-7 h-7" alt="تنظیمات" />
          <span>تنظیمات</span>
        </button>
      </nav>
    </aside>

    <!-- Backdrop -->
    <div id="backdrop"
         class="fixed inset-0 z-30 bg-black/40 opacity-0 pointer-events-none transition-opacity duration-200 lg:hidden"></div>

    <!-- Main -->
    <div class="flex-1 flex flex-col min-w-0">
      <!-- Topbar -->
      <header class="bg-white border-b border-gray-200">
        <div class="mx-auto px-4 sm:px-6 lg:px-8">
          <div class="h-16 flex items-center justify-between">
            <div class="flex items-center gap-2">
              <button id="openSidebar"
                class="lg:hidden inline-flex items-center justify-center rounded-lg border border-gray-200 p-2 hover:bg-gray-100 transition"
                aria-label="باز کردن منو">
                <i class="fa-solid fa-bars"></i>
              </button>
           
              <span class="font-semibold hidden xs:inline">Dashboard</span>
            </div>

            <!-- Search-->
            <div class="flex-1 px-2 sm:px-4">
              <div class="mx-auto max-w-xl">
                <div class="flex items-center h-10 rounded-xl border border-gray-300 bg-gray-50 overflow-hidden">
                  <span class="flex items-center gap-2 px-3 text-gray-600 shrink-0">
                    <i class="fa-solid fa-magnifying-glass text-sm"></i>
                    <span class="text-sm">جستجو</span>
                  </span>
                  <input type="text"
                    class="w-full h-full bg-transparent outline-none px-3 text-sm placeholder-gray-400"
                    />
                </div>
              </div>
            </div>

            <div class="flex items-center gap-2 sm:gap-3">
              <button class="rounded-xl border border-gray-200 p-2 hover:bg-gray-100 transition relative">
               
             <i class="fa-regular fa-bell"></i>


                <span class="absolute -top-1 -right-1 bg-red-500 text-white text-[10px] rounded-full px-1.5">3</span>
              </button>
              <button class="rounded-xl border border-gray-200 p-2 hover:bg-gray-100 transition">
                <img src="/img/Icon Frame (1).png" class="w-5 h-5" alt="plus" />
              </button>
              <div class=" xs:flex items-center gap-2">
                <img src="/img/barber_team_03 1.png" class="w-9 h-9 rounded-full object-cover" alt="user" />
                
              </div>
            </div>
          </div>
        </div>
      </header>

      
  <script>
    // Drawer
    const sidebar  = document.getElementById('sidebar');
    const backdrop = document.getElementById('backdrop') || (()=>{
      const el=document.createElement('div');
      el.id='backdrop';
      el.className='fixed inset-0 z-30 bg-black/40 opacity-0 pointer-events-none transition-opacity duration-200 lg:hidden';
      document.body.appendChild(el);
      return el;
    })();
    const openBtn  = document.getElementById('openSidebar');
    const closeBtn = document.getElementById('closeSidebar');

    function openSidebarFn(){
      sidebar.classList.remove('-translate-x-full');
      backdrop.classList.remove('pointer-events-none','opacity-0');
      backdrop.classList.add('opacity-100');
      backdrop.addEventListener('click', closeSidebarFn, {once:true});
    }
    function closeSidebarFn(){
      sidebar.classList.add('-translate-x-full');
      backdrop.classList.add('pointer-events-none','opacity-0');
      backdrop.classList.remove('opacity-100');
    }
    openBtn?.addEventListener('click', openSidebarFn);
    closeBtn?.addEventListener('click', closeSidebarFn);
    document.addEventListener('keydown', e=>{ if(e.key==='Escape') closeSidebarFn(); });
    const mq = window.matchMedia('(min-width: 1024px)');
    mq.addEventListener('change', e=>{
      if(e.matches){ sidebar.classList.remove('-translate-x-full'); closeSidebarFn(); }
      else{ sidebar.classList.add('-translate-x-full'); }
    });

    
    const menu = document.getElementById('menu');
    const sections = [...document.querySelectorAll('#sections [data-id]')];

    function showSection(id){
      sections.forEach(s=> s.classList.toggle('hidden', s.dataset.id !== id));
     
      [...menu.querySelectorAll('button[data-section]')].forEach(btn=>{
        const isActive = btn.dataset.section === id;
        btn.classList.toggle('bg-blue-600', isActive);
        btn.classList.toggle('text-white', isActive);
        btn.classList.toggle('text-gray-700', !isActive);
      });
      
      if (!mq.matches) closeSidebarFn();
     
      window.scrollTo({top:0, behavior:'smooth'});
    }

    menu.addEventListener('click', (e)=>{
      const btn = e.target.closest('button[data-section]');
      if(!btn) return;
      showSection(btn.dataset.section);
    });

    showSection('dashboard');
  </script>
</body>
</html>
