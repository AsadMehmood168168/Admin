{{-- showJournals --}}
<title>Journal's List</title>
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
</style>
@extends('AppTemplate.homeTemplate')
@section('content')
    @include('AppTemplate.navBar')
    <div class="container main">
        <div class="bs-example">
            <h1 class="border-bottom pb-3 mb-4">Journal's List</h1>
            @if (isset($journal_Data))
                @foreach ($journal_Data as $journal)

                    {{-- jName --}}
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>
                                {{$journal->jName}} 
                            </h5>
                        </div>
                    </div>

                    {{-- jAbout --}}
                    <div class="row">
                        <div class="col-sm-6">
                            JABOUT : {{$journal->jAbout}} 
                        </div>
                    </div>

                    {{-- indexInfo --}}
                    <div class="row">
                        <div class="col-sm-6">
                            INFOJ : {{$journal->indexInfo}} 
                        </div>
                    </div>

                    {{-- jid  --  jIssn  --  oIssn --}}
                    <div class="row">
                        <div class="col-sm-4">
                            Journal Short Name : {{$journal->jid}} 
                        </div>
                        <div class="col-sm-4">
                            Print ISSN : {{$journal->jIssn}} 
                        </div>
                        <div class="col-sm-4">
                            Online ISSN : {{$journal->oIssn}} 
                        </div>
                    </div>

                    {{-- maxVolume --}}
                    <div class="row">
                        <div class="col-sm-6">
                            Max Volume : {{$journal->maxVolume}} 
                        </div>
                    </div>

                    <div class="row" id = "linkGroup">
                        <div class="btn-group">
                            <a href="/Project1/public/addNewVolume/{{$journal->_id}}" class="btn btn-secondary"> Add Volume</a> 
                            <a href="/Project1/public/addNews/{{$journal->_id}}" class="btn btn-secondary"> Add News</a> 
                            <a href="/Project1/public/updateJournalInfo/{{$journal->_id}}" class="btn btn-secondary"> Update Journal Info</a> 
                            <a href="/Project1/public/viewVolumes/{{$journal->_id}}" class="btn btn-secondary"> View Volumes</a> 
                        </div>
                    </div>
                    
                @endforeach
            @endif
        </div>
    </div>
@endsection