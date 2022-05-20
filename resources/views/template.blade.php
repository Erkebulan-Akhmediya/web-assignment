<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('head')
</head>
<body>
    <header>
        <div class="block" id="profile">
            <a href="{{ route('profile') }}" style="color: white;">
                <ion-icon name="person-outline" id="icon"></ion-icon>
            </a>
        </div>
        <div class="block" id="info">
            <a href="{{ route('index') }}" style="color: white;">Home</a>
            <a href="{{ route('convert') }}" style="color: white;">Convert</a>
            <a href="{{ route('about') }}" style="color: white;">About</a>
            <a href="{{ route('contact') }}" style="color: white;">Contact</a>
        </div>
    </header>
    <main>
        @yield('main')
    </main>
    <footer>
        <ul>
            <li><a href="{{ route('profile') }}">Profile</a></li>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('convert') }}">Convert</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('registration.index') }}">Sign In / Sign Up</a></li>
        </ul>
    </footer>
    <!-- icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>