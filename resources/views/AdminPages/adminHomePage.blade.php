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
    <h2 class="mb-4">Sidebar #05</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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