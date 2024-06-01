                <div class="app-sidebar colored">
                    <div class="sidebar-header" style="background-color: #6c757d">
                        <a data-toggle="tooltip" data-placement="bottom" title="Voltar para Home" class="header-brand" href="<?php echo base_url('/');?>">
                            <div class="logo-img">
                               <img src="<?php echo base_url('public/src/img/parking-solid-icon.svg');?>" class="header-brand-img" alt="Estacionamento"> 
                            </div>
                            <span class="text">Vaga <span style="color: #eb525d">Segura</span></span>
                        </a>
                        <!-- <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button> -->
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                     </div>
                    
                    <div class="sidebar-content" style="background-color: #6c757d">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <!-- MENU -->
                                <div class="nav-lavel" style="background-color: #393d41; color: white">Menu</div>
                                <div class="nav-item <?php echo ($this->router->fetch_class() == 'home' && $this->router->fetch_method() == 'index' ? 'active' : '' );  ?> ">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Home" href="<?php echo base_url('/'); ?>">
                                    <i class="fas fa-home" style="color: #eb525d"></i><span> Home</span></a>
                                </div>

                                <div class="nav-item <?php echo ($this->router->fetch_class() == 'estacionar' && $this->router->fetch_method() == 'index' ? 'active' : '' );  ?>">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Ticket de estacionamento" href="<?php echo base_url('estacionar'); ?>">
                                    <i class="fas fa-car-side" style="color: #eb525d"></i><span>Ticket de estacionamento</span></a>
                                </div>
                            
                                <!-- Gerenciamento -->
                                <div class="nav-lavel" style="background-color: #393d41; color: white">Gerenciamento</div>
                                <div class="nav-item <?php echo ($this->router->fetch_class() == 'mensalistas' && $this->router->fetch_method() == 'index' ? 'active' : '' );  ?> ">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Gerenciar mensalistas" href="<?php echo base_url('mensalistas'); ?>">
                                    <i class="fas fa-users" style="color: #eb525d"></i><span>Mensalistas</span></a>
                                </div>
                                <div class="nav-item <?php echo ($this->router->fetch_class() == 'mensalidades' && $this->router->fetch_method() == 'index' ? 'active' : '' );  ?>">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Gerenciar mensalidades" href="<?php echo base_url('mensalidades'); ?>">
                                    <i class="fas fa-handshake" style="color: #eb525d"></i><span>Mensalidades</span></a>
                                </div>
                                <div class="nav-item <?php echo ($this->router->fetch_class() == 'precificacoes' && $this->router->fetch_method() == 'index' ? 'active' : '' );  ?>">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Gerenciar precificacoes" href="<?php echo base_url('precificacoes'); ?>">
                                    <i class="fas fa-dollar-sign" style="color: #eb525d"></i><span>Precificações</span></a>
                                </div>
                                
                                <div class="nav-item <?php echo ($this->router->fetch_class() == 'formas' && $this->router->fetch_method() == 'index' ? 'active' : '' );  ?>">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Gerenciar formas de pagamento" href="<?php echo base_url('formas'); ?>">
                                    <i class="fas fa-money-bill-alt" style="color: #eb525d"></i><span>Formas de pagamento</span></a>
                                </div>
                                
                                <!--Tela Dashboard -->
                                <div class="nav-item <?php echo ($this->router->fetch_class() == 'dashboard' && $this->router->fetch_method() == 'index' ? 'active' : '' );  ?> ">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Dashboard" href="<?php echo base_url('dashboard'); ?>">
                                    <i class="fas fa-chart-line" style="color: #eb525d"></i><span>Dashboard</span></a>
                                </div>

                                <!-- ADM -->
                                <div class="nav-lavel" style="background-color: #393d41; color: white">Administradores</div>
                                <div class="nav-item <?php echo ($this->router->fetch_class() == 'usuarios' && $this->router->fetch_method() == 'index' ? 'active' : '' );  ?> ">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Gerenciar usuários" href="<?php echo base_url('usuarios'); ?>">
                                    <i class="fas fa-user-friends" style="color: #eb525d"></i><span>Usuários</span></a>
                                </div>
                                <div class="nav-item <?php echo ($this->router->fetch_class() == 'sistema' && $this->router->fetch_method() == 'index' ? 'active' : '' );  ?>">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Gerenciar sistema" href="<?php echo base_url('sistema'); ?>">
                                    <i class="fas fa-wrench" style="color: #eb525d"></i><span>Sistema</span></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>