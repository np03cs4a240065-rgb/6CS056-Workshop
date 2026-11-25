
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Training Institute')</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: white;
            color: #222;
        }

        nav {
            background-color: #212936;
            padding: 18px 30px;
            display: flex;
            justify-content: space-between;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        .brand {
            color: white;
            font-weight: bold;
        }

        .container {
            max-width: 1100px;
            margin: 30px auto;
            padding: 20px;
        }

        h1 {
            font-size: 28px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f5f5f5;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button, .btn {
            display: inline-block;
            background-color: #2864dc;
            color: white;
            border: none;
            padding: 10px 14px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        button:hover, .btn:hover {
            background-color: #174db5;
        }

        .success-message {
            background-color: #d1e7dd;
            color: #0f5132;
            padding: 15px;
            margin: 20px auto;
            max-width: 1100px;
            border-radius: 5px;
        }

        .error-message {
            background-color: #f8d7da;
            color: #842029;
            padding: 12px;
            margin-bottom: 15px;
        }

        footer {
            background-color: #f1f2f4;
            text-align: center;
            padding: 15px;
            margin-top: 100px;
            font-size: 12px;
        }
    </style>
</head>

<body>

    <nav>
        <span class="brand">Training Institute</span>

        <div>
            <a href="{{ route('students.index') }}">Students</a>
            <a href="{{ route('courses.index') }}">Courses</a>
        </div>
    </nav>

    <main>
        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <footer>
        © 2026 Training Institute. All rights reserved.
    </footer>

</body>
</html>
