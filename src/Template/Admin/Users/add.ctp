<?php
/**
 * @var \App\View\AppView $this
 */
?>

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom"><?= __('Administration') ?></h2>
    </div>
</header>

<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><?= __('Add User') ?></h3>
                    </div>

                    <div class="card-body">
                        <?= $this->Form->create($user) ?>
                        <?php
                        echo $this->Form->control('username');
                        echo $this->Form->control('email');
                        echo $this->Form->control('password');
                        echo $this->Form->control('first_name');
                        echo $this->Form->control('last_name');
                        echo $this->Form->control('role', [
                            'options' => ['admin' => __('Administrator')]
                        ]);
                        ?>

                        <?= $this->Form->button(__('Add User')) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>