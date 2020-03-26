<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo base_url('assets/plugins/respond/respond.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/excanvas/excanvas.min.js');?>"></script> 
<![endif]-->
<script src="<?php echo base_url('assets/scripts/metronic.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/scripts/layout.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/scripts/jquery-1.11.0.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/scripts/jquery-migrate-1.2.1.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/scripts/jquery.blockui.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/scripts/jquery.cokie.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/uniform/js/jquery.uniform.min.js');?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- JSs CARREGADOS APENAS NA PAGINA (PELO CONTROLLER) -->
<?php if (!empty($js)) { foreach ($js as $row) { ?>
<script src="<?php echo base_url("$row"); ?>" type="text/javascript"></script>
<?php } } ?>
<!-- FIM JSs DA PAGINA -->

<script>
jQuery(document).ready(function() {     
    Metronic.init(); // init metronic core components
    Layout.init(); // init current layout
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>