<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sectors'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sectors form large-9 medium-8 columns content">
    <?= $this->Form->create($sector) ?>
    <fieldset>
        <legend><?= __('Add Sector') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('picture');
            echo $this->Form->control('picture_dir');
            echo $this->Form->control('business_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
