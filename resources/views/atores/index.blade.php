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

        <h1 class="page-header">Lista de Atores</h1>

            <a href="/atores/create" class="btn btn-primary" style="margin-bottom: 15px;">Cadastrar</a>
            <div class="row">

                <div class="col-md-6">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Ano de Nascimento</th>
                            </tr>
                        </thead>
                    
                        <tbody>

                            @foreach($atores as $ator)
                                <tr>
                                    <td>{{$ator->id}}</td>
                                    <td>{{$ator->nome}}</td>
                                    <td>{{$ator->ano}}</td>
                                </tr>
                        
                            @endforeach
                            
                        
                        </tbody>
                    
                    </table>


                </div>
            </div>

        </div>

    
        

    </body>
</html>