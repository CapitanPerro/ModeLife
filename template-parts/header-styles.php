<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
<style>.u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 101px;
}
.u-header .u-image-1 {
  width: 127px;
  height: 95px;
  margin: 2px auto 0 0;
}
.u-header .u-logo-image-1 {
  width: 100%;
  height: 100%;
}
.u-header .u-menu-1 {
  font-family: size-14;
  margin: -66px 0 32px auto;
}
.u-header .u-nav-1 {
  font-size: 1rem;
  letter-spacing: 0px;
  font-weight: 700;
  text-transform: uppercase;
}
.u-block-924a-19 {
  font-size: 1rem;
}
.u-header .u-nav-2 {
  font-size: 1rem;
}
.u-block-924a-20 {
  font-size: 1rem;
}
@media (max-width: 1199px) {
  .u-header .u-sheet-1 {
    min-height: 103px;
  }
  .u-header .u-image-1 {
    margin-top: 3px;
  }
  .u-header .u-menu-1 {
    width: auto;
    margin-bottom: 33px;
  }
}
@media (max-width: 991px) {
  .u-header .u-sheet-1 {
    min-height: 106px;
  }
  .u-header .u-image-1 {
    margin-top: 8px;
  }
  .u-header .u-menu-1 {
    margin-top: -62px;
    margin-right: 20px;
    margin-bottom: 37px;
  }
}
@media (max-width: 767px) {
  .u-header .u-menu-1 {
    margin-top: -65px;
  }
}
@media (max-width: 575px) {
  .u-header .u-sheet-1 {
    min-height: 107px;
  }
  .u-header .u-menu-1 {
    margin-top: -65px;
    margin-right: 8px;
    margin-bottom: 38px;
  }
}</style>
