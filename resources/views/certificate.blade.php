<!DOCTYPE html>
<html>
<head>
    <title>Certificate of Completion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .certificate {
            text-align: center;
            border: 2px solid black;
            padding: 50px;
            margin: 50px;
        }

        h1 {
            font-size: 2.5em;
        }

        h2 {
            font-size: 2em;
            margin-top: 30px;
        }

        h3 {
            font-size: 1.5em;
            margin-top: 10px;
            font-weight: normal;
        }

        hr {
            border: none;
            border-top: 1px solid black;
            margin: 30px 0;
        }
        @media print {
            .no-print {
                display: none;
            }
        }
        button {
            display: block;
            width: 200px;
            height: 50px;
            margin: 20px auto;
            background-color: #0041E8;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.2em;
            text-align: center;
            line-height: 50px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0031b8;
        }

    </style>
</head>
<body>
    <div class="certificate">
        <h1>Certificate of Completion</h1>
        <hr>
        <h2>This is to certify that</h2>
        <h3>{{ $user->name }}</h3>
        <h2>has completed the course</h2>
        <h3>{{ $course->name }}</h3>
        <h2>on</h2>
        <h3>{{ $date }}</h3>
    </div>

    @if(!isset($pdf) || !$pdf)
<button onclick="window.location.href='{{ route('downloadCertificate', $course->id) }}'">
    Download Certificate
</button>
@endif


</body>
</html>
