@extends('layouts.app')

@section('content')

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <x-admin-sidebar />
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <x-admin-toolbar />
            <!-- Begin Page Content -->
            <div class="container-fluid">

                    {{-- first way of showing the flash message--}}
                <!-- Page Heading -->
{{--                @if(session::has('message'))--}}

{{--                <div class="alert alert-danger">--}}
{{--                    {{Session::get('message')}}--}}
{{--                </div>--}}

{{--                @endif--}}
{{--                --}}
                        {{-- other way of showing the flash message--}}
                @if(session('deleted-message'))
                    <div class="alert alert-danger">
                        {{session('deleted-message')}}
                    </div>

                @elseif (session('created-message'))
                    <div class="alert alert-success">
                        {{session('created-message')}}
                    </div>

                @elseif (session('updated-message'))
                    <div class="alert alert-info">
                        {{session('updated-message')}}
                    </div>
                @endif



                {{-- create post component in the components/admin-components/crete post component --}}
                 <x-admin-show-all-posts  :value="$posts" />

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

@endsection()
