@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-3 clearfix">
            <div class="pull-left">
                <h2>Major</h2>
                <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('salaryInsert') }}">Create New Record</a>
                </div>
            </div>
            <table class="table table-hover text-center">
                <thead class="bg-dark text-white">
                    <th>Major</th>
                    <th>Action</th>
                </thead>

                <tbody>
                    @foreach ($salary as $item)
                    <tr>
                        <td>{{ $item->major}}</td>
                        <td>
                        <a href="{{ route('majorEdit' , $item->id) }}"><button class="btn btn-warning btn-sm ">Edit</button></a>
                        <a href="{{ route('majorDelete' , $item->id) }}"><button class="btn btn-danger btn-sm ">Delete</button></a>
                        <a href="{{ route('majorShow' , $item->id) }}"><button class="btn btn-secondary btn-sm ">Show</button></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="">
                {{ $major->links()}} 
            </div>
        <a href="{{ route('list') }}"><button class="btn btn-primary float-end">Back</button></a> 
        </div>
    </div>

@endsection