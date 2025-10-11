@extends('layouts.app')

@section('title','داشبورد')

@section('content')
<Main>
  <div dir="rtl" class="bg-gray-100 min-h-screen p-2 pb-0 gap-2">
    <div class="max-w-7xl mx-auto">
      
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-3">

        
        <div class="lg:col-span-2 space-y-6">

          <!-- کارت‌ها -->

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3  ">
  <div class="bg-white p-8 rounded-lg border-[2px] border-gray-300 border-soild ">
    <h2 class="text-2xl font-bold mt-2">872803.8؋</h2>
    <p class="text-lg text-gray-800">درآمد امروز</p>
    <p class="inline-flex text-xs font-medium text-green-500 bg-green-100 rounded py-1 px-2">12.5%+</p>
  </div>

  <div class="bg-white p-8 rounded-lg border-[2px] border-gray-300 border-soild">
    <h2 class="text-2xl font-bold mt-2">929839؋</h2>
    <p class="text-lg text-gray-800">کل سفارشات</p>
    <p class="inline-flex text-xs font-medium text-red-500 bg-red-100 rounded py-1 px-2">4.1%-</p>
  </div>

  <div class="bg-white p-8 rounded-lg border-[2px] border-gray-300 border-soild">
    <h2 class="text-2xl font-bold mt-2">9728888؋</h2>
    <p class="text-lg text-gray-800">کل درآمد</p>
    <p class="inline-flex text-xs font-medium text-green-500 bg-green-100 rounded py-1 px-2">7.5%+</p>
  </div>

  <div class="bg-white p-8 rounded-lg border-[2px] border-gray-300 border-soild">
    <h2 class="text-2xl font-bold mt-2">1293823.12؋</h2>
    <p class="text-lg text-gray-800">کل مفاد</p>
    <p class="inline-flex text-xs font-medium text-green-500 bg-green-100 rounded py-1 px-2">7.5%+</p>
  </div>

  <div class="stat-card bg-white rounded-lg p-8 border-[2px] border-gray-300 border-soild" data-change="0">
    <div class="flex items-center gap-2">
      <p class="value text-xl font-bold">15</p>
      <img src="/img/note-2.png" alt="complaints" class="h-5 w-5 rounded-full border border-gray-300" />
    </div>
    <h3 class="text-gray-500 text-sm mb-2 text-right">شکایات</h3>
    <div class="inline-flex bg-red-200 rounded-lg overflow-hidden">
      <div class="flex flex-row-reverse -space-x-2">
        <img src="/img/testi_01 2.png" alt="driver1" class="w-8 h-8 rounded-full border border-gray-300" />
        <img src="/img/testi_02 2.png" alt="driver2" class="w-8 h-8 rounded-full border border-gray-300" />
        <img src="/img/testi_03 2.png" alt="driver3" class="w-8 h-8 rounded-full border border-gray-300" />
      </div>
      <svg class="w-5 h-5 text-red-700 ms-2 self-end" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
      </svg>
    </div>
  </div>

  <div class="stat-card bg-white rounded-lg p-8 border-[2px] border-gray-300 border-soild" data-change="0">
    <div class="flex items-center gap-2">
      <p class="value text-xl font-bold">200</p>
      <img src="/img/people.png" alt="drivers" class="h-5 w-5 rounded-full border border-gray-300" />
    </div>
    <h3 class="text-gray-500 text-sm mb-2">رانندگان فعال</h3>
    <div class="inline-flex bg-blue-200 rounded-lg overflow-hidden">
      <div class="flex flex-row-reverse -space-x-2">
        <img src="/img/testi_01 2.png" alt="driver1" class="w-8 h-8 rounded-full border border-gray-300" />
        <img src="/img/testi_02 2.png" alt="driver2" class="w-8 h-8 rounded-full border border-gray-300" />
        <img src="/img/testi_03 2.png" alt="driver3" class="w-8 h-8 rounded-full border border-gray-300" />
      </div>
      <svg class="w-5 h-5 text-blue-700 ms-2 self-end" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
      </svg>
    </div>
  </div>
</div>


            
          <!-- گراف مفاد و ضرر (Line) -->
         
