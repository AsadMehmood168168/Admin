<title>Journal Volume's List</title>
<script>
    var data = {{$data}};
    // document.getElementById("level2").appendChild(data.text);
    document.write(5 + 6);
</script>
@extends('AppTemplate.homeTemplate')
@section('content')
    @include('AppTemplate.navBar')
    <div class="container main">
        <div class="bs-example">
            <h1 class="border-bottom pb-3 mb-4">Article's List</h1>
            <div id="level2"> </div>
            @if (isset($data))
                
                
            @endif
            @if (isset($article_Data))
                @foreach ($article_Data as $article)
                    <div class="row">
                        <div class="col-sm-9">
                            <a href="/Project1/public/showArtilceText/{{$article->articleDOI}}"> 
                                <h5>
                                    {{$article->articleTitle}}
                                </h5>
                            </a>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            Article DOI : 
                        </div>
                        <div class="col-sm-9">
                            {{$article->articleDOI}}
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-sm-9">
                            {{$article->affiliation}}
                        </div> 
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection