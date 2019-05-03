<script>
	function a() {
		alert("This is msg.");
	}
</script>

<?php
	$a = 1;
	if ($a == 2) {
	} else {
		echo '<script>',
			 'a();',
			 '</script>';
	}
?>
