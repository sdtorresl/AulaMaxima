<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SectorsService[]|\Cake\Collection\CollectionInterface $sectorsServices
 */
?>

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom"><?= __('Sectors Services') ?></h2>
    </div>
</header>

<section class="tables table-hover">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><?= __('Sectors Services') ?></h3>
                    </div>

                    <div class="card-body">
                        <table class="table" cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col"><?= $this->Paginator->sort('sector_id') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('service_id') ?></th>
                                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($sectorsServices as $sectorsService): ?>
                                <tr>
                                    <td><?= $sectorsService->has('sector') ? $this->Html->link($sectorsService->sector->title, ['controller' => 'Sectors', 'action' => 'view', $sectorsService->sector->id]) : '' ?></td>
                                    <td><?= $sectorsService->has('service') ? $this->Html->link($sectorsService->service->name, ['controller' => 'Services', 'action' => 'view', $sectorsService->service->id]) : '' ?></td>
                                    <td class="actions">
                                        <!-- View -->
                                        <?= $this->Html->link(
                                            [$this->Html->tag('i', '', ['class' => 'icon-search'])],
                                            ['action' => 'view', $sectorsService->sector_id],
                                            ['escape' => false]
                                        ); ?>
                                        <!-- Edit -->
                                        <?= $this->Html->link(
                                            [$this->Html->tag('i', '', ['class' => 'icon-form'])],
                                            ['action' => 'edit', $sectorsService->sector_id],
                                            ['escape' => false]
                                        ); ?>
                                        <!-- Delete -->
                                        <?= $this->Form->postLink(
                                            [$this->Html->tag('i', '', ['class' => 'icon-close'])],
                                            ['action' => 'delete', $sectorsService->sector_id],
                                            [
                                                'escape' => false,
                                                'confirm' => __('Are you sure you want to delete # {0}?', $sectorsService->sector_id)
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
                            __('New Sectors Service'),
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