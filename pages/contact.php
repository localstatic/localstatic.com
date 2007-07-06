<?php
$page_title = 'Contact Info';
?>

<p>
My email address is <a href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a>.<br>
My PGP key is:
<?php
include 'gpgkey.php';
?>
</p>
