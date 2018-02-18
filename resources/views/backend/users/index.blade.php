@extends('_layout.backend')


@section('body')

    <a href="{{url('admin/users/create')}}">
        <i class="glyphicon glyphicon-plus"></i>
        Add users
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
        @foreach($users as $user)

            @if(Auth::id() != $user->id)

                <tr>
                    <td>{{ $user->name  }}</td>
                    <td>{{ $user->email  }}</td>
                    <td>
                        <form action="{{'/admin/users/'.$user->id}}" method="post">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>

            @endif

        @endforeach

        </tbody>
    </table>


@endsection