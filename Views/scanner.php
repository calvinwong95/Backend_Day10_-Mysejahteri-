<?php
session_start();
include '../Models/db.sql.php';
include "header.php";
?>
<form action='../Controllers/scanner.inc.php' method='post'>
<button type="submit" name="scan">Scan Location</button>

</form>
<?php
include "footer.php";
?>