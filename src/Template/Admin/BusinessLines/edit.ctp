<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $businessLine->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $businessLine->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Business Lines'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="businessLines form large-9 medium-8 columns content">
    <?= $this->Form->create($businessLine) ?>
    <fieldset>
        <legend><?= __('Edit Business Line') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('background');
            echo $this->Form->control('background_dir');
            echo $this->Form->control('main_picture');
            echo $this->Form->control('main_picture_dir');
            echo $this->Form->control('secondary_picture');
            echo $this->Form->control('secondary_picture_dir');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
