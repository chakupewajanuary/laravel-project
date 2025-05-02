<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Program</title>
</head>
<body>

    <h1>Add New Program</h1>

    <!-- Success Message -->
    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Show Validation Errors -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form Start -->
    <form action="{{ route('programs.store') }}" method="POST">
        @csrf

        <!-- Program Name -->
        <div>
            <label for="name">Program Name:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <br>

        <!-- Program Time -->
        <div>
            <label for="time">Program Time:</label>
            <input type="text" name="time" id="time" required>
        </div>

        <br>

        <!-- Select Student ID -->
        <div>
            <label for="st_id">Select Student:</label>
            <select name="st_id" id="st_id" required>
                <option value="">-- Select a Student --</option>
                @foreach ($students as $student)
                    <option value="{{ $student->st_id }}">
                        {{ $student->name }} (ID: {{ $student->st_id }})
                    </option>
                @endforeach
            </select>
        </div>

        <br>

        <!-- Submit Button -->
        <button type="submit">Save Program</button>

    </form>

</body>
</html>
