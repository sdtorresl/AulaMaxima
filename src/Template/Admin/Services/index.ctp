<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service[]|\Cake\Collection\CollectionInterface $services
 */
?>

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom"><?= __('Services') ?></h2>
    </div>
</header>

<section class="tables table-hover">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><?= __('Services') ?></h3>
                    </div>

                    <div class="card-body">
                        <table class="table" cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($services as $service): ?>
                                <tr>
                                    <td><?= $this->Number->format($service->id) ?></td>
                                    <td><?= h($service->name) ?></td>
                                    <td><?= h($service->created) ?></td>
                                    <td><?= h($service->modified) ?></td>
                                    <td class="actions">
                                        <!-- View -->
                                        <?= $this->Html->link(
                                            [$this->Html->tag('i', '', ['class' => 'icon-search'])],
                                            ['action' => 'view', $service->id],
                                            ['escape' => false]
                                        ); ?>
                                        <!-- Edit -->
                                        <?= $this->Html->link(
                                            [$this->Html->tag('i', '', ['class' => 'icon-form'])],
                                            ['action' => 'edit', $service->id],
                                            ['escape' => false]
                                        ); ?>
                                        <!-- Delete -->
                                        <?= $this->Form->postLink(
                                            [$this->Html->tag('i', '', ['class' => 'icon-close'])],
                                            ['action' => 'delete', $service->id],
                                            [
                                                'escape' => false,
                                                'confirm' => __('Are you sure you want to delete # {0}?', $service->id)
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
                            __('New Service'),
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