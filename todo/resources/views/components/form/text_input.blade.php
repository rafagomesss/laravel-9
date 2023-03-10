<div class="inputArea">
    <label for="{{$name}}">
        {{$label ?? ''}}
    </label>
    <input
        id="{{$name}}"
        name="{{$name}}"
        type="{{!empty($type) ? $type : 'text'}}"
        {{!empty($required) ? 'required' : ''}}
        placeholder="{{$placeholder ?? ''}}"
        value="{{$value ?? ''}}"
    >
</div>