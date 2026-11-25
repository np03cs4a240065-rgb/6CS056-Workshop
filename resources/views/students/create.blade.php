<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

    <h1>Add New Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Phone:</label>
        <input type="text" name="phone" required><br><br>

        <label>Address:</label>
        <input type="text" name="address" required><br><br>

        <label>Date of Birth:</label>
        <input type="date" name="date_of_birth" required><br><br>

        <button type="submit">Save Student</button>
    </form>

</body>
</html>
	
