<title>Add Journal</title>
@extends('AppTemplate.homeTemplate')
@section('content')
    @include('AppTemplate.navBar')
    <div class="container main">
        <div class="bs-example">
            <h1 class="border-bottom pb-3 mb-4">Journal's List</h1>
            {!! Form::open(['action' => 'NewJournalController@store','method' => 'POST']) !!}

                {{-- jName --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="jName">Journal Name:</label>
                    <div class="col-sm-9">
                        <input type="text" name="jName" class="form-control" placeholder="Journal Name" required>
                    </div>
                </div>

                {{-- indexInfo --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="indexInfo">Journal Index Info:</label>
                    <div class="col-sm-9">
                        <textarea rows="3" class="form-control" name="indexInfo" placeholder="Journal Index Info" required></textarea>
                    </div>
                </div>

                {{-- jid  -- jIssn  -- oIssn --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Journal ID's</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="jid" placeholder="Jid" required>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="jIssn" placeholder="JIssn" required>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="oIssn" placeholder="OIssn" required>
                    </div>
                </div>

                {{-- jAbout --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="jAbout">Journal About:</label>
                    <div class="col-sm-9">
                        <textarea rows="3" class="form-control" name="jAbout" placeholder="Journal About" required></textarea>
                    </div>
                </div>

                {{-- maxVolume --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="Issue">Max Volumes:</label>
                    <div class="col-sm-9">
                        <input type="text" name="maxVolume" class="form-control" placeholder="Max Volumes" required>
                    </div>
                </div>

                {{-- apiLink --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="apiLink">Journal API Link:</label>
                    <div class="col-sm-9">
                        <input type="text" name="apiLink" class="form-control" placeholder="API Link" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-9 offset-sm-3">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <input type="reset" class="btn btn-secondary" value="Reset">
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection



                
                

                
                
                

                

                

                

                
                
            