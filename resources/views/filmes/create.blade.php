<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

</head>

<body>

    <div class="container">

        <h1 class="page-header">Lista de filmes</h1>

        <div class="row">

            <div class="col-md-6">

                <form method="post" action="/filmes/create">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input class="form-control" type="text" name="titulo" id="titulo" placeholder="Titulo">
                    </div>

                     <div class="form-group">
                        <label for="descricao">Descricao</label>
                        <input class="form-control" type="text" name="descricao" id="descricao" placeholder="Descricao">
                    </div>

                    <button class="btn btn-primary">Enviar</button>
                    <a href="/" class="btn btn-default">Voltar</a>
                </form>    


            </div>
        </div>

</body>

</html>