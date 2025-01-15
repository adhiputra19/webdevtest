<x-mylayout>
    <x-slot:headerTitle>{{$pagetitle}}</x-slot:headerTitle>
    <h1>WELCOME</h1>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
        }

        .main {
            display: flex;
            padding: 20px;
        }

        .welcome {
            flex: 3;
            padding-right: 20px;
        }

        .welcome h1 {
            margin-bottom: 20px;
            font-size: 28px;
        }

        .add-bill {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100px;
            height: 100px;
            background-color: #e0e0e0;
            border-radius: 10px;
            cursor: pointer;
            font-size: 14px;
            text-align: center;
        }

        .add-bill:hover {
            background-color: #d6d6d6;
        }

        .my-bill {
            flex: 1;
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .my-bill h2 {
            margin-bottom: 15px;
            font-size: 20px;
            color: #4a148c;
        }

        .bill-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .bill-item img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }

        .bill-item .details {
            font-size: 14px;
        }

        .bill-item .details span {
            display: block;
            margin-bottom: 3px;
        }

        .see-more {
            margin-top: 15px;
            text-align: right;
            font-size: 14px;
            color: #4a148c;
            cursor: pointer;
        }

        .see-more:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="welcome">
            <h1>Welcome, James</h1>
            <div class="add-bill">
                <div>+<br>Add Bill</div>
            </div>
        </div>
        <div class="my-bill">
            <h2>My Bill</h2>
            <div class="bill-item">
                <img src="netflix-logo.png" alt="Netflix">
                <div class="details">
                    <span>Netflix</span>
                    <span>due date: 17/11/2025</span>
                </div>
            </div>
            <div class="see-more"><a href="/projectlist">See more...</a></div>
        </div>
    </div>
</body>
</html>
    <x-button></x-button>
</x-mylayout>
