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
	                        'category_name' => 'destaques',
                            'posts_per_page' => 3
                        ));
                        $i = 1;
                        while($posts_slides->have_posts()) : $posts_slides->the_post();
                    ?>

						<div class="item <?php if($i == 1) echo 'active'; ?>">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail-slide'); ?></a>
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
                    <div class="col-md-3 luta visible-lg"><h4>Lutas</h4></div>
                </div>
            </div>

            <div class="row">

                <!--/box futebol-->
				<?php
				$posts_slides = new WP_Query(array(
					'category_name' => 'futebol',
					'posts_per_page' => 3
				));

				while($posts_slides->have_posts()) : $posts_slides->the_post();
					?>
                    <div class="col-md-3 iten-futebol">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img-futebol', array('class' => 'img-responsive img-thumbnail')); ?></a>
                        <span><?php echo rwmb_meta('subtitulo'); ?></span>
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    </div>
				<?php endwhile; wp_reset_postdata(); ?>
                <!--/fim box futebol-->

                <!--luta-->
				<?php
				$posts_slides = new WP_Query(array(
					'category_name' => 'lutas',
					'posts_per_page' => 1
				));

				while($posts_slides->have_posts()) : $posts_slides->the_post();
					?>
                    <div class="col-md-3 iten-futebol luta pull-right">
                        <div class="title-box visible-xs"><h4>Lutas</h4></div>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img-futebol', array('class' => 'img-responsive img-thumbnail')); ?></a>
                        <span><?php echo rwmb_meta('subtitulo'); ?></span>
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    </div>
				<?php endwhile; wp_reset_postdata(); ?>
                <!--/fim luta-->

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

                <!--games-->
			    <?php
			    $posts_slides = new WP_Query(array(
				    'category_name' => 'games',
				    'posts_per_page' => 3
			    ));

			    while($posts_slides->have_posts()) : $posts_slides->the_post();
				    ?>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img-games', array('class' => 'media-object img-responsive img-thumbnail')); ?></a>
                            </a>
                        </div>
                        <div class="media-body">
                            <h1 class="media-heading"><a href=""><?php the_title(); ?></a></h1>
                            <button type="button" class="btn btn-primary btn-xs"><?php echo rwmb_meta('subtitulo'); ?></button>
                            <p class="visible-lg"><?php echo rwmb_meta('resumo'); ?></p>
                        </div>
                    </div>
			    <?php endwhile; wp_reset_postdata(); ?>
                <!--/fim games-->

            </div>
            <!--/posts-games-->

            <!--/video-->
            <div class="col-md-5" id="videos-home">
                <div class="title-box visible-xs"><h4>Vídeos da semana</h4></div>

             <?php
                $posts_slides = new WP_Query(array(
                    'category_name' => 'videos',
                    'posts_per_page' => 1
                ));

                while($posts_slides->have_posts()) : $posts_slides->the_post();
             ?>

                <div class="embed-responsive embed-responsive-16by9">

                    <?php echo rwmb_meta('oembed','type=oembed'); ?>
                    </div>
                    <h1><?php the_title(); ?></h1>
                    <button type="button" class="btn btn-primary btn-xs"><?php echo rwmb_meta('subtitulo'); ?></button>
                    <p><?php echo rwmb_meta('resumo'); ?></p>

                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <!--Fim video -->
        </div>
    </div>
<?php get_footer();?>