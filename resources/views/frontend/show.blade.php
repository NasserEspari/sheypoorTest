@extends('_layout.frontend')


@section('body')


    <div class="container">
        <div class="row">
            <img src="{{  asset($motorcycle->img_path) }}">
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
            </table>
        </div>
    </div>
@endsection