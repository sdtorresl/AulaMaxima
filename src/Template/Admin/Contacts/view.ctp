<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
 */
?>

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom"><?= h('Contacts') ?></h2>
    </div>
</header>

<section class="tables">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><?= h($contact->id) ?></h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th scope="row"><?= __('Email') ?></th>
                                <td><?= h($contact->email) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('First Name') ?></th>
                                <td><?= h($contact->first_name) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Last Name') ?></th>
                                <td><?= h($contact->last_name) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Id') ?></th>
                                <td><?= $this->Number->format($contact->id) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Created') ?></th>
                                <td><?= h($contact->created) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Viewed') ?></th>
                                <td><?= $contact->viewed ? __('Yes') : __('No'); ?></td>
                            </tr>
                        </table>
                        <div class="row">
                            <h4><?= __('Message') ?></h4>
                            <?= $this->Text->autoParagraph(h($contact->message)); ?>
                        </div>
                    </div>
                    
                    <div class="container">
                        <?= $this->Html->link(
                            __('Edit Contact'),
                            ['action' => 'edit', $contact->id],
                            ['class' => 'btn btn-primary']
                        ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>