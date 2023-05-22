<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cb250</title>

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
                color: blue;
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

            <h1 id="titulo">Pagamentos</h1>


            <div class="table-responsive" style="margin-top: 20px;">
                <div class="col-md-12" style="margin-top: 20px;">

                    <table class="table table-bordered table-striped tabela3 dataTable no-footer table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Valor</th>
                                <th>Data</th>
                                <th></th>
                            </tr>                
                        </thead>

                        <tbody>

                            @if ($pagamentos->count() > 0)

                                @foreach ($pagamentos as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>R$ {{number_format($item->valor, 2 , ",", ".")}}</td>
                                        <td>{{date('d/m/Y', strtotime($item->created_at))}}</td>   
                                        <td><a href="" style="color: red; text-decoration: none" onclick="abreModal({{$item->id}})"><b>x</b></a></td>
                                    </tr>
                        
                                @endforeach
    
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        
    
        </div>

        <form action="" id="formExcluir" method="POST">
            @csrf
            <!-- Modal -->
            <div id="myModalExcluir" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #555; color: white">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Excluir Comprovante</h4>
                        </div>

                        <div class="modal-body">
                            <p>Deseja realmente excluir o comprovante de número <span id="numero_comprovante"></span> ?</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger" style="background-color: red">Excluir</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>


        <!-- jQuery library -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <!-- Initialize Bootstrap functionality -->
        <script>

            function abreModal($id){
                event.preventDefault();

                $("#numero_comprovante").html($id);

                $("#formExcluir").attr('action', '/excluir/comprovante/'+$id);

                $("#myModalExcluir").modal('show');
                
            }


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