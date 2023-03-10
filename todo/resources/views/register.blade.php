<x-layout page="Cadastro de Usuário">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>
    <h3>Cadastro de Usuário</h3>

    <section id="task_section">
        <h1>Registrar-se</h1>
        @if ($errors->any())
            <ul class="alert alert-error">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{route('user.register_action')}}" method="POST">
            @csrf

            <x-form.text_input
                name="name"
                label="Seu nome"
                required="required"
                placeholder="Seu nome"
            />

            <x-form.text_input
                name="email"
                label="Seu e-mail"
                type="email"
                placeholder="Seu e-mail"
                required="required"
            />

            <x-form.text_input
                name="password"
                type="password"
                label="Sua senha"
                placeholder="Sua senha"
                required="required"
            />

            <x-form.text_input
                name="password_confirmation"
                type="password"
                label="Confirme sua senha"
                placeholder="Confirme sua senha"
                required="required"
            />

            <x-form.form_button resetTxt="Limpar" submitTxt="Registrar-se"/>
        </form>
    </section>
</x-layout>