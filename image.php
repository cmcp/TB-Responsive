<?php

$file = 'img/responsive/small.png';
if (@$_COOKIE['screen'] == 'wide') {
  $file = 'img/responsive/large.png';
}
$imageinfo = getimagesize($file) ;
$handle = fopen($file, 'rb') ;
if ($imageinfo and $handle) {
  header("Content-type: {$imageinfo['mime']}") ;
  fpassthru($handle) ;
  exit ;
}
else {
  print('File not found');
}
