// demomedicina2 - main JS (mobile-first)
document.addEventListener('DOMContentLoaded', function(){
    // Navbar scroll behavior (robust across browsers)
    var navbar = document.getElementById('mainNavbar');
    function onScroll(){
        try{
            var st = window.scrollY || document.documentElement.scrollTop || document.body.scrollTop || 0;
            if(navbar){
                // Use a fixed, small threshold so the header changes color early
                var threshold = 50;
                if(st > threshold) {
                    if(!navbar.classList.contains('scrolled')) console.debug('[main.js] adding scrolled class, st=', st, 'threshold=', threshold);
                    navbar.classList.add('scrolled');
                } else {
                    if(navbar.classList.contains('scrolled')) console.debug('[main.js] removing scrolled class, st=', st, 'threshold=', threshold);
                    navbar.classList.remove('scrolled');
                }
            }
        }catch(e){
            // swallow occasional read errors
        }
    }
    onScroll();
    window.addEventListener('scroll', onScroll);
    // Also re-evaluate on load in case images change layout
    window.addEventListener('load', onScroll);

    // Smooth scroll for internal anchors
    document.querySelectorAll('a[href^="#"]').forEach(function(a){
        a.addEventListener('click', function(e){
            var href = this.getAttribute('href');
            if(href.length>1){
                var target = document.querySelector(href);
                if(target){
                    e.preventDefault();
                    var offset = 70; // account for fixed navbar
                    var top = target.getBoundingClientRect().top + window.pageYOffset - offset;
                    window.scrollTo({top:top,behavior:'smooth'});
                }
            }
        });
    });

    // Mobile menu behaviour: force navbar background when menu opens,
    // and auto-close the collapsed menu when the page is scrolled.
    var navCollapse = document.getElementById('mainNav');
    if (navCollapse) {
        // Debugging: log collapse element found
        console.debug('[main.js] navCollapse found');
        navCollapse.addEventListener('show.bs.collapse', function () {
            console.debug('[main.js] show.bs.collapse');
            if (navbar) navbar.classList.add('scrolled');
        });
        navCollapse.addEventListener('hide.bs.collapse', function () {
            if (navbar) {
                var st = window.scrollY || document.documentElement.scrollTop || document.body.scrollTop || 0;
                console.debug('[main.js] hide.bs.collapse, scrollY=', st);
                if (st < 50) navbar.classList.remove('scrolled');
            }
        });

        // Close collapse on scroll to avoid overlay staying open while scrolling
        window.addEventListener('scroll', function () {
            try{
                if (navCollapse.classList.contains('show')) {
                    if (typeof bootstrap !== 'undefined' && bootstrap.Collapse) {
                        var inst = bootstrap.Collapse.getInstance(navCollapse);
                        if (!inst) inst = new bootstrap.Collapse(navCollapse, { toggle: false });
                        inst.hide();
                    }
                }
            }catch(e){ }
        });
    }

    // IntersectionObserver fallback: observe the nav spacer so header toggles as soon as we scroll
    try{
        var heroTarget = document.querySelector('.nav-spacer') || document.querySelector('.hero') || document.querySelector('.page-banner') || document.querySelector('main');
        if (heroTarget && 'IntersectionObserver' in window) {
            // Observe when the spacer leaves the viewport (threshold 0)
            var io = new IntersectionObserver(function(entries){
                entries.forEach(function(entry){
                    if (!navbar) return;
                    // If spacer is intersecting (visible) => we are at top, remove scrolled
                    if (entry.isIntersecting) {
                        if (navbar.classList.contains('scrolled')) console.log('[main.js] IO -> remove scrolled');
                        navbar.classList.remove('scrolled');
                    } else {
                        if (!navbar.classList.contains('scrolled')) console.log('[main.js] IO -> add scrolled');
                        navbar.classList.add('scrolled');
                    }
                });
            }, { root: null, threshold: 0 });
            io.observe(heroTarget);
            console.log('[main.js] IntersectionObserver observing', heroTarget.tagName);
        } else {
            console.log('[main.js] No nav-spacer/hero/page-banner found or IntersectionObserver unsupported');
        }
    }catch(e){ console.warn('[main.js] IO init error', e); }

    // On load, try to refresh AOS; if elements remain invisible, make them visible
    window.addEventListener('load', function(){
        setTimeout(function(){
            if (typeof AOS === 'undefined'){
                console.warn('[main.js] AOS not found — applying fallback to show elements with data-aos');
                document.querySelectorAll('[data-aos]').forEach(function(el){
                    el.style.opacity = 1;
                    el.style.transform = 'none';
                    el.style.visibility = 'visible';
                });
                return;
            }

            try{
                if (typeof AOS.refresh === 'function') AOS.refresh();
            }catch(e){ console.warn('[main.js] AOS.refresh error', e); }

            // If any element still computed as fully transparent, make it visible to avoid blank regions
            document.querySelectorAll('[data-aos]').forEach(function(el){
                try{
                    var comp = window.getComputedStyle(el);
                    if (comp && (comp.opacity === '0' || comp.visibility === 'hidden')){
                        el.style.opacity = 1;
                        el.style.transform = 'none';
                        el.style.visibility = 'visible';
                        // remove attribute to avoid being re-hidden by AOS
                        el.removeAttribute('data-aos');
                    }
                }catch(e){ }
            });
        }, 120);
    });
});
