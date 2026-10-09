@extends('layouts.app')

@section('content')
    <h2>Add New Student</h2>

    <form action="/students" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Student Number</label>
            <input type="text" name="student_number" class="form-control" placeholder="e.g. 2026-0011" value="{{ old('student_number') }}">
            @error('student_number') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control" placeholder="e.g. Juan" value="{{ old('first_name') }}">
            @error('first_name') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control" placeholder="e.g. Dela Cruz" value="{{ old('last_name') }}">
            @error('last_name') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Program</label>
            <input type="text" name="program" class="form-control" placeholder="e.g. BSIT" value="{{ old('program') }}">
            @error('program') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Year Level</label>
            <input type="number" name="year_level" class="form-control" placeholder="1 to 4" value="{{ old('year_level') }}">
            @error('year_level') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="e.g. juan.delacruz@rmmc.edu" value="{{ old('email') }}">
            @error('email') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/students" class="btn btn-secondary">Cancel</a>
    </form>
@endsection