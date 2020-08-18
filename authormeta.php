<?php 
$name = strtolower (get_the_author_meta( 'user_firstname').' '.get_the_author_meta( 'user_lastname'));
$description = get_the_author_meta( 'description');

?>

<div class="card card-cascade narrower">

  
    <div class="row">
      <div class="col-5">
        <!-- Card image -->
        <div class="view view-cascade overlay img-thumbnail">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 140 ); ?>
        </div>
    </div>
    <div class="col-7 my-auto">
        <?php echo '<h3 class="indigo-text text-center text-capitalize">'.$name.'</h3>' ?>
        <h6 class="indigo-text text-center pb-2 pt-1"><i class="fas fa-cloud-sun-rain"></i> ClimaRisk expert</h6>
</div>
</div>



  <!-- Card content -->
  <div class="card-body card-body-cascade">

    
    <!-- Title -->
    <h5 class="text-center indigo-text font-weight-bold card-title">Biography</h5>
    <!-- Text -->
    <p class="card-text">
        <?php echo $description ?>
    </p>
    <div class="text-center">
    <!-- Linkedin -->
    <a href="https://www.linkedin.com/in/angel-utset-96494121/?locale=en_US" class="indigo-text px-2 fa-lg li-ic" target="_blank" 
    onClick="_gaq.push(['_trackEvent', 'ClickonLinkedIn', 'Click', 'LinkedIn', 1])"><i class="fab fa-linkedin-in"></i></a>
    <!-- Twitter -->
    <a href="mailto: autset@climarisk.com" class="indigo-text px-2"><i class="fa fa-envelope"></i></a>
    <!-- Dribbble -->
    <a href="https://www.facebook.com/utsetangel" class="indigo-text px-2 fa-lg fb-ic" target="_blank"><i class="fab fa-facebook-f"></i></a>
    </div>

  </div>

  <!-- Card footer -->
  <div class="cr-fondo card-footer text-muted text-center">
  <a href="<?php echo home_url() ?>"><img src="https://climarisk.com/wp-content/uploads/2020/02/climarisk-logo-texto2.png" alt="ClimaRisk" title="ClimaRisk"></a>
  </div>

</div>