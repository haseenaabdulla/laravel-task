@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Student Details</h2>
    </div>
    <div class="card-body">

        <div class="card-body">
            <h5 class="card-title">Name: {{ $students->first_name }} {{ $students->last_name }}</h5>
            <p class="card-text">Address: {{ $students->address }}</p>
            <p class="card-text">Mobile: {{ $students->mobile }}</p>
            <p class="card-text">Email: {{ $students->email }}</p>
            <p class="card-text">Branch: {{ $students->branch }}</p>
            <p class="card-text">
                @if($students->hostel == 1)
            <p>Is Hostel needed: Yes</p>
            @else
            <p>Is Hostel needed: No</p>
            @endif
            </p>
            @if ($students->additional_subjects)
            <p class="card-text">Additional Subject choosen:{{ $students->additional_subjects }}</p>
            @endif



        </div>

    </div>
</div>

@endsection