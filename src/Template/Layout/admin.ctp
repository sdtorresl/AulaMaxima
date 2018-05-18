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
$cakeDescription = __('Aula Maxima - Administrative Panel');
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <title><?= $cakeDescription ?>: <?= $this->fetch('title') ?></title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="robots" content="all,follow">
        <?= $this->Html->meta('icon') ?>

        <!-- CSS-->
        <?= $this->Html->css('bootstrap.min.css'); ?>
        <?= $this->Html->css('style.red.css', ['id' => 'theme-stylesheet']); ?>
        <?= $this->Html->css('custom.css'); ?>

        <!-- <?= $this->Html->css('base.css') ?> -->
        <!-- <?= $this->Html->css('cake.css') ?> -->
        <!-- Google fonts - Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
        <!-- Font Awesome CDN-->
        <script src="https://use.fontawesome.com/99347ac47f.js"></script>
        <!-- Font Icons CSS-->
        <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
        
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>

    <body>
        <div <?= 'class="page ' . $page . '"'; ?>>
            <!-- Main Navbar-->
            <header class="header">
                <nav class="navbar">
                    <div class="container-fluid">
                        <div class="navbar-holder d-flex align-items-center justify-content-between">
                            <!-- Navbar Header-->
                            <div class="navbar-header">
                                <!-- Navbar Brand -->
                                <a href="http://aulamaxima.innovaciones.co" target="_blank" class="navbar-brand">
                                    <div class="brand-text brand-big hidden-lg-down logo-horizontal">
                                        <?= $this->Html->Image('logo/logo-icon-white.png') ?>
                                        <span><?= __('Aula Máxima') ?></span><strong><?= __('Dashboard') ?></strong>
                                    </div>
                                    <div class="brand-text brand-small logo-horizontal">
                                        <?= $this->Html->Image('logo/logo-icon-white.png') ?>
                                    </div>
                                </a>
                                <!-- Toggle Button-->
                                <a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                            </div>
                            <!-- Navbar Menu -->
                            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                                <!-- Search-->
                                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>

                                <!-- Logout    -->
                                <li class="nav-item">
                                    <?= $this->Html->link(
                                        [
                                            __('Logout'),
                                            $this->Html->tag('i', '', ['class' => 'fa fa-sign-out']),
                                        ],
                                        [
                                            'controller' => 'Users', 
                                            'action' => 'logout',
                                            'prefix' => 'admin'
                                        ],
                                        [
                                            'class' => 'nav-link logout',
                                            'escape' => false
                                        ]
                                    ); ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="page-content d-flex align-items-stretch">
                
                <?= $this->element('navigation') ?>
                            

                <div class="content-inner">
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
                </div>
            </div>

            <!-- Page Footer-->
            <footer class="main-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <p><?= __('Aula Máxima') ?> &copy; 2017</p>
                        </div>
                        <div class="col-sm-6 text-right">
                            <p><?= __('Design by') ?> <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
                            <p><?= __('Developed by') ?> <a href="https://innovaciones.co" class="external">Innovaciones</a></p>
                            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
<!-- Javascript files-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<?= $this->Html->script('tether.min'); ?>
<?= $this->Html->script('tether.min'); ?>
<?= $this->Html->script('bootstrap.min'); ?>
<?= $this->Html->script('jquery.cookie'); ?>
<?= $this->Html->script('jquery.validate.min'); ?>
<?= $this->Html->script('front'); ?>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
<!---->
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