<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sector $sector
 */
?>

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom"><?= h('Sectors') ?></h2>
    </div>
</header>

<section class="tables">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><?= h($sector->title) ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="description">
                            <h4><?= __('Description') ?></h4>
                            <?= $this->Text->autoParagraph(h($sector->description)); ?>
                        </div>

                        <table class="table table-striped table-hover">
                            <tr>
                                <th scope="row"><?= __('Business Line') ?></th>
                                <td><?= $sector->has('business_line') ? $this->Html->link($sector->business_line->id, ['controller' => 'BusinessLines', 'action' => 'view', $sector->business_line->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Id') ?></th>
                                <td><?= $this->Number->format($sector->id) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Created') ?></th>
                                <td><?= h($sector->created) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Modified') ?></th>
                                <td><?= h($sector->modified) ?></td>
                            </tr>
                        </table>

                        <h4><?= __('Background Image') ?></h4>
                        <?php if ($sector->picture): ?>
                            <figure class="thumbnail">
                                <?= $this->Html->Image('../' . $sector->picture_dir . '/thumbnail-' . $sector->picture, ['fullBase' => true]); ?>
                            </figure>
                        <?php else: ?>
                            <p><?= __('No image has been updated') ?></p>
                        <?php endif;?>
                        
                        <div class="related">
                            <?php if (!empty($sector->services)): ?>
                            <h4><?= __('Services') ?></h4>
                            <?php foreach ($sector->services as $service): ?>
                                <?= $this->Html->link($service->name, ['controller' => 'Services', 'action' => 'view', $service->id]) ?>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <div class="container">
                        <?= $this->Html->link(
                            __('Edit Sector'),
                            ['action' => 'edit', $sector->id],
                            ['class' => 'btn btn-primary']
                        ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>