@extends('layout.app')

@section('title', 'Create Questionnaire')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
    <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Create Questionnaire</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Questionnaire</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
        <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
        <span class="caret"></span>
        </button>
        <div class="dropdown-menu">
          <a href="javaScript:void();" class="dropdown-item">Action</a>
          <a href="javaScript:void();" class="dropdown-item">Another action</a>
          <a href="javaScript:void();" class="dropdown-item">Something else here</a>
          <div class="dropdown-divider"></div>
          <a href="javaScript:void();" class="dropdown-item">Separated link</a>
        </div>
      </div>
     </div>
     </div>
    <!-- End Breadcrumb-->


    <div class="row">
      <div class="col-lg-8">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Questionnaire Details</div>
           <hr>

           @if(session('error'))
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <div class="alert-icon contrast-alert">
                <i class="fa fa-times"></i>
              </div>
              <div class="alert-message">
                <span><strong>Danger!</strong> {{ session('error') }}!</span>
              </div>
            </div>
          @endif

          @if(session('success'))
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <div class="alert-icon contrast-alert">
              <i class="fa fa-check"></i>
            </div>
            <div class="alert-message">
              <span><strong>Success!</strong> {{ session('success') }}</span>
            </div>
          </div>
          @endif  

          @if ($errors->any())
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif  


          <form method="post" action="{{ route('dashboard.eum.questionnaire.store', $surveyType->slug) }}">
            @csrf
            <div class="form-group">
              <label for="question_text">Question</label>
              <input type="text" name="question_text" class="form-control" id="question_text" placeholder="Enter Title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
              <label for="survey_type_name">Type of Question</label>
  
              <select name="survey_type_name" id="survey_type_name" class="form-control" required>
                  @foreach($questionTypes as $questionType)
                    <option value="{{ $questionType->id }}">{{ $questionType->type }}</option>
                  @endforeach
              </select>
            </div>
           
           <div class="form-group">
            <button type="submit" class="btn btn-primary px-5"><i class="icon-lock"></i> Save and add options</button>
          </div>
          </form>
         </div>
         </div>
      </div>

    </div><!--End Row-->

<!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
   </div>

@endsection

