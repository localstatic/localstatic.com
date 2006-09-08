<?php
include_once('inc/misc.inc.php');

$email_address = 'localstatic@gmail.com';

$pages = array('main', 'links', 'about', 'contact', 'gpgkey');

$pages[] = 'linux';
$pages[] = 'linux-nforce';

$pages[] = 'linux-laptop';
$pages[] = 'linux-laptop-slackware';
$pages[] = 'linux-laptop-redhat';
$pages[] = 'linux-laptop-debian';


$pages[] = 'outdoors';
//$pages[] = 'outdoors/geocaching';
$pages[] = 'geocaching';

$page = $_GET['p'];

if ($page == '')
{
	$page = $pages[0];
}

if (in_array($page, $pages))
{
	$include_file = 'pages/' . $page . '.php';
}
else
{
	$include_file = '';
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
 <title>localstatic.com - <?php echo ucfirst($page); ?></title>
 <link rel="stylesheet" type="text/css" href="style.css"/>
 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<div id="container">

<div id="logo">
<a href="<?php print $_SERVER['SCRIPT_NAME']; ?>">localstatic.com</a>
</div>

<div id="nav">
 <div class="nocss"><a href="#content">Jump to content</a></div>
 <ul>
  <li><a href="<?php print $_SERVER['SCRIPT_NAME']; ?>?p=main">Home</a></li>
  <li><a href="<?php print $_SERVER['SCRIPT_NAME']; ?>?p=linux">Linux</a></li>
  <li><a href="<?php print $_SERVER['SCRIPT_NAME']; ?>?p=geocaching">Geocaching</a></li>
  <li><a href="<?php print $_SERVER['SCRIPT_NAME']; ?>?p=links">Links</a></li>
  <li><a href="<?php print $_SERVER['SCRIPT_NAME']; ?>?p=contact">Contact</a></li>
  <li><a href="<?php print $_SERVER['SCRIPT_NAME']; ?>?p=about">About</a></li>
 </ul>
</div>

<div id="content">

<?php
if ($include_file != '')
	include($include_file);
else
	echo get_para_html('Invalid page requested.', 'error');

?>

</div>

<div id="footer">
  <div id="meta">
    <a href="mailto:<?php echo $email_address; ?>">Morgan Terry</a><br/>
    <?php
    echo date('r', filemtime($include_file));
    ?>
  </div>

  <div id="icons">
    <a href="http://validator.w3.org/check/referer">
      <img style="border:0;width:88px;height:31px" src="images/w3c_valid-xhtml10.png" alt="Valid XHTML 1.0!" width="88" height="31" />
    </a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
      <img style="border:0;width:88px;height:31px" src="images/w3c_valid-css.png" alt="Valid CSS!" width="88" height="31" />
    </a>
  </div> <!-- icons -->
</div>

</div> <!-- /container -->

</body>
</html>
