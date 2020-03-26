<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
    <head>
    <meta charset="utf-8"/>
        <title>TimeSheet</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="<?php echo base_url('assets/css/google-open-sans.css');?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins/simple-line-icons/simple-line-icons.min.css');?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins/uniform/css/uniform.default.css');?>" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        
        <!-- CSSs CARREGADOS APENAS NA PAGINA (PELO CONTROLLER) -->
        <?php if (!empty($css)) { foreach ($css as $row) { ?>
        <link href="<?php echo base_url("$row"); ?>" rel="stylesheet" type="text/css"/>
        <?php } } ?>
        <!-- FIM CSSs DA PAGINA -->
        
        <!-- BEGIN THEME STYLES -->
        <link href="<?php echo base_url('assets/css/components.css');?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/css/plugins.css');?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/css/layout.css');?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/css/blue.css');?>" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="<?php echo base_url('assets/css/custom.css');?>" rel="stylesheet" type="text/css"/>
        <!-- END THEME STYLES -->
        <link href="<?php echo base_url('assets/img/favicon.ico');?>" rel="shortcut icon"/>
    </head>