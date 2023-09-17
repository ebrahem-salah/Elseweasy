<?php


 get_header (); ?>
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
        
       ?>
    </div>
</div>

<?php get_footer (); ?>

