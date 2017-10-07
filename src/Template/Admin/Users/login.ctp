<div class="container d-flex align-items-center">
	<div class="form-holder has-shadow">
	  <div class="row">
		<!-- Logo & Information Panel-->
		<div class="col-lg-6">
		  <div class="info d-flex align-items-center">
			<div class="content">
				<div class="logo">
					<h1><?= __('Aula Máxima') ?></h1>
				</div>
			 	<p><?= __('Administrative Panel') ?></p>
			</div>
		  </div>
		</div>
		<!-- Form Panel    -->
		<div class="col-lg-6 bg-white">
		  <div class="form d-flex align-items-center">
			<div class="content">

			  	<?= $this->Form->create() ?>
					<div class="form-group">
						<?= $this->Form->input('username', [
								'class' => 'input-material',
								'id' => 'username',
								'label' => [
									'text' => __('Username'),
									'class' => 'label-material input-material'
								]
							]) ?>
					</div>

					<div class="form-group">
						<?= $this->Form->input('password', [
								'class' => 'input-material',
								'id' => 'password',
								'label' => [
									'text' => __('Password'),
									'class' => 'label-material'
								]
							]) ?>
					</div>
						
					
				<?= $this->Form->button(__('Login'), [
						'id' => 'login',
						'class' => 'btn btn-primary'
					]); ?>

				<?= $this->Form->end() ?>

			  <a href="#" class="forgot-pass"><?= __('Forgot your password?') ?></a>
			  <br>
			  <small><?= __('Don\'t have an account?') ?></small>
			  <a href="register.html" class="signup"><?=__('Request for one') ?></a>
			</div>
		  </div>
		</div>
	  </div>
	</div>
</div>