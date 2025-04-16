<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addEmp</title>

    <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f6f8;
      padding: 40px;
    }

    .form-container {
      background-color: #ffffff;
      padding: 30px;
      max-width: 500px;
      margin: auto;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .form-container h2 {
      margin-bottom: 20px;
      text-align: center;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #555;
    }

    input, select {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
      transition: border-color 0.3s;
    }

    input:focus, select:focus {
      border-color: #007bff;
      outline: none;
    }

    .submit-btn {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 12px;
      width: 100%;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s;
    }

    .submit-btn:hover {
      background-color: #0056b3;
    }

    a {
      display: inline-block;
      margin-top: 25px;
      margin-left: 175px;
      padding: 12px 24px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 6px;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    a:hover {
      background-color: #0056b3;
    }


   
  </style>

</head>
<body>

  <div class="form-container">
 
    <h2>Employee Management</h2> 
    <form action="/add-table" method="POST">
        @csrf

        <label for="fullName">Full Name</label>
        <input type="text" id="name" name="name" placeholder="e.g. shreyash chougule" required>


      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="e.g. shreyash@example.com" required>

      <label for="age">Age</label>
      <input type="text" id="empId" name="age" placeholder="e.g. 23" required>


      <button type="submit" class="submit-btn">Add Employee</button>
      <a href="/">Go to Home</a>

     

    </form>
  </div>

  <br><br><br>

  
</body>
</html>
