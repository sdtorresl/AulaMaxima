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

<section id="business-line">
    <aside id="business-picture">
        <figure>
            <?= $this->Html->Image('../' . $businessLine->background_dir . '/' . $businessLine->background, ['fullBase' => true, 'alt' => h($businessLine->title)]); ?>
        </figure>
    </aside>

    <article class="info">
        <div class="title">
            <h3><?= __('Aim:') ?></h3>
        </div>

        <div class="description">
            <p><?= __($businessLine->description) ?></p>
        </div>

        <?php foreach ($businessLine->sectors as $sector): ?>
        <div class="link">
            <?= $this->Html->link(
                $sector->title,
                ['controller' => 'Sectors', 'action' => 'view', $sector->id]
            ); ?>
        </div>
        <?php endforeach; ?>
    </article>
</section>