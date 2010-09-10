<?php
$person = '';
if (isset($_GET['person'])) {
    $person = $_GET['person'];
}
?>
<!DOCTYPE html>
<head>
<title>Say Hello</title>
</head>
<body>
<? if (strlen($person) > 0): ?>
<p>Hello, <?= htmlspecialchars($person) ?></p>
<p><a href="<?= $_SERVER['PHP_SELF'] ?>">clear</a></p>
<? endif; ?>
<form method="GET" action="<?= $_SERVER['PHP_SELF'] ?>">
<dl>
<dt>Say hello to</dt>
<dd><input type="text" name="person" value="<?= htmlspecialchars($person) ?>" /></dd>
</dl>
<input type="submit" name="submit" value="Submit" />
</form>
</body>
</html>
