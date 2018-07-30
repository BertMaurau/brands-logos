<?php

// check for size param
$size = (isset($_GET['px']) ? $_GET['px'] : '200');

// check if allowed size
if (!in_array($size, ['200'])) {
  echo "Requested size: $size is not an available size. (Sizes: ['200']).";
  exit;
}

// get all the (.png) files within the requested size directory
$brandLogos = glob($size . "px/*.{png}", GLOB_BRACE);

// iterate each logo and render the file as an html image
foreach ($brandLogos as $logo) {
  echo '<img src="'.$logo .'" alt="'.$logo.'" style="border: 1px solid black; margin: 2px;"/>';
}

?>