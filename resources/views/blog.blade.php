@extends('master')
@section('title')
    About
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4 py-2">
                        <div class="card">
                            <img src="{{$product['image']}}" alt="" class="card-img-top h-300" />
                            <div class="card-body">
                                <h3 class="card-title">{{$product['name']}}</h3>

                                <p class="card-text font-weight-bold">Tk: {{$product['price']}}</p>
                                <hr/>
                                <a href="{{route('detail', ['id' => $product['id']])}}" class="btn btn-outline-success align-items-center">Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
