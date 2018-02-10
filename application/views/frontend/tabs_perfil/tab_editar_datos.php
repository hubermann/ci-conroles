<!-- Tab panes --> <!-- PRIMER TAB -->
<div id="nav-1-1-default-hor-left-underline" class="tab-content">
  <!-- Edit Profile -->
  <div class="tab-pane fade show active" id="nav-1-1-default-hor-left-underline--1" role="tabpanel">
    <h2 class="h4 g-font-weight-300">Tab de edicion de datos</h2>
    <p>Below are name, email addresse, contacts and more on file for your account.</p>

    <h2 class="h4 g-font-weight-300">Security Settings</h2>
    <p class="g-mb-25">Reset your password, change verifications and so on.</p>

    <form>


    <!-- Current Nombre -->
      <div class="form-group row g-mb-25">
        <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">Nickname</label>
        <div class="col-sm-9">
          <div class="input-group g-brd-primary--focus">
            <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="text" value="<?php echo $query->nickname; ?>" placeholder="Nickname">
            <?php echo form_error('nickname','<p class="error">', '</p>'); ?>
            <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-light-v1 rounded-0">
              <i class="icon-lock"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- End Current Nombre-->


      <!-- Current Nombre -->
      <div class="form-group row g-mb-25">
        <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">Nombre</label>
        <div class="col-sm-9">
          <div class="input-group g-brd-primary--focus">
            <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="text" value="<?php echo $query->nombre; ?>" placeholder="Nombre">
            <?php echo form_error('nombre','<p class="error">', '</p>'); ?>
            <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-light-v1 rounded-0">
              <i class="icon-lock"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- End Current Nombre-->

      <!-- Current Nombre -->
      <div class="form-group row g-mb-25">
        <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">Apellido</label>
        <div class="col-sm-9">
          <div class="input-group g-brd-primary--focus">
            <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="text" value="<?php echo $query->apellido; ?>" placeholder="Apellido">
            <?php echo form_error('apellido','<p class="error">', '</p>'); ?>
            <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-light-v1 rounded-0">
              <i class="icon-lock"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- End Current Nombre-->

      <!-- Verify Password -->
      <div class="form-group row g-mb-25">
        <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">Verify password</label>
        <div class="col-sm-9">
          <div class="input-group g-brd-primary--focus">
            <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="password" placeholder="Verify password">
            <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-light-v1 rounded-0">
              <i class="icon-lock"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- End Verify Password -->

      <!-- Login Verification -->
      <div class="form-group row g-mb-25">
        <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">Login verification</label>
        <div class="col-sm-9">
          <label class="form-check-inline u-check g-pl-25">
            <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
            <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
              <i class="fa" data-check-icon="&#xf00c"></i>
            </div>
            Verify login requests
          </label>
          <small class="d-block text-muted">You need to add a phone to your profile account to enable this feature.</small>
        </div>
      </div>
      <!-- End Login Verification -->

      <!-- Password Reset -->
      <div class="form-group row g-mb-25">
        <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">Password reset</label>
        <div class="col-sm-9">
          <label class="form-check-inline u-check g-pl-25">
            <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
            <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
              <i class="fa" data-check-icon="&#xf00c"></i>
            </div>
            Require personal information to reset my password
          </label>
          <small class="d-block text-muted">When you check this box, you will be required to verify additional information before you can request a password reset with just your email address.</small>
        </div>
      </div>
      <!-- End Password Reset -->

      <!-- Save Password -->
      <div class="form-group row g-mb-25">
        <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">Save password</label>
        <div class="col-sm-9">
          <label class="form-check-inline u-check mx-0">
            <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="savePassword" type="checkbox">
            <div class="u-check-icon-radio-v7">
              <i class="d-inline-block"></i>
            </div>
          </label>
          <small class="d-block text-muted">When you check this box, you will be saved automatically login to your profile account. Also, you will be always logged in all our services.</small>
        </div>
      </div>
      <!-- End Save Password -->

      <hr class="g-brd-gray-light-v4 g-my-25">

      <div class="text-sm-right">
        <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="#">Cancel</a>
        <a class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="#">Save Changes</a>
      </div>
    </form>
  </div>
  <!-- End Edit Profile -->
