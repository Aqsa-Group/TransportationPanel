@extends('layouts.app')

@section('title','داشبورد')

@section('content')
   <Main>
 
<div dir="rtl" class="bg-gray-100 min-h-screen p-6">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
      <!--Cards -->
      <div class="lg:col-span-2 space-y-6">
       
 
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
       
        <div class="bg-white p-6 rounded-lg shadow-md">
          <p class="text-2xl font-semibold text-gray-900">8,728,803.8</p>
          <p class="text-lg text-gray-800">درآمد امروز</p>
            <p class="inline-flex items-center text-xs font-medium text-green-500 bg-green-100 rounded py-1 px-2">+12.5%</p>
        </div>
        
        
        <div class="bg-white p-6 rounded-lg shadow-md">
          <p class="text-2xl font-semibold text-gray-900">9,298,939</p>
            <p class="text-lg text-gray-800">کل سفارشات</p>
            <p class="inline-flex items-center text-xs font-medium text-red-500 bg-red-100 rounded py-1 px-2">-4.1%</p>
        </div>

        
        <div class="bg-white p-6 rounded-lg shadow-md">
          <p class="text-2xl font-semibold text-gray-900">7,288,888</p>
            <p class="text-lg text-gray-800">کل درآمد</p>
            <p class="inline-flex items-center text-xs font-medium text-green-500 bg-green-100 rounded py-1 px-2">+7.5%</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <p class="text-lg text-gray-800">کل مفاد</p>
            <p class="text-2xl font-semibold text-gray-900">12,938,823.12</p>
            <p class="inline-flex items-center text-xs font-medium text-green-500 bg-green-100 rounded py-1 px-2">+7.5%</p>
        </div>
      
       
      
      <div class="stat-card bg-white rounded-2xl shadow p-4 border-l-4" data-change="0">
    <div class="flex items-center space-x-2">
       
        <p class="value text-xl font-bold">15</p>
        <img src="/img/note-2.png" alt="driver1" class="h-5 w-5 rounded-full border" />
    </div>
    <h3 class="text-gray-500 text-sm mb-2">شکایات</h3>

     
    <div class="bg-red-200 flex space-x-2 p-2 rounded-xl">
        <div class="flex items-center justify-center w-8 h-8 bg-white rounded-full border">
            <img src="/img/testi_01 2.png" alt="driver1" class="h-full w-full rounded-full" />
        </div>
        <div class="flex items-center justify-center w-8 h-8 bg-white rounded-full border">
            <img src="/img/testi_02 2.png" alt="driver2" class="h-full w-full rounded-full" />
        </div>
        <div class="flex items-center justify-center w-8 h-8 bg-white rounded-full border">
            <img src="/img/testi_03 2.png" alt="driver3" class="h-full w-full rounded-full" />
        </div>
    </div>
</div>




        <div class="stat-card bg-white rounded-2xl shadow p-4 border-l-4" data-change="0">
    <div class="flex items-center space-x-2">
       
        <p class="value text-xl font-bold">15</p>
        <img src="/img/people.png" alt="driver1" class="h-5 w-5 rounded-full border" />
    </div>
    <h3 class="text-gray-500 text-sm mb-2">رانندگان فعال</h3>


    <div class="bg-green-200 flex space-x-2 p-2 rounded-xl">
        <div class="flex items-center justify-center w-8 h-8 bg-white rounded-full border">
            <img src="/img/testi_01 2.png" alt="driver1" class="h-full w-full rounded-full" />
        </div>
        <div class="flex items-center justify-center w-8 h-8 bg-white rounded-full border">
            <img src="/img/testi_02 2.png" alt="driver2" class="h-full w-full rounded-full" />
        </div>
        <div class="flex items-center justify-center w-8 h-8 bg-white rounded-full border">
            <img src="/img/testi_03 2.png" alt="driver3" class="h-full w-full rounded-full" />
        </div>
    </div>
</div>

        
    </div>

   



        <!-- Graphs -->
        <div class="bg-white rounded-2xl shadow p-4">
          <h3 class="text-gray-700 font-bold mb-4">گراف مفاد و ضرر</h3>
          <canvas id="profitLine" height="150"></canvas>
        </div>

       
        <div class="bg-white rounded-2xl shadow p-1">
          <div class=" text-sm text-gray-500">
          تماس با پشتیبانی :support@gmail.com|+937772888829     ادمین پنیل حمل و نقل -تمامی حقوق محفوظ است.</div>
          
        </div>
      </div>
