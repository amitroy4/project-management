@extends('layouts.admin')
@section('content')
<div class="themebody-wrap">
    <!-- breadcrumb start-->
    <div class="codex-breadcrumb">
      <div class="breadcrumb-contain">
        <div class="left-breadcrumb">
          <ul class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">
                <h1>Dashboard</h1></a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Client</a></li>
          </ul>
        </div>
        <div class="right-breadcrumb">
          <ul>
            <li>
              <div class="bread-wrap"><i class="fa fa-clock-o"></i></div><span class="liveTime"></span>
            </li>
            <li>
              <div class="bread-wrap"><i class="fa fa-calendar"></i></div><span class="getDate"></span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- breadcrumb end-->
    <!-- theme body start-->
    <div class="theme-body common-dash" data-simplebar>
        <div class="custom-container">
          hello
        </div>
    </div>
    <!-- theme body end-->
  </div>

@endsection
