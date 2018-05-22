<?php
/**
 * @var \App\View\AppView $this
 */
?>

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom"><?= __('Attachments') ?></h2>
    </div>
</header>

<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><?= __('Attachment') ?></h3>
                    </div>

                    <div class="card-body">
                        <?= $this->Form->create($attachment, ['type' => 'file']) ?>
                        <?php
                        echo $this->Form->control('name');
                        echo $this->Form->control('file', ['type' => 'file']);
                        // echo $this->Form->control('service');
                        echo $this->Form->control('service_id', ['options' => $services]);
                        ?>

                        <?= $this->Form->button(__('Submit')) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>