<a
    href="/sair"
    style="padding: 10px; background-color:#ccc; color:#FFF; border-radius:5px;"
    onMouseOver="this.style.backgroundColor='#aaa'"
    onMouseOut="this.style.backgroundColor='#ccc'"
>Sair</a>
<hr style="margin-top:20px;">

<h2>Seja Bem-vindo: {{ $name }} {{ $lastName }}</h2>
<h3>Nascimento: {{ $birthDate }}</h3>
<h3>Idade {{$age}}</h3>

<hr>

<h2>1 + 1 é: {{ 1 + 1 }}</h2>
<h3>O código é: {{-- funcao() --}}</h3>
<p>Código HTML: {{ $html }}</p>
<p>Código HTML Interpretado: {!! $html !!}</p>

{{-- condicionais --}}

<h3>{{ $name === 'fulano' ? 'Sim' : 'Não' }}</h3>

<span>O usuário é fulano? </span>
@if ($name === 'fulano')
    <h4>É fulano</h4>
@elseif ($name === 'Fulana')
    <h4>É Fulana</h4>
@else
    <h4>Não é nenhum dos dois</h4>
@endif

{{-- for --}}

@for ($x = 0; $x < 4; $x++)
    <p>O valor de I é: {{ $x }}</p>
@endfor

<hr>

{{-- foreach --}}

<h2>Ingredientes</h2>

@foreach ($ingredientes as $i => $item)
    <p>O ingrediente {{ $i }} é: <b> {{ $item }}</b> -
        @component('components.botao')
            @slot('href')
                https://www.fulano.com
            @endslot
            @slot('cor')
                #339c5e
            @endslot
            Editar
        @endcomponent

        @component('components.botao')
            @slot('href')
                https://www.9gag.com
            @endslot
            @slot('cor')
                #F93822
            @endslot
            Excluir
        @endcomponent
    </p>
@endforeach
