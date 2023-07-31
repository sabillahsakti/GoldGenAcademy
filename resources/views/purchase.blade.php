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

        .payment-form button[type="submit"] {
            background-color: #0041E8;
            color: #ffffff;
            padding: 12px 24px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .payment-form button[type="submit"]:hover {
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

        <div class="payment-section">
            <h2>Payment Confirmation</h2>
            <p>Please upload an image of your payment confirmation to complete the payment process.</p>

            <form action="{{ route('payment.confirmation', ['id' => $course->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="payment-form">
                    <input type="file" name="payment_image" id="payment_image">
                    <label for="payment_image">Upload Payment Image</label>
                </div>
                <button type="submit">Confirm Payment</button>
            </form>

        </div>
    </div>

</body>

</html>