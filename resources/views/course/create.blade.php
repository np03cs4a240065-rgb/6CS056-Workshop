
@extends('layouts.app')

@section('title', 'Add Course')

@section('content')

<div class="container">

    <h1>Add New Course</h1>

    @if ($errors->any())
        <div style="color: red;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf

        <p>
            <label>Name:</label><br>
            <input type="text" name="name"
                   value="{{ old('name') }}" required>
        </p>

        <p>
            <label>Description:</label><br>
            <textarea name="description" rows="3">{{ old('description') }}</textarea>
        </p>

        <p>
            <label>Duration (weeks):</label><br>
            <input type="number" name="duration"
                   value="{{ old('duration') }}" min="1" required>
        </p>

        <p>
            <label>Fee:</label><br>
            <input type="number" name="fee"
                   value="{{ old('fee') }}" min="0" step="0.01" required>
        </p>

        <p>
            <label>Difficulty:</label><br>
            <select name="difficulty" required>
                <option value="">Select Difficulty</option>
                <option value="Easy" {{ old('difficulty') == 'Easy' ? 'selected' : '' }}>Easy</option>
                <option value="Medium" {{ old('difficulty') == 'Medium' ? 'selected' : '' }}>Medium</option>
                <option value="Hard" {{ old('difficulty') == 'Hard' ? 'selected' : '' }}>Hard</option>
            </select>
        </p>

        <p>
            <label>
                <input type="checkbox" name="is_active" value="1"
                       style="width: auto;"
                       {{ old('is_active') ? 'checked' : '' }}>
                Active Course
            </label>
        </p>

        <button type="submit">Save Course</button>

        <a href="{{ route('courses.index') }}">Cancel</a>

    </form>

</div>

@endsection
