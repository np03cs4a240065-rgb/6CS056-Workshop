
@extends('layouts.app')

@section('title', 'Courses')

@section('content')

<div class="container">

    <h1>Courses</h1>

    <a href="{{ route('courses.create') }}" class="btn">
        Create Course
    </a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Duration</th>
                <th>Fee</th>
                <th>Difficulty</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->duration }} weeks</td>
                    <td>{{ number_format($course->fee, 2) }}</td>
                    <td>{{ $course->difficulty }}</td>
                    <td>{{ $course->is_active ? 'Yes' : 'No' }}</td>

                    <td>
                        <div style="display: flex; align-items: center; gap: 15px;">

                            <a href="{{ route('courses.show', $course) }}">
                                View
                            </a>

                            <a href="{{ route('courses.edit', $course) }}">
                                Edit
                            </a>

                            <form
                                action="{{ route('courses.destroy', $course) }}"
                                method="POST"
                                style="margin: 0;"
                                onsubmit="return confirm('Are you sure you want to delete this record?');">

                                @csrf
                                @method('DELETE')

                                <button type="submit">Delete</button>

                            </form>

                        </div>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="7">No courses found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>

@endsection
