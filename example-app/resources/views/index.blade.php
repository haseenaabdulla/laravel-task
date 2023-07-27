@extends('layout')
@section('content')
@php
/** @var \Illuminate\Support\Collection|\App\Models\Student[] $students */
@endphp

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Student List</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add Student
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Branch</th>
                                    <th>Address</th>
                                    <th>Hostel</th>
                                    <th>Additional Subjects</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $student->first_name }}</td>
                                    <td>{{ $student->last_name }}</td>
                                    <td>{{ $student->mobile }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->branch }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>{{ $student->hostel ? 'Yes' : 'No' }}</td>
                                    <td>
                                        {{ $student->additional_subjects }}
                                    </td>
                                    <td>
                                        <a href="{{ url('/student/' . $student->id) }}" title="View Student">
                                            <button class="btn btn-info btn-sm">
                                                <i class="fa fa-eye" aria-hidden="true"></i> View
                                            </button>
                                        </a>
                                        <a href="{{ url('/student/' . $student->id . '/edit') }}" title="Edit Student">
                                            <button class="btn btn-primary btn-sm">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                            </button>
                                        </a>
                                        <form method="POST" action="{{ url('/student/' . $student->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection