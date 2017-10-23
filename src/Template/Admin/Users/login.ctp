<div class="container d-flex align-items-center">
	<div class="form-holder has-shadow">
	  <div class="row">
		<!-- Logo & Information Panel-->
		<div class="col-lg-6">
		  <div class="info d-flex align-items-center">
			<div class="content container-fluid">
				<div class="logo align-items-center">
					<?= $this->Html->Image('logo/vertical-logo-pequeno.png') ?>
					<p class="right"><?= __('Panel Administrativo') ?></p>
				</div>
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

			  <a href="mailto:soporte@innovaciones.co?subject=Olvidé mi contraseña&body=Hola, olvidé mi contraseña de administrador en Aula Máxima. Mi usuario es: " class="forgot-pass"><?= __('Forgot your password?') ?></a>
			  <br>
			  <small><?= __('Don\'t have an account?') ?>
			  <a href="mailto:soporte@innovaciones.co?subject=Requerir contraseña&body=Hola, necesito una cuenta de administrador para el panel de Aula Máxima. Mis datos de contacto son: %0D%0A%0D%0AUsuario:%0D%0ACorreo:%0D%0ATeléfono:" class="signup"><?=__('Request for one') ?></a> </small>
			</div>
		  </div>
		</div>
	  </div>
	</div>
</div>