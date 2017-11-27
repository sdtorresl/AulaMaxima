<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BusinessLine[]|\Cake\Collection\CollectionInterface $businessLines
 */
?>

<!-- Page Header-->
<header class="page-header">
    <figure class="icon">
        <?= $this->Html->image("icons/icon-home.png", ['alt' => __("Home")]) ?>
    </figure>
    <h2 class="page-title"><?= __('Home') ?></h2>
</header>

<aside class="quote">
    <h2>Saber y saber hacer, es aprender a vivir y compartir</h2>
</aside>

<article class="intro">
    <h2>Aula Máxima</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id vero ducimus asperiores! Iste quibusdam, doloribus laboriosam sunt recusandae fugiat dignissimos libero eveniet repellendus, atque accusamus modi rem repudiandae magnam labore.</p>
</article>

<section class="main">
    <?php foreach ($businessLines as $businessLine): ?>
    <article class="business-lines">
        <figure><img src="<?= $businessLine->background_dir . $businessLine->background ?>" alt="<?= h($businessLine->title) ?>"></figure>
        
        <div class="item">
            <div class="title">
                <h2><?= h($businessLine->title) ?></h2>
            </div>
            <div class="description">
                <p><?= h($businessLine->description) ?></p>
                <?= $this->Html->link(__("Read about our projects"), ['action' => 'view', $businessLine->id]); ?>
            </div>
        </div>
    </article>
    <?php endforeach; ?>
</section>