<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables and views and pagination</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more
        information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
            DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Owner</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>delete</th>


                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Owner</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>delete</th>


                    </tr>
                    </tfoot>
                    <tbody>


                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->user->name }}</td>
                            <td><a href="{{route('admin.edit',$post->id)}}" class="btn btn-info btn-sm">Edit</a> | {{ $post->title }}</td>
                            <td>
                                <img class="rounded-2" height="60px" src="{{$post->post_image}}" alt="">
                            </td>

                            {{--                            <td>{{}}</td>--}}
                            {{--                            <td>{{$post->post_image}}</td>--}}


                            <td>{{ $post->created_at->diffForHumans() }}</td>
                            <td>{{ $post->updated_at->diffForHumans() }}</td>
                            <td>

{{--                                @can('view',$post) --}}{{-- remove delete button for unwanted users--}}

                                <form action="{{route('admin.destroy',$post->id)}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
{{--                                @endcan()--}}
                            </td>



                        </tr>
                    @endforeach()
                    </tbody>
                </table>
{{--                {{$posts->links()}}   --}}{{-- default laravel pagination links --}}
                {{-- to make it work you have to configure the app/Providers/AppServiceProvider.php look at this file --}}

                {{$posts->onEachSide(1)->links()}}


            </div>

        </div>

    </div>

</div>
<!-- /.container-fluid -->