<div class="max-w-4xl bg-white rounded-2xl  p-4  mb-2  border-[2px] border-gray-300 border-soild">
  <div class="flex items-center justify-between mb-5">
    <h2 class="font-semibold text-gray-800">گراف مفاد و ضرر</h2>
    <div class="flex items-center gap-5 text-sm text-gray-700">
      <button id="legendProfit" type="button" class="flex items-center gap-2">
        <span class="inline-block w-3 h-3 rounded bg-sky-500"></span> مفاد
      </button>
      <button id="legendLoss" type="button" class="flex items-center gap-2">
        <span class="inline-block w-3 h-3 rounded bg-gray-400"></span> ضرر
      </button>
    </div>
  </div>

  <div class="relative">
    <svg id="chart" class="w-full h-80"></svg>

    <!-- برچسب‌های ماه -->
    <div id="xTicks"
         class="absolute bottom-1 left-0 right-0 px-1 flex justify-between text-[11px] tracking-tight text-gray-500"></div>

    <!-- تولتیپ هاور -->
    <div id="chartTip"
         class="hidden absolute z-10 -translate-x-1/2 -translate-y-full bg-gray-800 text-white text-[10px] rounded px-2 py-1 shadow">
    </div>
  </div>
</div>

<style>
  .draw{stroke-dasharray:var(--len);stroke-dashoffset:var(--len);animation:dash 1.4s ease-out forwards}
  .draw.delay{animation-delay:.2s}
  #xTicks span{opacity:0;transform:translateY(4px);transition:.4s ease}
  #xTicks.ready span{opacity:1;transform:translateY(0)}
  @keyframes dash{to{stroke-dashoffset:0}}
  .legend-off{opacity:.45}
</style>

