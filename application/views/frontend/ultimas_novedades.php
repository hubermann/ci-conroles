

<section id="latestPosts" class="g-theme-bg-gray-light-v1 g-py-100">
  <div class="container">
    <div class="text-center g-mb-70">
      <h2 class="text-uppercase g-line-height-1 g-font-weight-700 g-font-size-30 g-mb-30">Ultimas
        <span class="g-font-weight-400 g-font-size-40">|</span>
        <span class="g-color-primary">Novedades </span></h2>

      <p>Nam sed erat aliquet libero aliquet commodo. Donec euismod augue non quam finibus, nec iaculis tellus gravida. Integer
        <br> efficitur eros ut dui laoreet, ut blandit turpis tincidunt.</p>
    </div>

    <?php

    foreach ($notas as $nota) {
      echo '
        <article class="g-bg-white">
          <img class="img-fluid" src="'.base_url('/public_folder/frontend/assets/img-temp/700x800/img1.png').'" alt="Image description">

          <div class="u-shadow-v24 g-pa-30">
            <header class="g-mb-20">
              <h4 class="g-font-weight-700 g-font-size-10 g-color-primary g-mb-5">'.$nota->fecha_desde.'</h4>
              <h3 class="text-uppercase g-font-weight-700 g-font-size-14 mb-0">
                <a class="g-theme-color-blue-dark-v2 g-color-primary--hover" href="#">'.$nota->titulo.'</a>
              </h3>
            </header>

            <p class="g-mb-30">'.substr($nota->descripcion,0, 120).'...</p>

            <div class="media g-font-weight-600 g-font-size-10 g-theme-color-gray-dark-v1">
              <div class="d-flex rounded-circle u-bg-overlay g-overflow-hidden g-bg-primary-opacity-0_3--after g-width-40 g-height-40 g-mr-10">
                <img class="img-fluid rounded-circle" src="'.base_url('/public_folder/frontend/assets/img-temp/700x800/img1.png').'" alt="Image description">
              </div>

              <div class="media-body align-self-center text-uppercase">by Dorian Gray</div>
            </div>
          </div>
        </article>

';
    }


    ?>

    <div class="masonry-grid row" style="position: relative; height: 1220.9375801086426px;">
      <div class="masonry-grid-sizer col-sm-1"></div>


      <div class="masonry-grid-item col-md-6 col-lg-4 g-mb-30" style="position: absolute; left: 33.33333333333333%; top: 0px;">
        <article class="g-bg-white">
          <img class="img-fluid" src="ABOUT THE EVENT" alt="Image description">

          <div class="u-shadow-v24 g-pa-30">
            <header class="g-mb-20">
              <h4 class="g-font-weight-700 g-font-size-10 g-color-primary g-mb-5">April 25, 2017</h4>
              <h3 class="text-uppercase g-font-weight-700 g-font-size-14 mb-0">
                <a class="g-theme-color-blue-dark-v2 g-color-primary--hover" href="#">Sed arcu erat, facilisis at tortor vel, blandit tristique enim</a>
              </h3>
            </header>

            <p class="g-mb-30">Sed feugiat porttitor nunc, non dignissim ipsum vestibulum in. Donec in blandit dolor. Vivamus a fringilla lorem, vel.</p>

            <div class="media g-font-weight-600 g-font-size-10 g-theme-color-gray-dark-v1">
              <div class="d-flex rounded-circle u-bg-overlay g-overflow-hidden g-bg-primary-opacity-0_3--after g-width-40 g-height-40 g-mr-10">
                <img class="img-fluid rounded-circle" src="a<?= base_url('/public_folder/frontend/assets/img-temp/700x800/img1.png'); ?>" alt="Image description">
              </div>

              <div class="media-body align-self-center text-uppercase">by Dorian Gray</div>
            </div>
          </div>
        </article>
      </div>

      <div class="masonry-grid-item col-md-6 col-lg-4 g-mb-30" style="position: absolute; left: 66.66666666666666%; top: 0px;">
        <article class="g-bg-white">
          <img class="img-fluid" src="assets/img-temp/800x496/img2.jpg" alt="Image description">

          <div class="u-shadow-v24 g-pa-30">
            <header class="g-mb-20">
              <h4 class="g-font-weight-700 g-font-size-10 g-color-primary g-mb-5">April 25, 2017</h4>
              <h3 class="text-uppercase g-font-weight-700 g-font-size-14 mb-0">
                <a class="g-theme-color-blue-dark-v2 g-color-primary--hover" href="#">Donec euismod augue non quam finibus nec iaculis tellus gravida</a>
              </h3>
            </header>

            <p class="g-mb-30">Sed feugiat porttitor nunc, non dignissim ipsum vestibulum in. Donec in blandit dolor. Vivamus a fringilla lorem, vel.</p>

            <div class="media g-font-weight-600 g-font-size-10 g-theme-color-gray-dark-v1">
              <div class="d-flex rounded-circle u-bg-overlay g-overflow-hidden g-bg-primary-opacity-0_3--after g-width-40 g-height-40 g-mr-10">
                <img class="img-fluid rounded-circle" src="<?= base_url('/public_folder/frontend/assets/img-temp/700x800/img1.png'); ?>" alt="Image description">
              </div>

              <div class="media-body align-self-center text-uppercase">by Dorian Gray</div>
            </div>
          </div>
        </article>
      </div>

      <div class="masonry-grid-item col-md-6 col-lg-4 g-mb-30" style="position: absolute; left: 0%; top: 518px;">
        <article class="g-bg-white">
          <img class="img-fluid" src="assets/img-temp/1200x960/img2.jpg" alt="Image description">

          <div class="u-shadow-v24 g-pa-30">
            <header class="g-mb-20">
              <h4 class="g-font-weight-700 g-font-size-10 g-color-primary g-mb-5">April 25, 2017</h4>
              <h3 class="text-uppercase g-font-weight-700 g-font-size-14 mb-0">
                <a class="g-theme-color-blue-dark-v2 g-color-primary--hover" href="#">Cras consequat nibh a viverra tempor</a>
              </h3>
            </header>

            <p class="g-mb-30">Sed feugiat porttitor nunc, non dignissim ipsum vestibulum in. Donec in blandit dolor. Vivamus a fringilla lorem, vel.</p>

            <div class="media g-font-weight-600 g-font-size-10 g-theme-color-gray-dark-v1">
              <div class="d-flex rounded-circle u-bg-overlay g-overflow-hidden g-bg-primary-opacity-0_3--after g-width-40 g-height-40 g-mr-10">
                <img class="img-fluid rounded-circle" src="<?= base_url('/public_folder/frontend/assets/img-temp/700x800/img1.png'); ?>" alt="Image description">
              </div>

              <div class="media-body align-self-center text-uppercase">by Dorian Gray</div>
            </div>
          </div>
        </article>
      </div>

      <div class="masonry-grid-item col-md-6 col-lg-4 g-mb-30" style="position: absolute; left: 66.66666666666666%; top: 537px;">
        <article class="g-bg-white">
          <img class="img-fluid" src="<?= base_url('/public_folder/frontend/assets/img-temp/700x800/img1.png'); ?>" alt="Image description">

          <div class="u-shadow-v24 g-pa-30">
            <header class="g-mb-20">
              <h4 class="g-font-weight-700 g-font-size-10 g-color-primary g-mb-5">April 25, 2017</h4>
              <h3 class="text-uppercase g-font-weight-700 g-font-size-14 mb-0">
                <a class="g-theme-color-blue-dark-v2 g-color-primary--hover" href="#">Sed consequat tristique metus</a>
              </h3>
            </header>

            <p class="g-mb-30">Sed feugiat porttitor nunc, non dignissim ipsum vestibulum in. Donec in blandit dolor. Vivamus a fringilla lorem, vel.</p>

            <div class="media g-font-weight-600 g-font-size-10 g-theme-color-gray-dark-v1">
              <div class="d-flex rounded-circle u-bg-overlay g-overflow-hidden g-bg-primary-opacity-0_3--after g-width-40 g-height-40 g-mr-10">
                <img class="img-fluid rounded-circle" src="assets/img-temp/50x50/img1.jpg" alt="Image description">
              </div>

              <div class="media-body align-self-center text-uppercase">by Dorian Gray</div>
            </div>
          </div>
        </article>
      </div>

      <div class="masonry-grid-item col-md-6 col-lg-4 g-mb-30" style="position: absolute; left: 33.33333333333333%; top: 600px;">
        <article class="g-bg-white">
          <img class="img-fluid" src="<?= base_url('public_folder/frontend/assets/img-temp/1200x960/img3.jpg');?>" alt="Image description">

          <div class="u-shadow-v24 g-pa-30">
            <header class="g-mb-20">
              <h4 class="g-font-weight-700 g-font-size-10 g-color-primary g-mb-5">April 25, 2017</h4>
              <h3 class="text-uppercase g-font-weight-700 g-font-size-14 mb-0">
                <a class="g-theme-color-blue-dark-v2 g-color-primary--hover" href="#">Fusce nulla neque, luctus ac magna sit amet, sollicitudin blandit</a>
              </h3>
            </header>

            <p class="g-mb-30">Sed feugiat porttitor nunc, non dignissim ipsum vestibulum in. Donec in blandit dolor. Vivamus a fringilla lorem, vel.</p>

            <div class="media g-font-weight-600 g-font-size-10 g-theme-color-gray-dark-v1">
              <div class="d-flex rounded-circle u-bg-overlay g-overflow-hidden g-bg-primary-opacity-0_3--after g-width-40 g-height-40 g-mr-10">
                <img class="img-fluid rounded-circle" src="<?= base_url('public_folder/frontend/assets/img-temp/50x50/img3.jpg');?>" alt="Image description">
              </div>

              <div class="media-body align-self-center text-uppercase">by Dorian Gray</div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
