<?
$this->assign('title','Backand - Entrar na sua conta ou criar um novo cadastro');
?>

<div class="wpc-register">
	<div class="container no-padding-sm">
		<div class="row">
			<div class="col-md-offset-3  col-md-6">
				<?=$this->Form->create($user,['class'=>'wpc-comments-form'])?>
					<div class="title-form">Registre uma conta agora</div>
					<div class="subtitle">Faça seu cadastro e veja como gerenciar seus sites é muito fácil.</div>
					<?=$this->Form->text('name',['placeholder'=>'Nome','class'=>'input','required'])?>
					<?=$this->Form->email('username',['placeholder'=>'E-mail','class'=>'input','required'])?>
					<?=$this->Form->password('password',['placeholder'=>'Senha', 'class'=>'input password','required'])?>
					<div class="text-right text-xs-left">
						<input type="submit" class="wpc-btn" value="sign up">
					</div>
				<?=$this->Form->end()?>
			</div>
		</div>
	</div>
</div>


