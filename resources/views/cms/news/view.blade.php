@extends('cms.default')

@section('content')

<div ng-controller="CmsNewsViewCtrl">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
              <div class="row">
                <div class="col-sm-12">
                  <strong>News Detail</strong>
                  <a href="/cms/news/{{$news->id}}/edit" class="btn btn-info pull-right">edit</a>
                </div>
              </div>           
            </div>
            <!-- success msg -->
            <div class="panel-body">

              <div class="text-center">
                <h3>{{ $news->title }}</h3>
                {{ $news->created_at }}
                <hr>
              </div>
              
                
              <div class="text-muted col-sm-10 col-sm-offset-1 text-justify">
                {{ $news->content }}
              </div>

              <div class="row">
                <small>
                  <div class="text-right col-sm-10 col-sm-offset-1">
                    from : {{ $news->fromurl }}
                  </div>
                </small>
              </div>

              <div class="text-center">
                <hr>
              </div>

            </div> <!--/ panel-body-->


            
        </div> <!--/ panel-->
    </div>

</div>
@endsection