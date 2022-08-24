<div {{$attributes ->merge([ // the merge attribute allows as to append classes from called tags and merge to the classes in this classes in here
    'class'=>'bg-info',
    'data'=>'hello man',

    ])}}>   {{-- allows us to append HTML attribute using the callable tags in the app.blade.php, look at line 63 at ==>> id="blog-section" --}}

        {{$slot}}  {{-- allow as to accept the php element in the callable tags, look at the app.blade.php at line 64-65-66 --}}



        @foreach ($posts as $post)
            
            <!-- Blog Post -->
            <div class="card mb-4">
                <img class="card-img-top" src="{{ $post->post_image }}" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p class="card-text">{{ Str::limit($post->body,'50',' ....') }}</p>
                    <a href="{{route('post.details', $post->id)}}" class="btn btn-primary">Read More &rarr; </a>
                    {{-- <a href="post/show/{{ $post->id }}" class="btn btn-primary">Read More &rarr; </a> --}}
                </div>
                <div class="card-footer text-muted">
                    <div class="card-footer text-muted">
                        Posted on {{ $post->created_at->diffForHumans() }}
                    <p>Tags:</p> 
                    <p>Writer: <a href="#">{{ $post->user->name }}</a></p>
                    </div>
                </div>
            </div>

        @endforeach


    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
        </li>
        <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
        </li>
    </ul>


</div>


