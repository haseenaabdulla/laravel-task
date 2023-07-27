@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Edit Student</h2>
    </div>
    <div class="card-body">

        <form action="{{ url('student/' . $students->id) }}" method="post">
            {!! csrf_field() !!}
            @method('PATCH')
            <input type="hidden" name="id" value="{{ $students->id }}" />
            <div>
                <label>First Name:</label>
                <input type="text" name="first_name" value="{{ $students->first_name }}" class="form-control">
            </div>
            <div>
                <label>Last Name:</label>
                <input type="text" name="last_name" value="{{ $students->last_name }}" class="form-control">
            </div>
            <div>
                <label>Mobile:</label>
                <input type="text" name="mobile" value="{{ $students->mobile }}" class="form-control">
            </div>
            <div>
                <label>Email:</label>
                <input type="text" name="email" value="{{ $students->email }}" class="form-control">
            </div>
            <div class="input-container">
                <label for="branch">Branch:</label>
                <select name="branch" id="branch" class="form-control">
                    <option value="">Select branch you like</option>
                    <option value="Computer Science" {{ $students->branch == 'Computer Science' ? 'selected' : '' }}>Computer Science</option>
                    <option value="Electronics" {{ $students->branch == 'Electronics' ? 'selected' : '' }}>Electronics</option>
                    <option value="Mechanical" {{ $students->branch == 'Mechanical' ? 'selected' : '' }}>Mechanical</option>
                    <option value="Electrical" {{ $students->branch == 'Electrical' ? 'selected' : '' }}>Electrical</option>
                    <option value="Information Technology" {{ $students->branch == 'Information Technology' ? 'selected' : '' }}>Information Technology</option>
                    <option value="Electronics" {{ $students->branch == 'Electronics' ? 'selected' : '' }}>Electronics</option>
                </select>
            </div>
            <div>
                <label>Address:</label>
                <textarea name="address" class="form-control">{{ $students->address }}</textarea>
            </div>
            <div class="position-relative">
                <label>Do You Need Hostel Facility :</label>
                <div class="form-check form-check-inline fix">
                    <input type="radio" class="form-check-input" name="hostel" value="1" {{$students->hostel == '1' ? 'checked':''}} />
                    <label>
                        Yes
                    </label>
                </div>
                <div class="form-check form-check-inline fix">
                    <input type="radio" class="form-check-input" name="hostel" value="0" {{$students->hostel == '0' ? 'checked':''}} />
                    <label>
                        No
                    </label>
                </div>
            </div>
            <div class="input-container">
                <label>Choose Additional Subjects: </label>
                <label class="wrapper check-wrapper">
                    <input type="checkbox" name="additional_subjects[]" value="Cyber Security" @if(in_array('Cyber Security', $students->additional_subjects_array)) checked @endif />
                    Cyber Security
                </label>
                <label class="wrapper check-wrapper">
                    <input type="checkbox" name="additional_subjects[]" value="Artificial Intelligence" @if(in_array('Artificial Intelligence', $students->additional_subjects_array)) checked @endif />
                    Artificial Intelligence
                </label>
                <label class="wrapper check-wrapper">
                    <input type="checkbox" name="additional_subjects[]" value="Blockchain" @if(in_array('Blockchain', $students->additional_subjects_array)) checked @endif />
                    Blockchain
                </label>
                <label class="wrapper check-wrapper">
                    <input type="checkbox" name="additional_subjects[]" value="IoT" @if(in_array('IoT', $students->additional_subjects_array)) checked @endif />
                    IoT
                </label>
                <label class="wrapper check-wrapper">
                    <input type="checkbox" name="additional_subjects[]" value="Robotics" @if(in_array('Robotics', $students->additional_subjects_array)) checked @endif />
                    Robotics
                </label>
            </div>
            <input type="submit" value="Update" class="btn btn-success">
        </form>

    </div>
</div>

@endsection