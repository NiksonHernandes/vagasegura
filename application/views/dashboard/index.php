
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

                     <!-- Começo da home estatistica -->
                        <div class="row">
                            <div class="col-xl-6 col-md-12">
                                <div class="card proj-t-card">
                                    <div class="card-body text-inverse">
                                        <div class="row align-items-center mb-30">
                                            <div class="col-auto">
                                                <i class="fas fa-parking f-40" style="color: #eb525d"></i>
                                            </div>
                                            <div class="col pl-0">
                                                <h6 class="mb-5">Vagas no Estacionamento</h6>
                                                <h6 class="mb-5 font-weight-bold"><?php echo $numero_total_vagas->precificacao_numero_vagas; ?></h6>
                                            </div>
                                        </div>
                                        <div class="row align-items-center text-center">
                                            <div class="col">
                                                <span>Livre</span>
                                                <h6 class="mb-0 badge badge-pill badge-inverse text-white"><?php echo $numero_total_vagas->precificacao_numero_vagas - $total_estacionados_agora ; ?></h6></div>
                                                <div class="col"><i class="fas fa-exchange-alt f-18" style="color: #eb525d"></i>
                                            </div>
                                            <div class="col">
                                                <span>Ocupadas</span>
                                                <h6 class="mb-0 badge badge-pill badge-inverse text-white"><?php echo $total_estacionados_agora; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <!-- mensalidades-->
                             <div class="col-xl-6 col-md-12">
                                <div class="card proj-t-card">
                                    <div class="card-body text-inverse">
                                        <div class="row align-items-center mb-30">
                                            <div class="col-auto">
                                                <i class="fas fa-money-check-alt f-40" style="color: #eb525d"></i>
                                            </div>
                                            <div class="col pl-0">
                                                <h6 class="mb-5">Renda com Mensalidades</h6>
                                                <h6 class="mb-5 font-weight-bold"><?php echo 'R$&nbsp;' . $total_mensalidades->total_mensalidades; ?></h6>
                                            </div>
                                        </div>
                                        <div class="row align-items-center text-center">
                                            <div class="col">
                                            <span>Pagas</span>
                                                <h6 class="mb-0 badge badge-pill badge-inverse text-white"><?php echo $total_mensalidades_pagas; ?></h6></div>
                                            <div class="col"><i class="fas fa-exchange-alt f-18" style="color: #eb525d"></i></div>
                                            <div class="col">
                                            <span>Abertas</span>
                                            <h6 class="mb-0 badge badge-pill badge-inverse text-white"><?php echo $total_mensalidades_abertas; ?></h6></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Avulsos-->
                             <div class="col-xl-6 col-md-12">
                                <div class="card proj-t-card">
                                    <div class="card-body text-inverse">
                                        <div class="row align-items-center mb-30">
                                            <div class="col-auto">
                                                <i class="fas fa-search-dollar f-40" style="color: #eb525d"></i>
                                            </div>
                                            <div class="col pl-0">
                                                <h6 class="mb-5">Valores de Vagas Avulsas</h6>
                                                <h6 class="mb-5 font-weight-bold"><?php echo 'R$&nbsp;' . $total_avulsos->total_avulsos; ?></h6>
                                            </div>
                                        </div>
                                        <div class="row align-items-center text-center">
                                            <div class="col">
                                            <span>Pagas</span>
                                                <h6 class="mb-0 badge badge-pill badge-inverse text-white"><?php echo $total_avulsos_pagos; ?></h6></div>
                                            <div class="col"><i class="fas fa-exchange-alt f-18" style="color: #eb525d"></i></div>
                                            <div class="col">
                                            <span>Abertas</span>
                                            <h6 class="mb-0 badge badge-pill badge-inverse text-white"><?php echo $total_avulsos_abertos; ?></h6></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mensalistas-->
                             <div class="col-xl-6 col-md-12">
                                <div class="card proj-t-card">
                                    <div class="card-body text-inverse">
                                        <div class="row align-items-center mb-30">
                                            <div class="col-auto">
                                                <i class="fas fa-user-tie f-40" style="color: #eb525d"></i>
                                            </div>
                                            <div class="col pl-0">
                                                <h6 class="mb-5">Renda de Mensalistas</h6>
                                                <h6 class="mb-5 font-weight-bold"><?php echo $total_mensalistas; ?></h6>
                                            </div>
                                        </div>
                                        <div class="row align-items-center text-center">
                                            <div class="col">
                                            <span>Ativos</span>
                                                <h6 class="mb-0 badge badge-pill badge-inverse text-white"><?php echo $total_mensalistas_ativos; ?></h6></div>
                                            <div class="col"><i class="fas fa-exchange-alt f-18" style="color: #eb525d"></i></div>
                                            <div class="col">
                                            <span>Inativos</span>
                                            <h6 class="mb-0 badge badge-pill badge-inverse text-white"><?php echo $total_mensalistas_inativos; ?></h6></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!-- fim estatistica -->                    
                    </div>
                </div>

                <footer class="footer">
                    <div class="w-100 clearfix">
                        <span class="text-center text-sm-left d-md-inline-block">Copyright © <?php echo date('Y'); ?> Vaga Segura. Projeto Eng. de Software.</span>
                    </div>
                </footer>
                
            </div>


        