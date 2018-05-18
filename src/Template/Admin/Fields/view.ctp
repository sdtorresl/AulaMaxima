<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Field $field
 */
?>

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom"><?= h('Fields') ?></h2>
    </div>
</header>

<section class="tables">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><?= h($field->title) ?></h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th scope="row"><?= __('Title') ?></th>
                                <td><?= h($field->title) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Type') ?></th>
                                <td><?= h($field->type) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Id') ?></th>
                                <td><?= $this->Number->format($field->id) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Content') ?></th>
                                <td><?= h($field->body) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Created') ?></th>
                                <td><?= h($field->created) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Modified') ?></th>
                                <td><?= h($field->modified) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Published') ?></th>
                                <td><?= $field->published ? __('Yes') : __('No'); ?></td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="container">
                        <?= $this->Html->link(
                            __('Edit Field'),
                            ['action' => 'edit', $field->id],
                            ['class' => 'btn btn-primary']
                        ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>