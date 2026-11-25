
@extends('layouts.app')

@section('title', 'Edit Course')

@section('content')

<div class="container">

    <h1>Edit Course</h1>

    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input
            type="text"
            id="name"
            name="name"
            value="{{ old('name', $course->name) }}"
            required
        >
        @error('name')
            <p class="error-message">{{ $message }}</p>
        @enderror

        <label for="description">Description:</label>
        <textarea
            id="description"
            name="description"
            rows="3"
        >{{ old('description', $course->description) }}</textarea>
        @error('description')
            <p class="error-message">{{ $message }}</p>
        @enderror

        <label for="duration">Duration (weeks):</label>
        <input
            type="number"
            id="duration"
            name="duration"
            value="{{ old('duration', $course->duration) }}"
            min="1"
            required
        >
        @error('duration')
            <p class="error-message">{{ $message }}</p>
        @enderror

        <label for="fee">Fee:</label>
        <input
            type="number"
            id="fee"
            name="fee"
            step="0.01"
            value="{{ old('fee', $course->fee) }}"
            min="0"
            required
        >
        @error('fee')
            <p class="error-message">{{ $message }}</p>
        @enderror

        <label for="difficulty">Difficulty:</label>
        <select id="difficulty" name="difficulty" required>
            <option value="">Select Difficulty</option>

            <option value="Easy"
                {{ old('difficulty', $course->difficulty) == 'Easy' ? 'selected' : '' }}>
                Easy
            </option>

            <option value="Medium"
                {{ old('difficulty', $course->difficulty) == 'Medium' ? 'selected' : '' }}>
                Medium
            </option>

            <option value="Hard"
                {{ old('difficulty', $course->difficulty) == 'Hard' ? 'selected' : '' }}>
                Hard
            </option>
        </select>
        @error('difficulty')
            <p class="error-message">{{ $message }}</p>
        @enderror

        <br><br>

        <div style="margin-top: 15px;">
            <label style="display: flex; align-items: center; gap: 8px;">

                <input
                    type="checkbox"
                    name="is_active"
                    value="1"
                    style="width: 16px; height: 16px; margin: 0;"
                    {{ old('is_active', $course->is_active) ? 'checked' : '' }}
                >

                Active Course

            </label>
        </div>

        <br>

        <button type="submit">Update Course</button>

        <a href="{{ route('courses.index') }}">Cancel</a>

    </form>

</div>

@endsection
