<!-- resources/views/purchase.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <!-- Add your head content here -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .purchase-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0041E8;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0034b3;
        }
    </style>
</head>

<body>

    <div class="purchase-container">
        <h1>Purchase Confirmation</h1>
        <p>Thank you, {{ $user->name }}, for your purchase! Now, Finish Your Payment First!</p>


        <h2>Course Information</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <!-- Add more table headers as needed -->
            </tr>
            <tr>
                <td>{{ $course->name }}</td>
                <td>{{ $course->price }}</td>
                <!-- Add more table data as needed -->
            </tr>
        </table>

        <a href="{{ route('courses.index') }}">Back to Courses</a>
    </div>

</body>

</html>
