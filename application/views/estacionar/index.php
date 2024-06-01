
        <?php $this->load->view('layout/navbar'); ?>

<div class="page-wrap">

<?php $this->load->view('layout/sidebar'); ?>
   
<div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                        <i class="<?php echo $icone_view; ?>" style="background-color: #eb525d"></i>
                            <div class="d-inline">
                                <h5><?php echo $titulo ?></h5>
                                <span><?php echo $sub_titulo ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <nav class="breadcrumb-container" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a title="Home" href="<?php echo base_url('/'); ?>"><i class="ik ik-home"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <?php if ($message = $this->session->flashdata('sucesso')): ?>
                <div class="row">
                <div class="col-md-12">
                <div class="alert bg-success alert-success text-white alert-dismissible fade show" role="alert">
                    <strong><i class="far fa-smile-wink"></i>&nbsp;<?php echo $message ?></strong> 
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="ik ik-x"></i>
                    </button>
                     </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($message = $this->session->flashdata('error')): ?>
                <div class="row">
                <div class="col-md-12">
                <div class="alert bg-danger alert-danger text-white alert-dismissible fade show" role="alert">
                    <strong><i class="far fa-smile-wink"></i>&nbsp;<?php echo $message ?></strong> 
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="ik ik-x"></i>
                    </button>
                     </div>
                </div>
            </div>
            <?php endif; ?>

         <div class="row">
              <div class="col-md-12">
             <div class="card">

            <div class="card-header d-block">
                <a class="btn bg-success float-right text-white" data-toggle="tooltip" data-placement="right" title="Cadastrar <?php echo $this->router->fetch_class(); ?>"
                href="<?php echo base_url($this->router->fetch_class().'/core/'); ?>"><i class="fas fa-plus"></i> Novo ticket</a>
            </div>
            <div class="card-body">
            <div class="table-responsive-sm">
            <table class="table data-table table-md pl-10 pr-10">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Categoria</th>
                            <th>Valor hora</th>
                            <th>Placa</th>
                            <th>Forma de pagamento</th>
                            <th>Status</th>
                            <th class="nosort text-right pr-25">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($estacionados as $estacionado) : ?>
                            <tr>
                                <td><?php echo $estacionado->estacionar_id ; ?></td>
                                <td><?php echo $estacionado->precificacao_categoria ; ?></td>
                                <td><?php echo 'R$&nbsp;'.$estacionado->precificacao_valor_hora ; ?></td>
                                <td><?php echo $estacionado->estacionar_placa_veiculo ; ?></td>
                                <td><?php echo ($estacionado->estacionar_status == 1 ? $estacionado->forma_pagamento_nome : 'Em aberto'); ?></td>
                                <td><?php echo ($estacionado->estacionar_status == 1 ?'<span class="badge badge-pill badge-success mb-1">Pago</span>' : '<span class="badge badge-pill badge-warning mb-1">Em aberto</span>'); ?></td> 
                                       
                                <td>
                                    <div class="text-right">
                                        <a data-toggle="tooltip" data-placement="bottom" title="Imprimir ticket" target="_blank" class="btn btn-icon bg-warning text-white" href="<?php echo base_url($this->router->fetch_class() . '/pdf/' . $estacionado->estacionar_id); ?>">
                                            <i class="fas fa-file-alt"></i>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="bottom" title="<?php echo($estacionado->estacionar_status == 1 ? 'Visualizar' : 'Encerrar' )?>&nbsp;ticket" href="<?php echo base_url($this->router->fetch_class().'/core/'. $estacionado->estacionar_id); ?>" class="btn btn-icon btn-info">
                                            <i class="<?php echo ($estacionado->estacionar_status == 1 ? 'ik ik-eye': 'ik ik-edit-2')?>"></i>
                                        </a>
                                        <button type="button"  class="btn btn-icon btn-danger" data-toggle="modal" data-target="#estacionado-<?php echo $estacionado->estacionar_id; ?>">
                                            <i class="fas fa-trash"></i>
                                        </button> 
                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="estacionado-<?php echo $estacionado->estacionar_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterLabel"><i class="fas fa-exclamation-triangle text-danger"></i>&nbsp;Tem Certeza da exclusão do registro?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                          <p>Se deseja excluir o registro, clique em <strong>Sim, excluir</strong></p>
                                      </div>
                                      <div class="modal-footer">
                                        <button  type="button" data-toggle="tooltip" data-placement="bottom" title="Cancelar" class="btn btn-secondary" data-dismiss="modal">Não, voltar</button>
                                        <a data-toggle="tooltip" data-placement="bottom" title="Excluir <?php echo $this->router->fetch_class(); ?>" href="<?php echo base_url($this->router->fetch_class().'/del/'. $estacionado->estacionar_id); ?>" class="btn btn-danger">Sim, Excluir</a>
                                    </div>
                                </div>
                            </div>
                          </div>   

                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
            </div
        </div>
    </div>

