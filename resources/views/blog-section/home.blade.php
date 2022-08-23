@extends('layouts.app')

@section('content')

    <main class="py-4">
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <!-- Blog Entries Column -->
                <div class="col-md-8">
                    <x-blog id="blog-section" class="px-3 py-1 rounded-2">
                        <h1 class="my-4">Page Heading
                            <small>Secondary Text</small>
                        </h1>
                    </x-blog>
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
