<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
*/
?>

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom"><?= __('Administration') ?></h2>
    </div>
</header>

<section class="tables table-hover">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><?= __('Users') ?></h3>
                    </div>

                    <div class="card-body">
                        <table class="table" cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                                    <!-- <th scope="col"><?= $this->Paginator->sort('last_access') ?></th> -->
                                    <!-- <th scope="col"><?= $this->Paginator->sort('created') ?></th> -->
                                    <!-- <th scope="col"><?= $this->Paginator->sort('modified') ?></th> -->
                                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?= $this->Number->format($user->id) ?></td>
                                    <td><?= h($user->username) ?></td>
                                    <td><?= h($user->email) ?></td>
                                    <td><?= h($user->first_name) ?></td>
                                    <td><?= h($user->last_name) ?></td>
                                    <td><?= h($user->role) ?></td>
                                    <!-- <td><?= h($user->last_access) ?></td> -->
                                    <!-- <td><?= h($user->created) ?></td> -->
                                    <!-- <td><?= h($user->modified) ?></td> -->
                                    <td class="actions">
                                        <!-- View -->
                                        <?= $this->Html->link(
                                            [$this->Html->tag('i', '', ['class' => 'icon-search'])],
                                            ['action' => 'view', $user->id],
                                            ['escape' => false]
                                        ); ?>
                                        <!-- Edit -->
                                        <?= $this->Html->link(
                                            [$this->Html->tag('i', '', ['class' => 'icon-form'])],
                                            ['action' => 'edit', $user->id],
                                            ['escape' => false]
                                        ); ?>
                                        <!-- Delete -->
                                        <?= $this->Form->postLink(
                                            [$this->Html->tag('i', '', ['class' => 'icon-close'])],
                                            ['action' => 'delete', $user->id],
                                            [
                                                'escape' => false,
                                                'confirm' => __('Are you sure you want to delete # {0}?', $user->id)
                                            ]
                                        ); ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="container">
                        <div class="row">                 
                            <div class="col ">
                                <?= $this->Html->link(
                                    __('Add User'),
                                    ['action' => 'add'],
                                    ['class' => 'btn btn-primary align-self-end']
                                ); ?>
                            </div>
                        </div>
                    </div>

                    <nav class="container-fluid">
                        <ul class="pagination">
                            <?= $this->Paginator->first('<< ') ?>
                            <?= $this->Paginator->prev('< ') ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(' >') ?>
                            <?= $this->Paginator->last(' >>') ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
</section>