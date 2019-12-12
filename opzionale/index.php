<!-- Stampare a schermo una decina di dischi musicali (vedi screenshot) in due modi diversi: -Solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.-Attraverso l’utilizzo di AJAX: al caricamento della pagina ajax chiederà attraverso una chiamata i dischi a php e li stamperà attraverso handlebars.Utilizzare: Html, Sass, JS, jQuery, handlebars, PhpOpzionale: -Attraverso un’altra chiamata ajax, filtrare gli album per artista -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>
    <?php 
    
    ?>
<body>
    <div class="container pad">
      <div class="row">
        <input type="text" id="src" >
        <button id="cerca">Cerca</button>
      </div>
        <div id='box' class="row justify-content-center">

        </div>
        
    </div>

    <!-- template -->
    <script id="template" type="text/x-handlebars-template">

      <div class="col-3 cd text-center">
        <img src="{{poster}}" alt="">
        <h4>{{title}}</h4>
        <h5>{{author}}</h5>
        <p>{{year}}</p>

      </div>

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="script.js" charset="utf-8"></script>
</body>
</html>