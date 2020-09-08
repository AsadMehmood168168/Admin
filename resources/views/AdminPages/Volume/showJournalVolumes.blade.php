<title>Journal Volume's List</title>
<style>
    .main{
        margin-top: 75px;
        width: 100%;
    }
    .bs-example{
        margin: 20px;        
    }
    #linkGroup{
        margin-top : 10px;
        margin-left: 1px;
    }
    h5{
        float: left;
        margin-right: 10px;
    }
</style>
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
                        <h5> Journal ID : </h5>
                    </div>
                    <div class="col-sm-3">
                        <p> {{$journal_ID}} </p>
                    </div>
                </div>
                @foreach ($volume_Data as $volume)
                    {{-- IssueNumber --}}
                    <div class="row">
                        <div class="col-sm-2">
                            <h5> Issue Number: </h5>
                        </div>
                        <div class="col-sm-3">
                            <p> {{$volume->IssueNumber}} </p>
                        </div>
                    </div>

                    {{-- IssueYear --}}
                    <div class="row">
                        <div class="col-sm-2">
                            <h5> Issue Year: </h5>  
                        </div>
                        <div class="col-sm-3">
                            <p> {{$volume->IssueYear}}  </p>   
                        </div>
                    </div>

                    {{-- Issue ID --}}
                    <div class="row">
                        <div class="col-sm-2">
                            <h5> Issue ID: </h5>  
                        </div>
                        <div class="col-sm-3">
                            <p> {{$volume->IssueID}}  </p>   
                        </div>
                    </div>

                    <div class="row" id = "linkGroup">
                        <div class="btn-group">
                            <a href="" class="btn btn-secondary"> Update Volume Info</a> 
                            <a href="/Project1/public/viewArticles/{{$journal_ID}}/{{$volume->IssueID}}" class="btn btn-secondary"> View Article's</a> 
                            <a href="/Project1/public/addArticle/{{$journal_ID}}/{{$volume->IssueID}}" class="btn btn-secondary"> Add Article</a> 
                            <a href="" class="btn btn-secondary"> Delete Article</a> 
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection