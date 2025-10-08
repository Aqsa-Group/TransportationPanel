@extends('layouts.app')

@section('title','داشبورد')

@section('content')
   <Main>
 
<div dir="rtl" class="bg-gray-100 min-h-screen p-2 pb-0">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-2">
      <!--Cards -->
      <div class="lg:col-span-2 space-y-10">
       
 
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 ">
       
        <div class="bg-white p-6 rounded-lg shadow-md">
           <h2 class="text-2xl font-bold mt-2">872803.8؋</h2>
          <p class="text-lg text-gray-800">درآمد امروز</p>
            <p class="inline-flex text-xs font-medium text-green-500 bg-green-100 rounded py-1 px-2">12.5%+</p>
        </div>
        
        
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h2 class="text-2xl font-bold mt-2">929839؋</h2>
            <p class="text-lg text-gray-800">کل سفارشات</p>
            <p class="inline-flex text-xs font-medium text-red-500 bg-red-100 rounded py-1 px-2">4.1%-</p>
        </div>

        
        <div class="bg-white p-6 rounded-lg shadow-md">
         <h2 class="text-2xl font-bold mt-2">9728888؋</h2>
            <p class="text-lg text-gray-800">کل درآمد</p>
            <p class="inline-flex text-xs font-medium text-green-500 bg-green-100 rounded py-1 px-2">7.5%+</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md">
           <h2 class="text-2xl font-bold mt-2">1293823.12؋</h2>
          <p class="text-lg text-gray-800">کل مفاد</p>
            <p class="inline-flex text-xs font-medium text-green-500 bg-green-100 rounded py-1 px-2">7.5%+</p>
        </div>
      
 <div class="stat-card bg-white rounded-lg shadow p-6" data-change="0">
  
  <div class="flex items-center  gap-2">
    <p class="value text-xl font-bold">15</p>
    <img src="/img/note-2.png" alt="complaints" class="h-5 w-5 rounded-full border border-gray-300" />
  </div>

  <h3 class="text-gray-500 text-sm mb-2 text-right">شکایات</h3>

  
  <div class="bg-red-200 flex justify-end p-2 rounded-xl">
    <div class="flex flex-row-reverse -space-x-2">
      <img src="/img/testi_01 2.png" alt="driver1" class="w-8 h-8 rounded-full border border-gray-300" />
      <img src="/img/testi_02 2.png" alt="driver2" class="w-8 h-8 rounded-full border border-gray-300" />
      <img src="/img/testi_03 2.png" alt="driver3" class="w-8 h-8 rounded-full border border-gray-300" />
    </div>
    <svg class="w-5 h-5 text-red-700 ms-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
    </svg>
  </div>
</div>





   <div class="stat-card bg-white rounded-lg shadow p-6" data-change="0">
  <div class="flex items-center  gap-2">
    <p class="value text-xl font-bold">200</p>
    <img src="/img/people.png" alt="complaints" class="h-5 w-5 rounded-full border border-gray-300" />
  </div>

  <h3 class="text-gray-500 text-sm mb-2">رانندگان فعال</h3>

  <div class="bg-purple-200 flex  justify-end p-2 rounded-xl">
    
    <div class="flex flex-row-reverse -space-x-2">
      <img src="/img/testi_01 2.png" alt="driver1" class="w-8 h-8 rounded-full border border-gray-300" />
      <img src="/img/testi_02 2.png" alt="driver2" class="w-8 h-8 rounded-full border border-gray-300" />
      <img src="/img/testi_03 2.png" alt="driver3" class="w-8 h-8 rounded-full border border-gray-300" />
    </div>

    
    <svg class="w-5 h-5 text-green-700 ms-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M19 9l-7 7-7-7"/>
    </svg>
  </div>
