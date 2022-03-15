<title>Comment All eror/Bug</title>
@extends('Dashboard.Developers.Layouts.DevDashboardLayout')
@section('content')
<div class="content-wrapper" style="min-height: 1172.56px;">
<div class="container">
    <div class="row">
    @foreach($issues as $issue)
        <div class="col-4">
        <div class="card">
            <div class="card-header">
            Issue ID: {{ $issue->id }}
            </div>
            <div class="card-body">
                <p class="card-text">Comment: {{ $issue->comment }}</p>
                <form class="form-horizontal"  action="" method="post">
                        {{csrf_field()}}
                        <input class="form-control form-control-sm" type="text" name="projectId" value="{{$issue->id}}" placeholder="Type a Project ID" style="width: 0%">
                        <input class="form-control form-control-sm" type="text" name="comment" placeholder="Type a comment">
                        <input type="submit" value="submit" class="btn-sm btn-success mt-2">
                </form>
            </div>
        </div>
        </div>
        @endforeach
    </div>
</div>

        
</div>

@endsection