@extends("main")

@section('main')
    <h2 class="title">Создать пункт меню</h2>
    <form action="{{route('create-item')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Название</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" id="title">
            @error('title')
            <div class="alert alert-danger mt-3" role="alert">
                {{$message}}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>

@endsection
