<x-layout page="Login">

    <section id="task_section">
        <h1>Realizar Acesso</h1>
        <form action="{{route('user.login_action')}}" method="POST">
            @csrf

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

            <x-form.form_button resetTxt="Limpar" submitTxt="Login"/>
        </form>
    </section>
</x-layout>