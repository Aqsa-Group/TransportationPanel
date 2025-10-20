@extends('layouts.app')
@section('title','داشبورد')
@section('content')

<main>
  <div dir="rtl" class="bg-gray-100 min-h-screen p-2 pb-0">
    <div class="max-w-7xl mx-auto w-full px-3 sm:px-4 md:px-6 lg:px-0">

      <style>
        .reveal{opacity:0;transform:translateY(12px) scale(.98);transition:opacity .5s ease,transform .5s ease}
        .reveal.show{opacity:1;transform:translateY(0) scale(1)}
        .reveal[data-delay="1"]{transition-delay:.05s}
        .reveal[data-delay="2"]{transition-delay:.1s}
        .reveal[data-delay="3"]{transition-delay:.15s}
        .reveal[data-delay="4"]{transition-delay:.2s}
        .card-hover{transition:transform .25s ease, box-shadow .25s ease}
        .card-hover:hover{transform:translateY(-2px)}
        .draw{stroke-dasharray:var(--len);stroke-dashoffset:var(--len);animation:dash 1.4s ease-out forwards}
        .draw.delay{animation-delay:.2s}
        #xTicks span{opacity:0;transform:translateY(4px);transition:.4s ease}
        #xTicks.ready span{opacity:1;transform:translateY(0)}
        @keyframes dash{to{stroke-dashoffset:0}}
        .legend-off{opacity:.45}
      </style>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-3">
        <div class="lg:col-span-2 space-y-4 sm:space-y-6">
          <!-- کارت‌ها -->
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
            <div class="bg-white w-full p-4 md:p-6 lg:p-8 rounded-[15px] border-[1px] border-gray-900 border-solid reveal card-hover" data-delay="1">
              <h2 class="text-xl md:text-2xl font-bold mt-1 md:mt-2 break-words value" data-target="872803.8">677672.9؋</h2>
              <p class="text-base md:text-lg text-gray-800">درآمد امروز</p>
              <p class="inline-flex text-[10px] md:text-xs font-medium text-green-500 bg-green-100 rounded py-0.5 px-2">12.5%+</p>
            </div>

            <div class="bg-white w-full p-4 md:p-6 lg:p-8 rounded-[15px] border-[1px] border-gray-900 border-solid reveal card-hover" data-delay="2">
              <h2 class="text-xl md:text-2xl font-bold mt-1 md:mt-2 break-words value" data-target="929839">929839؋</h2>
              <p class="text-base md:text-lg text-gray-800">کل سفارشات</p>
              <p class="inline-flex text-[10px] md:text-xs font-medium text-red-500 bg-red-100 rounded py-0.5 px-2">4.1%-</p>
            </div>

            <div class="bg-white w-full p-4 md:p-6 lg:p-8 rounded-[15px] border-[1px] border-gray-900 border-solid reveal card-hover" data-delay="3">
              <h2 class="text-xl md:text-2xl font-bold mt-1 md:mt-2 break-words value" data-target="9728888">9728888؋</h2>
              <p class="text-base md:text-lg text-gray-800">کل درآمد</p>
              <p class="inline-flex text-[10px] md:text-xs font-medium text-green-500 bg-green-100 rounded py-0.5 px-2">7.5%+</p>
            </div>

            <div class="bg-white w-full p-4 md:p-6 lg:p-8 rounded-[15px] border-[1px] border-gray-900 border-solid reveal card-hover" data-delay="4">
              <h2 class="text-xl md:text-2xl font-bold mt-1 md:mt-2 break-words value" data-target="1293823.12">1293823.12؋</h2>
              <p class="text-base md:text-lg text-gray-800">کل مفاد</p>
              <p class="inline-flex text-[10px] md:text-xs font-medium text-green-500 bg-green-100 rounded py-0.5 px-2">7.5%+</p>
            </div>

            <div class="stat-card bg-white w-full rounded-[15px] p-4 md:p-8 border-[1px] border-gray-900 border-solid reveal card-hover" data-delay="2">
              <div class="flex items-center gap-2">
                <p class="value text-lg md:text-xl font-bold" data-target="15">15</p>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.6602 10.7245L20.6802 14.8514C19.8402 18.4156 18.1802 19.857 15.0602 19.5609C14.5602 19.5214 14.0202 19.4325 13.4402 19.2943L11.7602 18.8994C7.59018 17.9219 6.30018 15.8881 7.28018 11.7611L8.26018 7.62434C8.46018 6.78513 8.70018 6.05453 9.00018 5.45227C10.1702 3.063 12.1602 2.42125 15.5002 3.20122L17.1702 3.58627C21.3602 4.55383 22.6402 6.59755 21.6602 10.7245Z" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.0599 19.5609C14.4399 19.9755 13.6599 20.3211 12.7099 20.6271L11.1299 21.1405C7.15985 22.4043 5.06985 21.3479 3.77985 17.4283L2.49985 13.5284C1.21985 9.60882 2.27985 7.53548 6.24985 6.27173L7.82985 5.75833C8.23985 5.62999 8.62985 5.52138 8.99985 5.45227C8.69985 6.05453 8.45985 6.78513 8.25985 7.62434L7.27985 11.7611C6.29985 15.8881 7.58985 17.9219 11.7599 18.8994L13.4399 19.2943C14.0199 19.4325 14.5599 19.5214 15.0599 19.5609Z" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12.6401 8.83875L17.4901 10.0531" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11.6602 12.6595L14.5602 13.3902" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <h3 class=" text-xs md:text-sm mb-2 text-right">شکایات</h3>
              <div class="inline-flex bg-red-200 rounded-lg overflow-hidden">
                <div class="flex flex-row-reverse -space-x-2">
                  <img src="/img/testi_01.png" alt="driver1" class="w-8 h-8 rounded-full " />
                  <img src="/img/testi_02.png" alt="driver2" class="w-8 h-8 rounded-full " />
                  <img src="/img/testi_03.png" alt="driver3" class="w-8 h-8 rounded-full " />
                </div>
                <svg class="w-5 h-5 text-[#FF0000] ms-2 self-end" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </div>
            </div>

            <div class="stat-card bg-white w-full rounded-[15px] p-4 md:p-8 border-[1px] border-gray-900 border-solid reveal card-hover" data-delay="3">
              <div class="flex items-center gap-2">
                <p class="value text-lg md:text-xl font-bold" data-target="200">200</p>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 7.16C17.94 7.15 17.87 7.15 17.81 7.16C16.43 7.11 15.33 5.98 15.33 4.58C15.33 3.15 16.48 2 17.91 2C19.34 2 20.49 3.16 20.49 4.58C20.48 5.98 19.38 7.11 18 7.16Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16.9699 14.44C18.3399 14.67 19.8499 14.43 20.9099 13.72C22.3199 12.78 22.3199 11.24 20.9099 10.3C19.8399 9.59004 18.3099 9.35003 16.9399 9.59003" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M5.96998 7.16C6.02998 7.15 6.09998 7.15 6.15998 7.16C7.53998 7.11 8.63998 5.98 8.63998 4.58C8.63998 3.15 7.48998 2 6.05998 2C4.62998 2 3.47998 3.16 3.47998 4.58C3.48998 5.98 4.58998 7.11 5.96998 7.16Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.99994 14.44C5.62994 14.67 4.11994 14.43 3.05994 13.72C1.64994 12.78 1.64994 11.24 3.05994 10.3C4.12994 9.59004 5.65994 9.35003 7.02994 9.59003" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 14.63C11.94 14.62 11.87 14.62 11.81 14.63C10.43 14.58 9.32996 13.45 9.32996 12.05C9.32996 10.62 10.48 9.46997 11.91 9.46997C13.34 9.46997 14.49 10.63 14.49 12.05C14.48 13.45 13.38 14.59 12 14.63Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.08997 17.78C7.67997 18.72 7.67997 20.26 9.08997 21.2C10.69 22.27 13.31 22.27 14.91 21.2C16.32 20.26 16.32 18.72 14.91 17.78C13.32 16.72 10.69 16.72 9.08997 17.78Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <h3 class=" text-xs md:text-sm mb-2">رانندگان فعال</h3>
              <div class="inline-flex bg-blue-200 rounded-lg overflow-hidden">
                <div class="flex flex-row-reverse -space-x-2">
                  <img src="/img/testi_01.png" alt="driver1" class="w-8 h-8 rounded-full " />
                  <img src="/img/testi_02.png" alt="driver2" class="w-8 h-8 rounded-full " />
                  <img src="/img/testi_03.png" alt="driver3" class="w-8 h-8 rounded-full " />
                </div>
                <svg class="w-5 h-5 text-[#0800FF] ms-2 self-end" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </div>
            </div>
          </div>

          <div class="w-full max-w-full bg-white rounded-[25px] p-3 sm:p-4 mb-2 border-[1px] border-gray-900 border-solid reveal" data-delay="1">
            <div class="flex items-center justify-between mb-3 sm:mb-5">
              <h2 class="font-semibold text-gray-800 text-sm sm:text-base">گراف مفاد و ضرر</h2>
              <div class="flex items-center gap-3 sm:gap-5 text-[10px] sm:text-xs text-gray-700">
                <button id="legendProfit" type="button" class="flex items-center gap-2">
                  <span class="inline-block w-3 h-3 rounded bg-sky-500"></span> مفاد
                </button>
                <button id="legendLoss" type="button" class="flex items-center gap-2">
                  <span class="inline-block w-3 h-3 rounded bg-gray-400"></span> ضرر
                </button>
              </div>
            </div>

            <div class="relative overflow-hidden">
              <svg id="chart" class="w-full h-52 sm:h-72 md:h-80"></svg>

              <!-- ظرف لیبل‌ها: پدینگ دو طرف + لایه داخلی برای وسط‌چین شدن -->
              <div id="xTicks"
                   class="absolute bottom-1 left-0 right-0 px-3 sm:px-8">
                <div id="xTicksInner"
                     class="w-full flex justify-center sm:justify-between gap-1 text-[8px] sm:text-[11px] tracking-tight text-gray-500"></div>
              </div>

              <div id="chartTip"
                   class="hidden absolute z-10 -translate-x-1/2 -translate-y-full bg-gray-800 text-white text-[10px] rounded px-2 py-1 shadow"></div>
            </div>
          </div>

                 <script>
            const labels = ["حمل","ثور","جوزا","سرطان","اسد","سنبله","میزان","عقرب","قوس","جدی","دلو","حوت"];
            const profit = [30,45,40,22,85,28,80,32,26,50,60,90];
            const loss   = [60,55,70,78,65,62,58,54,52,50,46,40];

            const svg   = document.getElementById('chart');
            const ticks = document.getElementById('xTicks');
            const ticksInner = document.getElementById('xTicksInner');
            const tip   = document.getElementById('chartTip');

            const padding = { top: 12, right: 28, bottom: 28, left: 36 };
            let showProfit = true, showLoss = true;

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

            // --- متغیرهای سراسری برای RTL و محدوده X
            let pathLoss, pathProfit, dProfit, dLoss, vline, ptsProfit, ptsLoss, stepX, xStart, xEnd, h, isRTL;

            function draw() {
              svg.innerHTML = '';
              ticks.classList.remove('ready');
              ticksInner.innerHTML = '';

              const { width, height } = svg.getBoundingClientRect();
              const wSafe = Math.max(300, width);
              const hSafe = Math.max(180, height);
              svg.setAttribute('viewBox', `0 0 ${wSafe} ${hSafe}`);

              const w = wSafe  - padding.left - padding.right;
                    h = hSafe - padding.top  - padding.bottom;

              const minY = 0, maxY = 100;

              // --- NEW: تشخیص راست‌به‌چپ از نزدیک‌ترین عنصر دارای dir
              const dirNode = document.querySelector('[dir]') || document.documentElement;
              isRTL = getComputedStyle(dirNode).direction === 'rtl';

              const extraX = wSafe < 420 ? 12 : 20;
              xStart = padding.left + extraX;
              xEnd   = padding.left + w - extraX;
              stepX  = (xEnd - xStart) / (labels.length - 1);

              // خطوط شبکه
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

              // اعداد محور Y
              const yFont = wSafe < 420 ? 9 : 11;
              for (let v = 10; v <= 90; v += 10) {
                const yPos = padding.top + (h - mapRange(v, minY, maxY, 0, h));
                const txt = document.createElementNS('http://www.w3.org/2000/svg','text');
                txt.setAttribute('x', padding.left - 6);
                txt.setAttribute('y', yPos + 4);
                txt.setAttribute('fill', '#6B7280');
                txt.setAttribute('font-size', yFont);
                txt.setAttribute('text-anchor', 'end');
                txt.textContent = v.toString();
                svg.appendChild(txt);
              }

              // --- NEW: نقاط مسیر — در RTL از راست به چپ
              const mapPoints = arr => arr.map((v, i) => ({
                x: isRTL ? (xEnd - stepX * i) : (xStart + stepX * i),
                y: padding.top + (h - mapRange(v, minY, maxY, 0, h))
              }));
              ptsProfit = mapPoints(profit);
              ptsLoss   = mapPoints(loss);

              // مسیرها
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

              pathProfit.style.visibility = showProfit ? 'visible' : 'hidden';
              pathLoss.style.visibility   = showLoss   ? 'visible' : 'hidden';

              animateStroke(pathLoss, 0);
              animateStroke(pathProfit, 200);

              // لیبل ماه‌ها
              labels.forEach(lb => {
                const span = document.createElement('span');
                span.className = 'min-w-[14px] text-center flex-none leading-tight';
                span.textContent = lb;
                ticksInner.appendChild(span);
              });
              requestAnimationFrame(() => ticks.classList.add('ready'));

              // خط راهنما و نقاط
              vline = document.createElementNS('http://www.w3.org/2000/svg','line');
              vline.setAttribute('y1', padding.top);
              vline.setAttribute('y2', padding.top + h);
              vline.setAttribute('stroke', 'rgba(17,24,39,.25)');
              vline.setAttribute('stroke-width', '1');
              vline.setAttribute('visibility', 'hidden');
              svg.appendChild(vline);

              const dot = (color) => {
                const c = document.createElementNS('http://www.w3.org/2000/svg','circle');
                c.setAttribute('r', 3.5);
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

              // --- NEW: هاور دقیق برای RTL/LTR
              svg.addEventListener('mousemove', (e) => {
                const bbox = svg.getBoundingClientRect();
                const mx = e.clientX - bbox.left;

                // فاصله نسبی از ابتدا: در RTL از xEnd به چپ
                const rel = (isRTL ? (xEnd - mx) : (mx - xStart)) / stepX;
                const ix = Math.round(clamp(rel, 0, labels.length - 1));

                const p1 = ptsProfit[ix];
                const p2 = ptsLoss[ix];

                const xp = p1.x; // خط راهنما دقیقاً روی نقطه مفاد (مختصات هر دو سری هم‌تراز است)
                vline.setAttribute('x1', xp);
                vline.setAttribute('x2', xp);
                vline.setAttribute('visibility', 'visible');

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
              document.getElementById('legendProfit').classList.toggle('legend-off', !showProfit);
              document.getElementById('legendLoss').classList.toggle('legend-off',   !showLoss);
            }

            document.getElementById('legendProfit').addEventListener('click', () => {
              showProfit = !showProfit;
              refreshLegendStyles();
              if (pathProfit) pathProfit.style.visibility = showProfit ? 'visible' : 'hidden';
              if (dProfit)    dProfit.setAttribute('visibility', showProfit ? 'visible' : 'hidden');
              tip.classList.add('hidden');
            });

            document.getElementById('legendLoss').addEventListener('click', () => {
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

        <!-- راست: گراف هفته‌ای + گراف ماهانه -->
        <div class="flex flex-col space-y-3">
          <!-- کارت گراف هفته -->
          <div id="weeklyCard"
               class="relative bg-white w-full max-w-full rounded-[15px] p-3 sm:p-4 flex flex-col overflow-hidden border-[1px] border-gray-900 border-solid reveal"
               data-delay="2">
            <div class="flex items-center justify-between mb-3 sm:mb-4">
              <h2 class="text-sm sm:text-lg font-bold">سفارشات</h2>

              <button class="flex items-center gap-1 bg-[#0800FF] hover:bg-blue-700 text-white text-[10px] sm:text-xs rounded px-2 py-1 shadow-sm border border-blue-600">
                هفته وار
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
            </div>

            <div id="weeklyGrid" class="space-y-1 sm:space-y-1.5"></div>
            <div id="weeklyDays" class="mt-0"></div>

            <div id="tt"
                 class="absolute z-20 hidden pointer-events-none px-2 py-1 rounded text-[10px] sm:text-xs text-white bg-gray-800 shadow"></div>
          </div>

          <script>
            const HOURS = ['7:00 ق.ظ','9:00 ق.ظ','11:00 ق.ظ','1:00 ب.ظ','3:00 ب.ظ','5:00 ب.ظ','7:00 ب.ظ'];
            const DAYS  = ['ش','ی','د','س','چ','پ','ج'];
            const COLORS = [
              ['bg-[#0800FF]','bg-blue-500','bg-blue-200','bg-blue-200','bg-[#0800FF]','bg-[#0800FF]','bg-[#0800FF]'],
              ['bg-blue-200','bg-blue-200','bg-blue-200','bg-blue-200','bg-blue-400','bg-blue-400','bg-blue-400'],
              ['bg-blue-500','bg-blue-500','bg-blue-500','bg-blue-500','bg-[#0800FF]','bg-blue-200','bg-blue-200'],
              ['bg-[#0800FF]','bg-blue-200','bg-[#0800FF]','bg-[#0800FF]','bg-blue-500','bg-blue-200','bg-[#0800FF]'],
              ['bg-[#0800FF]','bg-blue-500','bg-blue-200','bg-blue-200','bg-blue-400','bg-blue-500','bg-[#0800FF]'],
              ['bg-blue-500','bg-blue-500','bg-blue-400','bg-[#0800FF]','bg-blue-200','bg-blue-400','bg-[#0800FF]'],
              ['bg-blue-200','bg-blue-500','bg-blue-400','bg-blue-200','bg-blue-400','bg-blue-500','bg-[#0800FF]'],
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

            const CELL = 'w-6 h-6 sm:w-8 sm:h-8 md:w-6 md:h-6';
            const GAP  = 'gap-2 sm:gap-2';

            const tt = document.getElementById('tt');
            const weeklyCard = document.getElementById('weeklyCard');

            function showTip(text) {
              tt.textContent = text;
              tt.classList.remove('hidden');
              requestAnimationFrame(()=>{});
            }
            function hideTip() { tt.classList.add('hidden'); }

            function positionTip(cellEl) {
              if (!weeklyCard) return;
              const cell = cellEl.getBoundingClientRect();
              const cont = weeklyCard.getBoundingClientRect();

              const tipW = tt.offsetWidth  || 80;
              const tipH = tt.offsetHeight || 24;

              const pad  = 6;
              const edge = 4;

              let left = (cell.left + cell.width / 2) - cont.left - (tipW / 2);
              let top  = (cell.top) - cont.top - tipH - pad;

              if (top < edge) {
                top = (cell.bottom - cont.top) + pad;
              }

              left = Math.max(edge, Math.min(cont.width  - tipW - edge, left));
              top  = Math.max(edge, Math.min(cont.height - tipH - edge, top));

              tt.style.left = left + 'px';
              tt.style.top  = top  + 'px';
            }

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

                  c.addEventListener('mouseenter', () => {
                    showTip(`${count} سفارش`);
                    positionTip(c);
                  });
                  c.addEventListener('mousemove', () => positionTip(c));
                  c.addEventListener('mouseleave', hideTip);

                  cells.appendChild(c);
                });

                const timeBox = document.createElement('div');
                timeBox.className = 'ms-1 sm:ms-2 w-10 sm:w-16 md:w-20 flex items-center justify-center font-bold text-[10px] sm:text-xs text-gray-700 tracking-tight';
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
                el.className = 'text-[10px] sm:text-xs font-medium w-7 sm:w-5 md:w-8 text-center';
                el.textContent = d;
                daysRow.appendChild(el);
              });

              const hourEmpty = document.createElement('div');
              hourEmpty.className = 'mt-1 ms-1 sm:ms-2 w-10 sm:w-16 md:w-20';

              const daysWrap = document.createElement('div');
              daysWrap.className = 'flex items-center justify-center';
              daysWrap.appendChild(daysRow);
              daysWrap.appendChild(hourEmpty);
              daysRoot.appendChild(daysWrap);

              const cellsAll = gridRoot.querySelectorAll('.grid > div');
              cellsAll.forEach((c,i)=>{
                c.style.opacity = 0;
                c.style.transform = 'scale(.96)';
                c.style.transition = 'opacity .35s ease, transform .35s ease';
                setTimeout(()=>{
                  c.style.opacity = 1;
                  c.style.transform = 'scale(1)';
                }, 25*i);
              });
            }

            renderWeekly();
            window.addEventListener('resize', renderWeekly);
          </script>

          <!-- گراف سفارشات ماهانه (Pie) -->
          <div class="bg-white w-full max-w-full md:max-w-full rounded-[15px] p-3 sm:p-4 flex flex-col border-[1px] border-gray-900 border-solid reveal" data-delay="3">
            <div class="flex justify-between mb-3 sm:mb-4">
              <h2 class="text-base sm:text-lg font-bold">گراف سفارشات</h2>

              <button class="flex items-center gap-1 bg-[#0800FF] hover:bg-blue-700 text-white text-[10px] sm:text-xs rounded px-2 py-1 shadow-sm border border-blue-600">
                ماهوار
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
            </div>

            <div class="w-full" style="min-height: 240px;">
              <canvas id="ordersPie" class="w-full" style="max-height: 320px;"></canvas>
            </div>

            <div class="flex flex-col items-start w-full mt-3 space-y-2">
              <div class="flex gap-1 text-xs text-gray-700">
                <span class="w-3 h-3 rounded-full" style="background-color:#0800FF;"></span>
                سفارشات تکمیلی
              </div>
              <div class="flex gap-1 text-xs text-gray-700">
                <span class="w-3 h-3 rounded-full" style="background-color:#FF00E1;"></span>
                سفارشات در انتظار
              </div>
              <div class="flex gap-1 text-xs text-gray-700">
                <span class="w-3 h-3 rounded-full" style="background-color:#FF0004;"></span>
                سفارشات در حال انجام
              </div>
            </div>
          </div>

          {{-- Chart.js CDN --}}
          <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>

          {{-- پلاگین متن وسط و دونات با انیمیشن --}}
          <script>
            Chart.register({
              id: 'centerText',
              beforeDraw: function(chart) {
                if (chart.config.options && chart.config.options.plugins && chart.config.options.plugins.centerText) {
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
                  backgroundColor: ['#0800FF', '#FF00E1', '#FF0004']
                }]
              },
              options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '55%',
                animation: {
                  duration: 900,
                  easing: 'easeOutQuart',
                  animateRotate: true,
                  animateScale: true
                },
                plugins: {
                  legend: { display: false },
                  centerText: {
                    text: 'سنبله 1404',
                    subText: '677672.9؋',
                    color: '#111827',
                    fontSize: 18,
                    subFontSize: 16
                  }
                }
              }
            });
          </script>
        </div>
      </div>
    </div>
  </div>
