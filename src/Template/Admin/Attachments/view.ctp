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
<?= $this->Flash->render() ?>

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
                                <th scope="row"><?= __('File') ?></th>
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
                                <th scope="row"><?= __('Sector') ?></th>
                                <td><?= $attachment->has('sector') ? $this->Html->link($attachment->sector->title, ['controller' => 'Sectors', 'action' => 'view', $attachment->sector->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Id') ?></th>
                                <td><?= $this->Number->format($attachment->id) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Link') ?></th>
                                <td><?= $this->Html->link(__('Download file'), $attachment->directory . '/' . $attachment->file) ?></td>
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