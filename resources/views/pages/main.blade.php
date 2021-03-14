@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">main</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">main</li>
        </ol>
        <form action="{{route('admin.main.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}
        <div class="row">
            <div class="form-group col-md-3 mt-3">
                <h3>Background Image</h3>
                <img style="height:30vh" class="img-thumbnail" src="{{url($main->bc_img)}}" alt="">
                <input class="mt-3" type="file" id="bc_img name="bc_img">
            </div>
            <div class="form-group col-md-4 mt-3">
                <div>
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$main-> title}}">
                </div>
                <div class="mb-3">
                    <label for="title">Sub Title</label>
                    <input type="text" class="form-control" id="sub_title" name="sub_Title" value="{{$main-> sub_title}}>
                </div>
                <div>
                    <h4>Upload Resume</h4>
                    <input type="file" id="resume" name="resume">
                </div>
            </div>
        </div>
        <input type="submit" name="submit" class="btn btn-parimary mt-5">
    </form>
    </div>
</main>
@endsection

                
