<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="dropdown">
    <button class="btn btn-dark dropdown-toggle" type="button" id="menuIcon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Menu
    </button>
    <div class="dropdown-menu" aria-labelledby="menuIcon">
      <a class="dropdown-item" href="#">Booking</a>
      <a class="dropdown-item" href="#">Sign In</a>
      <a class="dropdown-item" href="#">Main form</a>
    </div>
  </div>
<div class="container mt-3">
  <h2>Booking</h2>
  <p></p>
  
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>User</th>
          <th>ID</th>
          <th>User Email</th>
          <th>Check In</th>
          <th>Check Out</th>
          <th>Adult</th>
          <th>Child</th>
          <th>Room</th>
          <th>Special Request</th>
          <th>Delete</th>
          <th>Edit</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>sal</td>
          <td>1</td>
          <td>visallim0309@gmail.com</td>
          <td>1</td>
          <td>1</td>
          <td>2</td>
          <td>2</td>
          <td>2</td>
          <td>abc</td>
          <td> <a href="url"> Delete</a> </td>
        <td><a href="url"> Edit</a></td>
        </tr>
        <tr>
          <td>sal</td>
          <td>2</td>
          <td>visallim0309@gmail.com</td>
          <td>1</td>
          <td>1</td>
          <td>2</td>
          <td>2</td>
          <td>2</td>
          <td>abc</td>
          <td> <a href="url"> Delete</a> </td>
        <td><a href="url"> Edit</a></td>
        </tr>
        <tr>
          <td>sal</td>
          <td>3</td>
          <td>visallim0309@gmail.com</td>
          <td>1</td>
          <td>1</td>
          <td>2</td>
          <td>2</td>
          <td>2</td>
          <td>abc</td>
          <td> <a href="url"> Delete</a> </td>
        <td><a href="url"> Edit</a></td>
        </tr>
        <tr>
          <td>sal</td>
          <td>4</td>
          <td>visallim0309@gmail.com</td>
          <td>1</td>
          <td>1</td>
          <td>2</td>
          <td>2</td>
          <td>2</td>
          <td>abc</td>
          <td> <a href="url"> Delete</a> </td>
        <td><a href="url"> Edit</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
