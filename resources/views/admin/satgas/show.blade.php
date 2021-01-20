@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Show 
    </div>

    <div class="card-body">
        
        <div class="form-group">
            <div class="row">
                <label class="col-md-3" for="waktu">Waktu</label>
                <div class="col-md-7">
                    {{ $satgas->waktu }}
                </div>
            </div>
            <div class="row">
                <label class="col-md-3" for="waktu">Tugas</label>
                <div class="col-md-7">
                    {{ $satgas->tugas }}
                </div>
            </div>
        </div>
            

            <div class="card-header">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            Detail
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
                    @foreach( $satgas->details as $item )
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->comment }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            

            <div class="form-group">
                <a href="{{ route('admin.satgas.index') }}" class="btn btn-danger">
                    Back
                </a>
            </div>

    </div>
</div>
@endsection