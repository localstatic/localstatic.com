<?php
$page_title = 'Contact Info';

include 'tmpl/head.php';
?>

<p>
My email address is <a href="mailto:localstatic@localstatic.com">localstatic@localstatic.com</a>.
</p>

<p>
My PGP key is:
</p>

<p style="font-size: smaller">
<?php
ob_start();
include 'files/gpgkey.txt';
echo nl2br(str_replace(' ', '&nbsp;', ob_get_clean()));
?>
</p>

<?php
include 'tmpl/foot.php';
?>

