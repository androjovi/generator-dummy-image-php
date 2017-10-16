<?php
$width=$_POST['width'];
$height=$_POST['height'];

$bg=$_POST['bg-color'];
$bg_text=$_POST['text-color'];

$text=$_POST['text'];

$type=$_POST['type'];

function get_color($color){
  list($rgb)=array($color[1].$color[2].$color[3].$color[4].$color[5].$color[6]);
  return array($rgb);
}
$a=get_color($bg);
$b=get_color($bg_text);
echo 'Your link <br>';
echo "<a href='".$_SERVER['HTTP_REFERER']."lib.php?size={$width}x{$height}&type={$type}&bg={$a[0]}&color={$b[0]}&text={$text}'>asz</a> ";


 ?>
