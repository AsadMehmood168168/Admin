<title>Add Volume</title>
<style>
    .main{
        margin-top: 75px;
        width: 100%;
    }
    .bs-example{
        margin: 20px;        
    }
    #input_select{
        width: 72%;
        margin-left: 1.5%;
    }
    [data-role="dynamic-fields"] > .form-group + .form-group 
    {
        margin-top: 0.5em;
    }
    [data-role="dynamic-fields"] > .form-group [data-role="add"] 
    {
        display: none;
        }
    [data-role="dynamic-fields"] > .form-group:last-child [data-role="add"] 
    {
        display: inline-block;
    }
    [data-role="dynamic-fields"] > .form-group:last-child [data-role="remove"] 
    {
        display: none;
    }
</style>
@extends('AppTemplate.homeTemplate')
@section('content')
    @include('AppTemplate.navBar')
    <div class="container main">
        <div class="bs-example">
            <h1 class="border-bottom pb-3 mb-4">Add New Article</h1>
            {!! Form::open(['action' => 'NewArticleController@store','method' => 'POST']) !!}
                {{-- journalID --}}
                @if (isset($journal_ID))
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="JournalID">Journal ID:</label>
                        <div class="col-sm-9">
                            <input type="text" readonly value="{{$journal_ID}}" name="journalID" class="form-control">
                        </div>
                    </div>
                @endif

                {{-- volumeID --}}
                @if (isset($volume_ID))
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="volumeID">Volume ID:</label>
                        <div class="col-sm-9">
                            <input type="text" readonly value="{{$volume_ID}}" name="volumeID" class="form-control">
                        </div>
                    </div>
                @endif 

                {{-- PageNo --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="PageNo">Page Number:</label>
                    <div class="col-sm-9">
                        <input type="text" name="PageNo" class="form-control" placeholder="Page No" required>
                    </div>
                </div>

                {{-- ArticleDOI --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="ArticleDOI">Article DOI:</label>
                    <div class="col-sm-9">
                        <input type="text" name="ArticleDOI" class="form-control" placeholder="ArticleDOI" required>
                    </div>
                </div>

                {{-- ArticleType --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="ArticleType">Article Type:</label>
                    <select id = "input_select" class="form-control" name="ArticleType" required="required">
                        <option selected>Choose....</option>
                        <option value="Research Article">Research Article</option>
                    </select>
                </div> 

                {{-- ArticleTitle --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="Arch">Article Title:</label>
                     <div class="col-sm-9">
                        <textarea rows="2" class="form-control" name="ArticleTitle" placeholder="Article Title" required></textarea>
                    </div>
                </div>

                {{-- Authors --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="Authors">Authors:</label>
                    <div class="col-sm-9">
                        <textarea rows="2" class="form-control" name="Authors" placeholder="Article Authors" required></textarea>
                    </div>
                </div>

                {{-- Affiliation --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="Affiliation">Affiliation:</label>
                    <div class="col-sm-9">
                        <input type="text" name="Affiliation" class="form-control" placeholder="Affiliation" required>
                    </div>
                </div> 

                {{-- Abstract --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="Abstract">Abstract:</label>
                    <div class="col-sm-9">
                        <textarea rows="5" class="form-control" name="Abstract" placeholder="Abstract" required></textarea>
                    </div>
                </div>

                {{-- SubmittedDate --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="SubmittedDate">Submitted Date:</label>
                    <div class="col-sm-9">
                        <input type="date" name="SubmittedDate" class="form-control" placeholder="Submitted Date" required>
                    </div>
                </div>

                {{-- AcceptedDate --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="AcceptedDate">Accepted Date:</label>
                    <div class="col-sm-9">
                        <input type="date" name="AcceptedDate" class="form-control" placeholder="AcceptedDate" required>
                    </div>
                </div>

                {{-- PublishedDate --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="PublishedDate">Published Date:</label>
                    <div class="col-sm-9">
                        <input type="date" name="PublishedDate" class="form-control" placeholder="Published Date" required>
                    </div>
                </div>

                {{-- PDFPath --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="PDFPath">PDF Path:</label>
                    <div class="col-sm-9">
                        <input type="text" name="PDFPath" class="form-control" placeholder="PDF Path" required>
                    </div>
                </div>
                
                {{-- HTMLLink --}}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="HTMLLink">HTML Link:</label>
                    <div class="col-sm-9">
                        <input type="text" name="HTMLLink" class="form-control" placeholder="HTML Link" required>
                    </div>
                </div> 

                {{-- KeyWords --}}
                <h3 class="border-bottom pb-3 mb-4">Key Words</h3>
                <div class="row">
                    <div class="col-md-12">
                        <div data-role="dynamic-fields">
                            <div class="form-group">
                                <label class="col-sm-3 col-form-label" for="Key Words">Key Word:</label>
                                <div class="col-sm-9">
                                    <input type="text" name= "KeyWords[]" class="form-control" id="field-value" placeholder="KeyWords">
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

                {{-- MetaAuthors --}}
                <h3 class="border-bottom pb-3 mb-4">Meta Authors</h3>
                <div class="row">
                    <div class="col-md-12">
                        <div data-role="dynamic-fields">
                            <div class="form-group">
                                <label class="col-sm-3 col-form-label" for="Meta Authors">Author Name:</label>
                                <div class="col-sm-9">
                                    <input type="text" name= "MetaAuthors[]" class="form-control" id="field-value" placeholder="Author Name">
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