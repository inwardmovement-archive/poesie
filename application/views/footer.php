<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<footer>
	<div class="container">
		
	</div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo js_url('bootstrap'); ?>"></script>
<script src="<?php echo js_url('hover'); ?>"></script>
<script type="text/javascript">

// Activation des tooltips
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Fondu dropdowns
$('.navbar .dropdown').hover(function() {
    $(this).find('.dropdown-menu').first().stop(true, true).fadeIn(150);
}, function() {
    $(this).find('.dropdown-menu').first().stop(true, true).fadeOut(150);
});

</script>