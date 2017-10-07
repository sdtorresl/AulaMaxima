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
        <legend><?= __('Agregar Usuario') ?></legend>
        <?php
            echo $this->Form->control('first_name', ['label' => __('Nombre')]);
            echo $this->Form->control('last_name', ['label' => __('Apellido')]);
            echo $this->Form->control('username', ['label' => __('Nombre de Usuario')]);
            echo $this->Form->control('email', ['label' => __('Correo')]);
            echo $this->Form->control('password', ['label' => __('Contraseña')]);
            echo $this->Form->control('password_confirmation', ['label' => __('Confirmación de contraseña')]);
            echo $this->Form->control('role', ['options' => ['admin' => __('Administrador')], 'label' => __('Tipo de usuario')]);
            // echo $this->Form->control('last_access', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Agregar')) ?>
    <?= $this->Form->end() ?>
</div>
