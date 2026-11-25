
@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
<div class="container">
    <h1>Edit Student</h1>

    @if ($errors->any())
        <div style="color: red;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>Name:</label><br>
            <input type="text" name="name"
                   value="{{ old('name', $student->name) }}" required>
        </p>

        <p>
            <label>Email:</label><br>
            <input type="email" name="email"
                   value="{{ old('email', $student->email) }}" required>
        </p>

        <p>
            <label>Phone:</label><br>
            <input type="text" name="phone"
                   value="{{ old('phone', $student->phone) }}" required>
        </p>

        <p>
            <label>Address:</label><br>
            <textarea name="address">{{ old('address', $student->address) }}</textarea>
        </p>

        <p>
            <label>Date of Birth:</label><br>
            <input type="date" name="date_of_birth"
                   value="{{ old('date_of_birth', $student->date_of_birth) }}">
        </p>

        <button type="submit">Update Student</button>
        <a href="{{ route('students.index') }}">Cancel</a>
    </form>
</div>
@endsection
