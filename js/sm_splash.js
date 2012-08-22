var fns  = {};


$('document').ready(function(){
    $('#splash').fadeIn('slow').delay(1000).fadeOut('slow', function() {
        fns.goto_app();
    });
});

//help functions
fns.goto_app = function(){
    var url = "sm_app_home.html";
    $(location).attr('href',url);
};