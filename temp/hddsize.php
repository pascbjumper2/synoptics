<p>HDD space total in Bytes</p>

<?php
// $ds contains the total number of bytes available on "/"
$ds = disk_total_space("/");

echo $ds;
?>

<br />
<br />
<p>HDD space available in Bytes</p>
<?php
$df = disk_free_space("/");

echo $df;
?>
<br />
<br />
<p>% HDD available</p>
<?php

$per =  ($df / $ds) * 100;
echo $per;

?>
