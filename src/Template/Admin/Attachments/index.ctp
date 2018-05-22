<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attachment[]|\Cake\Collection\CollectionInterface $attachments
 */
?>

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom"><?= __('Attachments') ?></h2>
    </div>
</header>

<section class="tables table-hover">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><?= __('Attachments') ?></h3>
                    </div>

                    <div class="card-body">
                        <table class="table" cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                                    <!-- <th scope="col"><?= $this->Paginator->sort('file') ?></th> -->
                                    <!-- <th scope="col"><?= $this->Paginator->sort('directory') ?></th> -->
                                    <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('service_id') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($attachments as $attachment): ?>
                                <tr>
                                    <td><?= $this->Number->format($attachment->id) ?></td>
                                    <td><?= h($attachment->name) ?></td>
                                    <!-- <td><?= h($attachment->file) ?></td> -->
                                    <!-- <td><?= h($attachment->directory) ?></td> -->
                                    <td><?= h($attachment->type) ?></td>
                                    <td><?= $attachment->has('service') ? $this->Html->link($attachment->service->name, ['controller' => 'Services', 'action' => 'view', $attachment->service->id]) : '' ?></td>
                                    <td><?= h($attachment->created) ?></td>
                                    <td class="actions">
                                        <!-- View -->
                                        <?= $this->Html->link(
                                            [$this->Html->tag('i', '', ['class' => 'icon-search'])],
                                            ['action' => 'view', $attachment->id],
                                            ['escape' => false]
                                        ); ?>
                                        <!-- Edit -->
                                        <?= $this->Html->link(
                                            [$this->Html->tag('i', '', ['class' => 'icon-form'])],
                                            ['action' => 'edit', $attachment->id],
                                            ['escape' => false]
                                        ); ?>
                                        <!-- Delete -->
                                        <?= $this->Form->postLink(
                                            [$this->Html->tag('i', '', ['class' => 'icon-close'])],
                                            ['action' => 'delete', $attachment->id],
                                            [
                                                'escape' => false,
                                                'confirm' => __('Are you sure you want to delete # {0}?', $attachment->id)
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
                            __('New Attachment'),
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