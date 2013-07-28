<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ar-SA">
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta charset="utf-8">

<title>Welcome to Noon Academy</title>

<script src="http://noonacademy.com/scripts/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="http://noonacademy.com/scripts/jquery-ui.js"></script>

<!--  Nivo Image Slider -->
<link href=" <?php echo base_url('styles/front_end/zorkif_fluid_grids.css'); ?>" rel="stylesheet" type="text/css">
<!-- Form Validation -->
<script src="http://noonacademy.com/scripts/jquery-validate.min.js"></script>

<!--[if lt IE 9]>
<script src="scripts/html5shiv.js"></script>
<![endif]-->

<!-- h5form -->
<!--  /* To Make html5 Tags avaliable to ie6 or non complaint browsers */ -->
<!--[if lte IE 6]>
<script src="scripts/h5form/jquery.h5form-2.8.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="scripts/h5form/jquery.h5form-2.8.1.css">
<![endif]-->

<!--[if lte IE 6]>
<script src="scripts/png_fix_script/supersleight-min.js"></script>
<![endif]-->



<link rel="stylesheet" href="http://noonacademy.com/scripts/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://noonacademy.com/scripts/nivo-slider/nivo-slider.css" type="text/css" media="screen" />

<!-- End of Image Slider -->

<!-- Zorkif Status and Notification Messages -->
<script type="text/javascript" src="http://noonacademy.com/scripts/zorkif_jQuery_plugins/ZORKIF_status_messages.js"></script>

</head>
<body>
    <div id="error_message">
        Error Occured.
    </div><!-- end of error_message -->

    <div id="warning_message">
        Warning!. Make sure you perform the correct action.
    </div><!-- End of warning_message -->

    <div id="notification_message">
        The Action has been completed Successfully.
    </div><!-- End of notification_message -->

    <div id="zorkif_drop_down_menu"  class="clearfix">
        <?php $this->load->view('front_end/ui_components/main_top_navigation'); ?>
    </div>