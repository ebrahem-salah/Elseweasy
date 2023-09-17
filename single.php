<?php
 get_header (); ?>
<div class="container">
        <?php 
        //Posts 
        if (have_posts()){
            while (have_posts()) {
                the_post(); ?>
                
                    <div class="main-post">
                        <h3 class="post-title" >
                        <a href="<?php the_permalink() ?>">
                             <?php the_title() ?>
                             </a>
                        </h3>
                        <?php the_post_thumbnail('',['class' => "img-responsive img-thumbnail"])?>
                        <div class="post-content" >
                            <?php the_content() ?>
                        </div>
                        <hr>
                        
                     </div>
                
    
    
               <?php   
            }
        }
        
        ?>
        <?php
        echo '<div class="clearfix"></div>'; //عمل fix float clear
       ?>
    
</div>
<!--get Side Bar-->


<?php get_footer (); ?>