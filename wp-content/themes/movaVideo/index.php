<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<!--Slider -->
			<div class="col-md-8 slider-noticia">			
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!--Quantidade -->
				  <ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>					
				  </ol>
				  
				  <!--Imagens do slider -->
				  <div class="carousel-inner" role="listbox">

                    <?php
                        $posts_slides = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 3
                        ));
                        $i = 1;
                        while($posts_slides->have_posts()) : $posts_slides->the_post();
                    ?>

						<div class="item <?php if($i == 1) echo 'active'; ?>">
                            <?php the_post_thumbnail('thumbnail-slide'); ?>
						  <div class="carousel-caption visible-lg">
								<div class="carousel-caption visible-lg">
                                    <h3><?php the_title(); ?></h3>
                                    <button type="button" class="btn btn-primary"><?php echo rwmb_meta('subtitulo'); ?></button>
									<p><?php echo rwmb_meta('resumo'); ?></p>
								</div>
						  </div>
						</div>

                     <?php $i++; endwhile; wp_reset_postdata(); ?>

                  </div>

				  <!-- Tags Controles -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>			
			</div>
			
			<!-- Itens de destaque(do lado do slider) -->			
			<div class="col-md-4 itens-destaques">			
			  
				  <ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#maisvistos" aria-controls="maisvistos" role="tab" data-toggle="tab">Mais Visto</a></li>
					<li role="presentation"><a href="#maiscomentados" aria-controls="maiscomentados" role="tab" data-toggle="tab">Mais Comentados</a></li>
				  </ul>

				  <!--Conteudo para parecer no id mais vistos -->
				  <div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="maisvistos">					
						<ul class="list-group">
						  <li class="list-group-item">
							<span class="badge">1</span>
							Cras justo odio
						  </li>
						  
						  <li class="list-group-item">
							<span class="badge">2</span>
							Cras justo odio
						  </li>
						  
						  <li class="list-group-item">
							<span class="badge">3</span>
							Cras justo odio
						  </li>
						  
						  <li class="list-group-item">
							<span class="badge">4</span>
							Cras justo odio
						  </li>
						  
						  <li class="list-group-item">
							<span class="badge">5</span>
							Cras justo odio
						  </li>				
						</ul>				
					</div>
		
					<!--Conteudo para parecer no id mais comentados -->
					<div role="tabpanel" class="tab-pane" id="maiscomentados">
					
						<ul class="list-group">
						  <li class="list-group-item">
							<span class="badge">14</span>
							Cras justo odio
						  </li>
						  
						  <li class="list-group-item">
							<span class="badge">25</span>
							Cras justo odio
						  </li>
						  
						  <li class="list-group-item">
							<span class="badge">34</span>
							Cras justo odio
						  </li>
						  
						  <li class="list-group-item">
							<span class="badge">44</span>
							Cras justo odio
						  </li>
						  
						  <li class="list-group-item">
							<span class="badge">7</span>
							Cras justo odio
						  </li>				
						</ul>				
					</div>
				  </div>
				<!-- Imagem do espaço que sobrou -->	
				<a href=""><img class="img-responsive img-thumbnail " src="http://via.placeholder.com/370x130" alt="" title=""></a>  			  
			</div>				
		</div>
	</div>
	<!--fim dos destaques -->
	
	<div class="width-full-box"> 
	
		<div class="container">
			<div class="row">
			
				<div class="title-box">

                    <div class="col-md-9"><h4>Por dentro dos campos</h4></div>
                    <div class="col-md-3 visible-lg luta"><h4>Lutas</h4></div>
				</div>
			
			</div>
			
			<div class="row">
			
				<div class="col-md-3 iten-futebol">
					
					<a href=""><img class="img-responsive img-thumbnail " src="http://via.placeholder.com/370x220" alt="" title=""></a>  			  
					<span>Campo extra</span>
                    <h1><a href="" >Titulo do post para a categoria futebol</a></h1>
				</div>

                <div class="col-md-3 iten-futebol">

                    <a href=""><img class="img-responsive img-thumbnail " src="http://via.placeholder.com/370x220" alt="" title=""></a>
                    <span>Campo extra</span>
                    <h1><a href="" >Titulo do post para a categoria futebol</a></h1>
                </div>

                <div class="col-md-3 iten-futebol">

                    <a href=""><img class="img-responsive img-thumbnail " src="http://via.placeholder.com/370x220" alt="" title=""></a>
                    <span>Campo extra</span>
                    <h1><a href="" >Titulo do post para a categoria futebol</a></h1>
                </div>

                <div class="col-md-3 iten-futebol luta ">
                    <div class="title-box visible-xs">
                        <h4>Lutas</h4>
                    </div>

                    <a href=""><img class="img-responsive img-thumbnail " src="http://via.placeholder.com/370x220" alt="" title=""></a>
                    <span>Campo extra</span>
                    <h1><a href="" >Titulo do post para a categoria futebol</a></h1>
                </div>
				
			</div>
		</div>
	</div>
	<!-- fim width-full-box -->

    <div class="container">
        <div class="row">
            <div class="title-box">
                <div class="col-md-7"><h4>Mundo dos Games</h4></div>
                <div class="col-md-5 visible-lg"><h4>Vídeos da semana</h4></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7" id="posts-games">
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object img-responsive img-thumbnail" src="http://via.placeholder.com/200x110" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <h1 class="media-heading"><a href="" >Titulo do post para a categoria gemes</a></h1>
                        <button type="button" class="btn btn-primary btn-xs">Campo extra</button>
                        <p class="visible-lg">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</p>
                    </div>
                </div>

                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object img-responsive img-thumbnail" src="http://via.placeholder.com/200x110" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <h1 class="media-heading"><a href="">Titulo do post para a categoria gemes</a></h1>
                        <button type="button" class="btn btn-primary btn-xs">Campo extra</button>
                        <p class="visible-lg">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</p>
                    </div>
                </div>
            </div>
            <!--Fim do id posts-games-->
            <div class="col-md-5" id="videos-home">
                <div class="title-box visible-xs"><h4>Vídeos da semana</h4></div>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FgC8XW_2wIM?list=PLGoNvruYZ-YzvMOv2YrK3_zaXejHYc5zJ?ecver=2"></iframe>
                </div>
            </div>
            <!--Fim do id posts-homes-->
        </div>
    </div>
<?php get_footer();?>