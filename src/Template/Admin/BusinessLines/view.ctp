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
                        <h3 class="h4"><?= h($businessLine->title) ?></h3>
                    </div>
                    <div class="card-body">


                        <h4><?= __('Description') ?></h4>
                        <?= $this->Text->autoParagraph(h($businessLine->description)); ?>

                        <table class="table table-striped table-hover">
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

                        <h4><?= __('Background Image') ?></h4>
                    <?php if ($businessLine->background): ?>
                        <figure class="thumbnail">
                            <?= $this->Html->Image('../' . $businessLine->background_dir . '/thumbnail-' . $businessLine->background, ['fullBase' => true]); ?>
                        </figure>
                    <?php else: ?>
                        <p><?= __('No image has been updated') ?></p>
                    <?php endif;?>

                        <h4><?= __('Main Picture') ?></h4>
                    <?php if ($businessLine->main_picture): ?>
                        <figure class="thumbnail">
                            <?= $this->Html->Image('../' . $businessLine->main_picture_dir . '/thumbnail-' . $businessLine->main_picture, ['fullBase' => true]); ?>
                        </figure>
                    <?php else: ?>
                        <p><?= __('No image has been updated') ?></p>
                    <?php endif;?>

                        <h4><?= __('Secondary Picture') ?></h4>
                    <?php if ($businessLine->secondary_picture): ?>
                        <figure class="thumbnail">
                            <?= $this->Html->Image('../' . $businessLine->secondary_picture_dir . '/thumbnail-' . $businessLine->secondary_picture, ['fullBase' => true]); ?>
                        </figure>
                    <?php else: ?>
                        <p><?= __('No image has been updated') ?></p>
                    <?php endif;?>
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