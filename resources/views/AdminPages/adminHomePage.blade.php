<title>Home Page</title>
@extends('AppTemplate.homeTemplate')
@section('content')
    <div class="wrapper d-flex align-items-stretch">
        @include('AppTemplate.sideBar')
        <div id="content" class="p-4 p-md-5 pt-5">
            Home Page
        </div>
    </div>
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