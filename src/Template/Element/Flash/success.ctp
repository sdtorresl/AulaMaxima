<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-success fade-in alert-dismissable" onclick="this.classList.add('hidden');">
	<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
	<?= $message ?>
</div>