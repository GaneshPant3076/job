@extends('admin.layouts.app')
@section('content')
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                </span>
                <h3 class="kt-portlet__head-title">
                    Jobs Listing
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-actions">
                    <a href="{{ url('admin/job/create') }}" class="btn btn-primary">
                        <i class="fa fa-plus"></i>
                        Create
                    </a>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body">
            <table class="table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer"
                width="100%" id="country-table">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Type</th>
                        <th>Number of Vacancy</th>

                        <th style="text-align: center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jobs as $job)
                        <tr>
                            <td> {{ $job->id }}</td>
                            <td> {{ $job->title }}</td>
                            <td> {{ $job->location }}</td>
                            <td> {{ $job->type }}</td>
                            <td> {{ $job->no_of_vacancy }}</td>
                            {{-- <td> Action Here </td> --}}
                            <td style="text-align: center">
                                {{-- <form action="{{ route('job.destroy', $job->id) }}" method="Post"> --}}

                                <a href="{{ url('admin/job/' . $job->id . '/edit') }}" class="btn  btn-primary">Edit</a>
                                <a href="{{ url('admin/job', $job->id) }}" class="btn btn-info">show</a>
                                {!! Form::open([
                                    'id' => 'job-form',
                                    'route' => ['job.destroy', $job->id],
                                    'method' => 'delete',
                                    ' onclick' => 'confirmation(event)',
                                ]) !!}
                                @csrf
                                {{-- @method('DELETE') --}}
                                <button type="submit" class="btn btn-danger">Delete</button>

                                {!! Form::close() !!}


                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection
