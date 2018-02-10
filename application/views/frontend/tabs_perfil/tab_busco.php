<!-- Payment Options -->
<div class="tab-pane fade" id="nav-1-1-default-hor-left-underline--3" role="tabpanel">
  <h2 class="h4 g-font-weight-300">Que tipo de relación?</h2>
<form class="" action="update_tab_busco" method="post">


<div class="col-md-10">
  <div class="row">
    <div class="col-md-6">
      <?php
        //take just ids
        $user_tipos_relacion = [];
        foreach ($tipos_relacion_user as $value) {
            array_push($user_tipos_relacion, $value->tipo_relacion_id);
        }

        $count = 1;
        $mitad = round(count($this->config->item('relaciones_tipo')) / 2);
        foreach ($this->config->item('relaciones_tipo') as $key => $value) {
            if (in_array($key, $user_tipos_relacion)) {
                $checked="checked";
            } else {
                $checked ="";
            }
            echo '
          <div class="row">
            <label class="form-check-inline u-check g-pl-25">
              <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" name="relaciones_tipo['.$key.']" value="'.$key.'" '.$checked.'>
              <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                <i class="fa" data-check-icon=""></i>
              </div>
              '.$value.'
            </label>

          </div>';
            if ($count == $mitad) {
                echo '</div><div class="col-md-6">';
            }
            $count++;
        }
      ?>
    </div>
  </div>
</div>



<br>
<h2 class="h4 g-font-weight-300">En que tipo de eventos te gustaria participar?</h2>

<div class="col-md-12">
<div class="row">
  <div class="col-md-6">
    <?php
    $user_eventos_preferidos = [];
    foreach ($usuario_eventos_preferidos as $value) {
        array_push($user_eventos_preferidos, $value->evento_id);
    }

      $count = 1;
      $mitad = round(count($categorias_eventos) / 2);
      foreach ($categorias_eventos as $cat_evento) {
          if (in_array($cat_evento->id, $user_eventos_preferidos)) {
              $checked="checked";
          } else {
              $checked ="";
          }
          echo '
        <div class="row">
          <label class="form-check-inline u-check g-pl-25">
            <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" name="tipos_eventos['.$cat_evento->id.']" value="'.$cat_evento->id.'" '.$checked.'>
            <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
              <i class="fa" data-check-icon=""></i>
            </div>
            '.$cat_evento->nombre.'
          </label>

        </div>';
          if ($count == $mitad) {
              echo '</div><div class="col-md-6">';
          }
          $count++;
      }
    ?>
  </div>
</div>
</div>


