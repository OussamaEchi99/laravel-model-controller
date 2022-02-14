<h1>Homepage</h1>

<h2>Lista Film:</h2>

@foreach ($movies as $movie)
    <div>
        <h2>Title: {{ $movie->title }} - Original Title: {{ $movie->original_title }}</h2>

        <span>Nazionality: {{ $movie->nazionality }}</span>
        <br>
        <span>Date: {{ $movie->date }}</span>
        <br>
        <span>Vote: {{ $movie->vote }}</span>
    </div>
@endforeach