
<?php

$i = 1;
while ($page_part = mysqli_fetch_object($PageParts)) {
    require("./templates/webparts/{$page_part->webpart}/index.php");
    ++$i;
}


?>