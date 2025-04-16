<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add table</title>

    <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f6f8;
      padding: 40px;
    }

    .table-container {
        background-color: #ffffff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    thead {
      background-color: #007bff;
      color: white;
    }

    th, td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    @media (max-width: 600px) {
      table, thead, tbody, th, td, tr {
        display: block;
      }
      thead tr {
        display: none;
      }
      td {
        position: relative;
        padding-left: 50%;
      }
      td::before {
        content: attr(data-label);
        position: absolute;
        left: 15px;
        font-weight: bold;
      }
    }

/* search form */

    .search-container {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .search-form {
      display:inline-block;
      gap: 10px;
    }

    .search-form input[type="text"] {
      padding: 10px 15px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
      width: 250px;
      transition: border-color 0.3s;
    }

    .search-form input[type="text"]:focus {
      border-color: #007bff;
      outline: none;
    }

    .search-form button {
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .search-form button:hover {
      background-color: #0056b3;
    }

    a {
      display: inline-block;
      margin-top: 25px;
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

<!-- serach bar -->

<div class="search-container">
    <form class="search-form" action="/search" method="GET">
      <input type="text" name="search"  placeholder="Search employees..." required>
      <button type="submit">Search</button> <a href="/">Go to Home</a>
    </form>
  </div>


<!-- table -->
 
  
<div class="table-container">
    <h2>Employee List</h2>
    <table>
      <thead>
        <tr>
          <th>Sr. No.</th>
          <th>Name</th>
          <th>Email</th>
          <th>Age</th>
          <th>Delete</th>
          <th>Update</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($employee as $emp )
        <tr>
            <td>{{ $emp->sno }}</td>
            <td>{{ $emp->name }}</td>
            <td>{{ $emp->email }}</td>
            <td>{{ $emp->age }}</td>
            <td><a href="{{ 'delete/'.$emp->sno }}">Delete</a></td>
            <td><a href="{{ 'update/'.$emp->sno }}">Update</a></td>

        </tr>
        
        @endforeach
    
      </tbody>
    </table>
  </div> 

    
</body>
</html>