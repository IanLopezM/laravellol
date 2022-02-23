<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<body style="background-color: #f7f6f2 !important; overflow-x: hidden; ">
    <h1 class="display-1 text-center text-black"><ins>{{$champion->name}}</ins></h1><br>
    <h5 class="text-center"><a class="link-warning alert-link" href="{{route('champion.index')}}">Vuelve al listado de campeones</a></h5>
    <div class="text-center">
        <h3 class="text-center" style="min-height: 4vh; max-height: 12vh;">{{ $champion->title }}</h3>
        <div class="d-flex justify-content-center">
            <h5 class="w-50"style="min-height: 8vh; max-height: 12vh;">{{ $champion->blurb }}</h5>
        </div>
        <img src="{{$champion->image}}" class="h-50" alt="...">
                
    </div>
</body>
