<div class="kt-portlet__body">
    <div class="form-group row">
        <div class="col-lg-6">
            <label for="">Title</label>

            {{-- @csrf --}}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            {!! Form::text('title', null, ['class' => 'form-control']) !!}
            @error('title')
                <p style="color: aqua"> {{ $message }} </p>
            @enderror
        </div>
        <div class="col-lg-6">
            <label for="">Location</label>
            {!! Form::text('location', null, ['class' => 'form-control']) !!}
            @error('location')
                <p style="color: red"> {{ $message }} </p>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-6">
            <label for="">Type:</label>
            {!! Form::select('type', ['Part-Time' => 'Part Time', 'Full-Time' => 'Full Time'], ['class' => 'form-control']) !!}
            @error('type')
                <p style="color: rgb(81, 0, 255)"> {{ $message }}</p>
            @enderror
        </div>
        <div class="col-lg-6">
            <label for="">No Of Vacancy</label>
            {!! Form::number('no_of_vacancy', null, ['min' => '1', 'max' => '23', 'class' => 'form-control']) !!}
            @error('no_of_vacancy')
                <p style="color: navy
            "> {{ $message }} </p>
            @enderror
        </div>

    </div>
    <div class="form-group row">
        <div class="col-lg-12">
            <label for="">Description</label>
            {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '5']) !!}

            @error('description')
                <p style="color:red"> {{ $message }}</p>
            @enderror
        </div>

    </div>
    <div class="form-group row">
        <div class="col-lg-12">
            <label for="">Responsibility</label>
            {!! Form::textarea('responsibility', null, ['class' => 'form-control', 'rows' => '5']) !!}

            @error('responsibility')
                <p style="color: aqua"> {{ $message }} </p>
            @enderror
        </div>

    </div>
    <div class="form-group row">
        <div class="col-lg-12">
            <label for="">Benefits</label>
            {!! Form::textarea('benefits', null, ['class' => 'form-control', 'rows' => '5']) !!}

        </div>

    </div>
    <div class="form-group row">
        <div class="col-lg-12">
            <label for="">Qualification</label>
            {!! Form::textarea('qualification', null, ['class' => 'form-control', 'rows' => '5']) !!}

            @error('qualification')
                <p style="color: blue"> {{ $message }} </p>
            @enderror
        </div>

    </div>
    <div class="form-group row">
        <div class="col-lg-3">
            <label for="">Salary</label>
            {!! Form::text('salary', null, ['class' => 'form-control']) !!}

            @error('salary')
                <p style="color: aqua"> {{ $message }} </p>
            @enderror
        </div>
        <div class="col-lg-3">
            <label for="">Gender:</label>

            {!! Form::select(
                'gender',
            
                ['Male' => 'male', 'Female' => 'female'],
                null,
                ['class' => 'form-control ', 'class' => 'select_control', 'class' => 'wide'],
            ) !!}

            @error('gender')
                <p style="color:rgb(255, 98, 0)"> {{ $message }}</p>
            @enderror
        </div>
        <div class="col-lg-3">

            <label for=""> Category:</label>

            {!! Form::select(
                'category',
            
                ['IT' => 'IT', 'NonIT' => 'NonIT'],
                null,
                [
                    'class' => 'form-control',
                    // 'placeholder' => 'choose please',
                    'class' => 'wide',
                    // 'class' => 'select-control',
                ],
            ) !!}



            @error('category')
                {{ $message }}
            @enderror
        </div>

    </div>
    <div class="form-group row">
        <div class="col-lg-12">
            <label for="">Experiance</label>

            {!! Form::textarea('experiance', null, ['class' => 'form-control', 'rows' => '5']) !!}

        </div>

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