<?php
/*

  <p class="g-mb-25">Below are the payment options for your account.</p>

    <!-- Payment Options -->
    <div class="row">
      <!-- Visa Card -->
      <div class="col-md-3">
        <label class="u-check w-100 g-mb-25">
          <strong class="d-block g-color-gray-dark-v2 g-font-weight-700 g-mb-10">Visa card</strong>
          <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" type="radio" name="profilePayments" checked="">

          <div class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
            <div class="media g-pa-12">
              <div class="media-body align-self-center g-color-blue">
                <i class="fa fa-cc-visa g-font-size-30 align-self-center mx-auto"></i>
              </div>

              <div class="d-flex align-self-center g-width-20 g-ml-15">
                <div class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20"><i></i>
                </div>
              </div>
            </div>
          </div>
        </label>
      </div>
      <!-- End Visa Card -->

      <!-- Master Card -->
      <div class="col-md-3">
        <label class="u-check w-100 g-mb-25">
          <strong class="d-block g-color-gray-dark-v2 g-font-weight-700 g-mb-10">Master card</strong>
          <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" type="radio" name="profilePayments">

          <div class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
            <div class="media g-pa-12">
              <div class="media-body align-self-center g-color-lightred">
                <i class="fa fa-cc-mastercard g-font-size-30 align-self-center mx-auto"></i>
              </div>

              <div class="d-flex align-self-center g-width-20 g-ml-15">
                <div class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20"><i></i>
                </div>
              </div>
            </div>
          </div>
        </label>
      </div>
      <!-- End Master Card -->

      <!-- Amazon Payments -->
      <div class="col-md-3">
        <label class="u-check w-100 g-mb-25">
          <strong class="d-block g-color-gray-dark-v2 g-font-weight-700 g-mb-10">Amazon payments</strong>
          <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" type="radio" name="profilePayments">

          <div class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
            <div class="media g-pa-12">
              <div class="media-body align-self-center g-color-orange">
                <i class="fa fa-amazon g-font-size-30 align-self-center mx-auto"></i>
              </div>

              <div class="d-flex align-self-center g-width-20 g-ml-15">
                <div class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20"><i></i>
                </div>
              </div>
            </div>
          </div>
        </label>
      </div>
      <!-- End Amazon Payments -->

      <!-- Paypal -->
      <div class="col-md-3">
        <label class="u-check w-100 g-mb-25">
          <strong class="d-block g-color-gray-dark-v2 g-font-weight-700 g-mb-10">Paypal</strong>
          <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" type="radio" name="profilePayments">

          <div class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
            <div class="media g-pa-12">
              <div class="media-body align-self-center g-color-darkblue">
                <i class="fa fa-paypal g-font-size-30 align-self-center mx-auto"></i>
              </div>

              <div class="d-flex align-self-center g-width-20 g-ml-15">
                <div class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20"><i></i>
                </div>
              </div>
            </div>
          </div>
        </label>
      </div>
      <!-- End Paypal -->
    </div>
    <!-- End Payment Options -->

    <!-- Card Name and Number -->
    <div class="row">
      <!-- Card Name -->
      <div class="col-md-6">
        <div class="form-group g-mb-20">
          <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Name on card</label>
          <div class="input-group g-brd-primary--focus">
            <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="text" placeholder="John Doe">
            <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-light-v1 rounded-0">
              <i class="icon-user"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card Name -->

      <!-- Card Number -->
      <div class="col-md-6">
        <div class="form-group g-mb-20">
          <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Card number</label>
          <div class="input-group g-brd-primary--focus">
            <input id="inputGroup1_3" class="form-control form-control-md g-brd-right-none rounded-0 g-py-13" type="text" placeholder="XXXX-XXXX-XXXX-XXXX" data-mask="9999-9999-9999-9999">
            <div class="input-group-addon d-flex align-items-center g-color-gray-dark-v5 rounded-0">
              <i class="icon-credit-card"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card Number -->
    </div>
    <!-- End Card Name and Number -->

    <!-- Card Expiration Dates and CVV Code -->
    <div class="row">
      <!-- Expiration Month -->
      <div class="col-md-4">
        <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Expiration month</label>
        <select class="js-custom-select u-select-v1 g-brd-gray-light-v2 g-color-gray-dark-v5 w-100 g-pt-11 g-pb-10" data-placeholder="Month" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
          <option selected="">Month</option>
          <option value="1">January</option>
          <option value="1">February</option>
          <option value="3">March</option>
          <option value="4">April</option>
          <option value="5">May</option>
          <option value="6">June</option>
          <option value="7">July</option>
          <option value="8">August</option>
          <option value="9">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option>
        </select>
      </div>
      <!-- End Expiration Month -->

      <!-- Expiration Year -->
      <div class="col-md-4">
        <div class="form-group g-mb-20">
          <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Expiration year</label>
          <div class="input-group g-brd-primary--focus">
            <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="text" placeholder="2021">
            <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-light-v1 rounded-0">
              <i class="icon-calendar"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- End Expiration Year -->

      <!-- CVV Code -->
      <div class="col-md-4">
        <div class="form-group g-mb-20">
          <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">CVV code</label>
          <div class="input-group g-brd-primary--focus">
            <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="text" placeholder="2021">
            <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-light-v1 rounded-0">
              <i class="icon-lock"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- End CVV Code -->
    </div>
    <!-- End Card Expiration Dates and CVV Code -->

    <!-- Billing Address -->
    <div class="form-group">
      <label class="d-block g-color-gray-dark-v2 g-font-weight-700 1text-sm-right g-mb-10">Billing address</label>
      <label class="u-check g-pl-25 mb-0">
        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
        <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
          <i class="fa" data-check-icon="&#xf00c"></i>
        </div>
        Same as shipping address?
      </label>
    </div>
    <!-- End Billing Address -->
*/?>



    <hr class="g-brd-gray-light-v4 g-my-25">

    <div class="text-sm-right">
      <!-- <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="#">Cancel</a> -->
      <button type="submit" class="btn u-btn-primary rounded-0 g-py-12 g-px-25">Save Changes</a>
    </div>
  </form>
</div>
<!-- End Payment Options -->
