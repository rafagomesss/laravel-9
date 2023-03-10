<h2>Exercício {{ $id }}</h2>

@if (!empty($url) && count($url) > 0)
    @foreach($url as $item)
        <img src="{{ $item }}">
    @endforeach
@endif