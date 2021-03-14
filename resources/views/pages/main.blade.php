@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">main</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">main</li>
        </ol>
        <div class="row">
            <div class="form-group col-md-3 mt-3">
                <h3>Background Image</h3>
                <img style="height:30vh" src="{{asset('assets/img/header-bg.jpg')}}" alt="">
            </div>
        </div>
    </div>
</main>
@endsection

                