<div class="flex flex-col items-center space-y-6">

  <!-- گراف هفته‌وار -->
  <div class="max-w-md w-full bg-white rounded-2xl shadow p-4">
    <!-- Header -->
    <div class="flex items-center justify-between mb-4">
      <h2 class="text-lg font-bold">سفارشات</h2>
      <button class="flex items-center gap-1 bg-purple-100 text-purple-700 text-xs rounded px-2 py-1">
        هفته وار
        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
      </button>
    </div>

    @php
      $hours = ['7:00 ق.ظ','9:00 ق.ظ','11:00 ق.ظ','1:00 ب.ظ','3:00 ب.ظ','5:00 ب.ظ','7:00 ب.ظ'];
      $days  = ['ش','ی','د','س','چ','پ','ج'];
      $colors = [
        ['bg-blue-700','bg-blue-300','bg-blue-200','bg-blue-200','bg-blue-700','bg-blue-700','bg-blue-700'],
        ['bg-blue-200','bg-blue-200','bg-blue-200','bg-blue-200','bg-blue-400','bg-blue-400','bg-blue-400'],
        ['bg-blue-300','bg-blue-300','bg-blue-300','bg-blue-300','bg-blue-700','bg-blue-200','bg-blue-200'],
        ['bg-blue-700','bg-blue-200','bg-blue-700','bg-blue-700','bg-blue-300','bg-blue-200','bg-blue-700'],
        ['bg-blue-700','bg-blue-300','bg-blue-200','bg-blue-200','bg-blue-400','bg-blue-300','bg-blue-700'],
        ['bg-blue-300','bg-blue-300','bg-blue-400','bg-blue-700','bg-blue-200','bg-blue-400','bg-blue-700'],
        ['bg-blue-200','bg-blue-300','bg-blue-400','bg-blue-200','bg-blue-400','bg-blue-300','bg-blue-700'],
      ];
    @endphp

    <!-- time rows -->
    @foreach ($hours as $i=>$hour)
      <div class="grid grid-cols-8 gap-1 items-center mb-1">
        @foreach ($colors[$i] as $color)
          <div class="w-6 h-6 rounded cursor-pointer {{ $color }}"></div>
        @endforeach
        <div class="text-xs text-gray-700 text-left">{{ $hour }}</div>
      </div>
    @endforeach

    <!-- days row -->
    <div class="grid grid-cols-8 gap-1 text-center mt-1">
      @foreach ($days as $day)
        <div class="w-6 text-xs font-medium">{{ $day }}</div>
      @endforeach
      <div></div>
    </div>
  </div>

 <div class="bg-white rounded-2xl shadow p-4 max-w-md w-full flex flex-col ">
    <div class="flex items-center justify-between mb-4">
      <h2 class="text-lg font-bold">گراف سفارشات</h2>
      <button class="flex items-center gap-1 bg-purple-100 text-purple-700 text-xs rounded px-2 py-1">
        ماهوار
        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
      </button>
    </div>
  <canvas id="ordersPie" height="70"></canvas> 
 
  <div class="flex flex-col items-start w-full mt-3 space-y-2">
    <div class="flex items-center gap-1 text-xs text-gray-700">
      <span class="w-3 h-3 rounded-full" style="background-color:#3b82f6;"></span>
      سفارشات تکمیلی
    </div>
    <div class="flex items-center gap-1 text-xs text-gray-700">
      <span class="w-3 h-3 rounded-full" style="background-color:#ec4899;"></span>
      سفارشات در انتظار
    </div>
    <div class="flex items-center gap-1 text-xs text-gray-700">
      <span class="w-3 h-3 rounded-full" style="background-color:#ef4444;"></span>
    سفارشات  در حال انجام 
    </div>
  </div>
</div>

<script>
  // Pie Chart 
  Chart.register({
    id: 'centerText',
    beforeDraw: function(chart) {
      if (chart.config.options.plugins.centerText) {
        const ctx = chart.ctx;
        const centerConfig = chart.config.options.plugins.centerText;
        ctx.save();
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';

        const centerX = (chart.chartArea.left + chart.chartArea.right) / 2;
        const centerY = (chart.chartArea.top + chart.chartArea.bottom) / 2;

        // متن اصلی
        ctx.font = (centerConfig.fontSize || 18) + "px Arial";
        ctx.fillStyle = centerConfig.color || '#000';
        ctx.fillText(centerConfig.text, centerX, centerY - 8);


        if (centerConfig.subText) {
          ctx.font = (centerConfig.subFontSize || 14) + "px Arial";
          ctx.fillText(centerConfig.subText, centerX, centerY + 12);
        }

        ctx.restore();
      }
    }
  });

  new Chart(document.getElementById('ordersPie'), {
    type: 'doughnut',
    data: {
      labels: ['سفارشات تکمیلی', 'سفارشات در انتظار', 'سفارشاتدر حال انجام'],
      datasets: [{
        data: [45, 30, 25],
        backgroundColor: ['#3b82f6', '#ec4899', '#ef4444']
      }]
    },
    options: {
      responsive: true,
      cutout: '55%', 
      plugins: {
        legend: { display: false },
        centerText: {
          text: 'سنبله 1404',
          subText: '677672.9؋',
          color: '#111827',
          fontSize: 18,
          subFontSize: 14
        }
      }
    }
  });
</script>
<script>

  // -- Line Chart (مفاد و ضرر) --
 new Chart(document.getElementById('profitLine'), {
  type: 'line',
  data: {
    labels: ['حمل','جوزا','سرطان','اسد','میزان','عقرب','قوس','جدی','دلو','حوت'],
    datasets: [
      {
        label: 'مفاد',
        data: [30,50,40,70,45,85,60,35,55,90],
        borderColor: '#3b82f6',
        backgroundColor: 'rgba(59,130,246,0.05)',
        tension: 0.35,
        pointRadius: 3
      },
      {
        label: 'ضرر',
        data: [60,70,80,60,90,50,70,60,40,50],
        borderColor: '#9CA3AF',
        backgroundColor: 'rgba(156,163,175,0.03)',
        tension: 0.35,
        pointRadius: 3
      }
    ]
  },
  options: {
    responsive: true,
    plugins: { 
      legend: {
        position: 'top',      
        align: 'start',       
        labels: {
          usePointStyle: true,  
          pointStyle: 'circle'
        }
      } 
    },
    scales: {
      y: {
        beginAtZero: false,
        ticks: { stepSize: 10 }
      }
    }
  }
});
</script>

      </Main>
@endsection