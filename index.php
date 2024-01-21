<?php
 include_once 'libs/load.php';
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <style>
    .loader {
  width: calc(80px*0.707);
  height: calc(80px*0.707);
  background: #8d7958;
  clip-path: polygon(0 0,50% 15%,100% 0,85% 50%,100% 100%,50% 85%,0 100%,15% 50%);
  -webkit-mask:
    radial-gradient(circle closest-side,#0000 92%,#000) top   /100% 33.4%,
    radial-gradient(circle closest-side,#0000 92%,#000) left  /33.4%  33.4%,
    radial-gradient(circle 5px         ,#0000 92%,#000) center/33.3%  33.3%,
    radial-gradient(circle closest-side,#0000 92%,#000) right /33.4%  33.4%,
    radial-gradient(circle closest-side,#0000 92%,#000) bottom/100% 33.4%;
  -webkit-mask-repeat: no-repeat;
  animation: l4 1.5s infinite linear;
}
@keyframes l4 { 
  100%{transform: rotate(1turn)}
}
</style>
  <?php load_template('_head');?>
  </head>
  <body>
    
    

    
<?php load_template('_header') ?>

<main>
 <div class="loader"></div> 

  
<?php load_template('_main')?>

</main>
<?php load_template('_footer')?>
<script src="assets/dist/js/bootstrap.bundle.min.js">

  
</script>
<script>
  document.onreadystatechange = function() {
            if (document.readyState !== "complete") {
                document.querySelector(
                  "body").style.visibility = "hidden";
                document.querySelector(
                  ".loader").style.visibility = "visible";
            } else {
                document.querySelector(
                  ".loader").style.display = "none";
                document.querySelector(
                  "body").style.visibility = "visible";
            }
        };
</script>



    </body>
</html>
