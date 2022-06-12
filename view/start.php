<?php
ob_start();
?>
<h3>TOP 5 NEWS </h3>
<br>
<?php
ViewNews::NewsByCategory($arr);

$content = ob_get_clean();

include_once 'view/layout.php';
?>