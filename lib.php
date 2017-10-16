<?php
/*
  Example http://localhost/dummy-image/lib.php?size=900x900&type=png&bg=ffffff&color=000000&text=andro
*/
$size = $_GET['size'];
$type =$_GET['type'];
$bg=$_GET['bg'];
$color=$_GET['color'];
$text=$_GET['text'];

list($width,$height) = explode('x',$size);


  function bg_color($strColor){

        list($red,$green,$blue) = array($strColor[0].$strColor[1],$strColor[2].$strColor[3],$strColor[4].$strColor[5]);

          $red=hexdec($red);
          $green=hexdec($green);
          $blue=hexdec($blue);

    return array($red,$green,$blue);
  }

$strBgColor=bg_color($bg);
$strColorRgb=bg_color($color);
$img           = imagecreate( $width, $height );//membuat area gambar
$background    = imagecolorallocate( $img, $strBgColor[0], $strBgColor[1], $strBgColor[2] );//menentukan background
$text_color    = imagecolorallocate( $img, $strColorRgb[0], $strColorRgb[1], $strColorRgb[2] );//menentukan warna depan


//buat kata-kata dengan margin kiri 10, margin atas 30 dan ketebalan 5px
imagestring( $img, 1000,20,5, $text, $text_color );


switch($type){
  case 'jpg' :
    header('Content-type: image/jpeg');
    imagejpeg($img);
    break;
  case 'png' :
    header('Content-type: image/png');
    imagepng($img);
    break;
}

imagedestroy( $img );


?>
