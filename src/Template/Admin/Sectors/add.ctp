<?php
/**
 * @var \App\View\AppView $this
 */
?>

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom"><?= __('Sectors') ?></h2>
    </div>
</header>

<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><?= __('Sector') ?></h3>
                    </div>

                    <div class="card-body">
                        <?= $this->Form->create($sector) ?>
                        <?php
                        echo $this->Form->control('title');
                        echo $this->Form->control('description');
                        echo $this->Form->control('picture');
                        echo $this->Form->control('picture_dir');
                        echo $this->Form->control('business_id', ['options' => $businessLines]);
                        ?>

                        <?= $this->Form->button(__('Submit')) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>