</div>




        
    </div>

   



        <!-- Graphs -->
        <!-- <div class="bg-white rounded-2xl shadow p-4">
          <h3 class="text-gray-700 font-bold mb-4">گراف مفاد و ضرر</h3>
          <canvas id="profitLine" height="150"></canvas>
        </div> -->

  <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow p-4 mt-3">
    <div class="flex items-center justify-between mb-5">
      
      <h2 class="font-semibold text-gray-800">گراف مفاد و ضرر</h2>

      
      <div class="flex items-center gap-5 text-sm text-gray-700">
        <span class="flex items-center gap-2">
          <span class="inline-block w-3 h-3 rounded bg-sky-500"></span> مفاد
        </span>
        <span class="flex items-center gap-2">
          <span class="inline-block w-3 h-3 rounded bg-gray-400"></span> ضرر
        </span>
      </div>
    </div>

    <div class="relative">
      <svg id="chart" class="w-full h-72"></svg>
      <div id="xTicks" class="absolute bottom-1 left-0 right-0 px-2 flex justify-between text-[12px] text-gray-500"></div>
    </div>
  </div>

  <script>
    const labels = ["حمل","ثور","جوزا","سرطان","اسد","سنبله","میزان","عقرب","قوس","جدی","دلو","حوت"];
    const profit = [30,45,40,22,85,28,80,32,26,50,60,90];
    const loss   = [60,55,70,78,65,62,58,54,52,50,46,40];

    const svg = document.getElementById('chart');
    const rect = () => svg.getBoundingClientRect();
    const padding = { top: 12, right: 28, bottom: 24, left: 36 }; 

    const mapRange = (v, a1, a2, b1, b2) => b1 + (v - a1) * (b2 - b1) / (a2 - a1);

    function smoothPath(points) {
      if (points.length < 2) return '';
      const cp = (p0, p1, p2, t=0.25) => {
        const d01 = Math.hypot(p1.x - p0.x, p1.y - p0.y);
        const d12 = Math.hypot(p2.x - p1.x, p2.y - p1.y);
        const fa = t * d01 / (d01 + d12 || 1);
        const fb = t * d12 / (d01 + d12 || 1);
        const p1a = { x: p1.x - fa * (p2.x - p0.x), y: p1.y - fa * (p2.y - p0.y) };
        const p1b = { x: p1.x + fb * (p2.x - p0.x), y: p1.y + fb * (p2.y - p0.y) };
        return [p1a, p1b];
      };
      let d = `M ${points[0].x},${points[0].y}`;
      for (let i = 0; i < points.length - 1; i++) {
        const p0 = points[i === 0 ? 0 : i - 1];
        const p1 = points[i];
        const p2 = points[i + 1];
        const p3 = points[i + 2] || p2;
        const [cp1] = cp(p0, p1, p2);
        const [, cp2] = cp(p1, p2, p3);
        d += ` C ${cp1.x},${cp1.y} ${cp2.x},${cp2.y} ${p2.x},${p2.y}`;
      }
      return d;
    }

    function draw() {
      svg.innerHTML = '';
      document.getElementById('xTicks').innerHTML = '';

      const { width, height } = rect();
      svg.setAttribute('viewBox', `0 0 ${width} ${height}`);

      const w = width  - padding.left - padding.right;
      const h = height - padding.top  - padding.bottom;

      const minY = 0, maxY = 100;
      const stepX = w / (labels.length - 1);

      // خطوط افقی
      const grid = 5;
      for (let i = 0; i <= grid; i++) {
        const y = padding.top + (h / grid) * i;
        const line = document.createElementNS('http://www.w3.org/2000/svg','line');
        line.setAttribute('x1', padding.left);
        line.setAttribute('y1', y);
        line.setAttribute('x2', padding.left + w);
        line.setAttribute('y2', y);
        line.setAttribute('stroke', 'rgba(0,0,0,0.06)');
        svg.appendChild(line);
      }

      
      for (let v = 10; v <= 90; v += 10) {
        const yPos = padding.top + (h - mapRange(v, minY, maxY, 0, h));
        const txt = document.createElementNS('http://www.w3.org/2000/svg','text');
        txt.setAttribute('x', padding.left - 6); 
        txt.setAttribute('y', yPos + 4);
        txt.setAttribute('fill', '#6B7280');
        txt.setAttribute('font-size', '12');
        txt.setAttribute('text-anchor', 'end');   
        txt.textContent = v.toString();
        svg.appendChild(txt);
      }
      // ==================================

      const mapPoints = arr => arr.map((v, i) => ({
        x: padding.left + stepX * i,
        y: padding.top + (h - mapRange(v, minY, maxY, 0, h))
      }));
      const ptsProfit = mapPoints(profit);
      const ptsLoss   = mapPoints(loss);

      const pathLoss = document.createElementNS('http://www.w3.org/2000/svg','path');
      pathLoss.setAttribute('d', smoothPath(ptsLoss));
      pathLoss.setAttribute('fill', 'none');
      pathLoss.setAttribute('stroke', '#9CA3AF');
      pathLoss.setAttribute('stroke-width', '2');
      svg.appendChild(pathLoss);

      const pathProfit = document.createElementNS('http://www.w3.org/2000/svg','path');
      pathProfit.setAttribute('d', smoothPath(ptsProfit));
      pathProfit.setAttribute('fill', 'none');
      pathProfit.setAttribute('stroke', '#0EA5E9');
      pathProfit.setAttribute('stroke-width', '3');
      svg.appendChild(pathProfit);

      // برچسب‌های محور X
      const xTicks = document.getElementById('xTicks');
      labels.forEach((lb) => {
        const span = document.createElement('span');
        span.textContent = lb;
        xTicks.appendChild(span);
      });
    }

    draw();
    window.addEventListener('resize', draw);
  </script>


       
        <div class="bg-white rounded-2xl shadow p-3 mb-0">
          <div class=" text-xs text-gray-500">
          تماس با پشتیبانی :support@gmail.com|+937772888829     ادمین پنیل حمل و نقل -تمامی حقوق محفوظ است.</div>
          
        </div>
      </div>
