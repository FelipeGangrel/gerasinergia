<div id="main-sidebar">
    <div class="logoMenu"></div>
    <div class="menu">
        <nav>
            <ul class="sidebar-menu tree">
                <li class="treeview">
                    <a href="/">
                        <i class="fa fa-home"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-cube"></i> <span>Minhas Cargas</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    
                    <ul class="treeview-menu">
                        <li><a href="#">Nova Carga</a></li>
                        <li><a href="#">Todas Cargas</a></li>
                        <li><a href="#" data-alt='["carga"]' class="bullet carga aberto">Em aberto</a></li>
                        <li><a href="#" data-alt='["carga"]' class="bullet carga em-negociacao">Em negociação</a></li>
                        <li><a href="#" data-alt='["carga"]' class="bullet carga aguardando-coleta">Aguardando coleta</a></li>
                        <li><a href="#" data-alt='["carga"]' class="bullet carga em-transito">Em trânsito</a></li>
                        <li><a href="#" data-alt='["carga"]' class="bullet carga entregue">Entregues</a></li>
                        <li><a href="#" data-alt='["carga"]' class="bullet carga entrega-confirmada">Entrega confirmada</a></li>
                        <li><a href="#" data-alt='["carga"]' class="bullet carga aguardando-pagamento"><i class="fa fa-hourglass-end" aria-hidden="true"></i>Aguardando pagamento</a></li>
                        <li><a href="#" data-alt='["carga"]' class="bullet carga pagamento-confirmado"><i class="fa fa-usd" aria-hidden="true"></i>Pagamento Confirmado</a></li>
                        <li><a href="#" data-alt='["carga"]' class="bullet carga cancelado">Canceladas</a></li>
                        <li><a href="#" data-alt='["carga"]' class="bullet carga expirado">Expiradas</a></li>
                    </ul>
                </li>
                <li class="treeview">

                    <a href="#">
                        <i class="fa fa-truck"></i> <span>Meus Veículos</span> 
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>

                    <ul class="treeview-menu">
                        <li><a href="#">Novo Veículo</a></li>
                        <li><a href="#">Novo Implemento</a></li>
                        <li><a href="#">Todos Veículos</a></li>
                        <li><a href="#" class="bullet veiculo disponivel">Disponíveis</a></li>
                        <li><a href="#" class="bullet veiculo em-negociacao">Negociação</a></li>
                        <li><a href="#" class="bullet veiculo com-sinergia">Com sinergia</a></li>
                        <li><a href="#" class="bullet veiculo indisponivel">Indisponíveis</a></li>
                        <li><a href="#" class="bullet veiculo inativado">Inativados</a></li>
                        <li><a href="#">Cargas Transportadas</a></li>
                        <li><a href="#" class="bullet carga aguardando-pagamento"><i class="fa fa-hourglass-end" aria-hidden="true"></i>Aguardando pagamento</a></li>
                        <li><a href="#" class="bullet carga pagamento-confirmado"><i class="fa fa-usd" aria-hidden="true"></i>Pagamento Confirmado</a></a></li>
                        <li><a href="#" data-alt='["atualizar"]'>Atualizar Veículos</a></li>
                        <li><a href="#" data-alt='["implementos"]'>Atualizar Implementos</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-building"></i> <span>Empresas</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">Todas Empresas</a></li>
                        <li><a href="#">Minha Empresa</a></li>
                        <li><a href="#">Nova Empresa</a></li>
                        <li><a href="#">Filiais</a></li>
                        <li><a href="#">Nova Filial</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-id-card-o"></i> <span>Motoristas</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">Todos Motoristas</a></li>
                        <li><a href="#">Meus Motoristas</a></li>
                        <li><a href="#" data-alt='["motorista"]'>Novo Motorista</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i> <span>Usuários</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">Todos Usuários</a></li>
                        <li><a href="#">Novo Usuário</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-bullhorn"></i> <span>Balcão de Negócios</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><?php// echo $_SESSION['usuario_tipo']=="administrador"?"Todos Produtos":"Meus Produtos"; ?></a></li>
                        <li><a href="#">Buscar Ofertas</a></li>
                        <li class="second-level">
                            <a href="#">Nova Oferta <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="#">Cadastrar Caminhão</a></li>
                                <li><a href="#">Cadastrar Carro</a></li>
                                <li><a href="#">Cadastrar Empilhadeira</a></li>
                                <li><a href="#">Cadastrar Galpão</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-shopping-bag"></i> <span>Shopping</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="hidden <? \\$_SESSION['usuario']['tipo']=='transportador'?'hidden':''?>">
                            <a href="#"><?php //echo $_SESSION['usuario_tipo']=="administrador"?"Todos Produtos":"Meus Produtos" ?></a>
                        </li>
                        <li>
                            <a href="#">Marcas</a>
                        </li>
                        <li>
                            <a href="#">Marketplace</a>
                        </li>
                        <li>
                            <a href="#">Loja Virtual</a>
                        </li>
                        <li>
                            <a href="#">Sales Leverage <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="#">Cadastro de Oferta</a>
                                    <a href="#">Gerenciamento da Oferta</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Inteligencia de Marketing<i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="#">Relacionamento Mercado</a>
                                    <a href="#">Projetos Especiais</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i> <span>Perfis de usuário</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">Todos os perfis</a></li>
                        <li><a href="#">Novo perfil</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-cubes" aria-hidden="true"></i> <span>Monitoramento Externo</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">Nova Carga</a></li>
                        <li><a href="#">Todas Cargas</a></li>
                        <li><a href="#" data-alt='["carga-externa"]' class="bullet carga em-transito">Em trânsito</a></li>
                        <li><a href="#" data-alt='["carga-externa"]' class="bullet carga entregue">Entregues</a></li>
                        <li><a href="#" data-alt='["carga-externa"]' class="bullet carga entrega-confirmada">Entrega confirmada</a></li>
                        <li><a href="#" data-alt='["carga-externa"]' class="bullet carga aguardando-pagamento"><i class="fa fa-hourglass-end" aria-hidden="true"></i>Aguardando pagamento</a></li>
                        <li><a href="#" data-alt='["carga-externa"]' class="bullet carga pagamento-confirmado"><i class="fa fa-usd" aria-hidden="true"></i>Pagamento Confirmado</a></li>
                        <li><a href="#" data-alt='["carga-externa"]' class="bullet carga cancelado">Canceladas</a></li>
                        <li><a href="#" data-alt='["cliente-externo"]' class="carga">Novo Cliente</a></li>
                        <li><a href="#" data-alt='["cliente-externo"]' class="carga">Clientes</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i> <span>Relatórios</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">Faturamento x Meta</a></li>
                        <li><a href="#">Ranking de Faturamento</a></li>
                        <li><a href="#">Frota de veículos</a></li>
                        <li><a href="#">Detalhamento de motoristas</a></li>
                        <li><a href="#">Visualização de cargas ofertadas</a></li>
                        <li><a href="#">Pendência de documentos</a></li>
                        <li><a href="#">Documentos a vencer</a></li>
                    </ul>
                </li>
                <li class="treeview" id="zopim-chat">
                    <?php //$usuario_logado = consultarUsuario($_SESSION[usuario_id]); ?>
                    <input type="hidden" name="zopim-nome" value="<?php //echo $usuario_logado[nome] ?>">
                    <input type="hidden" name="zopim-email" value="<?php //echo $usuario_logado[email] ?>">
                    <a href="#"><i class="fa fa-comments"></i> <span>Fale Conosco</span></a>
                </li>

                {{--  TESTE  --}}
                <!--<li class="treeview">
                    <a href="#">
                        <i class="fa fa-share"></i> <span>Multilevel</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-circle-o"></i> Level One
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    </ul>
                </li>-->
            </ul>
        </nav>
    </div>

</div>