<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>

    <style>
    body {
      background-color: #f4f6f8;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .success-box {
      background-color: #fff;
      padding: 40px 60px;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      text-align: center;
    }

    .success-box h1 {
      color: #28a745;
      font-size: 28px;
      margin-bottom: 10px;
    }

    .success-box p {
      color: #555;
      font-size: 18px;
    }

    .success-box .btn {
      display: inline-block;
      margin-top: 25px;
      padding: 12px 24px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 6px;
      transition: background-color 0.3s ease;
    }

    .success-box .btn:hover {
      background-color: #0056b3;
    }
  </style>

</head>
<body>

<div class="success-box">
    <h1>✅ Employee Deleted Successfully!</h1>
    <p>The employee has been removed from the system.</p>
    <a href="/get-data" class="btn">Go Back to Employee List</a>
  </div>
    
</body>
</html>
