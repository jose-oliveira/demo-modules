<?php

/*
 * $image_urls: The URL of the images.
 */

?>

<div>
  <img data-random-srcs="
  <?php
    print implode(',', $image_urls);
  ?>
  " class="random-image"/>
</div>