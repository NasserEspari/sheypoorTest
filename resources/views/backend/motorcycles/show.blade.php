@extends('_layout.backend')


@section('body')

    <span>
        <a href="{{ url('/admin/motorcycles/'.$motorcycle->id.'/edit') }}" class="btn btn-primary">Edit</a>
    </span>
    <span>
        <form action="{{url('/admin/motorcycles/'.$motorcycle->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </span>
    <hr>
    <table>
        <tr>
            <th>Name :</th>
            <th>{{ $motorcycle->name  }}</th>
        </tr>
        <tr>
            <th>Model :</th>
            <th>{{ $motorcycle->model  }}</th>
        </tr>
        <tr>
            <th>CC :</th>
            <th>{{ $motorcycle->cc  }}</th>
        </tr>
        <tr>
            <th>Weight:</th>
            <th>{{ $motorcycle->weight  }}</th>
        </tr>
        <tr>
            <th>Color :</th>
            @if($motorcycle->color)
                <th>{{ $motorcycle->color->name  }}</th>

            @else
                <th></th>

            @endif
        </tr>
        <tr>
            <th>Image :</th>
            <th>
                <img src="{{ asset($motorcycle->img_path)  }}" alt="">
            </th>
        </tr>
    </table>

@endsection