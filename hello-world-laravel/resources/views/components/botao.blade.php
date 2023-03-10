<a  href="{{ $href }}"
    style="
        background-color: {{ $cor }};
        color: #FFF;
        border: 0px;
        padding: 5px;
        border-radius: 3px;
        margin-right: 5px;
        text-decoration: none;
        cursor: pointer;"
    onmouseover="this.style.backgroundColor='#333'"
    onmouseout="this.style.backgroundColor='{{ $cor }}'">
    {{ $slot }}
</a>
