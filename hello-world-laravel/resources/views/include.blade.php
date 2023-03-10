<h1>Includes Hello World</h1>

{{-- Include é mais adequado para dados estáticos --}}
{{-- @include('components.component') --}}
{{-- @include('components.component', ['name' => 'Componente 1']) --}}

{{-- @if (count($pessoas) > 0)
    @foreach ($pessoas as $pessoa)
        @include('components.card', $pessoa)
    @endforeach
@endif --}}

{{-- Para mandar informações em HTML por exemplo, é preferível component --}}
@component('components.component')
    <h1>Título Qualquer</h1>
    <p>Texto qualquer</p>
@endcomponent

{{-- Incluir somente se a view ou component existir --}}
@includeIf('components.component1', ['html' => '<h1>Componente 1</h1>'])

{{-- Incluir de acordo com o retorno do primeiro parâmetro: true(mostra), false(não mostra) --}}
@includeWhen(false, 'components.component1', ['html' => '<h1>Componente 1</h1>'])

{{-- Contrário do 'includeWhen', semelhante a cláusula else, se for false exibe, se for true esconde --}}
@includeUnless(true, 'components.component1', ['html' => '<h1>Componente 1</h1>'])

{{-- Irá incluir o primeiro que existir, se não existir nenhum emitirá um erro --}}
@includeFirst(['components.component2', 'components.component1'], ['html' => '<h1>Componente 1</h1>'])