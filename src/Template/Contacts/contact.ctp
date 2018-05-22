<?php
/**
 * @var \App\View\AppView $this
 */

foreach ($fields as $field) {
    if ($field->type == 'contactFormDescription' && $field->published == true) {
        $contactFormDescription = $field->body;
    }
    if ($field->type == 'contactFormAddress' && $field->published == true) {
        $contactFormAddress = $field->body;
    }
    if ($field->type == 'contactFormPhone' && $field->published == true) {
        $contactFormPhone = $field->body;
    }
}
?>

<!-- Page Header-->
<header class="page-header">
    <figure class="icon">
        <?= $this->Html->image('icons/icon-contact.png', ['alt' => __('Contact Icon')]) ?>
    </figure>

    <h2 class="page-title"><?= __('Contact') ?></h2>
</header>

<section id="contact" class="forms">
    
    <div id="contact-picture" class="parallax"></div>

    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-5 bg-black">
                        <figure class="contact-icon">
                            <?= $this->Html->image('icons/icon-contact.png', ['alt' => __('Contact Icon')]) ?>
                        </figure>
                    </div>

                    <div class="col-lg-7">

                        <div class="contact-info">
                            <p><?= $contactFormPhone ?? '' ?></p>
                            <p><?= $contactFormAddress ?? '' ?></p>
                            <p><?= $contactFormDescription ?? '' ?></p>
                        </div>

                        <?= $this->Form->create($contact) ?>
                        <?php
                        echo $this->Form->control('email', ['placeholder' => __('Email'), 'label' => false]);
                        echo $this->Form->control('name', ['placeholder' => __('Name'), 'label' => false]);
                        echo $this->Form->control('message', ['placeholder' => __('Message'), 'label' => false]);
                        // echo $this->Form->control('viewed');
                        ?>
                        
                        <div class="float-right">
                            <?= $this->Form->button(__('Submit'), ['class' => 'float-right']) ?>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>