<div class="flex flex-col space-y-2">

  <!-- گراف هفته‌وار -->
  <div class="bg-white rounded-2xl shadow p-4 max-w-md w-full flex flex-col ">
    <div class="flex justify-between mb-4">
      <h2 class="text-lg font-bold">سفارشات</h2>
      <button class="flex gap-1 bg-purple-100 text-purple-700 text-xs rounded px-2 py-1">
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
  @php
    $parts  = preg_split('/\s+/', $hour, 2);
    $time   = $parts[0] ?? $hour;
    $period = $parts[1] ?? '';
  @endphp

  <!-- 7 خانه + ستون ساعت؛ همگی وسطِ کارت -->
  <div class="grid grid-cols-[repeat(7,1.5rem)_auto] gap-2 mb-1 w-fit mx-auto place-items-center">
    @foreach ($colors[$i] as $color)
      <div class="w-6 h-6 rounded cursor-pointer {{ $color }}"></div>
    @endforeach

    <!-- ساعت و پسوند: یک خط، وسطِ ردیف -->
    <div class="flex items-center justify-center gap-1 font-bold text-xs text-gray-700 whitespace-nowrap text-center">
      <span class="text-[10px] leading-none">{{ $time }}</span>
      @if($period)
        <span class="leading-none">{{ $period }}</span>
      @endif
    </div>
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
    <div class="flex justify-between mb-4">
      <h2 class="text-lg font-bold">گراف سفارشات</h2>
      <button class="flex gap-1 bg-purple-100 text-purple-700 text-xs rounded px-2 py-1">
        ماهوار
        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
      </button>
    </div>
  <canvas id="ordersPie" height="70"></canvas> 
 
  <div class="flex flex-col items-start w-full mt-3 space-y-2">
    <div class="flex gap-1 text-xs text-gray-700">
      <span class="w-3 h-3 rounded-full" style="background-color:#3b82f6;"></span>
      سفارشات تکمیلی
    </div>
    <div class="flex gap-1 text-xs text-gray-700">
      <span class="w-3 h-3 rounded-full" style="background-color:#ec4899;"></span>
      سفارشات در انتظار
    </div>
    <div class="flex gap-1 text-xs text-gray-700">
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

  

</script>

      </Main>
@endsection