</main>

<script>
  const ioReveal = new IntersectionObserver((entries)=>{
    entries.forEach(e=>{
      if(e.isIntersecting){ e.target.classList.add('show'); ioReveal.unobserve(e.target); }
    });
  }, { threshold:.15 });
  document.querySelectorAll('.reveal').forEach(el=>ioReveal.observe(el));

function countUp(el, to){
  const startTxt = el.textContent.trim();
  const hasDecimal = /[\d]+\.[\d]+/.test(startTxt) || (String(to).includes('.'));

  //  واحد پول (مثل “؋”)
  const currency = startTxt.replace(/[\d.,]/g,'').trim();

  const start = 0;
  const dur = 900;
  const t0 = performance.now();
  function step(t){
    const p = Math.min(1, (t-t0)/dur);
    const eased = 1 - Math.pow(1-p, 3);
    const val = start + (to-start)*eased;

    el.textContent = hasDecimal ? val.toFixed(1) : Math.round(val);

    if(currency) el.textContent += currency;

    if(p<1) requestAnimationFrame(step);
    else el.textContent = (hasDecimal ? Number(to).toFixed(1) : String(Math.round(Number(to)))) + (currency || '');
  }
  requestAnimationFrame(step);
}

  document.querySelectorAll('.stat-card .value, .grid .value').forEach(el=>{
    const raw = el.getAttribute('data-target') || el.textContent.replace(/[^\d.]/g,'');
    const target = Number(raw || 0);
    const obs = new IntersectionObserver((ents)=>{
      ents.forEach(en=>{
        if(en.isIntersecting){ countUp(el, target); obs.disconnect(); }
      });
    }, {threshold:.6});
    obs.observe(el);
  });
</script>
@endsection
