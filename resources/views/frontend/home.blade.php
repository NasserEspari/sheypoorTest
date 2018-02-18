@extends('_layout.frontend')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h4>Filter</h4>
                <hr>
                <h6>Color :</h6>
                <ul>
                    <li>
                        <a href="{{route('home.index',['color'=>'all' , 'orderby'=>request('orderby'),'sort'=>request('sort')])}}">all</a><br>
                    </li>

                    @foreach($colors as $color)
                        <li>
                            <a href="{{route('home.index',['color'=>$color->name , 'orderby'=>request('orderby'),'sort'=>request('sort')])}}">{{$color->name}}</a>
                        </li>

                    @endforeach
                </ul>

                <br><br>
                <h4>orderby</h4>
                <hr>
                <ul>
                    <li>
                        <a href="{{route('home.index',['color'=>request('color') , 'orderby'=>'price','sort'=>request('sort')])}}">Price</a><br>
                    </li>
                    <li>
                        <a href="{{route('home.index',['color'=>request('color') , 'orderby'=>'date','sort'=>request('sort')])}}">Date</a><br>
                    </li>

                </ul>
                <br><br>
                <h4>Sort</h4>
                <hr>
                <ul>
                    <li>
                        <a href="{{route('home.index',['color'=>request('color') , 'orderby'=>request('orderby'),'sort'=>'asc'])}}">Ascending</a><br>
                    </li>
                    <li>
                        <a href="{{route('home.index',['color'=>request('color') , 'orderby'=>request('orderby'),'sort'=>'desc'])}}">Descending</a><br>
                    </li>

                </ul>


            </div>
            <div class="col-sm-9">
                <ul class="widget-products">
                    @foreach($motorcycles as $motorcycle)

                        <li>
                            <a href="{{ url('/motorcycle/'.$motorcycle->id) }}">
                     <span class="img">
                     <img class="img-thumbnail" src="{{ asset($motorcycle->img_path) }}" alt="">
                     </span>
                                <span class="product clearfix">
                     <span class="name">
                     {{ $motorcycle->name }}
                     </span>
                     <span class="price">
                     <i class="fa fa-money"></i> ${{ $motorcycle->price }}
                     </span>
                     </span>
                            </a>
                        </li>
                    @endforeach

                </ul>
                {{ $motorcycles->links()  }}
            </div>

        </div>
    </div>

@endsection
