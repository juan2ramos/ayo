$(function () {

    $('.menu-mobile').on('click', function () {
        $('.nav').toggleClass('show');
    });
    /* Form */
    $('#form').on("submit", function (e) {
        e.preventDefault();
        var fields = $(this).serializeArray();

        $.post("email.php", fields, responseForm, 'json');
        $('#button').prop("disabled", true);


    });
    function responseForm(r) {

        if (r.success == 0) {

            alert("Revisa los campos");
            $('#button').prop("disabled", false);
        }
        else {
            $('.content-form').text('');
            $('#form').append("<span class='message'>" + r.message + "<span>");
        }
    }

});
var owl = $('#banner');
owl.owlCarousel({

    navigation: true, // Show next and prev buttons
    slideSpeed: 300,
    paginationSpeed: 400,
    singleItem: true,

    // "singleItem:true" is a shortcut for:
    items: 1,
   // autoplay:true,
    loop: true,
    // itemsDesktop : false,
    // itemsDesktopSmall : false,
    // itemsTablet: false,
    // itemsMobile : false

});
owl.on(
    'translated.owl.carousel ', function (e) {
        $('.images-content').removeClass('show')
        $('.text-content').removeClass('show')
        if(e.page.index == 1){

            $('.images-content').addClass('show')
            $('.text-content').addClass('show')


        }



    });
