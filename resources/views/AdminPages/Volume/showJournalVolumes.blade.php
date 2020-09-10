<title>Journal Volume's List</title>
@extends('AppTemplate.homeTemplate')
@section('content')
    @include('AppTemplate.navBar')
    <div class="container main">
        <div class="bs-example">
            
            <h1 class="border-bottom pb-3 mb-4">Journal Volume's List</h1>
            @if (isset($volume_Data) || isset($journal_ID))
                {{-- journal_ID --}}
                <div class="row">
                    <div class="col-sm-2">
                        <h5> Journal OISSN : </h5>
                    </div>
                    <div class="col-sm-3">
                        <h5> {{$journal_ID}} </h5> 
                    </div>
                </div>
                @foreach ($volume_Data as $volume)
                    {{-- volumeNumber --}}
                    <div class="row">
                        <div class="col-sm-2">
                            <h5> Volume Number: </h5>
                        </div>
                        <div class="col-sm-3">
                            <h5> {{$volume->volumeNumber}} </h5> 
                        </div>
                    </div>

                    {{-- IssueYear --}}
                    <div class="row">
                        <div class="col-sm-2">
                            <h5> Volume Year: </h5>  
                        </div>
                        <div class="col-sm-3">
                            <h5> {{$volume->volumeYear}} </h5>   
                        </div>
                    </div>

                    {{-- Issue ID --}}
                    <div class="row">
                        <div class="col-sm-2">
                            <h5> Volume ID: </h5>  
                        </div>
                        <div class="col-sm-3">
                            <h5> {{$volume->volumeID}} </h5>   
                        </div>
                    </div>

                    <div class="row" id = "linkGroup">
                        <div class="btn-group">
                            <a href="" class="btn btn-secondary"> Update Volume Info</a> 
                            <a href="/Project1/public/viewArticles/{{$journal_ID}}/{{$volume->volumeID}}" class="btn btn-secondary"> View Article's</a> 
                            <a href="/Project1/public/addArticle/{{$journal_ID}}/{{$volume->volumeID}}" class="btn btn-secondary"> Add Article</a> 
                            <a href="" class="btn btn-secondary"> Delete Article</a> 
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection