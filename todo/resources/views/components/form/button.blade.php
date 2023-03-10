<button
    type="{{empty($type) ? '' : $type}}"
    class="btn {{$class ?? ''}}"
>
    {{$slot}}
</button>