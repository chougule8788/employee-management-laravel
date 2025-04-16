<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>

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

    a{
        display: flex;
     
  margin-top: 25px;
  padding: 12px 24px;
  background-color: #007bff;
  color: #fff;
  text-decoration: none;
  border-radius: 6px;
  font-size: 16px;
  transition: background-color 0.3s ease;
  padding-left: 200px;
    }



   
  </style>
</head>
<body>

     <div class="form-container">
    <h2> Update Employee </h2>
    <form action="/update-emp/@if ($employee)
    {{ $employee->sno }}
@else
    <p>Employee not found.</p>
" @endif method="POST">
        @csrf

        <input type="hidden" name="_method" value="put"/>

        <label for="fullName">Full Name</label>
        <input type="text" id="name"  value="{{ $employee->name }}" name="name" placeholder="e.g. John Doe" required>


      <label for="email">Email</label>
      <input type="email" id="email"  value="{{ $employee->email }}" name="email" placeholder="e.g. john@example.com" required>

      <label for="age">Age</label>
      <input type="text" id="empId"  value="{{ $employee->age }}" name="age" placeholder="e.g. 23" required>


      <button type="submit" class="submit-btn">Update Employee</button>
      <a href="/get-data">cancel</a>

    </form>
  </div>

    
</body>
</html>
