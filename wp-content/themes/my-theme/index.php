<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();

      
    $banner_background_image = get_field('banner_background_image');
    $banner_register_link = get_field('banner_register_link');
    $section3_background_image = get_field('section3_background_image');
    $section6_background_image = get_field('section6_background_image');
    $section7_video = get_field('section7_video');
    $section4_background_image = get_field('section4_background_image');
    $section6_icone_maps = get_field('section6_icone_maps');
    $section6_icone_horloge = get_field('section6_icone_horloge');
    $section6_icone_couverts = get_field('section6_icone_couverts');
    $section5_photos = get_field('section5_bloc_repeteur_orateurs');
      
  }
  
    
}
?>

  
<!-- CHAINE ALIMENTAIRE VÉGÉTALE...-->   
<section class="section-1" style="background-image: url(<?php echo $banner_background_image['url']; ?>)">
    <div>
    <p class="section-title"><?php the_field("banner_baseline") ?> </p><br>
    <p class="section-title2"><?php the_field("banner_title_brown") ?> </p>
    <p class="section-title3"><?php the_field("banner_title_green") ?> </p>
    <a class="section-link"><?php echo $banner_register_link['title']; // echo $banner_register_link['url'] ?> </a>
    </div>
</section>
    
    
    
    
<!-- LA CONFÉRENCE-->
<section class="section-2" >  
    <p class="section2-title"><?php the_field("section2_title_brown")?></p>
    <p class="section2-underscore"><?php the_field("barres_underscore")?></p>
    <p class="section2-text"><?php the_field("section2_text")?></p>  
</section>


    
<!-- IMAGE-->
<section class="section-3" style="background-image: url(<?php echo  $section3_background_image['url']; ?>)">
    <img class="section3"><?php the_field("") ?> <img/>
</section>

    
    
<!-- AU PROGRAME-->
<section class="section-4" style="background-image: url(<?php echo $section4_background_image['url']; ?>)">
    <div class="englobe-les2">
    <p class="section4-title"><?php the_field("section4_title_brown") ?></p>
    <p class="section4-underscore"><?php the_field("barres_underscore")?></p>
    
    <div class="section-4-div-gauche">
      <p class="section4-textegauche"><?php the_field("section4_text_left") ?></p>
      <div class="blocrep1">
      <p class="section4-bloc1">
        
        <?php  
       $programme1 = get_field('section4_bloc_repeteur_1');
        foreach($programme1 as $program){
          echo $program['heure1'];
          echo $program['description1'];
          echo "<br>";
        }?>
        
        </p>
        </div>
        </div>
    
    <div class="section-4-div-droit">
      <p class="section4-textedroit"><?php the_field("section4_text_right") ?></p>
      <div class="blocrep2">
      <p class="section4-bloc2">
        
        <?php 
      $programme2 = get_field('section4_bloc_repeteur_2');
        foreach($programme2 as $program2){
          echo $program2['heure2'];
          echo $program2['description2'];
          echo "<br>";
        }?>
        </p>
        </div>
        </div>
    <a class="section-link"><?php echo $banner_register_link['title']; // echo $banner_register_link['url'] ?> </a>
    </div>
</section>
    
    
    
    
    
    
    
    
<!-- LES ORATEURS-->
<section class="section-5" >
    <p class="section5-title"> <?php the_field("section5_title_brown") ?></p>
    <p class="section5-underscore"><?php the_field("barres_underscore")?></p>
    <p class="section5-text"> <?php the_field("section5_text") ?></p>
    
    <div class="div-orateurs">
     
        <?php
        
        
        $programme3 = get_field('section5_bloc_repeteur_orateurs');
        
        echo "<div class='blocorateur'>";
        
        foreach($programme3 as $program3){ ?>
          <img src="<?php echo $program3['photo_1']['url']; ?>" alt="">
        <?php
          echo $program3['prenom_nom'];
          echo $program3['profession'];
          echo "<br>";
          echo "</div>";
        }?>
        
        
    </div>
</section>
    
    
    
<!-- INFORATIONS PRATIQUES-->
    <p class="section6-title"><?php the_field("section6_title_brown") ?></p>
    <p class="section6-underscore"><?php the_field("barres_underscore")?></p>
<section class="section-6" style="background-image: url(<?php echo  $section6_background_image['url']; ?>)">
    
    
    
    <div class="infos-pratiques">
        <div><img width="20%" src="<?php echo get_template_directory_uri(); ?>/assets/img/picto-map.svg" alt=""><p><?php the_field("section6_texte1")?></p></div>
          <p><?php the_field("barres_underscore")?></p>
        <div><img width="20%" src="<?php echo get_template_directory_uri(); ?>/assets/img/picto-time.svg" alt=""><p><?php the_field("section6_texte2")?></p></div>
          <p><?php the_field("barres_underscore")?></p>
        <div><img width="15%" src="<?php echo get_template_directory_uri(); ?>/assets/img/picto-dinner.svg" alt=""><p><?php the_field("section6_texte3")?></p></div>
    
    </div>



    <img class="section6"><?php the_field("") ?> <img/>
</section>

    
    
<!-- VIDEOS-->
<section class="section-7">
    <p class="section7-title"> <?php the_field("section7_title_brown") ?></p>
    <p class=""><?php the_field("barres_underscore") ?> </p>
    <a class="section7-video"><img class="section7-videos"><?php echo $section8_video['url']; ?></img></a>   
</section>






<!-- ACTUS -->     
<section class="section-8">
    <p class="section8-title"> <?php the_field("section8_title_brown") ?></p>
    <p><?php the_field("barres_underscore") ?> </p>
    <!-- <a class="section8-video"><img class="section8-videos"><?php /** echo $section8_video['url']; */?></img></a> -->  
</section>


<section class="section-9">
     
</section>





</div>

<?php get_footer(); ?>
