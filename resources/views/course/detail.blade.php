
@extends('layouts.app')

@section('content')

<h1>Course Details</h1>

<label>Name:</label>
<input
    type="text"
    value="{{ $course->name }}"
    readonly
>

<label>Description:</label>
<textarea rows="3" readonly>{{ $course->description }}</textarea>

<label>Duration (weeks):</label>
<input
    type="text"
    value="{{ $course->duration }}"
    readonly
>

<label>Fee:</label>
<input
    type="text"
    value="{{ $course->fee }}"
    readonly
>

<label>Difficulty:</label>
<input
    type="text"
    value="{{ $course->difficulty }}"
    readonly
>

<label>
    <input
        type="checkbox"
        disabled
        {{ $course->is_active ? 'checked' : '' }}
    >
    Active Course
</label>

<br><br>

<a href="{{ route('courses.edit', $course->id) }}">Edit Course</a>

<a href="{{ route('courses.index') }}">Back to Courses</a>

@endsection