</div>


           <div class="row">
              <div class="col-md-12">
             <div class="card">
            <div class="card-header d-block text-center" style="color: #eb525d; font-weight: 700; font-size: 1.3em">SITUAÇÃO VAGAS</div> 
            <div class="card-body">
                
              <div class="row">
            <!-- Veículo pequeno -->
            <div class="col-lg-6 col-md-4 col-6">
                <p class="text-center text-uppercase small" style="font-weight: 500; font-size: 0.9em">Veículo pequeno<?php echo ($numero_vagas_pequeno->precificacao_ativa == 0 ? '<span class="text-danger font-weight-bold">&nbsp;<i class="fas fa-ban"></i>&nbsp;Desativado</span>' : ''); ?></p>
                                <div class="widget social-widget">
                                    <div class="widget-body text-center">
                                        <div class="content">    
                                        <i class="fas fa-car-side fa-4x" style="color: #eb525d"></i>
                                  </div>
                                  </div>
                                  <div>
                                <ul class="list-inline mt-15 text-center">

                                <?php
                                $ocupadas = array();
                                $placas = array();

                                foreach ($vagas_ocupadas_pequeno as $vaga) {

                                    $ocupadas [] = $vaga->estacionar_numero_vaga;
                                    $placas [$vaga->estacionar_numero_vaga] = $vaga->estacionar_placa_veiculo;
                                }
                                ?>

                                <?php for ($i = 1; $i <= $numero_vagas_pequeno->vagas; $i++) : ?>
                                <li class="list-inline-item">
                                 <?php if(in_array($i, $ocupadas)): ?>
                                <div class="widget social-widget vaga" style="background-color: #ec5353; color: white">
                                    <div class="widget-body">
                                        <div data-toggle="tooltip" data-placement="bottom" title="Placa:&nbsp;<?php echo $placas[$i] ?>" class="content">
                                            <i class="fas fa-car-side fa-lg"></i>
                                        </div>
                                    </div>
                                </div>
                                <?php else: ?>

                                    <div class="widget social-widget vaga"  style="background-color: <?php echo ($numero_vagas_pequeno->precificacao_ativa == 0 ? '#E5F9FF' : '#5dd55d;'); ?>; color: white">

                                    <div class="widget-body">
                                        <div data-toggle="tooltip" data-placement="bottom" title="<?php echo ($numero_vagas_pequeno->precificacao_ativa == 0 ? 'Desativado' : 'Livre'); ?>" class="content">
                                           <div class="number"><?php echo ($numero_vagas_pequeno->precificacao_ativa == 0 ? '<i class="fas fa-ban text-white"></i>' : $i); ?></div>
                                        </div>
                                    </div>
                                </div>

                                <?php endif; ?>
                                </li>
                                <?php endfor;?>
                                </ul>
                                </div>
                     </div>
                  </div>
                  <!-- Veículo médio -->
                  <div class="col-lg-6 col-md-4 col-6">
                   <p class="text-center text-uppercase small" style="font-weight: 500; font-size: 0.9em">Veículo médio<?php echo ($numero_vagas_medio->precificacao_ativa == 0 ? '<span class="text-danger font-weight-bold">&nbsp;<i class="fas fa-ban"></i>&nbsp;Desativado</span>' : ''); ?></p>
                                <div class="widget social-widget">
                                    <div class="widget-body text-center">
                                        <div class="content">  
                                        <i class="fas fa-truck-pickup fa-4x" style="color: #eb525d"></i>
                                  </div>
                                  </div>
                                  <div>
                                <ul class="list-inline mt-15 text-center">

                                       <?php
                                $ocupadas = array();
                                $placas = array();

                                foreach ($vagas_ocupadas_medio as $vaga) {

                                    $ocupadas [] = $vaga->estacionar_numero_vaga;
                                    $placas [$vaga->estacionar_numero_vaga] = $vaga->estacionar_placa_veiculo;
                                }
                                ?>
                               

                                <?php for ($i = 1; $i <= $numero_vagas_medio->vagas; $i++) : ?>
                                   <li class="list-inline-item">
                                 <?php if(in_array($i, $ocupadas)): ?>
                                <div class="widget social-widget vaga" style="background-color: #ec5353; color: white">
                                    <div class="widget-body">
                                        <div data-toggle="tooltip" data-placement="bottom" title="Placa:&nbsp;<?php echo $placas[$i] ?>" class="content">
                                            <i class="fas fa-truck-pickup fa-lg"></i>
                                        </div>
                                    </div>
                                </div>
                                <?php else: ?>

                                    <div class="widget social-widget vaga" style="background-color: <?php echo ($numero_vagas_medio->precificacao_ativa == 0 ? '#E5F9FF' : '#5dd55d;'); ?>; color: white">

                                    <div class="widget-body">
                                        <div data-toggle="tooltip" data-placement="bottom" title="<?php echo ($numero_vagas_medio->precificacao_ativa == 0 ? 'Desativado' : 'Livre'); ?>" class="content">
                                           <div class="number"><?php echo ($numero_vagas_medio->precificacao_ativa == 0 ? '<i class="fas fa-ban text-white"></i>' : $i); ?></div>
                                        </div>
                                    </div>
                                </div>

                                <?php endif; ?>
                                </li>
                                <?php endfor;?>
                                </ul>
                                </div>
                            </div>
                         </div>

                            <!-- Veículo grande -->
                  <div class="col-lg-6 col-md-4 col-6">
                   <p class="text-center text-uppercase small" style="font-weight: 500; font-size: 0.9em">Veículo grande<?php echo ($numero_vagas_grande->precificacao_ativa == 0 ? '<span class="text-danger font-weight-bold">&nbsp;<i class="fas fa-ban"></i>&nbsp;Desativado</span>' : ''); ?></p>
                                <div class="widget social-widget">
                                    <div class="widget-body text-center">
                                        <div class="content"> 
                                        <i class="fas fa-truck fa-4x" style="color: #eb525d"></i>
                                        
                                  </div>
                                  </div>
                                  <div>
                                <ul class="list-inline mt-15 text-center">

                                <?php
                                $ocupadas = array();
                                $placas = array();

                                foreach ($vagas_ocupadas_grande as $vaga) {

                                    $ocupadas [] = $vaga->estacionar_numero_vaga;
                                    $placas [$vaga->estacionar_numero_vaga] = $vaga->estacionar_placa_veiculo;
                                }
                                ?>

                                <?php for ($i = 1; $i <= $numero_vagas_grande->vagas; $i++) : ?>
                                        <li class="list-inline-item">
                                 <?php if(in_array($i, $ocupadas)): ?>
                                <div class="widget social-widget vaga" style="background-color: #ec5353; color: white">
                                    <div class="widget-body">
                                        <div data-toggle="tooltip" data-placement="bottom" title="Placa:&nbsp;<?php echo $placas[$i] ?>" class="content">
                                            <i class="fas fa-truck fa-lg"></i>
                                        </div>
                                    </div>
                                </div>
                                <?php else: ?>

                                    <div class="widget social-widget vaga" style="background-color: <?php echo ($numero_vagas_grande->precificacao_ativa == 0 ? '#E5F9FF;' : '#5dd55d;'); ?>; color: white">

                                    <div class="widget-body">
                                        <div data-toggle="tooltip" data-placement="bottom" title="<?php echo ($numero_vagas_grande->precificacao_ativa == 0 ? 'Desativado' : 'Livre'); ?>" class="content">
                                           <div class="number"><?php echo ($numero_vagas_grande->precificacao_ativa == 0 ? '<i class="fas fa-ban text-white"></i>' : $i); ?></div>
                                        </div>
                                    </div>
                                </div>

                                <?php endif; ?>
                                </li>
                                <?php endfor;?>
                                </ul>
                                </div>
                            </div>
                         </div>

                         <!-- Veículo Moto -->
                  <div class="col-lg-6 col-md-4 col-6">
                   <p class="text-center text-uppercase small" style="font-weight: 500; font-size: 0.9em">Veículo moto<?php echo ($numero_vagas_moto->precificacao_ativa == 0 ? '<span class="text-danger font-weight-bold">&nbsp;<i class="fas fa-ban"></i>&nbsp;Desativado</span>' : ''); ?></p>
                                <div class="widget social-widget">
                                    <div class="widget-body text-center">
                                        <div class="content"> 
                                        <i class="fas fa-motorcycle fa-4x" style="color: #eb525d"></i> 
                                        
                                  </div>
                                  </div>
                                  <div>
                                <ul class="list-inline mt-15 text-center">
                                       <?php
                                $ocupadas = array();
                                $placas = array();

                                foreach ($vagas_ocupadas_moto as $vaga) {

                                    $ocupadas [] = $vaga->estacionar_numero_vaga;
                                    $placas [$vaga->estacionar_numero_vaga] = $vaga->estacionar_placa_veiculo;
                                }
                                ?>
                                <?php for ($i = 1; $i <= $numero_vagas_moto->vagas; $i++) : ?>
                                                   <li class="list-inline-item">
                                 <?php if(in_array($i, $ocupadas)): ?>
                                <div class="widget social-widget vaga" style="background-color: #ec5353; color: white">
                                    <div class="widget-body">
                                        <div data-toggle="tooltip" data-placement="bottom" title="Placa:&nbsp;<?php echo $placas[$i] ?>" class="content">
                                            <i class="fas fa-motorcycle fa-lg"></i>
                                        </div>
                                    </div>
                                </div>
                                <?php else: ?>

                                    <div class="widget social-widget vaga" style="background-color: <?php echo ($numero_vagas_moto->precificacao_ativa == 0 ? '#E5F9FF;' : '#5dd55d;'); ?>; color: white">

                                    <div class="widget-body">
                                        <div data-toggle="tooltip" data-placement="bottom" title="<?php echo ($numero_vagas_moto->precificacao_ativa == 0 ? 'Desativado' : 'Livre'); ?>" class="content">
                                           <div class="number"><?php echo ($numero_vagas_moto->precificacao_ativa == 0 ? '<i class="fas fa-ban text-white"></i>' : $i); ?></div>
                                        </div>
                                    </div>
                                </div>

                                <?php endif; ?>
                                </li>
                                <?php endfor;?>
                                </ul>
                                </div>
                            </div>
                         </div>

                       </div>

                        </div>
                    </div>
                </div>
            </div>

            </div>
            </div>
    </div>
</div>


</div>
    </div>

    <footer class="footer">
        <div class="w-100 clearfix">
            <span class="text-center text-sm-left d-md-inline-block">Copyright © <?php echo date('Y'); ?> Vaga Segura. Projeto Eng. de Software.</span>
        </div>
    </footer>
    
</div>


