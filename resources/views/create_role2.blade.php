@extends("main")

@section('main')
    <form action="{{route('item-role')}}" type="POST">
        @csrf
        <select name="role_id" class="form-select mb-3">
            @foreach($roles as $role)
            <option value="{{$role->id}}">{{$role->title}}</option>
            @endforeach
        </select>

        <select name="item_id" class="form-select mb-3">
            @foreach($items as $item)
                <option value="{{$item->id}}">{{$item->title}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>



@endsection
