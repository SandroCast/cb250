<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cb250</title>

        <link rel="shortcut icon" href="img/favicon/moto.png" type="image/x-icon">

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
            #titulo{
                margin-top: 20px;
                font-size: 20px;
                color: green;
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
                border-radius: 10px;
            }
    
    
        </style>

    </head>
    <body>
     
        <div id="nav_bar">
            <a style="font-size: 200%" href="/">CB250</a>
        </div>
        <div id="nav_bar">
            <a href="/" class="menus"> Inicio </a>
        </div>
        <div id="nav_bar">
            <a href="/historico" class="menus"> Comprovantes </a>
        </div>
        <div id="nav_bar">
            <a href="/administrador/AmAtOrY/sandrocastro/novo" class="menus"> Novo Pagamento </a>
        </div>
        <div id="nav_bar">
            <a href="/administrador/AmAtOrY/sandrocastro/pagamentos" class="menus"> Todos Pagamentos </a>
        </div>

        <div class="contents" style="text-align: center">

            <h1 id="titulo">Efetuar Pagamento</h1>

            <div style="margin: 30px 100px">

                    <form action="/administrador/AmAtOrY/sandrocastro/novo/salvar" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                        <label class="col-md-2 control-label">Valor</label>

                        <input style="font-size: 20px; text-align: center" type="number" name="valor" autofocus="autofocus" class="form-control" placeholder="Digite o valor" required/>

                        <label class="col-md-2 control-label">Data do Pagamento</label>

                        <input style="font-size: 20px; text-align: center" type="date" name="data" class="form-control" placeholder="Digite a data" required/>
    
                        <input style="margin: 20px 0" type="file" id="image" class="from-control-file" name="imagem" required>

                        <button style="margin-top: 10px;" class="btn btn-default btn-flat"><i class="fa fa-search"></i> Salvar</button>
                    </div> 
                </form>
                
            </div>




        </div>



        <!-- jQuery library -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  



    </body>
</html>