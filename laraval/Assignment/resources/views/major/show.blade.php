@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-header fs-2 text-center">
                    Major
                </div>
                <div class="card-body fs-4 ms-5 ps-5">
                    <div class="">
                        <label>Major</label> : <label>{{ $major[0]->major}}</label>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                    <a href="{{ route('Majorlist')}}"><button class="btn btn-sm bg-dark text-white">Back</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
