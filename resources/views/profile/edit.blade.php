@extends('layouts.admin')

@section('content')
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
@endsection
