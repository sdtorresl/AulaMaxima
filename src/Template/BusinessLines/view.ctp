<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BusinessLine[]|\Cake\Collection\CollectionInterface $businessLines
 */
?>

<!-- Page Header-->
<header class="page-header">
    <figure class="icon">
        <?= $this->Html->image("icons/icon-services.png", ['alt' => __("Services")]) ?>
    </figure>
    <h2 class="page-title"><?= h($businessLine->title) ?></h2>
</header>

<section class="business-line">
    <figure><img src="<?= '../../' . $businessLine->background_dir . $businessLine->background ?>" alt="<?= h($businessLine->title) ?>"></figure>

    <aside class="sectors-list">
        <?php foreach ($businessLine->sectors as $sector): ?>
        <div class="link">
            <?= $this->Html->link(
                $sector->title,
                ['controller' => 'Sectors', 'action' => 'view', $sector->id]
            ); ?>
        </div>
        <?php endforeach; ?>
    </aside>
</section>