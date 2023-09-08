@extends('admin.layouts.app')
@section('content')
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                </span>
                <h3 class="kt-portlet__head-title">Edit Job</h3>
            </div>
        </div>
        {!! Form::model($blog, [
            'route' => ['blog.update', $blog->id],
            'method' => 'patch',
            'class' => 'kt-form kt-form--label-right',
        ]) !!}
        {{-- <form action="" method="" class="kt-form kt-form--label-right"> --}}
        @include('admin.blogs.form', ['formAction' => 'Update'])
        {!! form::close() !!}
    </div>
@endsection
