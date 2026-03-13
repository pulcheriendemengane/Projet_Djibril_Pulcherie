@foreach($movies as $id => $movie)
<div class="card-hover">
            <a href="/movies/{{$id}}">
                {{ $movie['title'] }}
            </a>
            <p>{{$movie['content']}}</p>
        
@endforeach