<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            max-width: 900px;
            margin: 20px auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th,
        td {
            padding: 12px;
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
            background: #f1f1f1;
        }

        @media (max-width: 600px) {
            table {
                width: 100%;
                font-size: 14px;
            }

            th,
            td {
                padding: 8px;
            }
        }
    </style>
</head>

<body>
    <h2>Student List</h2>
    <table>
        <tr>
            <th>Sl No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Course</th>
            <th>Action</th>
        </tr>

        @foreach($student as $stu)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $stu->first_name }}</td>
            <td>{{ $stu->last_name }}</td>
            <td>{{ $stu->email }}</td>
            <td>{{ $stu->number }}</td>
            <td>{{ $stu->course }}</td>
            <td><a href="" class="btn btn-danger" style="text-decoration:none;">Edit</a></td>
        </tr>
        @endforeach
    </table>
</body>

</html>