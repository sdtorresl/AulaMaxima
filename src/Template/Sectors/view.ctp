<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sector $sector
 */
?>

<!-- Page Header-->
<header class="page-header">
    <figure class="icon">
        <?= $this->Html->image("icons/icon-services.png", ['alt' => __("Services")]) ?>
    </figure>
    <h2 class="page-title"><?= h($sector->business_line->title) ?></h2>
</header>

<section id="sector">
    <aside id="sector-picture">
        <figure>
            <?= $this->Html->Image('../' . $sector->picture_dir . '/' . $sector->picture, ['fullBase' => true, 'alt' => $sector->title]); ?>
        </figure>
    </aside>

    <article class="info">
        <div class="title">
            <h3><?= h($sector->title) ?></h3>
        </div>

        <div class="description">
            <p><?= h($sector->description) ?></p>
        </div>

        <div class="related-services">
            <?php foreach ($sector->services as $service): ?> 
            <div class="service">
                <?= h($service->name) ?>
            </div>
            <?php endforeach; ?>
        </div>
        <!--
        <div class="related-sectors">
            <?php foreach ($relatedSectors as $sector): ?> 
            <div class="sector">
                <?= h($sector->title) ?>
            </div>
            <?php endforeach; ?>
        </div>
    -->
        <div class="link contact">
            <?= $this->Html->link('Contacto', ['controller' => 'contacts', 'action' => 'contact']); ?>
        </div>
    </article>
</section>