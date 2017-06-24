<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>FormFrame</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/main.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
    <script>
        $(document).ready(function() {

            $('a').on('click', function() { 

                var idHref = $(this).attr('href');

                $('main section').css('display', 'none');

                $(idHref).css('display', 'block');

            });

        });
    
    </script>
</head>

<body>
    <nav class="panel-area">
        <div class="panel-fixed-left">
            <div class="logo">
                <h2>FormFrame</h2>
            </div>
            <div class="vertical-menu">
                <ul>
                    <li><a href="#button">Buttons</a></li>
                    <li><a href="#inputs">Inputs</a></li>
                    <li><a href="#grid">Grid</a></li>
                    <li><a href="#select">Select->Option</a></li>
                    <li><a href="#forms">Form</a></li>
                    <li><a href="#table">Table</a></li>
                    <li><a href="#listaOrd">Lista Ordenada</a></li>
                    <li><a href="#listaNao">Lista Não-Ordenada</a></li>
                    <li><a href="#imagem">Imagem</a></li>
                    <li><a href="#link">Link</a></li>
                    <li><a href="#youtube">Youtube</a></li>
                </ul>
            </div> 
        </div>
    </nav>
    <main>
        <?php 
            include("content.php");
        ?>    
    </main>
    </body>

</html>