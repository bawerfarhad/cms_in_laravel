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


{{--                @if(auth()->user()->userHasRole('Writer')) --}}{{-- check in the table for the current user has the admin role, not working --}}
{{--                <!-- Page Heading -->--}}
               <h1>dashboard</h1>
{{--               @else--}}
{{--                  <h1>you are not authorized</h1>--}}
{{--                @endif--}}
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
            <x-admin-footer />
@endsection()
