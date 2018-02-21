@extends('_layout.backend')


@section('body')


    <div class="col-sm-6">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{url('admin/motorcycles/'.$motorcycle->id)}}" method="post" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control"
                       placeholder="Enter name" value="{{ ($motorcycle->name) }}">
                </small>
            </div>

            <div class="form-group">
                <label>Model </label>
                <input type="text" name="model" class="form-control"
                       placeholder="example : 1998" value="{{ $motorcycle->model }}">
            </div>
            <div class="form-group">
                <label> CC </label>
                <input type="text" name="cc" class="form-control"
                       placeholder="example : 1600" value="{{ $motorcycle->cc }}">
            </div>
            <div class="form-group">
                <label> Color </label>
                <select name="color" id="">
                    @foreach($colors as $color)
                        <option value="{{$color->id}}" {{ ($color->id == $motorcycle->color->id)? 'selected':'' }}>{{$color->name}}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <label> Weight (kg) </label>
                <input type="text" name="weight" class="form-control"
                       placeholder="example : 1500" value="{{ $motorcycle->weight }}">
            </div>

            <div class="form-group">
                <label> Price </label>
                <input type="text" name="price" class="form-control"
                       placeholder="example : 20500" value="{{ $motorcycle->price }}">
            </div>
            <div class="form-group img-delete">
                <img src="{{ asset($motorcycle->img_path )}}" alt="">
                <a href="#" id="img-delete" class="btn btn-danger">حذف تصویر قبلی</a>
                <input type="hidden" name="state_img" value="0" id="state_img">
            </div>
            <div class="form-group">
                <label> Image </label>
                <input type="file" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Edit motorcycle</button>
        </form>

    </div>



    <script>
        $('#img-delete').click(function () {
            $('.img-delete').hide();
            $('#state_img').val(1);
            return false;
        });
    </script>


@endsection