<script>
  const labels = ["حمل","ثور","جوزا","سرطان","اسد","سنبله","میزان","عقرب","قوس","جدی","دلو","حوت"];
  const profit = [30,45,40,22,85,28,80,32,26,50,60,90];
  const loss   = [60,55,70,78,65,62,58,54,52,50,46,40];

  const svg   = document.getElementById('chart');
  const ticks = document.getElementById('xTicks');
  const tip   = document.getElementById('chartTip');

  const padding = { top: 12, right: 28, bottom: 28, left: 36 };
  const extraX  = 30; 
  let showProfit = true, showLoss = true;

  const $legendProfit = document.getElementById('legendProfit');
  const $legendLoss   = document.getElementById('legendLoss');

  function mapRange(v, a1, a2, b1, b2) { return b1 + (v - a1) * (b2 - b1) / (a2 - a1); }

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
    const len = pathEl.getTotalLength?.() || 0;
    pathEl.style.setProperty('--len', len);
    pathEl.classList.remove('draw','delay');
    requestAnimationFrame(() => {
      if (delay) pathEl.classList.add('delay');
      pathEl.classList.add('draw');
    });
  }

  let pathLoss, pathProfit, dProfit, dLoss, vline, ptsProfit, ptsLoss, stepX, xStart, h;

  function draw() {
    svg.innerHTML = '';
    ticks.classList.remove('ready');
    ticks.innerHTML = '';

    const { width, height } = svg.getBoundingClientRect();
    svg.setAttribute('viewBox', `0 0 ${width} ${height}`);

    const w = width  - padding.left - padding.right;
    h = height - padding.top  - padding.bottom;

    const minY = 0, maxY = 100;

    
    xStart = padding.left + extraX;
    const xEnd = padding.left + w - extraX;
    stepX = (xEnd - xStart) / (labels.length - 1);
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

    // map points
    const mapPoints = arr => arr.map((v, i) => ({
      x: xStart + stepX * i,
      y: padding.top + (h - mapRange(v, minY, maxY, 0, h))
    }));
    ptsProfit = mapPoints(profit);
    ptsLoss   = mapPoints(loss);

    // paths
    pathLoss = document.createElementNS('http://www.w3.org/2000/svg','path');
    pathLoss.setAttribute('d', smoothPath(ptsLoss));
    pathLoss.setAttribute('fill', 'none');
    pathLoss.setAttribute('stroke', '#9CA3AF');
    pathLoss.setAttribute('stroke-width', '2');
    svg.appendChild(pathLoss);

    pathProfit = document.createElementNS('http://www.w3.org/2000/svg','path');
    pathProfit.setAttribute('d', smoothPath(ptsProfit));
    pathProfit.setAttribute('fill', 'none');
    pathProfit.setAttribute('stroke', '#0EA5E9');
    pathProfit.setAttribute('stroke-width', '3');
    svg.appendChild(pathProfit);

    // اعمال نمایش/عدم نمایش بر اساس وضعیت
    pathProfit.style.visibility = showProfit ? 'visible' : 'hidden';
    pathLoss.style.visibility   = showLoss   ? 'visible' : 'hidden';

    animateStroke(pathLoss, 0);
    animateStroke(pathProfit, 200);

   
    ticks.style.left  = (xStart) + 'px';
    ticks.style.right = (width - (padding.left + w - extraX)) + 'px';

    labels.forEach(lb => {
      const span = document.createElement('span');
      span.textContent = lb;
      ticks.appendChild(span);
    });
    requestAnimationFrame(() => ticks.classList.add('ready'));

    
    vline = document.createElementNS('http://www.w3.org/2000/svg','line');
    vline.setAttribute('y1', padding.top);
    vline.setAttribute('y2', padding.top + h);
    vline.setAttribute('stroke', 'rgba(17,24,39,.25)'); // gray-900/25
    vline.setAttribute('stroke-width', '1');
    vline.setAttribute('visibility', 'hidden');
    svg.appendChild(vline);

    // focus dots
    const dot = (color) => {
      const c = document.createElementNS('http://www.w3.org/2000/svg','circle');
      c.setAttribute('r', 4);
      c.setAttribute('fill', '#fff');
      c.setAttribute('stroke', color);
      c.setAttribute('stroke-width', 2);
      c.setAttribute('visibility', 'hidden');
      svg.appendChild(c);
      return c;
    };
    dProfit = dot('#0EA5E9');
    dLoss   = dot('#9CA3AF');

    const clamp = (v, a, b) => Math.max(a, Math.min(b, v));

    svg.addEventListener('mousemove', (e) => {
      const bbox = svg.getBoundingClientRect();
      const mx = e.clientX - bbox.left;
      const ix = Math.round(clamp((mx - xStart) / stepX, 0, labels.length - 1)); 
      const xp = xStart + stepX * ix;

      vline.setAttribute('x1', xp);
      vline.setAttribute('x2', xp);
      vline.setAttribute('visibility', 'visible');

      const p1 = ptsProfit[ix];
      const p2 = ptsLoss[ix];

      if (showProfit) { dProfit.setAttribute('cx', p1.x); dProfit.setAttribute('cy', p1.y); dProfit.setAttribute('visibility', 'visible'); }
      else { dProfit.setAttribute('visibility', 'hidden'); }

      if (showLoss)   { dLoss.setAttribute('cx', p2.x);   dLoss.setAttribute('cy', p2.y);   dLoss.setAttribute('visibility', 'visible'); }
      else { dLoss.setAttribute('visibility', 'hidden'); }

      const parts = [];
      if (showProfit) parts.push(`مفاد ${profit[ix]}`);
      if (showLoss)   parts.push(`ضرر ${loss[ix]}`);
      tip.textContent = `${labels[ix]} — ${parts.join(' / ')}`;
      tip.style.left = `${xp}px`;
      tip.style.top  = `${Math.min(showProfit ? p1.y : Infinity, showLoss ? p2.y : Infinity) - 6}px`;
      tip.classList.toggle('hidden', parts.length === 0);
    });

    svg.addEventListener('mouseleave', () => {
      vline.setAttribute('visibility', 'hidden');
      dProfit.setAttribute('visibility', 'hidden');
      dLoss.setAttribute('visibility', 'hidden');
      tip.classList.add('hidden');
    });
  }

  
  function refreshLegendStyles() {
    $legendProfit.classList.toggle('legend-off', !showProfit);
    $legendLoss.classList.toggle('legend-off',   !showLoss);
  }

  $legendProfit.addEventListener('click', () => {
    showProfit = !showProfit;
    refreshLegendStyles();
    
    if (pathProfit) pathProfit.style.visibility = showProfit ? 'visible' : 'hidden';
    if (dProfit)    dProfit.setAttribute('visibility', showProfit ? 'visible' : 'hidden');
    tip.classList.add('hidden');
  });

  $legendLoss.addEventListener('click', () => {
    showLoss = !showLoss;
    refreshLegendStyles();
    if (pathLoss) pathLoss.style.visibility = showLoss ? 'visible' : 'hidden';
    if (dLoss)    dLoss.setAttribute('visibility', showLoss ? 'visible' : 'hidden');
    tip.classList.add('hidden');
  });

  draw();
  refreshLegendStyles();

  let rAF;
  window.addEventListener('resize', () => {
    cancelAnimationFrame(rAF);
    rAF = requestAnimationFrame(draw);
  });
