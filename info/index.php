<!DOCTYPE html>
<html lang="ja">
<head>
        <meta charset="UTF-8" />
        <meta name="robots" content="noindex,nofollow">
        <meta http-equiv="pragma" content="no-cache">
        <meta http-equiv="cache-control" content="no-cache">
        <title>WHOIS Information</title>
</head>
<body>
Your IP:
<?php echo $_SERVER['REMOTE_ADDR']; ?>
<br>
Whois Information: <br>
<?php
        $ip = $_SERVER['REMOTE_ADDR'];
        $output = '';
        ob_start();
        passthru(whois." -H ". $ip);
        $output = ob_get_clean();
        echo nl2br(htmlspecialchars($output));
?>

<br>
----------<br>
The results are not guaranteed.<br>
</body>