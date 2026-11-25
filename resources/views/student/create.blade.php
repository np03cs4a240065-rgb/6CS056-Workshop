
@extends('layouts.app')

@section('title', 'Add Student')

@section('content')
<div class="container">
    <h1>Add New Student</h1>

    @if ($errors->any())
        <div style="color: red;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <p>
            <label>Name:</label><br>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </p>

        <p>
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </p>

        <p>
            <label>Phone:</label><br>
            <input type="text" name="phone" value="{{ old('phone') }}" required>
        </p>

        <p>
            <label>Address:</label><br>
            <textarea name="address">{{ old('address') }}</textarea>
        </p>

        <p>
            <label>Date of Birth:</label><br>
            <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}">
        </p>

        <button type="submit">Save Student</button>
        <a href="{{ route('students.index') }}">Cancel</a>
    </form>
</div>
@endsection
