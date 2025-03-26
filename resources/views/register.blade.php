<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
            color: #555;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .btn {
            width: 100%;
            background: #007bff;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
        }

        .btn:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Student Registration</h2>
        <form method="post" action="{{route('student.store')}}">
            @csrf
            <label>First Name</label>
            <input type="text" name="fname" required>

            <label>Last Name</label>
            <input type="text" name="lname" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Number</label>
            <input type="text" name="number" required>

            <label>Course</label>
            <select name="course" id="course">
                <option value="btech">B.Tech</option>
                <option value="bca">BCA</option>
                <option value="mca">MCA</option>
                <option value="mtech">M.Tech</option>
            </select>
            <label>Username</label>
            <input type="uname" name="uname" required>

            <label>Password</label>
            <input type="password" name="psw" required>

            <button type="submit" class="btn">Register</button>
        </form>
    </div>

</body>

</html>