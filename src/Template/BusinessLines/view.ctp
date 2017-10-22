<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BusinessLine $businessLine
 */
?>

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom"><?= h('Business Lines') ?></h2>
    </div>
</header>

<section class="tables">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><?= h($businessLine->id) ?></h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th scope="row"><?= __('Title') ?></th>
                                <td><?= h($businessLine->title) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Background') ?></th>
                                <td><?= h($businessLine->background) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Background Dir') ?></th>
                                <td><?= h($businessLine->background_dir) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Main Picture') ?></th>
                                <td><?= h($businessLine->main_picture) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Main Picture Dir') ?></th>
                                <td><?= h($businessLine->main_picture_dir) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Secondary Picture') ?></th>
                                <td><?= h($businessLine->secondary_picture) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Secondary Picture Dir') ?></th>
                                <td><?= h($businessLine->secondary_picture_dir) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Id') ?></th>
                                <td><?= $this->Number->format($businessLine->id) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Created') ?></th>
                                <td><?= h($businessLine->created) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Modified') ?></th>
                                <td><?= h($businessLine->modified) ?></td>
                            </tr>
                        </table>
                        <div class="row">
                            <h4><?= __('Description') ?></h4>
                            <?= $this->Text->autoParagraph(h($businessLine->description)); ?>
                        </div>
                    </div>
                    
                    <div class="container">
                        <?= $this->Html->link(
                            __('Edit Business Line'),
                            ['action' => 'edit', $businessLine->id],
                            ['class' => 'btn btn-primary']
                        ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>