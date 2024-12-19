<?php

if(isset($_POST["btnRegister"])){
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aklan Travel Destination</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            line-height: 1.6;
        }
        header, nav, section, footer {
            padding: 20px;
        }
        header {
            background: lightblue;
            color: white;
            text-align: center;
            font-size: 24px;    
        }
        nav {
            background: skyblue;
            color: white;
            display: flex;
            justify-content: space-around;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 10px;
        }
        nav a:hover {
            background: #ff4d4d;
        }
        section {
            display: none;
            min-height: 60vh;
        }
        section.active {
            display: block;
        }
        footer {
            background: #333;
            color: white;
            text-align: center;
        }
        button {
            padding: 10px 15px;
            margin: 10px;
            background: skyblue;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #333;
        }
        .content {
            margin-top: 10px;
        }
    </style>
</head>
<body>
   
    <header>Aklan Travel Destination</header>

    <nav>
        <a href="#" onclick="showSection('home')">Home</a>
        <a href="#" onclick="showSection('admin')">Admin</a>
        <a href="#" onclick="showSection('login')">Login</a>
        <a href="#" onclick="showSection('register')">Register</a>
        <a href="#" onclick="showSection('user')">User</a>
    </nav>

 
    <section id="home" class="active">
        <h2>Welcome to Aklan Travel Destination system</h2>
        <p>Select your role or navigate using the menu.</p>
    </section>

   
    <section id="admin">
        <h2>Admin Panel</h2>
        <div class="content">
            <button >Location Management</button>
            <button>Manage Booking</button>
            <button>Payment Management</button>
<a href="https://www.google.com/maps/@11.6892257,122.3674274,14z?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D"></a>            
            <button>Manage User</button>
        </div>
    </section>

   
    <section id="login">
        <h2>Login</h2>
        <div class="content">
            <label>Username: <input type="text" placeholder="Enter username"></label><br>
            <label>Password: <input type="password" placeholder="Enter password"></label><br>
            <form action="//not yet done under construction.php" method="post">
              </form>              
            <button type="button" onclick="window.location.href='forgot_password_page.php'">Forgot Password</button>
            <button>Login</button>
        </div>
    </section>

    <form method="post">
    <section id="register">
        <h2>Register</h2>
        <div class="content">
            <label>Username: <input type="text" name="username" placeholder="Choose a username"></label><br>
            <label>Email: <input type="email" name = "email" placeholder="Enter email"></label><br>
            <label>Password: <input  type="password"  name = "password" placeholder="Create password"></label><br>
            <button type="submit" name="btnRegister">Register</button>
        </div>
    </section>
    </form>
    
    <section id="user">
        <h2>User Panel</h2>
        <div class="content">
            <button>Show Location</button>
            <button>Place Booking</button>
            <button>Cancel Booking</button>
            
        </div>
    </section>

 
    <footer>
        <p>AklanTravel &copy; 2024</p>
        <img src="Images/462578398_1207323643703352_2508442234656781010_n.jpg" alt="AKLN_TRVL" width="300" height="200">
    </footer>

   
    <script>
        function showSection(sectionId) {
          
            const sections = document.querySelectorAll('section');
            sections.forEach(section => section.classList.remove('active'));

            const activeSection = document.getElementById(sectionId);
            activeSection.classList.add('active');
        }
    </script>
</body>
</html>

