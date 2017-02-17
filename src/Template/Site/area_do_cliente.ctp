<?
$this->assign('title','Backand - Área do cliente');
?>
<div class="wpc-top-header overlay img-bg">
	<img src="site-layout/img/top-banner.jpg" alt="banner" class="hidden">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="wrapper">
					<div class="heading">Área do cliente</div>
					<div class="subheding">
						<a href="<?=$this->Url->build(['action'=>'index'])?>" class="link">home</a><span class="round"></span>
						<a href="javascript:;" class="link active">Área do cliente</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="wpc-register">
	<div class="container no-padding-sm">
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<?=$this->Form->create(null,['class'=>'wpc-comments-form','url'=>['action'=>'sendLogin']]);?>
					<div class="title-form">Entrar na sua conta</div>
					<div class="subtitle">Área privada para gerenciar seus sites.</div>
					<?=$this->Form->email('username',['placeholder'=>'E-mail', 'class'=>'input','required'])?>
					<?=$this->Form->password('password',['placeholder'=>'Senha', 'class'=>'input password','required'])?>
					<div class="text-right text-xs-left">
						<input type="submit" class="wpc-btn" value="Entrar">
					</div>
				<?=$this->Form->end();?>
			</div>
		</div>
	</div>
</div>