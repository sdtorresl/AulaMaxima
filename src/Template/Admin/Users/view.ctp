<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom"><?= __('Administration') ?></h2>
    </div>
</header>

<section class="tables">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><?= h($user->first_name . ' ' . $user->last_name) ?></h3>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th scope="row"><?= __('Username') ?></th>
                                <td><?= h($user->username) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Email') ?></th>
                                <td><?= h($user->email) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Role') ?></th>
                                <td><?= h($user->role) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Created') ?></th>
                                <td><?= h($user->created) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Modified') ?></th>
                                <td><?= h($user->modified) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Last Access') ?></th>
                                <td><?= h($user->last_access) ?></td>
                            </tr>
                        </table>
                    </div>

                    <div class="container">
                        <?= $this->Html->link(
                            __('Edit User'),
                            ['action' => 'edit', $user->id],
                            ['class' => 'btn btn-primary']
                        ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>