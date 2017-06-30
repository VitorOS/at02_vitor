
        <div id="throbber" style="display:none; min-height:120px;"></div>
        <div id="noty-holder"></div>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url('Usuario/Login')?>">
                        </br>Conversão de txt para PDF <?php //<img src="http://placehold.it/200x50&text=LOGO" alt="LOGO""> ?>
                    </a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">     
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url('Usuario')?>"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-search"></i> Documentos <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                            <ul id="submenu-1" class="collapse">
                                <li><a href="<?php echo base_url('Atividade/cadastrar')?>"><i class="fa fa-angle-double-right"></i> Upload de Documentos</a></li>
                                <li><a href="<?php echo base_url('Atividade/cadastrados')?>"><i class="fa fa-angle-double-right"></i> Documentos Cadastrados</a></li>
                            </ul>
                        </li>
                       

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
