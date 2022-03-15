@extends('Dashboard.Developers.Layouts.DevDashboardLayout')
@section('title', 'Dashboard')

@section('content')
    <!-- Custom Content here  -->
<div class="content-wrapper" style="min-height: 1302.12px;">
    <div class="d-flex">
    <div class='w-50 m-3'>  
    <table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Details</th>
      <th scope="col">Comment</th>
    </tr>
  </thead>
  <tbody>
    @foreach($issues as $issue)
    <tr>
      <th scope="row">{{$issue->id}}</th>
      <th>{{$issue->issueDetails}}</th>
      <th>{{$issue->comment}}</th>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    <div class='w-50 m-4'>
    <form class="form-horizontal" action="{{route('issues')}}" method="post">
                           {{csrf_field()}}
                              <div class="form-group row  d-none">
                                 <label for="inputName" class="col-sm-2 col-form-label">ID</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputName" name="id" placeholder="ID" value="">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputEducation" class="col-sm-2 col-form-label">Details</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEducation" name="details"  placeholder="Issue Details" value=""></input>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputSkills" class="col-sm-2 col-form-label">Comment</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputSkills" name="comment"  placeholder="Comment" value="">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                 </div>
                              </div>
                           </form>
    </div>
    </div>
</div>
@endsection