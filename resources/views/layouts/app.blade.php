<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Prima aplicatie')</title>
</head>
<body>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: Arial, sans-serif;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 20px;
        background-color: #333;
        color: white;
    }
    .logo {
        font-size: 24px;
        font-weight: bold;
    }
    .menu {
        list-style: none;
        display: flex;
    }
    .menu li {
        margin: 0 15px;
    }
    .menu a {
        text-decoration: none;
        color: white;
        font-size: 18px;
    }
    .menu a:hover {
        color: #f39c12;
    }
    .menu-toggle {
        display: none;
        font-size: 24px;
        cursor: pointer;
    }
    @media (max-width: 768px) {
        .menu {
            display: none;
            flex-direction: column;
            background: #333;
            position: absolute;
            top: 60px;
            left: 0;
            width: 100%;
            padding: 10px 0;
        }
        .menu.active {
            display: flex;
        }
        .menu li {
            text-align: center;
            margin: 10px 0;
        }
        .menu-toggle {
            display: block;
        }
    }
    footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 15px 0;
        margin-top: auto;
    }
</style>
<header>
    <div class="logo">Aplicatia mea</div>
    <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
    <ul class="menu" id="menu">
        <li><a href="home">Home</a></li>
        <li><a href="about">About</a></li>
        <li><a href="products">Products</a></li>
        <li><a href="services">Services</a></li>
    </ul>
</header>

<main>
    @yield('content')
</main>

<footer>
    &copy; 2025 MyWebsite. All rights reserved.</footer>
<script>
    function toggleMenu() {
        document.getElementById('menu').classList.toggle('active');
    }
</script>
</body>
</html>
