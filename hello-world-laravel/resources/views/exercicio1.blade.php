<h2>Exercício {{ $id }}</h2>
@if (count($pessoas) > 0)
    @foreach ($pessoas as $pessoa)
        @component('components.card')
            @slot('image')
                {{ $pessoa['image'] }}
            @endslot
            @slot('name')
                {{ $pessoa['name'] }}
            @endslot
            @slot('birthdate')
                {{ $pessoa['birthdate'] }}
            @endslot
            @slot('age')
                {{ $pessoa['age'] }}
            @endslot
        @endcomponent
    @endforeach
@endif
