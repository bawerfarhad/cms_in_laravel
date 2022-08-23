@extends('layouts.app')


@section('content')



    <main class="py-4">
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <!-- Blog Entries Column -->
                <div class="col-md-8">
                    <!-- Title -->
                    <h1 class="mt-4">title</h1>
                {{--    <h1 class="mt-4">{{$post->title}}</h1>--}}

                <!-- Author -->
                    <p class="lead">
                        by
                        <a href="#">name</a>
                        {{--        <a href="#">{{$post->user->name}}</a>--}}
                    </p>

                    <hr>

                    <!-- Date/Time -->
                    <p>Posted on date </p>
                    {{--    <p>Posted on {{$post->created_at->diffForHumans()}} </p>--}}

                    <hr>

                    <!-- Preview Image -->
                    <img class="img-fluid rounded" src="https://images4.alphacoders.com/936/936378.jpg" alt="">
                    {{--    <img class="img-fluid rounded" src="{{$post->post_image}}" alt="">--}}

                    <hr>

                    <!-- Post Content -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi perspiciatis placeat quae quod recusandae sequi voluptatum. Architecto autem culpa cupiditate enim est, laboriosam, obcaecati perspiciatis quae quam, quia totam ullam.</p>
                    {{--    <p>{{$post->body}}</p>--}}

                    <hr>

                    <!-- Comments Form -->
                    <div class="card my-4">
                        <h5 class="card-header">Leave a Comment:</h5>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                    <!-- Single Comment -->
                    <div class="media mb-4">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                        <div class="media-body">
                            <h5 class="mt-0">Commenter Name</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>

                    <!-- Comment with nested comments -->
                    <div class="media mb-4">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                        <div class="media-body">
                            <h5 class="mt-0">Commenter Name</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                            <div class="media mt-4">
                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0">Commenter Name</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </div>

                            <div class="media mt-4">
                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0">Commenter Name</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </div>

                        </div>
                    </div>



                </div>
                <!-- Sidebar Widgets Column -->
                <div class="col-md-4">
                    <x-sidebar />
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </main>






@endsection
