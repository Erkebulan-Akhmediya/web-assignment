<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('css/logres.css') }}">
</head>
<body>
    <div class="block"  id="reg">
        <h1>Registration</h1>
        <p>Email</p>
        <input type="email">
        <p>Password</p>
        <input type="password">
        <p>Verify Password</p>
        <input type="password">
        <a id="reg-btn">Register</a>
        <p>Already have an account? <a id="btn">Login</a></p>
    </div>
    <div class="block" id="log">
        <h1>Login</h1>
        <p>Email</p>
        <input type="email">
        <p>Password</p>
        <input type="password">
        <a id="log-btn" href="main.html" style="color: white;">Login</a>
        <p>Don't have an account? <a id="btn2">Register</a></p>
    </div>
    <script>
        document.getElementById('btn').addEventListener('click', () => {
            document.getElementById('reg').style.transform = 'rotateY(180deg)';
            document.getElementById('log').style.transform = 'rotate(360deg)';
        })
        document.getElementById('btn2').addEventListener('click', () => {
            document.getElementById('log').style.transform = 'rotateY(180deg)';
            document.getElementById('reg').style.transform = 'rotate(360deg)';
        })
    </script>
</body>
</html>