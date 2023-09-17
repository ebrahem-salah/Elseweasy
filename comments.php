<?php

if (comments_open()) {?>
     <h3>
     <?php comments_number() ?>
     </h3>
<?php 
echo '<ul class="list-unstyle comments-list" >'; 
$comments_arguments = array( 
    'max_depth'=> 3 ,
    'type'=> 'comment',
    'avatar_size'=> 30 
);
wp_list_comments($comments_arguments) ;
echo'</ul>';        
}
else{
    echo 'Sorry Comments Are Disabled';
}
