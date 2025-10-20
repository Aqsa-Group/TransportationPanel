@extends('layouts.app')
@section('title','پروفایل من')
@section('content')

<body class="bg-gray-100  overflow-hidden flex items-center justify-center">

  <div id="card" class="fade-scale bg-white shadow-lg rounded-2xl w-[95%] max-w-2xl m-4
                      grid grid-cols-1 md:grid-cols-2 overflow-hidden md:h-[480px] sm:h-[550px]">


   <div class="px-3 sm:px-4 pt-6 pb-6 flex flex-col items-center text-sm gap-0">
  <h2 class="text-base sm:text-lg font-bold mb-1">پروفایل من</h2>
  <div class="h-px bg-blue-500 w-full mb-4"></div>


  <div class="flex justify-center w-full">
    <div class="flex items-center justify-center p-0">
      <img src="{{ asset('img/3.png') }}" alt="img3" class="h-56 sm:h-60 object-contain" />
    </div>
  </div>


  <p class="text-center text-gray-800 font-bold text-sm sm:text-base mt-0 mb-0">
    اطلاعات با موفقیت ثبت شد.
  </p>

  <div class="w-full mt-0">
    <a href="{{ route('home') }}"
       class="block text-center bg-[#FF0000] hover:bg-red-600 text-white w-full text-xs sm:text-sm p-2.5 rounded-lg transition">
       برگشت به صفحه اصلی
    </a>
  </div>
</div>



    <div class="relative overflow-hidden flex items-center justify-center">
      <div class="relative w-full py-4 max-w-[300px] h-full">
        <img src="{{ asset('img/2.png') }}"
             class="w-full max-w-[360px] rounded-lg object-contain " alt="">
        <div class="absolute inset-0 flex items-center justify-center p-6">
          <img src="{{ asset('img/1.png') }}"
               class="w-full h-full rounded-xl object-contain " alt="">
        </div>
      </div>
    </div>

  </div>

  <script>
    window.addEventListener('DOMContentLoaded', () => {
      const card = document.getElementById('card');
      if (card) setTimeout(() => card.classList.add('show'), 80);
    });
  </script>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .fade-scale{opacity:0;transform:scale(.98);transition:opacity .45s ease,transform .45s ease}
    .fade-scale.show{opacity:1;transform:scale(1)}
  </style>
</body>
@endsection
