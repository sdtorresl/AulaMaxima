<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-danger fade-in alert-dismissable" onclick="this.classList.add('hidden');">
	<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
	<?= $message ?>
</div>
