@extends('admin.layouts.app')
@section('content')
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                </span>
                <h3 class="kt-portlet__head-title">
                    Jobs Details
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-actions">

                </div>
            </div>
        </div>
        <div class="kt-portlet__body">
            <p class="">Title : {{ $job->title }}</p>
            <p class="">Location : {{ $job->location }}</p>
            <p class="">Type : {{ $job->type }}</p>
            <p class="">Description : {{ $job->description }}</p>
            <p class="">Responsibility : {{ $job->responsibility }}</p>
            <p class="">Qualification : {{ $job->qualification }}</p>
            <p class="">Benefits : {{ $job->benefits }}</p>
            <p class="">No Of Vacancy : {{ $job->no_of_vacancy }}</p>
            <p class="">Salary : {{ $job->salary }}</p>
            <p class="">Category : {{ $job->category }}</p>
            <p class="">Experiance: {{ $job->experiance }}</p>
        </div>
    @endsection
