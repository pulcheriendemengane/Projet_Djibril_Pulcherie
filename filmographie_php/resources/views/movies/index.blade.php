<h1>Bienvenu sur La Bobine</h1>
<p>Régalez vous de films</p>

@foreach($movies as $id => $movie){
<div class="card-hover">
    <a href="/movies/{{$id}}">
         {{ $movie['title'] }}
    </a>
     <p>{{$movie['content']}}</p>
@endforeach
</div>
}