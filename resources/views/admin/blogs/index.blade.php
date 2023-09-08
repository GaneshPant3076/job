@extends('admin.layouts.app')
@section('content')
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                </span>
                <h3 class="kt-portlet__head-title">
                    Blogs Listing
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-actions">
                    <a href="{{ url('admin/blog/create') }}" class="btn btn-primary">
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
                        <th>Type</th>
                        <th>Content</th>
                        <th>Author Name</th>

                        <th style="text-align: center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <td> {{ $blog->id }}</td>
                            <td> {{ $blog->title }}</td>
                            <td> {{ $blog->type }}</td>
                            <td> {{ $blog->article_content }}</td>
                            <td> {{ $blog->author_name }}</td>
                            {{-- <td> Action Here </td> --}}
                            <td style="text-align: center">

                                <a href="{{ url('admin/blog/' . $blog->id . '/edit') }}"
                                    class="btn btn-sm btn-primary">Edit</a>

                                <a href="{{ url('admin/blog', $blog->id) }}" class="btn btn-sm btn-primary">Show</a>


                                {!! Form::open(['route' => ['blog.destroy', $blog->id], 'method' => 'delete']) !!}
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                {!! Form::close() !!}

                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection
