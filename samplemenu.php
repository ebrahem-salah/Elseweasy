<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> <?php bloginfo( 'name' ); ?> </title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
    <?php wp_head(); ?>
    
<style>
  /*الجداول */
ul{
    padding: 0px;
    margin: 0px;
    list-style: none;
}
/*شكل القائمة الخارجي */
.navbar{ 
    width: 100%;
    background-color: #33d1cc;
    min-height: 50px;
    
}
/*القائمة  */
.menu  > li { 
    padding:15px;
    float: right;
    
}
/* الكلام داخل القائمة */
.menu  > li a{
    color: #ffc400;
    text-decoration: none;
    
}
.navbarbrand 
{float:left;
    margin: 10px 20px;
    color: #ffc400;
    text-decoration: none;
}


/*القائمة الفرعية */
/*position:absolute بتعمل قائمة متحركه علشان نقدر نخفيهها او نظهرها 
display: none بتخفي القائمة  */
.sub-menu{
    z-index: 1000;
    float: left;
    border: 1px;
    border-radius: 5px;
    position: absolute;
    margin: 10px 0px 10px 0px ;
    padding: 10px;
    -webkit-box-shadow:0 1px 1px rgba(0 , 0 , 0 , .5);
    -moz-box-shadow:0 3px 1px rgba(0 , 0 , 0 , .5);
    box-shadow:0 3px 1px rgba(0 , 0 , 0 , .5);
    display: none;
    
}
/* سهم القائمة */
.menu-item .sub-menu::before{
content:'';
border-left: 6px solid transparent;
border-right: 6px solid transparent;
border-bottom: 6px solid white;
height: 0;
width: 0;
position: absolute;
left: auto;
top: 12px;
    }
        /*  لتغير اللون focus */
    
    .navbar  a.active,
    .navbar  a:focus,
    .navbar  a:hover
    {
      color:rgb(129, 187, 28);
      
     }
     /* display:block; نعمل هافر اول ما تقف علي منيو ايتم المنيو الفرعية تظهر */

     .menu .menu-item:hover .sub-menu{
        display: block;
    }
    /*تظبيط شاشة الهاتف*/
    
@media (max-width:920px){
    #menu{
display: flex;    }
    /*شكل القائمة الخارجي */
    .menu{ 
        background-color: #79e698;
        position: fixed;
         top: 70px;
         right: 0px;
         width: 40%;
         flex-direction: column;
         align-items: center;
         justify-content: space-between;
         overflow-x: hidden;
         overflow-y: auto;
    }
    .menu > ul  {
        flex-direction: column; }

    /*القائمة  */
    .menu li{ 
        width: 100%;
        flex: initial;
        
        
    }
    /* الكلام داخل القائمة */
    .menu  > li a{
        color: #ffc400;
           display: block;
           padding: 3px;     
    }
    
.sub-menu{
    position: initial ;
    top: initial;
    left: initial;
    transform: initial;
    opacity: 1;
    pointer-events: auto ; 
    width: 100%;
    padding: 0px;
      
}

.menu .menu-item:hover .sub-menu{
        display: block;
    }




}
</style>
</head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg">
    <div class="container">
    <a class="navbarbrand" href="#">Navbar</a>  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    </div>
  </div>  
</nav>



    