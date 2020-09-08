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
            <h1 class="border-bottom pb-3 mb-4">Article's List</h1>
            @if (isset($article_Data))
                @foreach ($article_Data as $article)
                    <div class="row">
                        <div class="col-sm-9">
                            <a href="/Project1/public/showArtilceText/{{$article->ArticleDOI}}"> 
                                <h5>
                                    {{$article->ArticleTitle}}
                                </h5>
                            </a>
                        </div>  
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            Authors : 
                        </div>
                        <div class="col-sm-9">
                            {{$article->Authors}}
                        </div> 
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            Article ID : 
                        </div>
                        <div class="col-sm-9">
                            {{$article->ArticleDOI}}
                        </div> 
                    </div>
                    
                @endforeach
            @endif
        </div>
    </div>
@endsection