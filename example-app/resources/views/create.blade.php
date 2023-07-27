@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Student Registration</h2>
    </div>
    <div class="card-body">

        <form action="{{ route('student.store') }}" method="post">
            @csrf
            <div>
                <label>First Name:</label><br>
                <input type="text" name="first_name" class="form-control">
            </div>
            <div>
                <label>Last Name:</label><br>
                <input type="text" name="last_name" class="form-control">
            </div>
            <div>
                <label>Mobile:</label><br>
                <input type="text" name="mobile" class="form-control">
            </div>
            <div>
                <label>Email:</label><br>
                <input type="text" name="email" class="form-control">
            </div>
            <div>
                <label for="branch">Branch:</label><br>
                <select name="branch" id="branch" class="form-select">
                    <option value="">Select branch you like</option>
                    <option value="Computer science">Computer science</option>
                    <option value="Civil">Civil</option>
                    <option value="Mechanical">Mechanical</option>
                    <option value="Electrical">Electrical</option>
                    <option value="Information Technology">Information Technology</option>
                    <option value="Electronics">Electronics</option>
                </select>
            </div>
            <div>
                <label>Address:</label>
                <textarea name="address" class="form-control"></textarea>
            </div>
            <div class="position-relative">
                <label>Do You Need Hostel Facility :</label>
                <div class="form-check form-check-inline fix">
                    <input type="radio" class="form-check-input" value="1" name="hostel" />
                    <label>
                        Yes
                    </label>
                </div>
                <div class="form-check form-check-inline fix">
                    <input type="radio" class="form-check-input" value="0" name="hostel" />
                    <label>
                        No
                    </label>
                </div>
            </div>
            <div class="input-container">
                <label>Choose Additional Subjects: </label>
                <label class="wrapper check-wrapper">
                    <input type="checkbox" name="additional_subjects[]" value="Cyber Security" />
                    Cyber Security
                </label>
                <label class="wrapper check-wrapper">
                    <input type="checkbox" name="additional_subjects[]" value="Artificial Intelligence" />
                    Artificial Intelligence
                </label>
                <label class="wrapper check-wrapper">
                    <input type="checkbox" name="additional_subjects[]" value="Blockchain" />
                    Blockchain
                </label>
                <label class="wrapper check-wrapper">
                    <input type="checkbox" name="additional_subjects[]" value="IoT" />
                    IoT
                </label>
                <label class="wrapper check-wrapper">
                    <input type="checkbox" name="additional_subjects[]" value="Robotics" />
                    Robotics
                </label>
            </div>
            <input type="submit" value="Save" class="btn btn-success">
        </form>

    </div>
</div>

@stop