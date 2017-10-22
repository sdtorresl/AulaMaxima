<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BusinessLine[]|\Cake\Collection\CollectionInterface $businessLines
 */
?>

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom"><?= __('Business Lines') ?></h2>
    </div>
</header>

<section class="tables table-hover">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><?= __('Business Lines') ?></h3>
                    </div>

                    <div class="card-body">
                        <table class="table" cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('background') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('background_dir') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('main_picture') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('main_picture_dir') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('secondary_picture') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('secondary_picture_dir') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($businessLines as $businessLine): ?>
                                <tr>
                                    <td><?= $this->Number->format($businessLine->id) ?></td>
                                    <td><?= h($businessLine->title) ?></td>
                                    <td><?= h($businessLine->background) ?></td>
                                    <td><?= h($businessLine->background_dir) ?></td>
                                    <td><?= h($businessLine->main_picture) ?></td>
                                    <td><?= h($businessLine->main_picture_dir) ?></td>
                                    <td><?= h($businessLine->secondary_picture) ?></td>
                                    <td><?= h($businessLine->secondary_picture_dir) ?></td>
                                    <td><?= h($businessLine->created) ?></td>
                                    <td><?= h($businessLine->modified) ?></td>
                                    <td class="actions">
                                        <!-- View -->
                                        <?= $this->Html->link(
                                            [$this->Html->tag('i', '', ['class' => 'icon-search'])],
                                            ['action' => 'view', $businessLine->id],
                                            ['escape' => false]
                                        ); ?>
                                        <!-- Edit -->
                                        <?= $this->Html->link(
                                            [$this->Html->tag('i', '', ['class' => 'icon-form'])],
                                            ['action' => 'edit', $businessLine->id],
                                            ['escape' => false]
                                        ); ?>
                                        <!-- Delete -->
                                        <?= $this->Form->postLink(
                                            [$this->Html->tag('i', '', ['class' => 'icon-close'])],
                                            ['action' => 'delete', $businessLine->id],
                                            [
                                                'escape' => false,
                                                'confirm' => __('Are you sure you want to delete # {0}?', $businessLine->id)
                                            ]
                                        ); ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="container">
                        <?= $this->Html->link(
                            __('New Business Line'),
                            ['action' => 'add'],
                            ['class' => 'btn btn-primary']
                        ); ?>
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