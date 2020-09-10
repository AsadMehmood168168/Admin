{{-- showJournals --}}
<title>Journal's List</title>
@extends('AppTemplate.homeTemplate')
@section('content')
    @include('AppTemplate.navBar')
    <div class="container main">
        <div class="bs-example">
            <h1 class="border-bottom pb-3 mb-4">Journal's List</h1>
            {{-- <img src="C:\Users\asadm\Desktop\img1.png" width="550" height="150" alt=""> --}}
            @if (isset($journal_Data))
                @foreach ($journal_Data as $journal)
                    {{-- jName --}}
                    <div class="row" id = "JournalName">
                        <div class="col-sm-12" id="justifyText">
                            <h3> {{$journal->jName}} ({{$journal->jid}})</h3>    
                        </div>
                    </div>
                    {{-- jAbout images indexInfo maxVolume Issn Oissn --}}
                    <div class="row" id = "JournalInfoDetails">
                        <div class="col-sm-9" id="justifyText">
                            <p>{{$journal->jAbout}} </p>
                            {{-- indexInfo --}}
                            <div class="row">
                                <div class="col-sm-12">
                                    {{$journal->indexInfo}}  
                                </div>
                            </div>
                            {{-- maxVolume --}}
                            <div class="row">
                                <div class="col-sm-6">
                                    Max Volume : {{$journal->maxVolume}} 
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            {{-- Jorunal Cover Picture  --}}
                            <img src="https://lh3.googleusercontent.com/proxy/zND1nYDxFWOB5MngIYNt23fYe3p3zIbdjDjND6_tyt1vLIGOAIX6i2RUgv97W4USD8glJ4OMlBnj6QrW4BPcSlLV0VQVSs-SlUMmRHgKlOzcPGWKxmQ" class="rounded" alt="Cinque Terre" width="200" height="200"> 
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5>
                                        Print ISSN : {{$journal->jIssn}}
                                    </h5>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-sm-12">
                                    <h5>
                                        Online ISSN : {{$journal->oIssn}}
                                    </h5>
                                </div>
                            </div>
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