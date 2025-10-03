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

      {{-- Search --}}
      
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


      <div class="flex items-center gap-2 sm:gap-3">
        <button class="rounded-lg border border-gray-200 p-2 hover:bg-gray-100 w-9 h-9 transition relative">
          <i class="fa-regular fa-bell"></i>
          <span class="absolute -top-1 -right-1 bg-red-500 text-white text-[10px] rounded-full px-1.5">3</span>
        </button>
        <button class="rounded-lg border border-gray-200 p-2 hover:bg-gray-100 transition">
          <img src="/img/Icon Frame (1).png" class="w-5 h-5" alt="plus" />
        </button>
        <div class="xs:flex items-center gap-2">
          <img src="/img/barber_team_03 1.png" class="w-9 h-9 rounded-lg object-cover" alt="user" />
        </div>
      </div>
    </div>
  </div>
</header>

