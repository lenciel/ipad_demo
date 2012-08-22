<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Ipad simulator</title>
    <style type="text/css">
    #splash {
        background: url("img/wharf_demo/splash.jpg") no-repeat scroll 0 0 transparent;
        height: 618px;
        overflow: hidden;
        padding: 12px;
        position: relative;
        width: 860px;
    }
    #please_hold{
        position:absolute;
        background:url(img/ajax-loader.gif) 340px 410px no-repeat,url(img/hold.jpg) 0 0 no-repeat;
        z-index:100;
    }
    </style>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="application/x-javascript">
    var fns  = {};

    $('document').ready(function(){
        $('#splash').fadeIn('slow').delay(1000).fadeOut('slow', function() {
            fns.goto_app();
        });
    });

    //help functions
    fns.goto_app = function(){
        var url = "wharf_app_home.html";
        $(location).attr('href',url);
    };
    </script>
</head>
<body>
<div id="splash"></div>
<div id="please_hold"></div>
</body>
</html>