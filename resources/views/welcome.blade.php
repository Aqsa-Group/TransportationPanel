@extends('layouts.app')

@section('title','داشبورد')

@section('content')
   <Main>
 
<div dir="rtl" class="bg-gray-100 min-h-screen p-2 pb-0  gap-2">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-2">
      <!--Cards -->
      <div class="lg:col-span-2 space-y-3">
       
 
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

  
  <div class="bg-red-200 flex justify-between rounded-lg">
    <div class="flex flex-row-reverse -space-x-2">
      <img src="/img/testi_01 2.png" alt="driver1" class="w-8 h-8 rounded-full border border-gray-300" />
      <img src="/img/testi_02 2.png" alt="driver2" class="w-8 h-8 rounded-full border border-gray-300" />
      <img src="/img/testi_03 2.png" alt="driver3" class="w-8 h-8 rounded-full border border-gray-300" />
    </div>
    <svg class="w-5 h-5 text-red-700 ms-2 mt-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
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

  <div class="bg-blue-200 flex  justify-between  rounded-lg">
    
    <div class="flex flex-row-reverse -space-x-2">
      <img src="/img/testi_01 2.png" alt="driver1" class="w-8 h-8 rounded-full border border-gray-300" />
      <img src="/img/testi_02 2.png" alt="driver2" class="w-8 h-8 rounded-full border border-gray-300" />
      <img src="/img/testi_03 2.png" alt="driver3" class="w-8 h-8 rounded-full border border-gray-300" />
    </div>

    
    <svg class="w-5 h-5 text-blue-700 ms-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
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

  <div class="max-w-4xl  bg-white rounded-2xl shadow p-4 mt-3">
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

 <style>
  /* خط‌ها با استروک-داش کشیده می‌شوند */
  .draw {
    stroke-dasharray: var(--len);
    stroke-dashoffset: var(--len);
    animation: dash 1.4s ease-out forwards;
  }
  .draw.delay { animation-delay: .2s; }

  /* برچسب‌های محور X آرام ظاهر شوند */
  #xTicks span { opacity: 0; transform: translateY(4px); transition: .4s ease; }
  #xTicks.ready span { opacity: 1; transform: translateY(0); }
  @keyframes dash { to { stroke-dashoffset: 0; } }
</style>

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

  function animateStroke(pathEl, delay = 0) {
    // طول واقعی مسیر
    const len = pathEl.getTotalLength?.() || 0;
    pathEl.style.setProperty('--len', len);
    // ریست برای اجرای دوباره روی resize
    pathEl.classList.remove('draw', 'delay');
    // یک فریم صبر کن تا style اعمال شود
    requestAnimationFrame(() => {
      if (delay) pathEl.classList.add('delay');
      pathEl.classList.add('draw');
    });
  }

  function draw() {
    svg.innerHTML = '';
    const ticks = document.getElementById('xTicks');
    ticks.classList.remove('ready');
    ticks.innerHTML = '';

    const { width, height } = rect();
    svg.setAttribute('viewBox', `0 0 ${width} ${height}`);

    const w = width  - padding.left - padding.right;
    const h = height - padding.top  - padding.bottom;

    const minY = 0, maxY = 100;
    const stepX = w / (labels.length - 1);

    // grid
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

    // انیمیشن‌ها
    animateStroke(pathLoss, 0);     // اول خاکستری
    animateStroke(pathProfit, 200); // بعد آبی با کمی تاخیر

    // X ticks fade-in
    labels.forEach(lb => {
      const span = document.createElement('span');
      span.textContent = lb;
      ticks.appendChild(span);
    });
    // یک فریم بعد کلاس ready را می‌زنیم تا ترنزیشن اجرا شود
    requestAnimationFrame(() => ticks.classList.add('ready'));
  }

  draw();

  // تا resize رگباری، انیمیشن مدام تریگر نشود
  let rAF;
  window.addEventListener('resize', () => {
    cancelAnimationFrame(rAF);
    rAF = requestAnimationFrame(draw);
  });
</script>



       
        <div class="bg-white rounded-lg shadow p-3">
          <div class=" text-xs text-gray-500">
          تماس با پشتیبانی :support@gmail.com|+937772888829     ادمین پنیل حمل و نقل -تمامی حقوق محفوظ است.</div>
          
        </div>
      </div>
<div class="flex flex-col space-y-2">
  
  
    <!-- <div class="grid grid-cols-1 lg:grid-cols-3 gap-2"> -->

  <!-- گراف هفته‌وار -->
  <div class="bg-white rounded-2xl shadow p-3 sm:p-4 max-w-full sm:max-w-md w-full flex flex-col overflow-hidden h-80">
  <div class="flex items-center justify-between mb-3 sm:mb-4">
    <h2 class="text-base sm:text-lg font-bold">سفارشات</h2>
    <button class="flex items-center gap-1 bg-blue-100 text-blue-700 text-[10px] sm:text-xs rounded px-2 py-1">
      هفته وار
      <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
      </svg>
    </button>
  </div>

  <!-- رندر با JS -->
  <div id="weeklyGrid" class="space-y-1 sm:space-y-1.5"></div>

  
  <div id="weeklyDays" class="mt-0"></div>

