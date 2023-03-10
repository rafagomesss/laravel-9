<x-layout page="Tarefas - Editar">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>
    <h3>Editar Tarefa ID: {{$task->id}}</h3>

    <section id="task_section">
        <h1>Atualizar Tarefa</h1>
        <form action="{{route('task.edit_action')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$task->id}}">
            <x-form.text_input
                name="title"
                label="Título da Task"
                required="required"
                placeholder="Digite o título da tarefa"
                value="{{$task->title}}"
            />
            <x-form.text_input
                name="due_date"
                label="Data de Realização"
                type="datetime-local"
                required="required"
                value="{{$task->due_date}}"
            />
            <x-form.select_input
                label="Categoria"
                name="category_id"
            >
                @foreach ($categories as $category)
                    <option
                        value="{{ $category->id }}"
                        @if($category->id === $task->category_id)
                        selected
                        @endif
                        >{{ $category->title }}</option>
                @endforeach
            </x-form.select_input>
            <x-form.textarea_input
                label="Descrição da Tarefa"
                name="description"
                placeholder="Digite a descrição da tarefa"
                value="{{$task->description}}"
            />
            <x-form.checkbox_input
                name="is_done"
                label="Tarefa Realizada?"
                checked="{{$task->is_done}}"
            />
            <x-form.form_button resetTxt="Limpar Formulário" submitTxt="Atualizar Tarefa"/>
        </form>
    </section>
</x-layout>