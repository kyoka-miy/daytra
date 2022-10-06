<!-- jquery & iScroll -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<!-- drawer.js -->
<script src="//cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
<script src="//unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<!-- JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>

<script>
	$(function() {
		$("#custom-date1").datepicker({
			dateFormat: 'yy年mm月dd日'
		});
		$("#custom-date2").datepicker({
			dateFormat: 'yy年mm月dd日'
		});
		$("#custom-date3").datepicker({
			dateFormat: 'yy年mm月dd日'
		});
	});
</script>
<?php wp_footer(); ?>