<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Navigation Bar */
        .navbar {
            background: rgb(255, 0, 0);
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            font-weight: bold;
            transition: 0.3s;
        }

        .navbar a:hover {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
        }

        /* Page Title */
        h2 {
            text-align: center;
            color: #333;
            margin-top: 20px;
            font-size: 26px;
        }

        /* Table Styling */
        .table-container {
            max-width: 1000px;
            margin: 20px auto;
            overflow-x: auto;
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th,
        td {
            padding: 14px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: #007bff;
            color: white;
            font-size: 16px;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }

        tr:hover {
            background: #eef4ff;
            transition: 0.3s;
        }

        /* Button Styling */
        .btn {
            text-decoration: none;
            padding: 8px 12px;
            font-size: 14px;
            font-weight: bold;
            border-radius: 5px;
            display: inline-block;
            text-align: center;
            transition: 0.3s;
        }

        .btn-edit {
            background: #28a745;
            color: white;
        }

        .btn-edit:hover {
            background: #218838;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            table {
                font-size: 14px;
            }

            th,
            td {
                padding: 10px;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="">Home</a>
        <a href="">Courses</a>
        <a href=""></a>
        <a href="">Logout</a>
    </div>

    <h2>Student List</h2>

    <div class="table-container">
        <table>
            <tr>
                <th>Sl No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Course</th>
                <th colspan="3">Action</th>
            </tr>

            @foreach($student as $stu)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $stu->first_name }}</td>
                <td>{{ $stu->last_name }}</td>
                <td>{{ $stu->email }}</td>
                <td>{{ $stu->number }}</td>
                <td>{{ $stu->course }}</td>
                <td><a href="{{route('admin.edit',$stu->id)}}" class="btn btn-edit">Edit</a></td>
                <td><a href="{{route('admin.delete',$stu->id)}}" class="btn btn-delete">Delete</a></td> 
            </tr>
            @endforeach
        </table>
    </div>

</body>

</html>