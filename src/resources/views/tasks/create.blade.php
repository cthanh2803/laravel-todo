@extends('layout')
@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css"
@endsection

@section('content')
    <div class="row">
        <nav class="panel panel-default">
            <div class="panel-heading">Add Task</div>
            <div class="panel-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $message)
                            <p>{{ $message }}</p>
                        @endforeach
                    </div>
                @endif
            </div>
            <form action="{{ route('tasks.create', ['id' => $folder_id]) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" />
                </div>
                <div class="form-group">
                    <label for="due_date">Expire</label>
                    <input type="text" class="form-control" name="due_date" id="due_date" value="{{ old('due_date') }}" />
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </nav>
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/default.js"></script>
    <script>
        flatpickr(document.getElementById('due_date'), {
            locale: 'ja'
            dateFormat: "Y/m/d",
            minDate: new Date()
        });
    </script>
@endsection
