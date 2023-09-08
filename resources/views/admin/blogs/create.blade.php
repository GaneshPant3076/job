@extends('admin.layouts.app')
@section('content')
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                </span>
                <h3 class="kt-portlet__head-title">Create Blog</h3>
            </div>
        </div>
        {!! Form::open(['route' => 'blog.store', 'class' => 'kt-form kt-form--label-right', 'method' => 'post']) !!}
        {{-- <form action="{{ url('admin/blog') }}" method="post" class="kt-form kt-form--label-right"> --}}
        @include('admin.blogs.form', ['formAction' => 'Save'])
        {!! Form::close() !!}
    </div>
@endsection
