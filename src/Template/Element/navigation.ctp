<!-- Side Navbar -->
<nav class="side-navbar">
	<!-- Sidebar Header-->
	<div class="sidebar-header d-flex align-items-center">
		<div class="avatar">
			<!-- <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"> -->
			<i class="icon-user rounded-circle"></i>
		</div>
		<div class="title">
			<h1 class="h4"><?= $userData['first_name'] . ' ' . $userData['last_name'] ?></h1>
			<?php if ($userData['role'] == 'admin'): ?>
			<p><?= __('Administrator') ?> </p>
			<?php endif; ?>
		</div>
	</div>
	
	<!-- Sidebar Navidation Menus-->
	
	<span class="heading"><?= __('Administration') ?></span>
	<ul class="list-unstyled">
		<li class="active">
			<?= $this->Html->link(
			array(
			$this->Html->tag('i', '', array('class' => 'icon-home')),
			__('Home')
			),
			array(
			'controller' => 'Pages',
			'action' => 'display',
			'admin'
			),
			array(
			'escape' => false
			)
			); ?>
		</li>
		<li>
			<a href="#users-menu" aria-expanded="false" data-toggle="collapse">
				<i class="icon-user"></i><?= __('Users') ?>
			</a>
			<ul id="users-menu" class="collapse list-unstyled">
				<li><?= $this->Html->link(__('List'), ['controller' => 'Users', 'action' => 'index']); ?></li>
				<li><?= $this->Html->link(__('Add'), ['controller' => 'Users', 'action' => 'add']); ?></li>
			</ul>
		</li>
		<li>
			<a href="#pages-menu" aria-expanded="false" data-toggle="collapse">
				<i class="icon-list"></i><?= __('Pages') ?>
			</a>
			<ul id="pages-menu" class="collapse list-unstyled">
				<li><?= $this->Html->link(__('List'), ['controller' => 'Fields', 'action' => 'index']); ?></li>
				<li><?= $this->Html->link(__('Add'), ['controller' => 'Fields', 'action' => 'add']); ?></li>
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
				<li><?= $this->Html->link(__('List'), ['controller' => 'BusinessLines', 'action' => 'index']); ?></li>
				<li><?= $this->Html->link(__('Add'), ['controller' => 'BusinessLines', 'action' => 'add']); ?></li>
			</ul>
		</li>
		<li>
			<a href="#sectors-menu" aria-expanded="false" data-toggle="collapse">
				<i class="icon-list"></i><?= __('Sectors') ?>
			</a>
			<ul id="sectors-menu" class="collapse list-unstyled">
				<li><?= $this->Html->link(__('List'), ['controller' => 'Sectors', 'action' => 'index']); ?></li>
				<li><?= $this->Html->link(__('Add'), ['controller' => 'Sectors', 'action' => 'add']); ?></li>
			</ul>
		</li>
	</ul>
	<span class="heading"><?= __('Forms') ?></span>
	<ul class="list-unstyled">
		<li class="active">
			<?= $this->Html->link(
			array(
			$this->Html->tag('i', '', array('class' => 'icon-mail')),
			__('Contacts')
			),
			array(
			'controller' => 'Contacts',
			'action' => 'index'
			),
			array(
			'escape' => false
			)
			); ?>
		</li>
	</ul>
</nav>