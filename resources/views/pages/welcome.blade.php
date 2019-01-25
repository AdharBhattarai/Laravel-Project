@extends('main') 
@section('title','| HomePage') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to my blog</h1>
                <p class="lead">Thank you for visiting my blog.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a></p>
            </div>
        </div>
    </div>
    <!--end of header .row-->
    <div class="row">
        <div class="col-md-8">

            <div class="post">
                <h3>Post Title </h3>

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis nulla quo ipsum ex quas voluptates
                    iure! Velit, possimus nulla! Maxime optio assumenda omnis reiciendis exercitationem quod laborum inventore
                    sapiente porro.
                </p>
                <a href="#" class="btn btn-primary">Read More </a>
            </div>
            <hr>

            <div class="post">
                <h3>Post Title </h3>

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis nulla quo ipsum ex quas voluptates
                    iure! Velit, possimus nulla! Maxime optio assumenda omnis reiciendis exercitationem quod laborum inventore
                    sapiente porro.
                </p>
                <a href="#" class="btn btn-primary">Read More </a>
            </div>
            <hr>

            <div class="post">
                <h3>Post Title </h3>

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis nulla quo ipsum ex quas voluptates
                    iure! Velit, possimus nulla! Maxime optio assumenda omnis reiciendis exercitationem quod laborum inventore
                    sapiente porro.
                </p>
                <a href="#" class="btn btn-primary">Read More </a>
            </div>
            <hr>

            <div class="post">
                <h3>Post Title </h3>

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis nulla quo ipsum ex quas voluptates
                    iure! Velit, possimus nulla! Maxime optio assumenda omnis reiciendis exercitationem quod laborum inventore
                    sapiente porro.
                </p>
                <a href="#" class="btn btn-primary">Read More </a>
            </div>
        </div>

        <div class="col-md-3 col-md-offset-1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid cumque eveniet perspiciatis? Perspiciatis dolorem corrupti
            corporis nam voluptates in voluptate eos, asperiores beatae? Nam quam rem incidunt fugit, vero eaque.
            <h2>Sidebar</h2>
        </div>
    </div>
</div>
<!-- end of .container-->
@endsection