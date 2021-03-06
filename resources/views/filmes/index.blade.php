<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        
        <div class="container">

        <h1 class="page-header">Lista de filmes</h1>

            <a href="/filmes/create" class="btn btn-primary" style="margin-bottom: 15px;">Cadastrar</a>
            <div class="row">

                <div class="col-md-6">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Titulo</th>
                                <th>Descrição</th>
                                <th></th>
                            </tr>
                        </thead>
                    
                        <tbody>

                            @foreach($filmes as $filme)
                                <tr>
                                    <td>{{$filme->id}}</td>
                                    <td>{{$filme->titulo}}</td>
                                    <td>{{$filme->descricao}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/filmes/{{$filme->id}}/edit">
                                            <span class="glyphicon glyphicon-pencil"></span> Editar
                                        </a>
                                    </td>
                                </tr>
                        
                            @endforeach
                            
                        
                        </tbody>
                    
                    </table>


                </div>
            </div>

        </div>

    
        

    </body>
</html>