<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attachment $attachment
 */
?>

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom"><?= h('Attachments') ?></h2>
    </div>
</header>

<section class="tables">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><?= h($attachment->name) ?></h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th scope="row"><?= __('Name') ?></th>
                                <td><?= h($attachment->name) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('file') ?></th>
                                <td><?= h($attachment->file) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Directory') ?></th>
                                <td><?= h($attachment->directory) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Type') ?></th>
                                <td><?= h($attachment->type) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Service') ?></th>
                                <td><?= $attachment->has('service') ? $this->Html->link($attachment->service->name, ['controller' => 'Services', 'action' => 'view', $attachment->service->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Id') ?></th>
                                <td><?= $this->Number->format($attachment->id) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Created') ?></th>
                                <td><?= h($attachment->created) ?></td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="container">
                        <?= $this->Html->link(
                            __('Edit Attachment'),
                            ['action' => 'edit', $attachment->id],
                            ['class' => 'btn btn-primary']
                        ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>