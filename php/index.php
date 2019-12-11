<!-- Stampare a schermo una decina di dischi musicali (vedi screenshot) in due modi diversi: -Solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.-Attraverso l’utilizzo di AJAX: al caricamento della pagina ajax chiederà attraverso una chiamata i dischi a php e li stamperà attraverso handlebars.Utilizzare: Html, Sass, JS, jQuery, handlebars, PhpOpzionale: -Attraverso un’altra chiamata ajax, filtrare gli album per artista -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
    <?php 
    include 'data.php';
    ?>
<body>
    <div class="container pad">
        <div id='box' class="row justify-content-center">
          <?php 
          foreach ($database as $cd) {
            echo '<div class="col-3 cd text-center">';
            echo '<img src="'.$cd['poster'].'" alt>';
            echo '<h4>'.$cd['title'].'</h4>';
            echo '<h5>'.$cd['author'].'</h5>';
            echo '<p>'.$cd['year'].'</p>';
            echo '</div>';
          }
          
          ?>
        </div>
        
    </div>
</body>
</html>