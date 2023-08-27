<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Scraper</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md3 mt-5 wraper">
                @foreach($data as $key => $value)
                <form action="" method="GET">
                    <label>Carro</label>
                    <input type="text" name="" size="50" placeholder="Carroaqui">
                    <button>Achaessaporra</button>
                </form>
                <div class="card text-center">
                    <h5 class="card-header">{{ $key }}</h5>
                    <div class="card-body">
                        <a href="{{ $value }}" class="card-text">Saiba Mais</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>



