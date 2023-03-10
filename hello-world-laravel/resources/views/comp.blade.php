<h1>Componentes</h1>

<x-teste>
    <p>Teste</p>
    <h1>Testando</h1>
</x-teste>

@foreach ($pessoas as $pessoa)
<x-card>
    <x-slot:image>
        {{$pessoa['image']}}
    </x-slot>
    <x-slot:name>
        {{$pessoa['name']}}
    </x-slot>
    <x-slot:age>
        {{$pessoa['age']}}
    </x-slot>
    <x-slot:birthdate>
        {{$pessoa['birthdate']}}
    </x-slot>
</x-card>
@endforeach
