
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
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a data-toggle="tooltip" data-placement="bottom"  title="Home" href="<?php echo base_url('/'); ?>"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a data-toggle="tooltip" data-placement="bottom" title="Listar <?php echo $this->router->fetch_class(); ?>" href="<?php echo base_url($this->router->fetch_class()); ?>">Listar&nbsp;<?php echo $this->router->fetch_class(); ?></a>
                                            </li>
                                            <li data-toggle="tooltip" data-placement="bottom" class="breadcrumb-item active" aria-current="page"><?php echo $titulo ?></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                    <form class="forms-sample" name="form_core" method="POST">

                                            <div class="form-group row">
                                                
                                               <div class="col-md-3 mb-20">
                                               <label>Nome</label>
                                                <input placeholder="Insira o nome" type="text" class="form-control" name="mensalista_nome" value="<?php echo (isset($mensalista) ? $mensalista->mensalista_nome : set_value('mensalista_nome')); ?>">
                                                <?php echo form_error('mensalista_nome', '<div class="text-danger">', '</div>'); ?>
                                               </div>

                                               <div class="col-md-6 mb-20">
                                               <label>Sobrenome</label>
                                                <input placeholder="Insira o sobrenome" type="text" class="form-control" name="mensalista_sobrenome" value="<?php echo (isset($mensalista) ? $mensalista->mensalista_sobrenome : set_value('mensalista_sobrenome')); ?>">
                                                <?php echo form_error('mensalista_sobrenome', '<div class="text-danger">', '</div>'); ?>
                                               </div>

                                               <div class="col-md-3 mb-20">
                                                <label>Data nascimento</label>
                                                 <input placeholder="Insira a data nascimento " type="date" class="form-control" name="mensalista_data_nascimento" value="<?php echo (isset($mensalista) ? $mensalista->mensalista_data_nascimento : set_value('mensalista_data_nascimento')); ?>">
                                                 <?php echo form_error('mensalista_data_nascimento', '<div class="text-danger">', '</div>'); ?>
                                                </div>

                                            </div>

                                            <div class="form-group row">
                                                
                                                <div class="col-md-2 mb-20">
                                                <label>CPF</label>
                                                 <input placeholder="Insira o CPF" type="text" class="form-control cpf" name="mensalista_cpf" value="<?php echo (isset($mensalista) ? $mensalista->mensalista_cpf : set_value('mensalista_cpf')); ?>">
                                                 <?php echo form_error('mensalista_cpf', '<div class="text-danger">', '</div>'); ?>
                                                </div>
 
                                                <div class="col-md-2 mb-20">
                                                <label>RG</label>
                                                 <input placeholder="Insira o RG" type="text" class="form-control" name="mensalista_rg" value="<?php echo (isset($mensalista) ? $mensalista->mensalista_rg : set_value('mensalista_rg')); ?>">
                                                 <?php echo form_error('mensalista_rg', '<div class="text-danger">', '</div>'); ?>
                                                </div>

                                                <div class="col-md-4 mb-20">
                                                <label>E-mail</label>
                                                 <input placeholder="Insira o e-mail" type="email" class="form-control" name="mensalista_email" value="<?php echo (isset($mensalista) ? $mensalista->mensalista_email : set_value('mensalista_email')); ?>">
                                                 <?php echo form_error('mensalista_email', '<div class="text-danger">', '</div>'); ?>
                                                </div>

                                                <div class="col-md-2 mb-20">
                                                <label>Telefone fixo</label>
                                                 <input placeholder="Insira o telefone fixo" type="text" class="form-control phone_with_ddd" name="mensalista_telefone_fixo" value="<?php echo (isset($mensalista) ? $mensalista->mensalista_telefone_fixo : set_value('mensalista_telefone_fixo')); ?>">
                                                 <?php echo form_error('mensalista_telefone_fixo', '<div class="text-danger">', '</div>'); ?>
                                                </div>

                                                <div class="col-md-2 mb-20">
                                                <label>Celular</label>
                                                 <input placeholder="Insira o celular" type="text" class="form-control sp_celphones" name="mensalista_telefone_movel" value="<?php echo (isset($mensalista) ? $mensalista->mensalista_telefone_movel : set_value('mensalista_telefone_movel')); ?>">
                                                 <?php echo form_error('mensalista_telefone_movel', '<div class="text-danger">', '</div>'); ?>
                                                </div>
 
                                             </div>
                                             
                                             <div class="form-group row">
                                                
                                                <div class="col-md-4 mb-20">
                                                <label>Endereço</label>
                                                 <input placeholder="Insira o endereço" type="text" class="form-control" name="mensalista_endereco" value="<?php echo (isset($mensalista) ? $mensalista->mensalista_endereco : set_value('mensalista_endereco')); ?>">
                                                 <?php echo form_error('mensalista_endereco', '<div class="text-danger">', '</div>'); ?>
                                                </div>
 
                                                <div class="col-md-1 mb-20">
                                                <label>Número</label>
                                                 <input placeholder="Insira o número" type="text" class="form-control" name="mensalista_numero_endereco" value="<?php echo (isset($mensalista) ? $mensalista->mensalista_numero_endereco : set_value('mensalista_numero_endereco')); ?>">
                                                 <?php echo form_error('mensalista_numero_endereco', '<div class="text-danger">', '</div>'); ?>
                                                </div>
 
                                                <div class="col-md-3 mb-20">
                                                 <label>Bairro</label>
                                                  <input placeholder="Insira o bairro" type="text" class="form-control" name="mensalista_bairro" value="<?php echo (isset($mensalista) ? $mensalista->mensalista_bairro : set_value('mensalista_bairro')); ?>">
                                                  <?php echo form_error('mensalista_bairro', '<div class="text-danger">', '</div>'); ?>
                                                 </div>

                                                 <div class="col-md-4 mb-20">
                                                 <label>Cidade</label>
                                                  <input placeholder="Insira a cidade" type="text" class="form-control" name="mensalista_cidade" value="<?php echo (isset($mensalista) ? $mensalista->mensalista_cidade : set_value('mensalista_cidade')); ?>">
                                                  <?php echo form_error('mensalista_cidade', '<div class="text-danger">', '</div>'); ?>
                                                 </div>
 
                                             </div>

                                             <div class="form-group row">
                                                
                                             <div class="col-md-2 mb-20">
                                                 <label>CEP</label>
                                                  <input placeholder="Insira o CEP" type="text" class="form-control cep" name="mensalista_cep" value="<?php echo (isset($mensalista) ? $mensalista->mensalista_cep : set_value('mensalista_cep')); ?>">
                                                  <?php echo form_error('mensalista_cep', '<div class="text-danger">', '</div>'); ?>
                                                 </div>

                                               <div class="col-md-1 mb-20">
                                               <label>UF</label>
                                                <input placeholder="Insira o UF" type="text" class="form-control uf" name="mensalista_estado" value="<?php echo (isset($mensalista) ? $mensalista->mensalista_estado : set_value('mensalista_estado')); ?>">
                                                <?php echo form_error('mensalista_estado', '<div class="text-danger">', '</div>'); ?>
                                               </div>

                                               <div class="col-md-5 mb-20">
                                                <label>Complemento</label>
                                                 <input placeholder="Insira o complemento" type="text" class="form-control" name="mensalista_complemento" value="<?php echo (isset($mensalista) ? $mensalista->mensalista_complemento : set_value('mensalista_complemento')); ?>">
                                                 <?php echo form_error('mensalista_complemento', '<div class="text-danger">', '</div>'); ?>
                                                </div>

                                                <div class="col-md-2 mb-20">
                                                <label>Dia do vencimento</label>
                                                 <input placeholder="Insira o dia do vencimento" type="number" class="form-control" name="mensalista_dia_vencimento" value="<?php echo (isset($mensalista) ? $mensalista->mensalista_dia_vencimento : set_value('mensalista_dia_vencimento')); ?>">
                                                 <?php echo form_error('mensalista_dia_vencimento', '<div class="text-danger">', '</div>'); ?>
                                                </div>

                                                <div class="col-md-2 mb-20">
                                                <label>Ativo</label>
                                                 
                                                <select class="form-control" name="mensalista_ativo">

                                                 <?php if(isset($mensalista)): ?>

                                                <option value="0"<?php echo ($mensalista->mensalista_ativo == 0 ? 'selected' : '')?>>Não</option>
                                                <option value="1"<?php echo ($mensalista->mensalista_ativo == 1 ? 'selected' : '')?>>Sim</option>

                                                 <?php else: ?>

                                                    <option value="0">Não</option>
                                                    <option value="1">Sim</option>

                                                 <?php endif; ?>
                                                </select>

                                                </div>

                                            </div>

                                            <div class="form-group row">
                                                
                                                <div class="col-md-12 mb-20">
                                                <label>Observações</label>
                                                <textarea placeholder="Insira uma descrição"  class="form-control" name="mensalista_observacao"><?php echo (isset($mensalista) ? $mensalista->mensalista_observacao : set_value('mensalista_observacao')); ?></textarea>
                                                <?php echo form_error('mensalista_observacao', '<div class="text-danger">', '</div>'); ?>
                                                </div>
 
                                             </div>
                                             <?php if (isset($mensalista)) : ?>
                                             <div class="form-group row">
                                                <div class="col-md-12">
                                                 <input type="hidden" class="form-control" name="mensalista_id" value="<?php echo $mensalista->mensalista_id; ?>">
                                                </div>
                                             </div>
                                             <?php endif; ?>
                                            
                                            <a class="btn btn-warning" href="<?php echo base_url($this->router->fetch_class()); ?>">&nbsp;<i class="fas fa-arrow-left"></i></a>
                                            <button type="submit" class="btn btn-success mr-2">&nbsp;<i class="far fa-save"></i></button>
                                          </form>
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


        