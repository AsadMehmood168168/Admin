<title>Home Page</title>
<style>
    #main{
        border: 2px solid black;
    }
</style>
@extends('AppTemplate.homeTemplate')
@section('content')
    <h1 class="mb-4">Admin Profile</h1>
    {{-- <div class="container main">
        <h1>
        Home Page
    </h1>
    @if (isset($admin_Data))

        Name : {{$admin_Data->name}}

        Email : {{$admin_Data->email}}

        Phone Number : {{$admin_Data->phoneNumber}}

        Password : {{$admin_Data->password}}
    @endif
    </div> --}}
@endsection