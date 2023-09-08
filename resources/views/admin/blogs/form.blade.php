<div class="kt-portlet__body">
    <div class="form-group row">
        <div class="col-lg-6">
            <label for="">Title</label>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {!! form::text('title', null, ['class' => 'form-control']) !!}
            @error('title')
                <p style="color:red"> {{ $message }} </p>
            @enderror
        </div>
        <div class="col-lg-6">
            <label for="">Type</label>
            {!! form::text('type', null, ['class' => 'form-control']) !!}
            @error('type')
                <p style="color:red"> {{ $message }} </p>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-6">
            <label for="">Author Name</label>
            {!! form::text('author_name', null, ['class' => 'form-control']) !!}
            @error('author_name')
                <p style="color:red"> {{ $message }} </p>
            @enderror
        </div>


    </div>
    <div class="form-group row">
        <div class="col-lg-12">
            <label for="">Artical</label>
            {!! form::textarea('article_content', null, ['class' => 'form-control', 'rows' => '5']) !!}
        </div>
        @error('article_content')
            <p style="color:red"> {{ $message }} </p>
        @enderror

    </div>




</div>

<div class="kt-portlet__foot">
    <div class="kt-form__actions">
        <div class="row">
            <div class="col-lg-6">
                <button type="submit" class="btn btn-primary">{{ $formAction }}</button>
                <a href="#" type="reset" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </div>
</div>
