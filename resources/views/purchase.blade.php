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
        margin-top: 60px;
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

    th,
    td {
        border: 1px solid #ccc;
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    a {
        display: block;
        background-color: #333;
        padding: 13px;
        color: #fff;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        justify-content: center;
        text-decoration: none;
        align-items: center;
        text-align: center;
    }

    a:hover {
        background-color: #666;
    }

    .payment-form {
        display: flex;
        justify-content: center;
        margin-top: 20px;
        padding: 30px;
    }

    .payment-form button[type="submit"] {
        display: block;
        background-color: #333;
        padding: 13px;
        color: #fff;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        justify-content: center;
    }

    .payment-form button[type="submit"]:hover {
        background-color: #666;
    }

    .purchase-container p {
        text-align: center;
    }
    </style>
</head>

<body>

    <div class="purchase-container">
        <h1>Purchase Confirmation</h1>
        <p>Thank you {{ $user->name }} for your purchase! Please finish your payment first.</p>
        <br>
        <h2>Course Information</h2>
        <table>
            <tr>
                <th>Course Name</th>
                <th>Price</th>
                <!-- Add more table headers as needed -->
            </tr>
            <tr>
                <td>{{ $course->name }}</td>
                <td>Rp{{ $course->price }}</td>
                <!-- Add more table data as needed -->
            </tr>
        </table>

        <a href="{{ route('courses.index') }}">Back to Courses</a>

        <div class="payment-section">
            <style>
            .payment-section h1 {
                margin-top: 50px;
                display: flex;
                justify-content: center;
            }

            .payment-section p {
                display: flex;
                justify-content: center;
            }
            </style>
            <h1>Payment Confirmation</h1>
            <p>Please send the payment receipt to complete the payment process.</p>

            <form action="{{ route('payment.confirmation', ['id' => $course->id]) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="payment-form">
                    <div class="btn-input">
                        <style>
                        input {
                            margin-top: 10px;
                        }
                        </style>
                        <input type="file" name="payment_image" id="payment_image">
                    </div>
                    <!-- <label for="payment_image">Upload Payment Image</label> -->
                    <button type="submit">Confirm Payment</button>
                </div>

            </form>

        </div>
    </div>

</body>

</html>