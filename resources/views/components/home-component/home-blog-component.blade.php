<div {{$attributes ->merge([ // the merge attribute allows as to append classes from called tags and merge to the classes in this classes in here
    'class'=>'bg-info',
    'data'=>'hello man',

    ])}}>   {{-- allows us to append HTML attribute using the callable tags in the app.blade.php, look at line 63 at ==>> id="blog-section" --}}

        {{$slot}}  {{-- allow as to accept the php element in the callable tags, look at the app.blade.php at line 64-65-66 --}}


    @for($i=0;$i<10;$i++)

        <!-- Blog Post -->
        <div class="card mb-4">
            <img class="card-img-top" src="https://via.placeholder.com/750x400" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">Post Title</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                <a href="{{route('post.details')}}" class="btn btn-primary">Read More &rarr; {{$i+1}}</a>
            </div>
            <div class="card-footer text-muted">
                Posted on January 1, 2017 by
                <a href="#">Start Bootstrap</a>
            </div>
        </div>

    @endfor


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
