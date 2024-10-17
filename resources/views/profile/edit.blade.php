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
    <div class="py-12 m-lg-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Profile Information Section -->
            <div class=" bg-white shadow-md rounded hover:shadow-lg transition-shadow duration-300 ease-in-out">
                <div class="max-w-xl mx-auto">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password Section -->
            <div class=" bg-white shadow-md rounded hover:shadow-lg transition-shadow duration-300 ease-in-out">
                <div class="max-w-xl mx-auto">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete User Section -->
            <div class=" bg-white shadow-md rounded hover:shadow-lg transition-shadow duration-300 ease-in-out">
                <div class="max-w-xl mx-auto">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
    <!-- theme body end-->
  </div>

@endsection
