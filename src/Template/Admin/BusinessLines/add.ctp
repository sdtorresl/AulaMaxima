<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Business Lines'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="businessLines form large-9 medium-8 columns content">
    <?= $this->Form->create($businessLine, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Business Line') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('background', ['type' => 'file']);
            echo $this->Form->control('main_picture', ['type' => 'file']);
            echo $this->Form->control('secondary_picture', ['type' => 'file']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>