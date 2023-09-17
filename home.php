<?php
 get_header (); ?>

        <!-- Inner -->
        <div class="carousel-inner">
          <!-- Single item -->
          <div class="carousel-item active">
            <img src="http://localhost/wordpress/wp-content/uploads/2023/08/1.jpg" class="d-block w-100" alt="Sunset Over the City"/>
            <div class="carousel-caption d-none d-md-block">
                <h5>أسواق الفتح-Aswaaq Alfath Market
                </h5>
                  <p>اسواق_الفتح متفكرش كتير ... عروضنا كلها توفير.</p>
                
            </div>
          </div>
      
          <!-- Single item -->
          <div class="carousel-item">
            <img src="http://localhost/wordpress/wp-content/uploads/2023/08/2.jpg" class="d-block w-100" alt="Canyon at Nigh"/>
            <div class="carousel-caption d-none d-md-block">
                <h5>أسواق الفتح-Aswaaq Alfath Market
                </h5>
                  <p>اسواق_الفتح متفكرش كتير ... عروضنا كلها توفير.</p>
                
            </div>
          </div>
      
          <!-- Single item -->
          <div class="carousel-item">
            <img src="http://localhost/wordpress/wp-content/uploads/2023/08/3.jpg" class="d-block w-100" alt="Cliff Above a Stormy Sea"/>
            <div class="carousel-caption d-none d-md-block">
              <h5>أسواق الفتح-Aswaaq Alfath Market
            </h5>
              <p>اسواق_الفتح متفكرش كتير ... عروضنا كلها توفير.</p>
            </div>
          </div>
        </div>
        <!-- Inner -->
      
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <div class="container">
    <div class="row">
        <?php 
        //Posts 
        if (have_posts()){
            while (have_posts()) {
                the_post(); ?>
                <div class="col-sm-4">
                    <div class="main-post">
                        <h3 class="post-title" >
                        <a href="<?php the_permalink() ?>">
                             <?php the_title() ?>
                             </a>
                        </h3>
                        <?php the_post_thumbnail('',['class' => "img-responsive img-thumbnail"])?>
                        <div class="post-content" >
                            <?php the_excerpt() ?>
                        </div>
                        
                     </div>
                </div>
    
    
               <?php   
            }
        }
        
        ?>
      <?php
        echo '<div class="clearfix"></div>'; //عمل fix float clear
        echo '<div class="pagination">';
                //عمل صفحه للخلف 
            if(get_previous_posts_link()){
                Previous_posts_link('<i class="fa-solid fa-chevron-left"></i> Prev');}
                    else { echo  '<span> Prev </span>'; }
                    
                            //عمل صفحه للامام  
            if(get_next_posts_link()){
                    next_posts_link('Next <i class="fa-solid fa-chevron-right"></i>');}
                
                    else { echo '<span> Next </span>' ;}

        echo '</div>';
       ?>
    </div>
</div>

<div class="col-md-4">
    <?php 
    get_sidebar();
    if (is_active_sidebar('main-sidebar')){
        dynamic_sidebar('main-sidebar');
    } ?> 
</div>

<?php get_footer (); ?>