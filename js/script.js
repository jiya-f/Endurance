$(document).ready(function(){
    $('.service img:last-child').hide();
    $('.service').mouseover(function(){
        $(this).children('img.img-1').css('display','none');
        $(this).children('img.img-2').addClass('active');
    });
    $('.service').mouseleave(function(){
        $(this).children('img.img-1').css('display','block');
        $(this).children('img.img-2').removeClass('active');
    });

    // Example 1 -------------------------------
    var path = window.location.href; 
     $('.nav-links li a').each(function() {
      if (this.href === path) {
       $(this).addClass('active-link');
      }
     });

    // Example 2 -------------------------------
    //  let switchNavMenuItem = (menuItems) => {

    //     var current = location.pathname
    
    //     $.each(menuItems, (index, item) => {
    
    //         $(item).removeClass('active-link');
    
    //         if ((current.includes($(item).attr('href')) && $(item).attr('href') !== "/") || ($(item).attr('href') === "/" && current === "/")){
    //             $(item).addClass('active-link')
    //         }
    //     })
    // };
    // switchNavMenuItem($('.nav-links li a'));

    document.querySelectorAll('.feedback li').forEach(entry => entry.addEventListener('click', e => {
        if(!entry.classList.contains('activee')) {
            document.querySelector('.feedback li.activee').classList.remove('activee');
            entry.classList.add('activee');
        }
        e.preventDefault();
    }));
});
