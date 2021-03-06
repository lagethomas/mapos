<!--sidebar-menu-->
<div id="sidebar"> <a href="#" class="visible-phone"><i class="fas fa-list"></i> Menu</a>
  
  <ul>
    <li class="<?php if (isset($menuPainel)) {
                  echo 'active';
                }; ?>"><a href="<?= base_url() ?>"><i class="ti-dashboard c-blue-500 icon-size"></i> <span>Dashboard</span></a></li>
    
    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vCliente')) { ?>
      <li class="<?php if (isset($menuClientes)) {
                    echo 'active';
                  }; ?>"><a href="<?= site_url('clientes') ?>"><i class="c-brown-500 ti-user icon-size"></i> <span>Clientes</span></a></li>
      
    <?php
    } ?>
    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) { ?>
      <li class="<?php if (isset($menuProdutos)) {
                    echo 'active';
                  }; ?>"><a href="<?= site_url('produtos') ?>"><i class="ti-package c-blue-500 icon-size"></i> <span>Produtos</span></a></li>
      
    <?php
    } ?>
    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vServico')) { ?>
      <li class="<?php if (isset($menuServicos)) {
                    echo 'active';
                  }; ?>"><a href="<?= site_url('servicos') ?>"><i class="ti-hummer c-red-500 icon-size"></i> <span>Serviços</span></a></li>
      
    <?php
    } ?>
    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vOs')) { ?>
      <li class="<?php if (isset($menuOs)) {
                    echo 'active';
                  }; ?>"><a href="<?= site_url('os') ?>"><i class="c-deep-purple-500 ti-agenda icon-size"></i> <span>Ordens de Serviço</span></a></li>
      
    <?php
    } ?>
    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vVenda')) { ?>
      <li class="<?php if (isset($menuVendas)) {
                    echo 'active';
                  }; ?>"><a href="<?= site_url('vendas') ?>"><i class="c-light-blue-500 ti-shopping-cart icon-size"></i> <span>Vendas</span></a></li>
      
    <?php
    } ?>
    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vGarantia')) { ?>
      <li class="<?php if (isset($menuGarantia)) {
                    echo 'active';
                  }; ?>"><a href="<?= site_url('garantias') ?>"><i class="c-brown-500 ti-book icon-size"></i> <span>Termos de Garantias</span></a></li>
      
    <?php
    } ?>
    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vArquivo')) { ?>
      <li class="<?php if (isset($menuArquivos)) {
                    echo 'active';
                  }; ?>"><a href="<?= site_url('arquivos') ?>"><i class="c-indigo-500 ti-harddrives icon-size"></i> <span>Arquivos</span></a></li>
      
    <?php
    } ?>
    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vLancamento')) { ?>
      <li class="submenu <?php if (isset($menuFinanceiro)) {
                            echo 'active open';
                          }; ?>">
        <a href="#"><i class="c-teal-500 ti-money icon-size"></i> <span>Financeiro</span> <span class="label"><i class="ti-angle-down"></i></span></a>
        
        <ul>
          <li><a href="<?= site_url('financeiro/lancamentos') ?>">Lançamentos</a></li>
        </ul>
      </li>
    <?php
    } ?>
    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rCliente') || $this->permission->checkPermission($this->session->userdata('permissao'), 'rProduto') || $this->permission->checkPermission($this->session->userdata('permissao'), 'rServico') || $this->permission->checkPermission($this->session->userdata('permissao'), 'rOs') || $this->permission->checkPermission($this->session->userdata('permissao'), 'rFinanceiro') || $this->permission->checkPermission($this->session->userdata('permissao'), 'rVenda')) { ?>
      <li class="submenu <?php if (isset($menuRelatorios)) {
                            echo 'active open';
                          }; ?>">
        <a href="#"><i class="ti-receipt text-danger icon-size"></i> <span>Relatórios</span> <span class="label"><i class="ti-angle-down icon-size"></i></span></a>
        
        <ul>
          <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rCliente')) { ?>
            <li><a href="<?= site_url('relatorios/clientes') ?>">Clientes</a></li>
          <?php
          } ?>
          <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rProduto')) { ?>
            <li><a href="<?= site_url('relatorios/produtos') ?>">Produtos</a></li>
          <?php
          } ?>
          <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rServico')) { ?>
            <li><a href="<?= site_url('relatorios/servicos') ?>">Serviços</a></li>
          <?php
          } ?>
          <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rOs')) { ?>
            <li><a href="<?= site_url('relatorios/os') ?>">Ordens de Serviço</a></li>
          <?php
          } ?>
          <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rVenda')) { ?>
            <li><a href="<?= site_url('relatorios/vendas') ?>">Vendas</a></li>
          <?php
          } ?>
          <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rGarantia')) { ?>
            <li><a href="<?= site_url('relatorios/Garantias') ?>">Termo Garantia</a></li>
          <?php
          } ?>
          <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rFinanceiro')) { ?>
            <li><a href="<?= site_url('relatorios/financeiro') ?>">Financeiro</a></li>
          <?php
          } ?>
        </ul>
      </li>
    <?php
    } ?>
    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cUsuario')  || $this->permission->checkPermission($this->session->userdata('permissao'), 'cEmitente') || $this->permission->checkPermission($this->session->userdata('permissao'), 'cPermissao') || $this->permission->checkPermission($this->session->userdata('permissao'), 'cBackup')) { ?>
      <li class="submenu <?php if (isset($menuConfiguracoes)) {
                            echo 'active open';
                          }; ?>">
        <a href="#"><i class="ti-settings icon-size"></i> <span>Configurações</span> <span class="label"><i class="ti-angle-down icon-size"></i></span></a>
        <ul>
          <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cSistema')) { ?>
            <li><a href="<?= site_url('mapos/configurar') ?>">Sistema</a></li>
          <?php } ?>
          <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cUsuario')) { ?>
            <li><a href="<?= site_url('usuarios') ?>">Usuários</a></li>
          <?php } ?>
          <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cEmitente')) { ?>
            <li><a href="<?= site_url('mapos/emitente') ?>">Emitente</a></li>
          <?php } ?>
          <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cPermissao')) { ?>
            <li><a href="<?= site_url('permissoes') ?>">Permissões</a></li>
          <?php } ?>
          <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cAuditoria')) { ?>
            <li><a href="<?= site_url('auditoria') ?>">Auditoria</a></li>
          <?php } ?>
          <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cEmail')) { ?>
            <li><a href="<?= site_url('mapos/emails') ?>">Emails</a></li>
          <?php } ?>
          <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cBackup')) { ?>
            <li><a href="<?= site_url('mapos/backup') ?>">Backup</a></li>
          <?php } ?>
        </ul>
      </li>
    <?php
    } ?>
    
    <li>
      <a class="text-white" href="<?= site_url('login/sair'); ?>"><i class="ti-shift-right icon-size"></i> <span>Sair</span></a>
    </li>
    
    <!-- TEMPO DE CARGA-->
    <li class="tempo-carga">
      Tempo de carga: <strong>{elapsed_time}</strong> segundos.
    </li>
  </ul>
</div>