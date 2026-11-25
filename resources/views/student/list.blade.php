
@extends('layouts.app')

@section('title', 'Students')

@section('content')

<div class="container">

    <h1>Students</h1>

    <a href="{{ route('students.create') }}" class="btn">
        Create Student
    </a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>

                    <td>
                        <div style="display: flex; align-items: center; gap: 15px;">

                            <a href="{{ route('students.show', $student) }}">
                                View
                            </a>

                            <a href="{{ route('students.edit', $student) }}">
                                Edit
                            </a>

                            <form
                                action="{{ route('students.destroy', $student) }}"
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
                    <td colspan="5">No students found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>

@endsection
