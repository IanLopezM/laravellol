<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<body style="background-color: #f7f6f2 !important; overflow-x: hidden; ">
    <div>
        <h1 class="display-1 text-center text-black"><ins>Listado de Campeones</ins></h1><br>
            <div class="text-center">
                @foreach ($champions as $champion)
                <div class="card border-warning bg-ligth" style="display: inline-block; width: 18rem; margin: 1vw;">
                    <img src="{{$champion->miniature}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $champion->name }}</h5>
                        <p class="card-text">{{$champion->title}}</p>
                        <a href="{{route('champion.show', ['champion'=>$champion])}}" class="btn btn-outline-warning">Mira el campeon</a>
                    </div>
                </div>
                @endforeach
            </div>
    </div>
</body>

