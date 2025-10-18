<header class="bg-white border-b border-gray-200 relative z-40">

  <div class="mx-auto px-4 sm:px-6 lg:px-8">
    <div class="h-16 flex items-center justify-between">
      <!-- Left: Sidebar & Title -->
      <div class="flex items-center gap-2">
        <button id="openSidebar"
          class="lg:hidden inline-flex items-center justify-center rounded-lg border border-gray-200 p-2 hover:bg-gray-100 transition"
          aria-label="باز کردن منو">
          <i class="fa-solid fa-bars"></i>
        </button>
        <span class="font-semibold hidden xs:inline">Dashboard</span>
      </div>

      <!-- Search -->
      <div class="flex-1 px-2 sm:px-4">
        <div class="max-w-xl ml-auto">
          <div class="flex items-center h-10 rounded-lg border border-gray-300 bg-gray-50 overflow-hidden">
            <span class="flex items-center gap-2 px-3 text-gray-600 shrink-0">
              <i class="fa-solid fa-magnifying-glass text-sm"></i>
              <span class="text-sm">جستجو</span>
            </span>
            <input type="text" class="w-full h-full bg-transparent outline-none px-3 text-sm placeholder-gray-400" />
          </div>
        </div>
      </div>

      <!-- Right section -->
      <div class="flex items-center gap-2 sm:gap-3 relative">
        <button class="rounded-lg border border-gray-200 p-2 hover:bg-gray-100 w-9 h-9 transition relative">
          <i class="fa-regular fa-bell"></i>
          <span class="absolute -top-1 -right-1 bg-red-500 text-white text-[10px] rounded-full px-1.5">3</span>
        </button>

        <button class="rounded-lg border border-gray-200 p-2 hover:bg-gray-100 transition">
            <svg width="19" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.03009 12.42C2.39009 17.57 6.76009 21.76 11.9901 21.99C15.6801 22.15 18.9801 20.43 20.9601 17.72C21.7801 16.61 21.3401 15.87 19.9701 16.12C19.3001 16.24 18.6101 16.29 17.8901 16.26C13.0001 16.06 9.00009 11.97 8.98009 7.13996C8.97009 5.83996 9.24009 4.60996 9.73009 3.48996C10.2701 2.24996 9.62009 1.65996 8.37009 2.18996C4.41009 3.85996 1.70009 7.84996 2.03009 12.42Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>

        <!-- Profile Picture (dropdown trigger) -->

<div class="relative">
  <button id="profileButton" class="flex items-center gap-2 focus:outline-none">
    <img src="/img/barber_team_03.jpg" class="w-9 h-9 rounded-lg object-cover border border-blue-700" alt="user" />
  </button>

 <div id="profileMenu"
    class="hidden absolute left-0 mt-2 w-40 bg-white border border-gray-200 rounded-xl shadow-md shadow-blue-500 overflow-hidden">
  <!-- User Info -->
  <div class="p-2 border-b border-dashed border-blue-700 flex items-center gap-2">
    <img src="/img/barber_team_03.jpg" class="w-8 h-8 rounded-lg object-cover" alt="user" />
    <div>
      <p class="font-semibold text-gray-800 text-sm">الیاس کریمی</p>
      <p class="text-xs text-green-500">آنلاین</p>
    </div>
  </div>

  <!-- Menu Items -->
  <div class="py-1">
    <a href="{{ route('profile') }}"
      class="flex items-center gap-2 px-3 py-1.5 text-sm text-gray-700 hover:bg-gray-100 transition">
      <i class="fa-regular fa-user text-blue-700"></i>
      پروفایل
    </a>
    <a href="#"
      class="flex items-center gap-2 px-3 py-1.5 text-sm text-gray-700 hover:bg-gray-100 transition">
       <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
               xmlns="http://www.w3.org/2000/svg"
               class="stroke-blue-700 transition-all duration-300 group-hover:stroke-white group-active:stroke-white group-focus:stroke-white">
            <path d="M13 11L21.2 2.80005" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M22 6.8V2H17.2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
      خارج شدن
    </a>
  </div>
</div>
</div>
      </div>
    </div>
  </div>
</header>

<!-- JS -->
<script>
  const profileBtn = document.getElementById("profileButton");
  const profileMenu = document.getElementById("profileMenu");

  profileBtn.addEventListener("click", () => {
    profileMenu.classList.toggle("hidden");
  });

  // بستن منو وقتی بیرون کلیک شود
  document.addEventListener("click", (e) => {
    if (!profileBtn.contains(e.target) && !profileMenu.contains(e.target)) {
      profileMenu.classList.add("hidden");
    }
  });
</script>
