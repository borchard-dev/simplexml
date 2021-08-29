
<!DOCTYPE html>
<html>
<body>

<?php
$xml=simplexml_load_file("https://steamcommunity.com/gid/41109792/memberslistxml/?xml=1") or die("Error: Cannot create object");
print_r($xml);
?>

</body>
</html>
