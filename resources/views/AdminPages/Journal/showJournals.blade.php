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
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>
                                {{$journal->JNAME}} 
                            </h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            JABOUT : {{$journal->JABOUT}} 
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            INFOJ : {{$journal->INFOJ}} 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            Journal ID : {{$journal->JID}} 
                        </div>
                        <div class="col-sm-4">
                            Print ISSN : {{$journal->JISSN}} 
                        </div>
                        <div class="col-sm-4">
                            Online ISSN : {{$journal->OISSN}} 
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            IMGA : {{$journal->IMGA}} 
                        </div>
                        <div class="col-sm-4">
                            CoverP : {{$journal->CoverP}} 
                        </div>
                        <div class="col-sm-4">
                            JInfoPdf : {{$journal->JInfoPdf}} 
                        </div>
                    </div>
                    {{-- periodicalid : {{$journal->periodicalid}} <br> --}}

                    <div class="row">
                        <div class="col-sm-6">
                            ISSUE : {{$journal->ISSUE}} 
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            Arch : {{$journal->Arch}}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            EBML : {{$journal->EBML}} 
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