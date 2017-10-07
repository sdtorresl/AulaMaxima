<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('first_name', ['label' => __('First name')]);
            echo $this->Form->control('last_name', ['label' => __('Last name')]);
            echo $this->Form->control('username', ['label' => __('Username')]);
            echo $this->Form->control('email', ['label' => __('Email')]);
            echo $this->Form->control('password', ['label' => __('Password')]);
            echo $this->Form->control('password_confirmation', ['label' => __('Password confirmation')]);
            echo $this->Form->control('role', ['options' => ['admin' => __('Administrator')], 'label' => __('Rol')]);
            // echo $this->Form->control('last_access', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Add')) ?>
    <?= $this->Form->end() ?>
</div>
