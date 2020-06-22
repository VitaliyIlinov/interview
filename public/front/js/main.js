$(document).ready(function () {

    options = {
        // catalog_anim_class: 'bounceInDown active animated',
        catalog_anim_class: 'active',
        current_path: window.location.pathname
    };

    $("#catalog>li a").click(function (e) {
        var target = $(this).attr('href');
        if (target[0] === '#') {
            e.preventDefault();
            $(this).closest('li').toggleClass(options.catalog_anim_class);
            $(target).slideToggle("fast");
        }
    });
    setActiveCategory(options.current_path, options.catalog_anim_class);

});

function setActiveCategory(path, className) {
    var current = $('#catalog a[href="' + path + '"]');
    current.closest('li').addClass(className)
        .closest('.submenu').css('display','block')
        .parent().addClass(className);
}
