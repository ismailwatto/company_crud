<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            border: 2px solid #00ffff;
            background: linear-gradient(to right, chartreuse, gray);
            margin: 10px auto;
            border-top-right-radius: 60px;
            border-bottom-left-radius: 60px;
            max-width: 500px;
            padding:0px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: black;
            color: white;
            padding: 8px 20px;
            margin: 8px auto;
            display: block;
            border: none;
            cursor: pointer;
            width: 40%;
        }

        button:hover {
            opacity: 0.8;
        }

        .container {
            padding: 15px;
        }

        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<div class="container">
<form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        <h2 style="text-align: center">Company Form</h2>    
        @csrf
        <div class="container">
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" autocomplete="username" required>

            <label for="address"><b>Address</b></label>
            <input type="text" placeholder="Enter Address" name="address" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
