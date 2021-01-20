@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Create 
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.satgas.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="waktu">Waktu</label>
                <input class="form-control {{ $errors->has('waktu') ? 'is-invalid' : '' }}" type="text" name="waktu" id="waktu" value="{{ old('waktu', '') }}" required>
                @if($errors->has('waktu'))
                    <div class="invalid-feedback">
                        {{ $errors->first('waktu') }}
                    </div>
                @endif
                
            </div>
            <div class="form-group">
                <label class="required" for="tugas">Tugas</label>
                <input class="form-control {{ $errors->has('tugas') ? 'is-invalid' : '' }}" type="text" name="tugas" id="tugas" value="{{ old('tugas', '') }}" required>
                @if($errors->has('tugas'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tugas') }}
                    </div>
                @endif
               
            </div>

            <div class="card-header">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            Detail
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="#" class="btn btn-danger" id="add">
                                Add
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <table class="table" id="detail">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Comment</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            

            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Save
                </button>
            </div>

        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $( document ).ready(function() {
        $('#add').on('click', function(e){
            e.preventDefault();

            var html = '<tr><td><input type="text" class="form-control" name="name[]"></td><td><input type="text" class="form-control" name="nik[]"></td><td><input type="text" class="form-control" name="comment[]"></td><td><a href="#" class="btn btn-danger delete">X</a></td></tr>';
            $('#detail tbody').append(html);
        });

        $('body').on('click', '.delete', function(e){
            e.preventDefault();

            $(this).parents('tr').remove();
        });
    });
</script>

@endsection