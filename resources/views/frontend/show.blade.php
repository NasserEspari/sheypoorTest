@extends('_layout.frontend')


@section('body')


    <div class="container">
        <div class="row">
            <img src="{{  asset($motorcycle->img_path) }}" class="img">
            <table>
                <tr>
                    <th>Name :</th>
                    <th class="name">{{ $motorcycle->name  }}</th>
                </tr>
                <tr>
                    <th>Model :</th>
                    <th class="model">{{ $motorcycle->model  }}</th>
                </tr>
                <tr>
                    <th>CC :</th>
                    <th class="cc">{{ $motorcycle->cc  }}</th>
                </tr>
                <tr>
                    <th>Weight:</th>
                    <th class="weight">{{ $motorcycle->weight  }}</th>
                </tr>
                <tr>
                    <th>Color :</th>
                    @if($motorcycle->color)
                        <th class="color">{{ $motorcycle->color->name  }}</th>

                    @else
                        <th></th>

                    @endif
                </tr>
            </table>
        </div>
    </div>
@endsection