
        <?php $this->load->view('layout/navbar'); ?>

            <div class="page-wrap">
 
            <?php $this->load->view('layout/sidebar'); ?>
               
                <div class="main-content">

                    <div class="container-fluid">

                    <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title" >
                        <i class="<?php echo $icone_view; ?>" style="background-color: #eb525d"></i>
                            <div class="d-inline">
                                <h5><?php echo $titulo ?></h5>
                                <span><?php echo $sub_titulo ?></span>
                            </div>
                        </div>
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

                        <?php if ($message = $this->session->flashdata('info')): ?>
                            <div class="row">
                            <div class="col-md-12">
                            <div class="alert bg-info alert-info text-white alert-dismissible fade show" role="alert">
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
             <!-- Vagas e categorias-->
            <div class="row">
              <div class="col-md-12">
              <div class="card">
             <div class="card-header d-block text-center" style="color: #eb525d; font-weight: 700; font-size: 1.3em">SITUAÇÃO VAGAS</div> 
             <div class="card-body">
                
            <div class="row">
            <!-- Veículo pequeno -->
            <div class="col-lg-6 col-md-4 col-6">
                <p class="text-center text-uppercase small" style="font-weight: 500; font-size: 1em">
                    Veículo pequeno 
                    <?php echo "(" . count($vagas_ocupadas_pequeno) . "/" . $numero_vagas_pequeno->vagas . ")"; ?>
                    <?php echo ($numero_vagas_pequeno->precificacao_ativa == 0 ? '<span class="text-danger font-weight-bold">&nbsp;<i class="fas fa-ban"></i>&nbsp;Desativado</span>' : ''); ?>
                </p>
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
                   <p class="text-center text-uppercase small" style="font-weight: 500; font-size: 1em">Veículo médio
                        <?php echo "(" . count($vagas_ocupadas_medio) . "/" . $numero_vagas_medio->vagas . ")"; ?>
                        <?php echo ($numero_vagas_medio->precificacao_ativa == 0 ? '<span class="text-danger font-weight-bold">&nbsp;<i class="fas fa-ban"></i>&nbsp;Desativado</span>' : ''); ?>
                    </p>
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
                   <p class="text-center text-uppercase small" style="font-weight: 500; font-size: 1em">Veículo grande
                        <?php echo "(" . count($vagas_ocupadas_grande) . "/" . $numero_vagas_grande->vagas . ")"; ?>
                        <?php echo ($numero_vagas_grande->precificacao_ativa == 0 ? '<span class="text-danger font-weight-bold">&nbsp;<i class="fas fa-ban"></i>&nbsp;Desativado</span>' : ''); ?>
                    </p>
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
                   <p class="text-center text-uppercase small" style="font-weight: 500; font-size: 1em">Veículo moto
                        <?php echo "(" . count($vagas_ocupadas_moto) . "/" . $numero_vagas_moto->vagas . ")"; ?>
                        <?php echo ($numero_vagas_moto->precificacao_ativa == 0 ? '<span class="text-danger font-weight-bold">&nbsp;<i class="fas fa-ban"></i>&nbsp;Desativado</span>' : ''); ?>
                    </p>
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
            <!-- Fim vagas e categorias da home -->
                    
                    </div>
                </div>

                <footer class="footer">
                    <div class="w-100 clearfix">
                        <span class="text-center text-sm-left d-md-inline-block">Copyright © <?php echo date('Y'); ?> Vaga Segura. Projeto Eng. de Software.</span>
                    </div>
                </footer>
                
            </div>


        