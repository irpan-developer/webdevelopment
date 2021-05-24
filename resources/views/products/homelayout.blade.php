@extends('layouts.app')

 

@section('content')

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif



    <div class="container">
            <div class="row">



@foreach ($products as $product)
                <div class="col-md-8 mb-5">
                   <h2>{{ $product->name }}</h2>
                    <hr />
                    <p>{{ $product->detail }}</p>
                                        <a class="btn btn-primary btn-lg" href="#!">Call to Action »</a>
                </div>

@if ($loop->first)
            <div class="col-md-4 mb-5 ">
                    <h2>Contact Us</h2>
                    <hr />
                    <address>
                        <strong>Start Bootstrap</strong>
                        <br />
                        3481 Melrose Place
                        <br />
                        Beverly Hills, CA 90210
                        <br />
                    </address>
                    <address>
                        <abbr title="Phone">P:</abbr>
                        (123) 456-7890
                        <br />
                        <abbr title="Email">E:</abbr>
                        <a href="mailto:#">name@example.com</a>
                    </address>                
                </div>
@endif

@if($loop->last)
</br>
</br></br></br>
@endif
                
@endforeach

{!! $products->links() !!}
                


                
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://via.placeholder.com/300x200" alt="..." />
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary" href="#!">Find Out More!</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://via.placeholder.com/300x200" alt="..." />
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary" href="#!">Find Out More!</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://via.placeholder.com/300x200" alt="..." />
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary" href="#!">Find Out More!</a></div>
                    </div>
                </div>
            </div>
        </div>





  

@endsection


