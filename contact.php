<?php
$page_title = 'Contact Info';

include 'tmpl/head.php';
?>

<p>
My email address is <a href="mailto:localstatic@localstatic.com">localstatic@localstatic.com</a>.<br>
My PGP key is:
<?php
include 'gpgkey.php';
?>
</p>

<?php
include 'tmpl/foot.php';
?>

