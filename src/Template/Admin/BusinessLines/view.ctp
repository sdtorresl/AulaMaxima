<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BusinessLine $businessLine
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Business Line'), ['action' => 'edit', $businessLine->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Business Line'), ['action' => 'delete', $businessLine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $businessLine->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Business Lines'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Business Line'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="businessLines view large-9 medium-8 columns content">
    <h3><?= h($businessLine->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($businessLine->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Background') ?></th>
            <td><?= h($businessLine->background) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Background Dir') ?></th>
            <td><?= h($businessLine->background_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Main Picture') ?></th>
            <td><?= h($businessLine->main_picture) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Main Picture Dir') ?></th>
            <td><?= h($businessLine->main_picture_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Secondary Picture') ?></th>
            <td><?= h($businessLine->secondary_picture) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Secondary Picture Dir') ?></th>
            <td><?= h($businessLine->secondary_picture_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($businessLine->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($businessLine->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($businessLine->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($businessLine->description)); ?>
    </div>
</div>
