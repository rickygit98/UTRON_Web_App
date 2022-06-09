<?php 

function filter1($img){
    $image = imagecreatefromjpeg($img);
    imagefilter($image,IMG_FILTER_GRAYSCALE);
    imagejpeg($image,"filter1.jpg");
    imagedestroy($image);

    echo("<img src ='".BASEURL."/filter1.jpg' width='450px'>");
  }
  
  function filter2($img){
    $image = imagecreatefromjpeg($img);
    imagefilter($image,IMG_FILTER_COLORIZE,50,50,100);
    imagejpeg($image,"filter2.jpg");
    imagedestroy($image);
    echo("<img src ='".BASEURL."/filter2.jpg' width='450px'>");
  }
  
  function filter3($img){
    $image = imagecreatefromjpeg($img);
    
    imagefilter($image,IMG_FILTER_COLORIZE,100,50,50);
    imagejpeg($image,"filter3.jpg");
    imagedestroy($image);
    echo("<img src ='".BASEURL."/filter3.jpg' width='450px'>");
  }
  
  function filter4($img){
    $image = imagecreatefromjpeg($img);
    
    imagefilter($image,IMG_FILTER_COLORIZE,50,100,50);
    imagejpeg($image,"filter4.jpg");
    imagedestroy($image);
    echo("<img src ='".BASEURL."/filter4.jpg' width='450px'>");
  }
?>