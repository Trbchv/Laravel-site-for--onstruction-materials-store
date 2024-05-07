$(function() {
    // Owl Carousel
    var owl = $(".owl-carousel");
    owl.owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 15000,
        smartSpeed: 1000,
    });
});
$(document).ready(function(){

    $(".fa-search").click(function(){
        $(".wrap, .input").toggleClass("active");
        $("input[type='text']").focus();
    });

});

 $(function (){
     $('#more').on('click',function (){
         var p = $(this).data('page')*1;
         var a = $(this);
        $.ajax ({
            url:"/paginate",
             method:"get",
             data:{page:p},
             success: function (r){
                a.data('page',p+1);
                 $('.cat_').append(r);
             }
        })
         return false;
    })
 })
// функция возвращает cookie с именем name, если есть, если нет, то undefined
function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}
let cookiecook = getCookie("cookiecook"),
    cookiewin = document.getElementsByClassName('cookie_notice')[0];
// проверяем, есть ли у нас cookie, с которой мы не показываем окно и если нет, запускаем показ
if (cookiecook != "no") {
    // показываем
    cookiewin.style.display="block";
    // закрываем по клику
    document.getElementById("cookie_close").addEventListener("click", function(){
        cookiewin.style.display="none";
        // записываем cookie на 1 день, с которой мы не показываем окно
        let date = new Date;
        date.setDate(date.getDate() + 1);
        document.cookie = "cookiecook=no; path=/; expires=" + date.toUTCString();
    });
}

