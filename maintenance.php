<?php
/**
 * View for your maintenance mode langing page.
 * File path: WP_ROOT/wp-content/maintenance.php 
 * 
 * You don't need to remove this file when maintenance mode is disabled. 
 * If you won't, wordpress is will compile this file everytime the maintenance
 * mode is enabled (for example while upgrading procedure).
 * 
 * @author Szymon Nowicki 
 * @link https://github.com/eskalacja/wordpress_maintenance_mode GitHub repo
 * @link http://eskalacja.com 
 */


/** change this */
if (!defined('WEBSITE_NAME')) {
    define('WEBSITE_NAME', 'Website name');
}
if (!defined('GOOGLE_ANALYTICS_ID')) {
    define('GOOGLE_ANALYTICS_ID', 'UA-3618915-8');
}

/** sending a proper http code */
$protocol = $_SERVER["SERVER_PROTOCOL"];
if ( 'HTTP/1.1' != $protocol && 'HTTP/1.0' != $protocol )
        $protocol = 'HTTP/1.0';
header( "$protocol 503 Service Unavailable", true, 503 );
header( 'Content-Type: text/html; charset=utf-8' );

/** view starts here */
?>
<!DOCTYPE html>
<html id="start">
<head>
   
    <title><?php echo WEBSITE_NAME;?></title>
    <meta charset="utf-8" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script type="text/javascript">
     var _gaq = _gaq || [];
     _gaq.push(['_setAccount', <?php echo GOOGLE_ANALYTICS_ID;?>]);
     _gaq.push(['_trackPageview']);

     (function() {
       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();
   </script>
</head>
<body>
<div class="container" style="margin-top:5%;">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <p style="text-align:center;">
                <i class="glyphicon glyphicon-wrench" style="font-size:6em;"></i>
            </p>
            <h2>Sorry, we are offline right now</h2>
            <p class="lead">We are making our site better for you. Sadly, we need to take it down for a while.</p>
            <p style="text-align:center;">Please refresh this page after couple of minutes.</p>
        </div>
    </div>
</div>
</body>
</html>
<?php 
/* die, just in case */
die(); 
