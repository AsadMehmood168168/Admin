<title>Home Page</title>
<style>
    .main{
        margin-top: 75px;
        width: 100%;
        border: 2px solid black;
    }
</style>
@extends('AppTemplate.homeTemplate')
@section('content')
    @include('AppTemplate.navBar')
    <div class="container main">
        <h1>
        Home Page
    </h1>
    @if (isset($admin_Data))

        Name : {{$admin_Data->name}}

        Email : {{$admin_Data->email}}

        Phone Number : {{$admin_Data->phoneNumber}}

        Password : {{$admin_Data->password}}
    @endif
    </div>
@endsection