<!-- Side Navbar -->
<nav class="side-navbar">
	<!-- Sidebar Header-->
	<div class="sidebar-header d-flex align-items-center">
		<div class="avatar">
			<!-- <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"> -->
			<?= $this->Html->image('project-1.jpg', ['class' => 'img-fluid rounded-circle']); ?>
		</div>
		<div class="title">
			<h1 class="h4"><?= $userData['first_name'] . ' ' . $userData['last_name'] ?></h1>
			<?php if ($userData['role'] == 'admin'): ?>
			<p><?= __('Administrator') ?> </p>
			<?php endif; ?>
		</div>
	</div>
	
	<!-- Sidebar Navidation Menus-->
	
	<span class="heading"><?= __('Admin') ?></span>
	<ul class="list-unstyled">
		<li>
			<?= $this->Html->link(
				[
					$this->Html->tag('i', '', ['class' => 'icon-home']),
					__('Home')
				],
				[
					'controller' => 'Admin',
					'action' => 'home',
					'prefix' => false
				],
				['escape' => false]
			); ?>
		</li>
		<li>
			<a href="#users-menu" aria-expanded="false" data-toggle="collapse">
				<i class="icon-user"></i><?= __('Users') ?>
			</a>
			<ul id="users-menu" class="collapse list-unstyled">
				<li><?= $this->Html->link(__('List'), ['controller' => 'Users', 'action' => 'index', 'prefix' => 'admin']); ?></li>
				<li><?= $this->Html->link(__('Add'), ['controller' => 'Users', 'action' => 'add', 'prefix' => 'admin']); ?></li>
			</ul>
		</li>
		<li>
			<a href="#pages-menu" aria-expanded="false" data-toggle="collapse">
				<i class="icon-list"></i><?= __('Pages') ?>
			</a>
			<ul id="pages-menu" class="collapse list-unstyled">
				<li><?= $this->Html->link(__('List'), ['controller' => 'Fields', 'action' => 'index', 'prefix' => 'admin']); ?></li>
				<li><?= $this->Html->link(__('Add'), ['controller' => 'Fields', 'action' => 'add', 'prefix' => 'admin']); ?></li>
			</ul>
		</li>
	</ul>
	<span class="heading"><?= __('Content') ?></span>
	<ul class="list-unstyled">
		<li>
			<a href="#business-lines-menu" aria-expanded="false" data-toggle="collapse">
				<i class="icon-presentation"></i><?= __('Business Lines') ?>
			</a>
			<ul id="business-lines-menu" class="collapse list-unstyled">
				<li><?= $this->Html->link(__('List'), ['controller' => 'BusinessLines', 'action' => 'index', 'prefix' => 'admin']); ?></li>
				<li><?= $this->Html->link(__('Add'), ['controller' => 'BusinessLines', 'action' => 'add', 'prefix' => 'admin']); ?></li>
			</ul>
		</li>
		<li>
			<a href="#sectors-menu" aria-expanded="false" data-toggle="collapse">
				<i class="icon-list"></i><?= __('Sectors') ?>
			</a>
			<ul id="sectors-menu" class="collapse list-unstyled">
				<li><?= $this->Html->link(__('List'), ['controller' => 'Sectors', 'action' => 'index', 'prefix' => 'admin']); ?></li>
				<li><?= $this->Html->link(__('Add'), ['controller' => 'Sectors', 'action' => 'add', 'prefix' => 'admin']); ?></li>
			</ul>
		</li>
		<li>
			<a href="#services-menu" aria-expanded="false" data-toggle="collapse">
				<i class="icon-list"></i><?= __('Services') ?>
			</a>
			<ul id="services-menu" class="collapse list-unstyled">
				<li><?= $this->Html->link(__('List'), ['controller' => 'Services', 'action' => 'index', 'prefix' => 'admin']); ?></li>
				<li><?= $this->Html->link(__('Add'), ['controller' => 'Services', 'action' => 'add', 'prefix' => 'admin']); ?></li>
			</ul>
		</li>
	</ul>
	<span class="heading"><?= __('Forms') ?></span>
	<ul class="list-unstyled">
		<li>
			<?= $this->Html->link(
			[
				$this->Html->tag('i', '', ['class' => 'icon-mail']),
				__('Contacts')
			],
			['controller' => 'Contacts', 'action' => 'index', 'prefix' => 'admin'],
			['escape' => false]
			); ?>
		</li>
	</ul>
</nav>