@extends("main")

@section('main')
<div class="menu mb-3" style="width: 200px; float: left">
    <select class="form-select" aria-label="Default select example">
        <option selected>Роль</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
</div>

<table class="table mb-3">
    <thead>
    <tr>
        <th scope="col">Пункт меню</th>
        <th scope="col">Привязанная роль</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Моя страница</td>
        <td>Администратор
            клиент</td>
    </tr>
    <tr>
        <td>Отчеты</td>
        <td>Администратор</td>
    </tr>
    </tbody>
</table>

<a class="btn btn-primary" href="{{route('create')}}" role="button">Создать пункт меню</a>

<a href="{{route('make_role')}}" class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true" style="margin-left:320px">Создать привязанную роль</a>

@endsection
