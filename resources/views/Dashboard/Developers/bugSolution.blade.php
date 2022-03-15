@extends('Dashboard.Developers.Layouts.DevDashboardLayout')
@section('title', 'Dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 1604.44px;">
<section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Bugs</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">bugs</li>
               </ol>
            </div>
         </div>
      </div>
   </section>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Screenshots</th>
      <th scope="col">Comment</th>
      <th scope="col">Update Comment</th>
    </tr>
  </thead>
  <tbody>
    
   
    @foreach($bugs as $bug)
    <tr>
        <td>{{ $bug->id  }}</td>
        <td>{{ $bug->title }}</td>
        <td>{{ $bug->screenshots }}</td>
        <td>{{ $bug->comment }}</td>
        <td>
        <form class="form-horizontal"  action="{{ route('bugSolutionComment') }}" method="post">
                        {{csrf_field()}}    
                        <div class='d-none'>
                        <input class="form-control form-control-sm" type="text" name="bugId" value="{{$bug->id}}" placeholder="" style="width: 0%">
                        </div>
                        <div class="d-flex">
                        <div style="width:40% me-2"><input class=" form-control" type="text" name="comment" placeholder="Type new comment"></div>
                        <input type="submit" value="submit" class="btn btn-success ms-3 ps-2">
                        </div>
        </form>
        </td>
    </tr>

    @endforeach
    </tbody>
</table>
</div>
@endsection