</script>

        </div>

        <!-- : گراف هفته‌ای + گراف ماهانه -->
        <div class="flex flex-col space-y-3">

          <!-- گراف هفته‌وار -->
          <div class="bg-white rounded-2xl  p-3 sm:p-4 max-w-full sm:max-w-md w-full flex flex-col overflow-hidden h-75  border-[2px] border-gray-300 border-soild">
            <div class="flex items-center justify-between mb-3 sm:mb-4">
              <h2 class="text-base sm:text-lg font-bold">سفارشات</h2>
          
              <button class="flex items-center gap-1 bg-blue-600 hover:bg-blue-700 text-white text-[10px] sm:text-xs rounded px-2 py-1 shadow-sm border border-blue-600">
                هفته وار
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
            </div>

            <div id="weeklyGrid" class="space-y-1 sm:space-y-1.5"></div>
            <div id="weeklyDays" class="mt-0"></div>

            <!-- Tooltip -->
            <div id="tt"
                 class="fixed z-50 hidden pointer-events-none px-2 py-1 rounded text-[10px] sm:text-xs text-white bg-gray-800 shadow">
            </div>
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
            const COUNTS = [
              [12, 9, 5, 3, 18, 22, 15],
              [ 4, 2, 1, 0,  6,  7,  8],
              [ 7, 8, 6, 5, 19,  3,  2],
              [16, 3,17,21, 10,  4, 12],
              [14, 8, 5, 2,  9,  7, 13],
              [ 6, 7,10,20,  3, 11, 18],
              [ 2, 6, 9, 3,  8,  7, 15],
            ];
            const CELL = 'w-8 h-8 sm:w-8 sm:h-8 md:w-6 md:h-6';
            const GAP  = 'gap-4 sm:gap-2';

            const tt = document.getElementById('tt');
            function showTip(text) { tt.textContent = text; tt.classList.remove('hidden'); }
            function moveTip(e) { tt.style.left = (e.clientX + 10) + 'px'; tt.style.top  = (e.clientY + 10) + 'px'; }
            function hideTip() { tt.classList.add('hidden'); }

            function renderWeekly() {
              const gridRoot = document.getElementById('weeklyGrid');
              const daysRoot = document.getElementById('weeklyDays');
              if (!gridRoot || !daysRoot) return;

              gridRoot.innerHTML = '';
              daysRoot.innerHTML = '';

              HOURS.forEach((hour, i) => {
                const row = document.createElement('div');
                row.className = 'flex items-center justify-center';

                const cells = document.createElement('div');
                cells.className = `grid grid-cols-7 ${GAP} w-fit mx-auto`;

                (COLORS[i] || []).forEach((tw, j) => {
                  const c = document.createElement('div');
                  c.className = `${CELL} rounded ${tw} cursor-pointer transition-transform duration-200 hover:scale-105`;
                  const count = (COUNTS[i] && COUNTS[i][j]) ?? 0;
                  c.addEventListener('mouseenter', () => showTip(`${count} سفارش`));
                  c.addEventListener('mousemove', moveTip);
                  c.addEventListener('mouseleave', hideTip);
                  cells.appendChild(c);
                });

                const timeBox = document.createElement('div');
                timeBox.className = 'ms-1 sm:ms-2 w-14 sm:w-16 md:w-20 flex items-center justify-center font-bold text-[10px] sm:text-xs text-gray-700 tracking-tight';
                const [time, period=''] = hour.split(/\s+/, 2);
                timeBox.innerHTML = `<span class="leading-none">${time || hour}</span>${period ? `<span class="ms-1 leading-none">${period}</span>` : ''}`;

                row.appendChild(cells);
                row.appendChild(timeBox);
                gridRoot.appendChild(row);
              });

              const daysRow = document.createElement('div');
              daysRow.className = `mt-1 grid grid-cols-7 ${GAP} place-items-center`;
              DAYS.forEach(d => {
                const el = document.createElement('div');
                el.className = 'text-[10px] sm:text-xs font-medium w-8 sm:w-5 md:w-8 text-center';
                el.textContent = d;
                daysRow.appendChild(el);
              });

              const hourEmpty = document.createElement('div');
              hourEmpty.className = 'mt-1 ms-1 sm:ms-2 w-14 sm:w-16 md:w-20';

              const daysWrap = document.createElement('div');
              daysWrap.className = 'flex items-center justify-center';
              daysWrap.appendChild(daysRow);
              daysWrap.appendChild(hourEmpty);
              daysRoot.appendChild(daysWrap);
            }

            renderWeekly();
            window.addEventListener('resize', renderWeekly);
          </script>

          <!-- گراف سفارشات ماهانه (Pie) -->
          <div class="bg-white rounded-2xl  p-4 max-w-md w-full flex flex-col h-75shadow-xl border-[2px] border-gray-300 border-soild">
            <div class="flex justify-between mb-4">
              <h2 class="text-lg font-bold">گراف سفارشات</h2>
            
              <button class="flex items-center gap-1 bg-blue-600 hover:bg-blue-700 text-white text-xs rounded px-2 py-1 shadow-sm border border-blue-600">
                ماهوار
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
            </div>

            <canvas id="ordersPie" class="w-full h-full"></canvas>

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
                سفارشات در حال انجام
              </div>
            </div>
          </div>

          <script>
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
                labels: ['سفارشات تکمیلی', 'سفارشات در انتظار', 'سفارشات در حال انجام'],
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
        </div>

      </div>
    </div>
  </div>
</Main>
@endsection
