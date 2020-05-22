<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <title>CV John TCHA Etudiant Ingénieur en Informatique et Electronique</title>
      <link rel="stylesheet" href="./css/style.css?version=51">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <script type = "text/javascript" src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="./js/jcanvas.js"></script>
      <script src="./js/custom_canvas.js"></script>
      <script src="./js/google_maps.js"></script>
      <script src="./js/video.js"></script>
      <script src="./js/picture.js"></script>
      <script src="./js/smooth_scroll.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js'></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://maps.google.com/maps/api/js?key=AIzaSyDS9-mSzppwV8VXLM48aPMV7tIYUfgUvZg&amp;language=en" type="text/javascript"></script>
      <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
      <link rel="icon" href="./img/favicon.png" type="image/x-icon">
      <link rel="alternate" hreflang="fr" href="http://johntcha.com">
      <link rel="alternate" hreflang="en" href="http://en.johntcha.com">
      <link rel="alternate" hreflang="ja" href="http://ja.johntcha.com">
      <script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
      <script>
         Weglot.initialize({
             api_key: 'wg_8e487c399a060be60c489176a6bbc4c12'
         });
      </script>
      <meta name= "description" content= "CV de John Tcha, étudiant en Ecole d'ingénieurs à Polytech en informatique et électronique: développement web, applications, PHP, Python, SQL, JavaScript, Java, MVC, management, git, Github." />
      <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>
   <body>
      <!-- /header -->
      <header id="header" class="header">
         <?php include("./header.php")?>
      </header>
      <?php include("./navbar.php") ?>
      <div class="container">
         <?php include("./presentation.php") ?>
         <?php include("./CV.php") ?>
         <?php include("./portfolio.php") ?>
         <?php include("./contact.php") ?>
      </div>
      <footer>
         <?php include("./footer.php") ?>
         <script src="./js/contact.js"></script>
      </footer>
      <a id="button"></a>
      <!-- Button script -->
      <script>
         var btn = $('#button');
         
         $(window).scroll(function() {
          if ($(window).scrollTop() > 300) {
            btn.addClass('show');
          } else {
            btn.removeClass('show');
          }
         });
         
         btn.on('click', function(e) {
          e.preventDefault();
          $('html, body').animate({scrollTop:0}, '300');
         });
      </script>
   </body>
</html>