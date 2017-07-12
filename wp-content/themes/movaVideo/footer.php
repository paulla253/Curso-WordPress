    <div class="container footer">
        <div class="row">

            <!-- Sobre nos -->
            <div class="col-md-4 sobre-rodape">
                <div class="title-box">
                    <h4>Sobre nós</h4>
                </div>

	            <?php
	            if ( is_active_sidebar('sobre-nos-rodape') ) {
		            dynamic_sidebar('sobre-nos-rodape');
	            }
	            ?>
            </div>
            <!--Fim do sobre nos -->
            <!--Instagram-->
            <div class="col-md-4 instagram">
                <div class="title-box">
                    <h4>Galeria de imagens</h4>
                </div>

	            <?php
	            if ( is_active_sidebar('instagram-rodape') ) {
		            dynamic_sidebar('instagram-rodape');
	            }
	            ?>
            </div>
            <!--fim do instagram-->

            <!-- Links uteis -->
            <div class="col-md-4">
                <div class="title-box">
                    <h4>Links úteis</h4>
                </div>

	                <?php
	                wp_nav_menu( array(
		                'theme_location' => 'links-uteis',
		                'container' => '',
		                'menu_class'=> 'list-unstyled'
	                ));
	                ?>
            </div>
            <!-- Fim Links uteis -->
        </div>
    </div>

    <div class="footer-copy">
        <div class="container">
            <div class="'rows">
                <div class="col-md-12"><p class="text-center">Todos os direitos reservados 10/07/2017 Ana Paula Fernandes</p></div>
            </div>
        </div>
    </div>

    <!-- Parte do login Cadastro/login -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Minha conta</h4>
                    <div class="modal-body">

                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#logar" aria-controls="logar" role="tab" data-toggle="tab">Logar</a></li>
                            <li role="presentation"><a href="#cadastro" aria-controls="cadastro" role="tab" data-toggle="tab">Regras do portal</a></li>
                        </ul>
                        <!-- Formulario -->
                        <div class="tab-content minha-conta">
                            <div role="tabpanel" class="tab-pane active" id="logar">

                                <?php
                                if ( is_active_sidebar('sidebar-login') ) {
                                    dynamic_sidebar('sidebar-login');
                                }
                                ?>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="cadastro">

                                <?php
                                if ( is_active_sidebar('sidebar-regras') ) {
                                    dynamic_sidebar('sidebar-regras');
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <?php wp_footer(); ?>
</body>
</html>