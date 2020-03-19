<?php
  if (!empty($_GET['q'])) {
    switch ($_GET['q']) {
      case 'info':
        phpinfo(); 
        exit;
      break;
    }
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Laragon</title>

        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                font-weight: 100;
                font-family: 'Karla';
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .container {
                text-align: center;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            li {
                list-style: none;
            }

            a {
                text-decoration: none;
            }

            a:hover {
              color: red;
            }

            .toolbox {
                display: flex;
                justify-content: center;
                text-align: left;
                font-size: 18px;
            }

            .toolbox img {
                max-height: 18px;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title" title="Laragon">Laragon</div>
     
                <div class="info"><br />
                      <?php print($_SERVER['SERVER_SOFTWARE']); ?><br />
                      PHP version: <?php print phpversion(); ?>   <span><a title="phpinfo()" href="?q=info">info</a></span><br />
                      Document Root: <?php print ($_SERVER['DOCUMENT_ROOT']); ?><br />
                      <a title="Getting Started" href="http://laragon.org/?q=getting-started">Getting Started</a><br />
                </div>

                <br /><hr /><br />

                <?php

                if($dir = opendir('./')) {
                    
                    while(false !== ($fichier = readdir($dir))) {

                        if($fichier != '.' && $fichier != '..' && $fichier != 'index.php') {

                            if (is_dir($fichier) && $fichier != '.phpintel') {
                                echo '<li><a href="./' . $fichier . '">' . $fichier . '</a></li>';
                            }

                        } 

                    }

                    closedir($dir);
                } else echo 'Le dossier n\' a pas pu être ouvert';

                ?>

                <br /><hr /><br />

                <div class="toolbox">

                    <div class="toolbox-content">

                    <li><img src="https://cdn.sstatic.net/Sites/stackoverflow/img/favicon.ico" alt="Stack Overflow favicon"><a href="https://stackoverflow.com/"> Stack Overflow</a></li>
                    <li><img src="https://laravel.com/img/favicon/favicon-32x32.png" alt="Laravel Favicon" /><a href="https://laravel.com/"> Laravel</a></li>
                    <li><img src="https://symfony.com/favicons/favicon-32x32.png" alt="Symfony favicon" /><a href="https://symfony.com/"> Symfony</a></li>
                    <li><img src="https://regex101.com/static/assets/favicon-32x32.png" alt="Regex101 favicon" /><a href="https://regex101.com/"> Regex101</a></li>
                    <li><img src="https://cdn.dribbble.com/assets/favicon-63b2904a073c89b52b19aa08cebc16a154bcf83fee8ecc6439968b1e6db569c7.ico" alt="Dribbble favicon" /><a href="https://dribbble.com/"> Dribbble</a></li>
                    <li><img src="https://www.gstatic.com/images/branding/product/ico/google_fonts_lodp.ico" alt="favicon" /><a href="https://fonts.google.com/"> Google Fonts</a></li>
                    
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>