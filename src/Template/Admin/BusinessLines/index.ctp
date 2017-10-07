<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BusinessLine[]|\Cake\Collection\CollectionInterface $businessLines
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Business Line'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="businessLines index large-9 medium-8 columns content">
    <h3><?= __('Business Lines') ?></h3>
    <table cellpadding="0" cellspacing="0">
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
                    <?= $this->Html->link(__('View'), ['action' => 'view', $businessLine->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $businessLine->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $businessLine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $businessLine->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
