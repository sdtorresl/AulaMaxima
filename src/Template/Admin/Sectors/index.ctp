<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sector[]|\Cake\Collection\CollectionInterface $sectors
 */
?>

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom"><?= __('Sectors') ?></h2>
    </div>
</header>

<section class="tables table-hover">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><?= __('Sectors') ?></h3>
                    </div>

                    <div class="card-body">
                        <table class="table" cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('business_id') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($sectors as $sector): ?>
                                <tr>
                                    <td><?= $this->Number->format($sector->id) ?></td>
                                    <td><?= h($sector->title) ?></td>
                                    <td><?= $sector->has('business_line') ? $this->Html->link($sector->business_line->id, ['controller' => 'BusinessLines', 'action' => 'view', $sector->business_line->id]) : '' ?></td>
                                    <td><?= h($sector->created) ?></td>
                                    <td><?= h($sector->modified) ?></td>
                                    <td class="actions">
                                        <!-- View -->
                                        <?= $this->Html->link(
                                            [$this->Html->tag('i', '', ['class' => 'icon-search'])],
                                            ['action' => 'view', $sector->id],
                                            ['escape' => false]
                                        ); ?>
                                        <!-- Edit -->
                                        <?= $this->Html->link(
                                            [$this->Html->tag('i', '', ['class' => 'icon-form'])],
                                            ['action' => 'edit', $sector->id],
                                            ['escape' => false]
                                        ); ?>
                                        <!-- Delete -->
                                        <?= $this->Form->postLink(
                                            [$this->Html->tag('i', '', ['class' => 'icon-close'])],
                                            ['action' => 'delete', $sector->id],
                                            [
                                                'escape' => false,
                                                'confirm' => __('Are you sure you want to delete # {0}?', $sector->id)
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
                                    __('New Sector'),
                                    ['action' => 'add'],
                                    ['class' => 'btn btn-primary']
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