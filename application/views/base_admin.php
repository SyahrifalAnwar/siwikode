<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<?php $this->load->view('template/admin_head') ?>
<!-- END: Head-->
<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

  <!-- BEGIN: Header-->
  <?php $this->load->view('template/admin_header') ?>
  <!-- END: Header-->

  <?php $this->load->view('template/admin_menu') ?>
  <!-- BEGIN: Page Main-->
  <div id="main">
    <?php $this->load->view($content) ?>
  </div>
  <!-- END: Page Main-->

  <!-- Theme Customizer -->

  <?php $this->load->view('template/admin_footer') ?>
</body>
</html>