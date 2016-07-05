var main = function() {
    $('#nav-container li a').mouseover(function() {
        $(this).fadeOut(100);
        $(this).fadeIn(100);
    });
    $('#show-projects-menu)').click(function(){
        $('#projects-menu').show();
    });

};

$(document).ready(main);