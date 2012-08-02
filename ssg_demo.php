<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Ipad simulator</title>
    <meta name="description" content="This is a jquery iPad simulator, this is only an experiment o what can be done with javascript in ast browsers">
    <meta name="keywords" content="Ipad, ipad simulator, apple ipad, ipad javascript simulator">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="style/grid.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="style/main.css" type="text/css" media="screen"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script>!window.jQuery && document.write(unescape('%3Cscript src="js/jquery-1.4.4.min.js"%3E%3C/script%3E'))</script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <link rel="icon" type="image/png" href="img/iui-favicon.png">
    <link rel="apple-touch-icon" href="img/iui-logo-touch-icon.png" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" href="style/iui.css" type="text/css" />
    <link rel="stylesheet" title="Default" href="style/t/default/default-theme.css"  type="text/css"/>
    <style type="text/css">
        .panel p.normalText {
                text-align: left;
                text-indent:10px;
                padding: 0 10px 0 10px;

        }
        .panel p.code {
                text-align: left;
                padding: 0;
                margin: 0;
                font-size: 16px;
        }

        .panel > h2 {
            margin: 3px 0 10px 10px;
        }

        div.spinner {
           visibility: hidden;
           background: black url(style/t/default/loading.gif) no-repeat center center;
           position: absolute;
           top: 0px;
           left: 0px;
           height: 100%;
           width: 100%;
           opacity: 0.5;
        }

        form.progress div.spinner {
            visibility: visible;  // need better styling here, placeholder
        }

    </style>
    <script type="application/x-javascript" src="js/iui.js"></script>
    <script type="application/x-javascript" src="js/ssg_demo.js"></script>
    <script type="application/x-javascript">
    // This demo is designed tor run from either
    //   1) A file URL
    // or
    //   2) A URL on a web server
    //
    // In the file URL case it will be able to test connectivity to iui-js.appspot.com
    // If it is on a web server it will test connectivity to the same server (it won't be able to access
    //  iui-js.appspot.com because of cross-domain restrictions on Ajax
    //
    // The DOMContentLoaded event function sets things up so the demo will work in either case.
    (function() {

    var noCacheQuery = "?nocache=" + new Date().getTime();  // used to prevent caching
    var testImage = "style/t/default/pinstripes.png" + noCacheQuery  // Use small image from iUI
    var testURL;
    var ajaxURL;
    var formURL;
    var hostName = window.location.host;
    if (hostName != "")
    {   // Reference resources on our same server
        testURL = '/ipad/' + testImage;
        ajaxURL = '/samples/music/stats.gtpl';
        formURL = '/test/form-echo.gtpl';
    }
    else
    {
        // assume we're running from a file URL, so no cross-domain worries
        hostName = "iui-js.appspot.com";
        testURL = "http://" + hostName + '/iui/' + testImage;
        ajaxURL = "http://" + hostName + '/samples/music/stats.gtpl';
        formURL = "http://" + hostName + '/test/form-echo.gtpl';
    }

    iui.reach.addURL(testURL, hostName);

    })();
    </script>
</head>
<body>
   <div class="toolbar">
        <h1 id="pageTitle"></h1>
        <a id="backButton" class="button" href="#"></a>
    </div>

    <ul id="home" title="Demo" selected="true">
        <li><a href="#about">About This Demo</a></li>
        <li><a href="#login">Login SSG Server</a></li>
    </ul>

    <div id="about" class="panel" title="About">
      <h2>About This Demo</h2>
        <fieldset>
        <p class="normalText"><b>ssg demo</b> is a prototype using HTML5/Javascript/CSS3 to play with the SSG server. It is in the early development stages.
        It is intended to perform "reachability" testing to understand the API exposed by SSG server, and meanwhile to learn the hybrid webapps developement
        processs like how to wrap the UIWebView Cocoa Class and cache stuff using the HTML5 webapp cache -- which might be useful in the unified client stack.</p>
        <br/>
        <p class="normalText">This demo has been improved so that it provides better handling of network failures during Ajax operations.</p>
    </div>

    <form id="login" title="POST" class="panel" action="form-echo.gtpl" method="POST">
        <fieldset>
            <div class="row">
                <label>Username:</label>
                <input type="text" name="username" value="value 1"/>
            </div>
            <div class="row">
                <label>Password:</label>
                <input type="text" name="password" value="value 2"/>
            </div>
            <div class="row">
                <label>Community:</label>
                <input type="text" name="community" value="2"/>
            </div>
        </fieldset>
        <a class="whiteButton" type="submit">Submit</a>
        <div class="spinner"></div>
    </form>


</body>
</html>