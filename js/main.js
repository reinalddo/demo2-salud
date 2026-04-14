// demomedicina2 - main JS (mobile-first)
document.addEventListener('DOMContentLoaded', function(){
    // Navbar scroll behavior
    var navbar = document.getElementById('mainNavbar');
    function onScroll(){
        if(window.scrollY>50) navbar.classList.add('scrolled'); else navbar.classList.remove('scrolled');
    }
    onScroll();
    window.addEventListener('scroll', onScroll);

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
});
