<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Field $field
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Field'), ['action' => 'edit', $field->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Field'), ['action' => 'delete', $field->id], ['confirm' => __('Are you sure you want to delete # {0}?', $field->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fields'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Field'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fields view large-9 medium-8 columns content">
    <h3><?= h($field->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($field->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($field->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($field->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($field->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Published') ?></th>
            <td><?= $field->published ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($field->body)); ?>
    </div>
</div>
