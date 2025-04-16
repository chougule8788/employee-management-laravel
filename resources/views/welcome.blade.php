<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emp-management</title>

    <style>
    /* Reset some default styles */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f6f8;
    }

    /* Navbar styling */
    .navbar {
      background-color: #007bff;
      padding: 15px 40px;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar .logo {
      font-size: 24px;
      font-weight: bold;
    }

    .navbar ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    .navbar ul li {
      display: inline;
    }

    .navbar ul li a {
      color: white;
      text-decoration: none;
      font-size: 16px;
      padding: 8px 12px;
      border-radius: 4px;
      transition: background-color 0.3s;
    }

    .navbar ul li a:hover {
      background-color: #0056b3;
    }

    /* Hero / Front section */
    .hero {
      text-align: center;
      padding: 80px 20px;
      background-color: #ffffff;
    }

    .hero h1 {
      font-size: 40px;
      color: #333;
      margin-bottom: 20px;
    }

    .hero p {
      font-size: 18px;
      color: #555;
      margin-bottom: 30px;
    }

    .hero a.button {
      display: inline-block;
      background-color: #007bff;
      color: white;
      padding: 14px 30px;
      font-size: 16px;
      text-decoration: none;
      border-radius: 6px;
      transition: background-color 0.3s ease;
    }

    .hero a.button:hover {
      background-color: #0056b3;
    }

    /* Footer (optional) */
    footer {
      text-align: center;
      padding: 20px;
      background-color: #007bff;
      color: white;
      margin-top: 60px;
    }
  </style>
</head>
<body>

 <!-- Navigation bar -->
 <div class="navbar">
    <div class="logo">Employee Manager</div>
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/add">Add Employee</a></li>
      <li><a href="get-data">Update Employees</a></li>
      <!-- <li><a href="/search">Search</a></li> -->
    </ul>
  </div>

  <!-- Hero Section -->
  <div class="hero">
    <h1>Welcome to the Employee Management System</h1>
    <p>Effortlessly manage employee data with ease and efficiency.</p>
    <a href="/add" class="button">Get Started</a>
  </div>

  <!-- Footer -->
  <footer>
    &copy; 2025 Employee Manager. All rights reserved.
  </footer>

    
</body>
</html>