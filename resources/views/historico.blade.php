<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

        <!-- Styles -->
        <style>
            body{
                background-color: rgb(243, 243, 243);
            }

            .ico{
                margin: 10px;
                height: 30px;
                border-bottom: 1px solid #999;
                
            }

            #nav_bar{
                height: 50px;
                background-color: #222222;
                color: rgb(126, 126, 126);
                padding-left: 10px;

            }
            #nav_bar > a:hover{
                color: white;
                text-decoration: none;
            }
    
            .menus{
                font-size: 15px;
                color: rgb(126, 126, 126);
                margin: 2px 5px;
                padding: 12px 5px;
                height: 46px;
                float: right;
                border-radius: 10px;
            }
    
    
        </style>

    </head>
    <body>


        <div id="nav_bar">
            <a style="font-size: 200%" href="/">CB250</a>

            <a href="/historico" class="menus" style="background-color: #585858; color: white"> Comprovantes </a>
            <a href="/" class="menus"> Inicio </a>
        </div>
      
        <div class="contents" style="text-align: center;">

            @if ($historicos->count() > 0)
                @foreach ($historicos as $item)

                    <div class="ico">
                        <div style="display: inline;font-size: 20px; float: left; color: green;">
                            <ion-icon name="checkmark-circle-outline"></ion-icon>

                        </div>
                        <div style="margin-left:5px; display: inline;font-size: 20px; float: left;">
                            Pagameno recebido

                        </div>
                        <div style="display: inline;font-size: 15px; float: right; margin-top: 5px;">
                            {{ date('d/m/Y', strtotime($item->created_at)) }}
                        </div>
            
                    </div>

                    <div style="color: green; font-weight: bold; font-size: 30px;">
                        R$ {{number_format($item->valor, 2 , ",", ".")}}
                    </div>

                    <div style="margin: 20px 20px 100px 20px">
                        <img style="width: 100%" src="img\{{ $item->comprovante }}" alt="">
                    </div>

                @endforeach
            @endif




        </div>



        <!-- jQuery library -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <!-- Initialize Bootstrap functionality -->
        <script>
            // Initialize tooltip component
            $(function () {
            $('[data-toggle="tooltip"]').tooltip()
            })

            // Initialize popover component
            $(function () {
            $('[data-toggle="popover"]').popover()
            })
        </script>



    </body>
</html>