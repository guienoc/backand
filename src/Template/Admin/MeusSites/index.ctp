<?
$this->assign('title','Backand Admin - Meus Domínios');
?>
<div class="wpc-top-header overlay img-bg">
    <img src="site-layout/img/top-banner.jpg" alt="banner" class="hidden">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="wrapper">
                    <div class="heading">Meus Domínios</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wpc-cart">
    <div class="container">
        <div class="row">       
            <div class="col-sm-12 no-padding">
                <?= $this->Form->create($domain,['url' => ['controller' => 'MeusSites', 'action' => 'adicionar']]) ?>

                    <nav class="wpc-nav-menu">
                        <ul class="main-menu pull-right no-margin">
                            <li class="menu-item">
                                <?php
                                echo $this->Form->text('name',['placeholder' => 'Novo Domínio: ','label' => false,'class' => 'wpc-btn email-input']);
                                ?>
                            </li>
                            <li class="menu-item active">
                                <button class="wpc-btn"  type="submit"> ADICIONAR</button>
                            </li>
                        </ul>
                    </nav>
                <?= $this->Form->end() ?> 
            </div>       
        </div>
        <div class="row">
            <div class="col-sm-12 no-padding">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-left pl20">Domínio do site</th>
                                <th class="text-center">Data de expiração</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        <? foreach ($domains as $domain) { ?>
                            <tr>
                                <td class="title pl20"><?=$domain->name?></td>
                                <td class="text-center"><?=$domain->expiration_date->format('d/m/Y')?></td>
                                <td class="text-center"></td>
                            </tr>
                        <? } ?>
             
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>