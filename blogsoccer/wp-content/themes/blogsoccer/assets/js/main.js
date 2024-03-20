jQuery(document).ready(function ($) {
    //slider post
    $('.owl-carousel.slide-review').owlCarousel({
        loop: true,
        margin: 30,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 1,
                nav: true
            },
            1000: {
                items: 4,
                nav: true
            }
        }
    });
    // SETTING POPUP
    $('.setting_menu .icon_btn').click(function(){
        $('.setting_content').toggleClass('active');
    });
    // Popup Login
    $('.btn_login').click(function(){
        $('.formLH, .login_modal').addClass('active');
        $('.search_modal, .setting_content').removeClass('active');

    });
    $('.btn_search').click(function(){
        $('.formLH, .search_modal').addClass('active');
        $('.login_modal, .setting_content').removeClass('active');

    });
    $('.btn_close').click(function(){
        $('.formLH').removeClass('active');
    });
});
jQuery(document).mouseup(function(e){
    var container = jQuery(".wrapper-form-dk");
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        jQuery('.formLH').removeClass('active');
    }
});

// JavaScript cho switcher button
document.addEventListener('DOMContentLoaded', function() {
    var darkModeToggle = document.getElementById('dark-mode-toggle');
    var body = document.body;

    darkModeToggle.addEventListener('change', function() {
        body.classList.toggle('dark-mode');
        var darkModeEnabled = body.classList.contains('dark-mode');
        localStorage.setItem('darkModeEnabled', darkModeEnabled);
    });

    // Load dark mode preference from local storage
    var darkModeEnabled = localStorage.getItem('darkModeEnabled');
    if (darkModeEnabled === 'true') {
        body.classList.add('dark-mode');
        darkModeToggle.checked = true;
    }
});
