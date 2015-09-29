!-- RAM module is a setting  

<html>
<body>

<form action="index.php?module=ram" method="post">

Ram: <input type="text" name="ram"><br>
<br>
<p> <input type="submit" value="Ayarla"> </p>
</form>

<?php
exec('free -mo', $out);
preg_match_all('/\s+([0-9]+)/', $out[1], $matches);
list($total, $used, $free, $shared, $buffers, $cached) = $matches[1];

if (empty($_POST["ram"]))
{
echo "Lütfen kontrol edilecek RAM miktarını giriniz";}
else{

else{
if($used >= $_POST["ram"])
{
echo shell_exec("sync && echo 3 > /proc/sys/vm/drop_caches");
echo "RAM miktarı ".$_POST["ram"]." göre kontrol edildi";

exit();
}
}
?>

</body>
</html>
