window.addEventListener('load', function () { setTimeout(function () { var l = document.getElementById('ldr'); if (l) l.classList.add('out'); }, 700); });
window.addEventListener('scroll', function () {
    var n = document.getElementById('nav'), bt = document.getElementById('btt'), sb = document.getElementById('sb');
    if (n) n.classList.toggle('sc', window.scrollY > 50);
    if (bt) bt.classList.toggle('sh', window.scrollY > 400);
    if (sb) { var tot = document.documentElement.scrollHeight - window.innerHeight; sb.style.width = (window.scrollY / tot * 100) + '%'; }
    document.querySelectorAll('[data-aos]').forEach(function (el) { if (el.getBoundingClientRect().top < window.innerHeight - 60) el.classList.add('vis'); });
});
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('[data-aos]').forEach(function (el) { if (el.getBoundingClientRect().top < window.innerHeight) el.classList.add('vis'); });
    var bt = document.getElementById('btt'); if (bt) bt.onclick = function () { window.scrollTo({ top: 0, behavior: 'smooth' }); };
    var ham = document.getElementById('ham'), mnav = document.getElementById('mnav');
    if (ham && mnav) { ham.onclick = function () { mnav.classList.toggle('op'); ham.classList.toggle('op'); var s = ham.querySelectorAll('span'); if (ham.classList.contains('op')) { s[0].style.transform = 'translateY(7px) rotate(45deg)'; s[1].style.opacity = '0'; s[2].style.transform = 'translateY(-7px) rotate(-45deg)'; } else { s.forEach(function (x) { x.style.transform = ''; x.style.opacity = ''; }); } }; }
    var sl = document.getElementById('hsl');
    if (sl) {
        var cur = 0, tot = sl.querySelectorAll('.hs').length, dots = document.querySelectorAll('.dot'), au;
        function go(n) { cur = (n + tot) % tot; sl.style.transform = 'translateX(-' + (cur * 100) + '%)'; dots.forEach(function (d, i) { d.classList.toggle('on', i === cur); }); }
        var pv = document.getElementById('prev'), nx = document.getElementById('nxt');
        if (pv) pv.onclick = function () { go(cur - 1); reset(); }; if (nx) nx.onclick = function () { go(cur + 1); reset(); };
        dots.forEach(function (d, i) { d.onclick = function () { go(i); reset(); }; });
        function reset() { clearInterval(au); au = setInterval(function () { go(cur + 1); }, 5000); }
        go(0); au = setInterval(function () { go(cur + 1); }, 5000);
    }
    var end = new Date(); end.setDate(end.getDate() + 7); end.setHours(23, 59, 59);
    function tick() {
        var d = end - new Date(); if (d <= 0) return; function pad(n) { return String(Math.floor(n)).padStart(2, '0'); }
        var D = document.getElementById('cd'), H = document.getElementById('ch'), M = document.getElementById('cm'), S = document.getElementById('cs');
        if (D) D.textContent = pad(d / 864e5); if (H) H.textContent = pad(d % 864e5 / 36e5); if (M) M.textContent = pad(d % 36e5 / 6e4); if (S) S.textContent = pad(d % 6e4 / 1e3);
    }
    tick(); setInterval(tick, 1000);
    var obs = new IntersectionObserver(function (en) {
        en.forEach(function (e) {
            if (!e.isIntersecting) return;
            var el = e.target, t = parseInt(el.dataset.target), sf = el.dataset.suffix || '', dur = 2000, st = performance.now();
            function up(now) { var pr = Math.min((now - st) / dur, 1), ea = 1 - Math.pow(1 - pr, 3); el.textContent = Math.floor(ea * t).toLocaleString() + sf; if (pr < 1) requestAnimationFrame(up); }
            requestAnimationFrame(up); obs.unobserve(el);
        });
    }, { threshold: 0.5 });
    document.querySelectorAll('[data-target]').forEach(function (c) { obs.observe(c); });
    var bs = document.querySelectorAll('.fb'); bs.forEach(function (b) { b.onclick = function () { bs.forEach(function (x) { x.classList.remove('on'); }); b.classList.add('on'); var f = b.dataset.f; document.querySelectorAll('.pc').forEach(function (c) { c.style.display = (f === 'all' || (c.dataset.brand || '').toLowerCase().indexOf(f.toLowerCase()) > -1) ? '' : 'none'; }); }; });
    var si = document.getElementById('si'); if (si) si.oninput = function () { var v = this.value.toLowerCase(); document.querySelectorAll('.pc[data-name]').forEach(function (c) { c.style.display = (!v || (c.dataset.name || '').indexOf(v) > -1 || (c.dataset.brand || '').indexOf(v) > -1) ? '' : 'none'; }); };
    var cf = document.getElementById('cf'); if (cf) cf.onsubmit = function (e) { e.preventDefault(); var b = cf.querySelector('[type=submit]'); b.disabled = true; b.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...'; setTimeout(function () { b.innerHTML = '<i class="fas fa-check"></i> Sent!'; b.style.background = 'var(--su)'; cf.reset(); setTimeout(function () { b.disabled = false; b.innerHTML = 'Send Message <i class="fas fa-paper-plane"></i>'; b.style.background = ''; }, 3000); }, 1500); };
});