</div>
<script>
  const HOURS = ['7:00 ق.ظ','9:00 ق.ظ','11:00 ق.ظ','1:00 ب.ظ','3:00 ب.ظ','5:00 ب.ظ','7:00 ب.ظ'];
  const DAYS  = ['ش','ی','د','س','چ','پ','ج'];
  const COLORS = [
    ['bg-blue-700','bg-blue-300','bg-blue-200','bg-blue-200','bg-blue-700','bg-blue-700','bg-blue-700'],
    ['bg-blue-200','bg-blue-200','bg-blue-200','bg-blue-200','bg-blue-400','bg-blue-400','bg-blue-400'],
    ['bg-blue-300','bg-blue-300','bg-blue-300','bg-blue-300','bg-blue-700','bg-blue-200','bg-blue-200'],
    ['bg-blue-700','bg-blue-200','bg-blue-700','bg-blue-700','bg-blue-300','bg-blue-200','bg-blue-700'],
    ['bg-blue-700','bg-blue-300','bg-blue-200','bg-blue-200','bg-blue-400','bg-blue-300','bg-blue-700'],
    ['bg-blue-300','bg-blue-300','bg-blue-400','bg-blue-700','bg-blue-200','bg-blue-400','bg-blue-700'],
    ['bg-blue-200','bg-blue-300','bg-blue-400','bg-blue-200','bg-blue-400','bg-blue-300','bg-blue-700'],
  ];

  // اندازه سلول‌ها فقط با Tailwind
  const CELL = 'w-8 h-8 sm:w-8 sm:h-8 md:w-6 md:h-6';
  const GAP  = 'gap-4 sm:gap-2';

  function renderWeekly() {
    const gridRoot = document.getElementById('weeklyGrid');
    const daysRoot = document.getElementById('weeklyDays');
    if (!gridRoot || !daysRoot) return;

    gridRoot.innerHTML = '';
    daysRoot.innerHTML = '';

    // هر ردیف: گروهِ ۷ سلول (Grid) + ستون ساعت (عرض ثابت واکنش‌گرا)
    HOURS.forEach((hour, i) => {
      const row = document.createElement('div');
      row.className = 'flex items-center justify-center';

      // گروه سلول‌ها
      const cells = document.createElement('div');
      cells.className = `grid grid-cols-7 ${GAP} w-fit mx-auto`;
      (COLORS[i] || []).forEach(tw => {
        const c = document.createElement('div');
        c.className = `${CELL} rounded ${tw} cursor-pointer transition-transform duration-200 hover:scale-105`;
        cells.appendChild(c);
      });

      // ستون ساعت (عرض ثابت، متن فشرده؛ RTL مشکلی ندارد)
      const timeBox = document.createElement('div');
      timeBox.className = 'ms-1 sm:ms-2 w-14 sm:w-16 md:w-20 flex items-center justify-center font-bold text-[10px] sm:text-xs text-gray-700 tracking-tight';
      const [time, period=''] = hour.split(/\s+/, 2);
      timeBox.innerHTML = `<span class="leading-none">${time || hour}</span>${period ? `<span class="ms-1 leading-none">${period}</span>` : ''}`;

      // ترتیب: اول سلول‌ها، بعد ستون ساعت (همان چیزی که داشتی)
      row.appendChild(cells);
      row.appendChild(timeBox);

      gridRoot.appendChild(row);
    });

    // ردیف روزها: ۷ ستون هم‌عرض سلول‌ها + یک ستون خالی زیرِ ساعت
    const daysRow = document.createElement('div');
    daysRow.className = `mt-1 grid grid-cols-7 ${GAP} place-items-center`;
    DAYS.forEach(d => {
      const el = document.createElement('div');
      el.className = 'text-[10px] sm:text-xs font-medium w-8 sm:w-5 md:w-8 text-center';
      el.textContent = d;
      daysRow.appendChild(el);
    });

    const hourEmpty = document.createElement('div');
    hourEmpty.className = 'mt-1 ms-1 sm:ms-2 w-14 sm:w-16 md:w-20'; // هم‌اندازه همون ستون ساعت

    // کانتینر افقی برای روزها + جای خالی ستون ساعت
    const daysWrap = document.createElement('div');
    daysWrap.className = 'flex items-center justify-center';
    daysWrap.appendChild(daysRow);
    daysWrap.appendChild(hourEmpty);

    daysRoot.appendChild(daysWrap);
  }

  renderWeekly();
  // اختیاری: اگه بعد از تغییر سایز فونت/زوم خواستی دوباره بچینه
  window.addEventListener('resize', renderWeekly);
</script>


<div class="bg-white rounded-2xl shadow p-4 max-w-md w-full flex flex-col h-90">
    <div class="flex justify-between mb-4">
      <h2 class="text-lg font-bold">گراف سفارشات</h2>
      <button class="flex gap-1 bg-blue-100 text-blue-700 text-xs rounded px-2 py-1">
        ماهوار
        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
      </button>
    </div>
  <canvas id="ordersPie" class="w-full h-50"></canvas>
 
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
          fontSize: 20,
          subFontSize: 18
        }
      }
    }
  });
</script>
<script>

  

</script>

<!-- <div class="p-3">
<div class="inline-block max-w-full bg-white rounded-lg shadow px-3 py-2">
<p class="text-xs text-gray-500
          whitespace-normal sm:whitespace-nowrap
          break-words">
  تماس با پشتیبانی :
  <span dir="ltr" class="inline break-all sm:break-normal">
    support@gmail.com
  </span>
  <span class="mx-1">|</span>
  <span dir="ltr" class="inline break-all sm:break-normal">
    +937772888829
  </span>
  &nbsp; ادمین پنل حمل و نقل - تمامی حقوق محفوظ است.
</p>
</div>
</div> -->
      </Main>


@endsection