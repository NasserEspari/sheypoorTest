@extends('_layout.backend')


@section('body')

    <a href="{{url('admin/motorcycles/create')}}">
        <i class="glyphicon glyphicon-plus"></i>
        Add motorcycle
    </a>
    <br>
    <hr>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($motorcycles as $motorcycle)


            <tr>
                <td>{{ $motorcycle->name  }}</td>
                <td>{{ $motorcycle->cc  }}</td>
                <td><a href="{{url('/admin/motorcycles/'.$motorcycle->id)}}">view</a></td>
            </tr>


        @endforeach

        </tbody>
    </table>


@endsection