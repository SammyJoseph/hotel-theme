<?php
$images = get_post_meta(get_the_ID(), 'img_list_carousel', true);
// var_dump($images);
?>

<!-- Plantilla de Bootstrap 5 -->
<div id="sliderHome" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    <?php 
        $count = 0;
        foreach ($images as $img) {
            $classActive = ($count == 0 ? 'active' : ''); //si el contador es 0, es el primer elemento (darle la clase active para BS5)
            $output = "
                <div class='carousel-item $classActive' style='background-image: url($imagen)'>
                </div>
            ";
            echo $output;
            $count++;
        }
    ?>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#sliderHome" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#sliderHome" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>