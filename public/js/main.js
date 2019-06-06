$(document).ready(function () {

    options = {
        // catalog_anim_class: 'bounceInDown active animated',
        catalog_anim_class: 'slideInDown active animated',
        current_path: window.location.pathname
    };

    $("#catalog>li a").click(function (e) {
        var href =$(this).attr('href');
        if(href[0]==='#'){
            e.preventDefault();
            $($(this).attr('href')).toggleClass(options.catalog_anim_class);
        }
    });


    setActiveCategory(options.current_path, options.catalog_anim_class);

});

function setActiveCategory(path, className) {
    var current = $('#catalog a[href="' + path + '"]');
    current.addClass('active')
        .closest('ul').addClass(className)
        .prev('a').addClass('active')
        .closest('ul').addClass(className)
        .prev('a').addClass('active');
}
