<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SectorsService $sectorsService
 */
?>

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom"><?= h('Sectors Services') ?></h2>
    </div>
</header>

<section class="tables">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><?= h($sectorsService->sector_id) ?></h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th scope="row"><?= __('Sector') ?></th>
                                <td><?= $sectorsService->has('sector') ? $this->Html->link($sectorsService->sector->title, ['controller' => 'Sectors', 'action' => 'view', $sectorsService->sector->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Service') ?></th>
                                <td><?= $sectorsService->has('service') ? $this->Html->link($sectorsService->service->name, ['controller' => 'Services', 'action' => 'view', $sectorsService->service->id]) : '' ?></td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="container">
                        <?= $this->Html->link(
                            __('Edit Sectors Service'),
                            ['action' => 'edit', $sectorsService->sector_id],
                            ['class' => 'btn btn-primary']
                        ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>