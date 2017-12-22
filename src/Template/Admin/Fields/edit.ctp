<?php
/**
 * @var \App\View\AppView $this
 */
?>

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom"><?= __('Fields') ?></h2>
    </div>
</header>

<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><?= __('Field') ?></h3>
                    </div>

                    <div class="card-body">
                        <?= $this->Form->create($field) ?>
                        <?php
                        echo $this->Form->control('title');
                        echo $this->Form->control('body');
                        echo $this->Form->control('type', [
                            'options' => $fieldsType
                        ]);
                        echo $this->Form->control('published');
                        ?>

                        <?= $this->Form->button(__('Submit')) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>