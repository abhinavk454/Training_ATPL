<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Data Insertion</title>
</head>

<body>
    <center>
        <hr>
        <h3>All Students</h3>
        @foreach ($students as $student)
            Id : {{ $student->id }},
            Name : {{ $student->name }},
            Roll No: {{ $student->roll_no }}</p>
        @endforeach
        <hr>
        <h3>All Parents</h3>
        @foreach ($parents as $parent)
            Id : {{ $parent->id }},
            Name : {{ $parent->first_name }} {{ $parent->last_name }},
            Email : {{ $parent->email }},
            City : {{ $parent->city_name }}</p>
        @endforeach
        <hr>
        <h3>Insert Data Into Student Database</h3>
        <form action="/insert" method="post">
            @csrf
            <input type="text" name="name" id="name" placeholder="Enter Student Name" required>
            <br>
            <input type="number" name="roll_no" id="roll" placeholder="Enter Student Roll" required>
            <br>
            <input type="submit" value="Insert">
        </form>
        <hr>
        <h3>Insert Data Into Parent Database</h3>
        <form action="/insert-parent" method="post">
            @csrf
            <input type="text" name="first_name" id="name" placeholder="Enter First Name" required>
            <br>
            <input type="text" name="last_name" id="name" placeholder="Enter Last Name" required>
            <br>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>
            <br>
            <input type="text" name="city_name" id="city" placeholder="Enter city you live in" required>
            <br>
            <input type="submit" value="Insert">
        </form>
        <hr>
        <h3>Delete Student by ID</h3>
        <form action="/delete" method="post">
            @csrf
            <input type="number" name="id" id="id" placeholder="Enter Student ID" required>
            <br>
            <input type="submit" value="Delete">
        </form>
        <hr>
        <h3>Delete Parent by ID</h3>
        <form action="/delete-parent" method="post">
            @csrf
            <input type="number" name="id" id="id" placeholder="Enter Parent ID" required>
            <br>
            <input type="submit" value="Delete">
        </form>
        <hr>
        <h3>Update Student by ID</h3>
        <form action="/update" method="post">
            @csrf
            <select name="id">
                @foreach ($students as $student)
                    <option value="{{ $student->id }}">{{ $student->id }}</option>
                @endforeach
            </select>
            <br>
            <input type="text" name="name" id="name" placeholder="Enter Updated Name" required>
            <br>
            <input type="number" name="roll_no" id="roll" placeholder="Enter Updated Roll" required>
            <br>
            <input type="submit" value="Update">
        </form>
        <hr>
        <h3>Update Parent by ID</h3>
        <form action="/update-parent" method="post">
            @csrf
            <select name="id">
                @foreach ($parents as $parent)
                    <option value="{{ $parent->id }}">{{ $parent->id }}</option>
                @endforeach
            </select>
            <br>
            <input type="text" name="first_name" id="name" placeholder="Enter Updated First Name" required>
            <br>
            <input type="text" name="last_name" id="name" placeholder="Enter Updated Last Name" required>
            <br>
            <input type="email" name="email" id="email" placeholder="Enter Updated Email" required>
            <br>
            <input type="text" name="city_name" id="city" placeholder="Enter Updated City" required>
            <br>
            <input type="submit" value="Update">
        </form>
        <hr>
    </center>
</body>

</html>
