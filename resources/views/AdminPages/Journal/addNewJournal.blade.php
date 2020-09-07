<title>Add Journal</title>
<style>
    .main{
        margin-top: 75px;
        width: 100%;
    }
    .bs-example{
        margin: 20px;        
    }
</style>
@extends('AppTemplate.homeTemplate')
@section('content')
    @include('AppTemplate.navBar')
    <div class="container main">
        <div class="bs-example">
            <h1 class="border-bottom pb-3 mb-4">Add New Journal</h1>
            {!! Form::open(['action' => 'NewJournalController@store','method' => 'POST']) !!}

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="JNAME">Journal Name:</label>
                    <div class="col-sm-9">
                        <input type="text" name="JNAME" class="form-control" placeholder="Journal Name" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="INFOJ">Journal Info:</label>
                    <div class="col-sm-9">
                        <textarea rows="3" class="form-control" name="INFOJ" placeholder="Journal Info" required></textarea>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Journal ID's</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="JID" placeholder="JID" required>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="JISSN" placeholder="JISSN" required>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="OISSN" placeholder="OISSN" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="JABOUT">Journal About:</label>
                    <div class="col-sm-9">
                        <textarea rows="3" class="form-control" name="JABOUT" placeholder="Journal About" required></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="Arch">Archieve:</label>
                    <div class="col-sm-9">
                        <textarea rows="3" class="form-control" name="Arch" placeholder="Journal Archieve" required></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Info URL's</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="IMGA" placeholder="Image Path" required>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="CoverP" placeholder="Cover Page Path" required>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="JInfoPdf" placeholder="Pdf Path" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="Issue">Journal Issue:</label>
                    <div class="col-sm-9">
                        <input type="text" name="JNAME" class="form-control" placeholder="Journal Issue" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="EBML">Journal EBML:</label>
                    <div class="col-sm-9">
                        <input type="text" name="EBML" class="form-control" placeholder="Journal EMBL" required>
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