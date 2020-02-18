@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        <div class="col-4 p-4">
            <img src="/img/logo.jpg" style="max-height: 200px;" class="rounded-circle">
        </div>
        <div class="col-8 pt-4">
            <div><h1>{{ $user->name }}</h1></div>
            <div class="d-flex">
                <div class="pr-4"><strong>6</strong> posts</div>
                <div class="pr-4"><strong>18k</strong> followers</div>
                <div class="pr-4"><strong>88</strong> following</div>
            </div>
            <div class="pt-4"><strong>instaPic Project Laravel</strong></div> 
            <div>this is a project developed in php/laravel</div> 
        </div>

    <div class="row pt-4">
        <div class="col-4">
            <img src="/img/post1.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/post2.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/post3.jpg" class="w-100">
        </div>
    </div>

        
</div>
@endsection 
