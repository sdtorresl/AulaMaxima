<?php 
$total = 1;
for ($i=0; $i < strlen((string) $contactsCount); $i++) { 
    $total *= 10;
}

$percentage = ($contactsCount / $total) * 100;
?>
<div class="col-xl-3 col-sm-6">
    <div class="item d-flex align-items-center">
        <div class="icon bg-violet"><i class="fa fa-paper-plane-o"></i></div>
        <div class="title"><span><?= __('Contacts') ?></span>
            <div class="progress">
                <div role="progressbar" style="width: <?= $percentage ?>%; height: 4px;" aria-valuenow="<?= $percentage ?>" aria-valuemin="0" aria-valuemax="<?= $total ?>" class="progress-bar bg-violet"></div>
            </div>
        </div>
        <div class="number"><strong><?= $contactsCount ?></strong></div>
    </div>
</div>