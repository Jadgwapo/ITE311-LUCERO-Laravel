@extends('layouts.app')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title">All Students</h2>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Student Number</th>
                            <th>Name</th>
                            <th>Program</th>
                            <th>Year Level</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $index => $student)
                            <tr class="{{ $index % 2 == 0 ? 'table-light' : '' }}">
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $student->student_number }}</td>
                                <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                                <td>{{ $student->program }}</td>
                                <td>{{ $student->year_level }}</td>
                                <td>{{ $student->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection