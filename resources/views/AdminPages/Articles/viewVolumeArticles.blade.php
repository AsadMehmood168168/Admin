<title>Volume Article List</title>
<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=default'></script>
@extends('AppTemplate.homeTemplate')
@section('content')
    @include('AppTemplate.navBar')
    <div class="container main">
        <div class="bs-example">
            <h1 class="border-bottom pb-3 mb-4">Article's List</h1>
           
            @if (isset($article_Data))
                @foreach ($article_Data as $article)
                    <div class="row" id="justifyText">
                        <div class="col-sm-12"  id = "articleData">
                            {{-- <a href="/Project1/public/fullText/{{articleDOI}}"> Full Text</a> --}}
                        </div>
                    </div> 
                    <script>
                        var articleTitle = {!!json_encode($article->articleTitle)!!};
                        var articleDOI   = {!!json_encode($article->articleDOI)!!};
                        var affiliation  = {!!json_encode($article->affiliation)!!};
                        var abstract     = {!!json_encode($article->abstract)!!};
                        document.getElementById("articleData").innerHTML += articleTitle + "<br>" + articleDOI + "<br>" + "<a href='/Project1/public/fullText/{{$article->articleDOI}}'> Full Text</a>" + "<br> <br>";
                    </script>
                    {{-- <div class="row">
                        <div class="col-sm-2">
                            Article Title : 
                        </div>
                        <div class="col-sm-9">
                            <a id = "articleTitle" href="/Project1/public/showArtilceText/{{$article->articleDOI}}"> 
                                
                            </a>
                        </div>  
                    </div> --}}
                    {{-- <div class="row">
                        <div class="col-sm-2">
                            Article DOI : 
                        </div>
                        <div class="col-sm-9" id = "articleDOI">
                            {{$article->articleDOI}}
                        </div> 
                    </div> --}}
                    {{-- <div class="row">
                        <div class="col-sm-2">
                            Affiliation : 
                        </div>
                        <div class="col-sm-9" id = "affiliation">
                            
                        </div> 
                    </div>  --}}
                @endforeach
            @endif
        </div>
    </div>
@endsection