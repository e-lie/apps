<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Yunohost Apps</title>
  <link media="all" type="text/css" href="style.css" rel="stylesheet">
</head>
<body class="gradient" style="overflow: hidden">
    <iframe name="glu" id="glu" width="100%" src="welcome.php"></iframe>
    <div class="navbar-fixed-bottom">
        <ul class="navbar-inner-list">
            <a href="/"><li class="navbar-item" id="brand">Yunohost</li></a>
            <li class="navbar-item" id="apps-btn">
                Apps <!-- for i18n-->
            </li>
            <li class="navbar-item" id="separator">S</li>
            <?php if ($user != "admin" ){ ?>
            <a <?php if (array_key_exists('roundcube', array_flip($apps))) echo 'href="/roundcube"' ?> title="New mails">
                <li class="navbar-item" id="mail-indicator">
                  <span>5 mails</span>
                </li>
            </a>
            <?php } ?>
        </ul> 
    </div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../admin/public/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

<?php if ($user != "admin" ){ ?>
<script type="text/javascript" src="https://static.jappix.com/php/get.php?l=en&amp;t=js&amp;g=mini.xml"></script>
<script type="text/javascript">
   jQuery(document).ready(function() {
      MINI_ANIMATE = false;
      HOST_MAIN = "<?php echo $domain ?>";
      HOST_BOSH_MINI = 'http://apps.<?php echo $domain ?>:5280/http-bind/';
      launchMini(false, false, <?php echo '"'.$domain.'", '.'"'.$user.'", "'.$password.'"' ?>);
   });
</script>
<?php } ?> 
</body>
</html>

