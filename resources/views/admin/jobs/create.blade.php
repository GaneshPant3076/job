@extends('admin.layouts.app')
@section('content')
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                </span>
                <h3 class="kt-portlet__head-title">Create Job</h3>
            </div>
        </div>
        {!! Form::open(['url' => 'admin/job', 'class' => 'kt-form kt-form--label-right', 'method' => 'post']) !!}
        @include('admin.jobs.form', ['formAction' => 'Save'])
        {!! Form::close() !!}
    </div>
@endsection
