<!DOCTYPE html>
<html>
    <head>
        <title>Service interrompu !</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
        <style type="text/css">
            body { text-align: center; padding: 10%; font: 20px Helvetica, sans-serif; color: #333; }
            h1 { font-size: 50px; margin: 0; }
            article { display: block; text-align: left; max-width: 650px; margin: 0 auto; }
            a { color: #33a5d6; text-decoration: none; }
            a:hover { color: #333; text-decoration: none; }
            @media only screen and (max-width : 480px) {
                h1 { font-size: 40px; }
            }
        </style>
    </head>
    <body>
        <article>
            <h1><i class="fa fa-code" aria-hidden="true"></i>  <?php echo $_SERVER['HTTP_HOST']; ?> est coupé.</h1>
            <p>Le site demandé n'est désormais plus accessible.</p>
            <p>Son propriétaire a décidé d'en arrêter l'hébergement. Si vous estimez qu'il s'agit d'une erreur, vous pouvez <a href="mailto:contact@bldwebagency.fr?subject=[Serveur Web bldwebagency.fr] - ">nous contacter</a>.</p>
            <p id="signature">&mdash; Hosted with <i class="fa fa-heart" aria-hidden="true"></i> in <span class="fi fi-fr"></span> by <a href="https://bldwebagency.fr">bldwebagency.fr <i class="fa fa-diamond" aria-hidden="true"></i></a></p>
        </article>
    </body>
</html>
