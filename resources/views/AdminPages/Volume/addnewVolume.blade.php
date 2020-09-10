<title>Add Volume</title>
@extends('AppTemplate.homeTemplate')
@section('content')
    @include('AppTemplate.navBar')
    <div class="container main">
        <div class="bs-example">
            <h1 class="border-bottom pb-3 mb-4">Add New Volume</h1>
            {!! Form::open(['action' => 'NewVolumeController@store','method' => 'POST']) !!}

                {{-- journalID --}}
                @if (isset($journal_ID))
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="journalID">JournalID:</label>
                        <div class="col-sm-9">
                            <input type="text" readonly value="{{$journal_ID}}" name="journalID" class="form-control">
                        </div>
                    </div>
                @endif

                {{-- volCount & volumeNumber++ when form data posted --}}
                @if (isset($volCount))
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="volCount">Previous Volume Count:</label>
                        <div class="col-sm-9">
                            <input type="text" readonly value="{{$volCount}}" name="volCount" class="form-control">
                        </div>
                    </div>
                @endif
                
                {{-- volumeYear --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="volumeYear">Volume Year:</label>
                    <div class="col-sm-9">
                        <input type="text" name="volumeYear" class="form-control" placeholder="Volume Year" required>
                    </div>
                </div> 

                {{-- Article Form --}}
                <h2 class="border-bottom pb-2 mb-4">
                    <p style="text-align: center"> Article Information </p>
                </h2>

                {{-- pageNo --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="pageNo">Page Number:</label>
                    <div class="col-sm-9">
                        <input type="text" name="pageNo" class="form-control" placeholder="Page No" required>
                    </div>
                </div>

                {{-- articleID --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="articleID">Article ID:</label>
                    <div class="col-sm-9">
                        <input type="text" name="articleID" class="form-control" placeholder="Article ID" required>
                    </div>
                </div>

                {{-- articleType --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="articleType">Article Type:</label>
                    <select id = "input_select" class="form-control" name="articleType" required="required">
                        <option selected>Choose....</option>
                        <option value="Research Article">Research Article</option>
                    </select>
                </div>
                
                {{-- articleTitle --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="articleTitle">Article Title:</label>
                     <div class="col-sm-9">
                        <textarea rows="2" class="form-control" name="articleTitle" placeholder="Article Title" required></textarea>
                    </div>
                </div>

                {{-- affiliation --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="affiliation">Affiliation:</label>
                    <div class="col-sm-9">
                        <textarea rows="3" class="form-control" name="affiliation" placeholder="Affiliation" required></textarea>
                    </div>
                </div> 

                {{-- abstract --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="abstract">Abstract:</label>
                    <div class="col-sm-9">
                        <textarea rows="5" class="form-control" name="abstract" placeholder="Abstract" required></textarea>
                    </div>
                </div>

                {{-- submittedDate --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="submittedDate">Submitted Date:</label>
                    <div class="col-sm-9">
                        <input type="date" name="submittedDate" class="form-control" placeholder="Submitted Date" required>
                    </div>
                </div>

                {{-- acceptedDate --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="acceptedDate">Accepted Date:</label>
                    <div class="col-sm-9">
                        <input type="date" name="acceptedDate" class="form-control" placeholder="AcceptedDate" required>
                    </div>
                </div>

                {{-- publishedDate --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="publishedDate">Published Date:</label>
                    <div class="col-sm-9">
                        <input type="date" name="publishedDate" class="form-control" placeholder="Published Date" required>
                    </div>
                </div>

                {{-- keyWords --}}
                <h3 class="border-bottom pb-3 mb-4">Key Words</h3>
                <div class="row">
                    <div class="col-md-12">
                        <div data-role="dynamic-fields">
                            <div class="form-group">
                                <label class="col-sm-3 col-form-label" for="keyWords">Key Word:</label>
                                <div class="col-sm-9">
                                    <input type="text" name= "keyWords[]" class="form-control" id="field-value" placeholder="Enter Key Word">
                                </div>
                                <button class="btn btn-danger" data-role="remove">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                                <button class="btn btn-primary" data-role="add">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </div>  
                        </div>  
                    </div>  
                </div>

                {{-- authors --}}
                <h3 class="border-bottom pb-3 mb-4">Authors</h3>
                <div class="row">
                    <div class="col-md-12">
                        <div data-role="dynamic-fields">
                            <div class="form-group">
                                <label class="col-sm-3 col-form-label" for="authors">Author Name:</label>
                                <div class="col-sm-9">
                                    <input type="text" name= "authors[]" class="form-control" id="field-value" placeholder="Author Name">
                                </div>
                                <button class="btn btn-danger" data-role="remove">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                                <button class="btn btn-primary" data-role="add">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </div>  
                        </div>  
                    </div>  
                </div>

                {{-- Buttons --}}
                <div class="form-group row">
                    <div class="col-sm-9 offset-sm-3">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <input type="reset" class="btn btn-secondary" value="Reset">
                    </div>
                </div>
                <script>
                    $(function() {
                        // Remove button click
                        $(document).on('click','[data-role="dynamic-fields"] > .form-group [data-role="remove"]',function(e) 
                        {
                            e.preventDefault();
                            $(this).closest('.form-group').remove();
                        });
                        // Add button click
                        $(document).on('click','[data-role="dynamic-fields"] > .form-group [data-role="add"]',function(e) 
                        {
                            e.preventDefault();
                            var container = $(this).closest('[data-role="dynamic-fields"]');
                            new_field_group = container.children().filter('.form-group:first-child').clone();
                            new_field_group.find('input').each(function()
                            {
                                $(this).val('');
                            });
                            container.append(new_field_group);
                        });
                    });
                </script>
                
            {!! Form::close() !!}
        </div>
    </div>
@endsection