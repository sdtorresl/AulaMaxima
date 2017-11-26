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
                        <table class="table table-striped table-hover">
                            <tr>
                                <th scope="row"><?= __('Title') ?></th>
                                <td><?= h($sector->title) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Picture') ?></th>
                                <td><?= h($sector->picture) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Picture Dir') ?></th>
                                <td><?= h($sector->picture_dir) ?></td>
                            </tr>
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
                        <div class="row">
                            <h4><?= __('Description') ?></h4>
                            <?= $this->Text->autoParagraph(h($sector->description)); ?>
                        </div>
                        <div class="related">
                            <h4><?= __('Related Services') ?></h4>
                            <?php if (!empty($sector->services)): ?>
                            <table cellpadding="0" cellspacing="0">
                                <tr>
                                    <th scope="col"><?= __('Id') ?></th>
                                    <th scope="col"><?= __('Name') ?></th>
                                    <th scope="col"><?= __('Created') ?></th>
                                    <th scope="col"><?= __('Modified') ?></th>
                                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                                </tr>
                                <?php foreach ($sector->services as $services): ?>
                                <tr>
                                    <td><?= h($services->id) ?></td>
                                    <td><?= h($services->name) ?></td>
                                    <td><?= h($services->created) ?></td>
                                    <td><?= h($services->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Services', 'action' => 'view', $services->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Services', 'action' => 'edit', $services->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Services', 'action' => 'delete', $services->id], ['confirm' => __('Are you sure you want to delete # {0}?', $services->id)]) ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </table>
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