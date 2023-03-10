<x-layout page="Tarefas - Criar">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>
    <h3>Cadastro de Tarefas</h3>

    <section id="task_section">
        <h1>Criar Tarefa</h1>
        <form action="{{route('task.create_action')}}" method="POST">
            @csrf
            <x-form.text_input
                name="title"
                label="Título da Task"
                required="required"
                placeholder="Digite o título da tarefa"
            />
            <x-form.text_input
                name="due_date"
                label="Data de Realização"
                type="datetime-local"
                required="required"
            />
            <x-form.select_input
                label="Categoria"
                name="category_id"
            >
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </x-form.select_input>
            <x-form.textarea_input
                label="Descrição da Tarefa"
                name="description"
                placeholder="Digite a descrição da tarefa"
            />
            <x-form.form_button resetTxt="Limpar Formulário" submitTxt="Criar Tarefa"/>
        </form>
    </section>
</x-layout>