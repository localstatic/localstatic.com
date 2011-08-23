<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Hash Generator</title>
</head>
<body>

<?php

$valid_hashes = array('md5' => 'MD5',
                      'sha1' => 'SHA1',
                      'base64_encode' => 'Base64',
                      'base64_decode' => 'Base64 (decode)',
                      'urlencode' => 'Url encode',
                      'urldecode' => 'Url decode',
);

$hash_function = '';
$input_string = '';
$output_string = '';

if (isset($_GET['hash_function'])) {
    $hash_function = $_GET['hash_function'];
}
if (isset($_GET['input'])) {
    $input_string = $_GET['input'];

    if ($hash_function && isset($valid_hashes[$hash_function])) {
        $output_string = $hash_function($input_string);
    }
    else {
        //echo "<p>Invalid hash function.</p>\n";
        $hash_function = null;
    }
}
?>

<form method="get" action="">
	<input type="text" id="input" name="input" value="<?php echo htmlentities($input_string); ?>"/><br/>
    <input type="radio" id="hash_func_md5" name="hash_function" value="md5"<?php if ('md5' == $hash_function) echo ' checked'; ?>/> MD5<br/>
    <input type="radio" id="hash_func_sha1" name="hash_function" value="sha1"<?php if ('sha1' == $hash_function) echo ' checked'; ?>/> SHA1<br/>
    <input type="radio" id="hash_func_base64_encode" name="hash_function" value="base64_encode"<?php if ('base64_encode' == $hash_function) echo ' checked'; ?>/> Base64 /
    <input type="radio" id="hash_func_base64_encode" name="hash_function" value="base64_decode"<?php if ('base64_decode' == $hash_function) echo ' checked'; ?>/> Base64 (decode)<br/>
    <input type="radio" id="hash_func_base64_encode" name="hash_function" value="urlencode"<?php if ('urlencode' == $hash_function) echo ' checked'; ?>/> URL encode /
    <input type="radio" id="hash_func_base64_encode" name="hash_function" value="urldecode"<?php if ('urldecode' == $hash_function) echo ' checked'; ?>/> URL decode<br/>
	<input type="submit" value="Generate Hash"/><br/>
</form>

<?php
if ($output_string) {
?>
<fieldset>
    <legend>Hash - <?php echo htmlentities($valid_hashes[$hash_function]); ?></legend>
    <div id="output-container">
    <?php
    echo htmlentities($output_string);
    ?>
    </div>
</fieldset>
<?php
}
?>

</body>
</html>
