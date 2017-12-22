<?php
/**
* CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
* Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
*
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
* @link          https://cakephp.org CakePHP(tm) Project
* @since         0.10.0
* @license       https://opensource.org/licenses/mit-license.php MIT License
*/
$cakeDescription = __('Aula Maxima - Servicios para el sector educativo');
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        
        <title><?= $cakeDescription ?> - <?= $this->fetch('title') ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?= $cakeDescription ?>">
        <meta name="robots" content="all,follow">
        <?= $this->Html->meta('icon') ?>

        <!-- CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <?= $this->Html->css('default.css'); ?>
        <?= $this->Html->css('tablets.css'); ?>
        <?= $this->Html->css('phones.css'); ?>
        
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    
    <body>
        <nav class="topnavbar">

            <figure>
                <?= $this->Html->Image('logo/horizontal-logo-pequeno.png', [
                    'class' => 'logo',
                    'url' => ['controller' => 'BusinessLines', 'action' => 'index']
                ])?>        
            </figure>

            <a href="#menu" id="toggle"><span></span></a>

            <ul id="menu">
                <li class="menu-item">
                    <a href="/">
                        <figure><?= $this->Html->Image('icons/icon-home.png') ?></figure>
                        <?= __('Home') ?>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="services">
                        <figure><?= $this->Html->Image('icons/icon-services.png') ?></figure>
                        <?= __('Services') ?>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="contacts/contact">
                        <figure><?= $this->Html->Image('icons/icon-contact.png') ?></figure>
                        <?= __('Contact') ?>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Content         -->
        <section class="content">  
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </section>

        <!-- Page Footer-->
        <footer class="main-footer">
            <div class="col-lg-2">
                <figure>
                    <?= $this->Html->Image('logo/vertical-logo-pequeno.png', [
                        'class' => 'logo',
                        'url' => ['controller' => 'BusinessLines', 'action' => 'index']
                    ])?> 
                </figure>
            </div>

            <div class="col-lg-8">
                <p><?= __('Aula Máxima') ?> &copy; 2017. <?= __('All rights reserved.') ?></p>
                <p><?= __('Developed by') ?> <a href="https://innovaciones.co" class="external">Innovaciones</a> &copy; 2017.</p>
            </div>

            <div class="col-lg-2">
                <div class="row">
                    <div class="col">
                        <figure>
                            <?= $this->Html->Image('icons/red-facebook.png', [
                                'url' => '#'
                            ])?> 
                        </figure>
                    </div>
                    <div class="col">
                        <figure>
                            <?= $this->Html->Image('icons/red-google.png', [
                                'url' => '#'
                            ])?> 
                        </figure>
                    </div>
                    <div class="col">
                        <figure>
                            <?= $this->Html->Image('icons/red-twitter.png', [
                                'url' => '#'
                            ])?> 
                        </figure>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<!-- Javascript files-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<?= $this->Html->script('menu'); ?>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
<script>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='//www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
</body>
</html>