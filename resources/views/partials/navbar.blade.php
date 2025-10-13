<header class="bg-white border-b border-gray-200">
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
          <img src="/img/Icon Frame (1).png" class="w-5 h-5" alt="plus" />
        </button>

        <!-- Profile Picture (dropdown trigger) -->
        <div class="relative">
          <button id="profileButton" class="flex items-center gap-2 focus:outline-none">
            <img src="/img/barber_team_03 1.png" class="w-9 h-9 rounded-lg object-cover border border-blue-400" alt="user" />
          </button>

          <div id="profileMenu"
            class="hidden absolute left-0 mt-2 w-44 bg-white border border-gray-200 rounded-xl shadow-lg overflow-hidden">
            <!-- User Info -->
            <div class="p-2 border-b border-dashed border-gray-300 flex items-center gap-2">
              <img src="/img/barber_team_03 1.png" class="w-8 h-8 rounded-lg object-cover" alt="user" />
              <div>
                <p class="font-semibold text-gray-800 text-sm">الیاس کریمی</p>
                <p class="text-xs text-green-500">آنلاین</p>
              </div>
            </div>

            <!-- Menu Items -->
            <div class="py-1">
              <a href="#"
                class="flex items-center gap-2 px-3 py-1.5 text-sm text-gray-700 hover:bg-gray-100 transition">
                <i class="fa-regular fa-user text-blue-600"></i>
                پروفایل
              </a>
              <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="flex items-center gap-2 px-3 py-1.5 text-sm text-gray-700 hover:bg-gray-100 transition w-full text-right">
                  <i class="fa-solid fa-arrow-right-from-bracket text-blue-600"></i>
                  خارج شدن
                </button>
              </form>
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