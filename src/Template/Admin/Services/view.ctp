<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom"><?= __('Services') ?></h2>
    </div>
</header>

<section class="tables">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><?= h($service->name) ?></h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th scope="row"><?= __('Name') ?></th>
                                <td><?= h($service->name) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Description') ?></th>
                                <td><?= h($service->description) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Id') ?></th>
                                <td><?= $this->Number->format($service->id) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Created') ?></th>
                                <td><?= h($service->created) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Modified') ?></th>
                                <td><?= h($service->modified) ?></td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="container">
                        <?= $this->Html->link(
                            __('Edit Service'),
                            ['action' => 'edit', $service->id],
                            ['class' => 'btn btn-primary']
                        ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>