@extends('Dashboard.Developers.Layouts.DevDashboardLayout')
@section('title', 'Dashboard')

@section('content')
    <!-- Custom Content here  -->
   <div class="content-wrapper" style="min-height: 1302.12px;">
   <div class="ml-5 mb-5 ms-5 pt-5">
      <h5 class="mb-2">My Recent Activities</h5>
   @foreach($comments as $comment)
      <div class="post">
         <div class="user-block">
            <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
            <span class="username">
            <a href="/myProfile">{{ $comment->userName }}</a>
            </span>
            <span class="description">Commented on a task</span>
         </div>
         <p>
         {{ $comment->comment }}
         </p>
      </div>
   @endforeach 
   </div>
   </div>

@endsection