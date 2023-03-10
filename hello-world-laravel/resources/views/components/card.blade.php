<div class="card"
    style="
    display: inline-block;
    position: inherit;
    width: 20%;
    margin-left: 10px;
    padding: 10px;
    text-align: center;
    box-shadow: 0px 0px 5px 1px #ccc;
    border-radius: 5px;
    margin-top: 10px;
    height: 350px;
    max-width: 200px;
    min-width: 150px;
">
    <img src="{{ $image }}">
    <h2>{{ $name }}</h2>
    <h3>{{ $age }} anos.</h3>
    <p> Nasceu em {{ $birthdate }}</p>
</div>