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
      <a class="dropdown-item" href="#">Sign in</a>
      <a class="dropdown-item" href="#">Main form</a>
    </div>
  </div>
<div class="container mt-3">
  <h2>Main Form</h2>
  <p>This is the main form of the admin page:</p>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>Destinatioin</th>
        <th>Depart Date</th>
        <th>Return Date</th>
        <th>Duration</th>

        <th>Delete</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Destinatioin</td>
        <td>05/20/2023 9:27 PM</td>
        <td>06/06/2023 9:27 PM</td>
        <td>Destinatioin2</td>
        <td> <a href="url"> Delete</a> </td>
        <td><a href="url"> Edit</a></td>
      </tr>
      <tr>
        <td>Destinatioin</td>
        <td>05/20/2023 9:27 PM</td>
        <td>06/06/2023 9:27 PM</td>
        <td>Destinatioin2</td>
        <td> <a href="url"> Delete</a> </td>
        <td><a href="url"> Edit</a></td>
      </tr>
      <tr>
        <td>Destinatioin</td>
        <td>05/20/2023 9:27 PM</td>
        <td>06/06/2023 9:27 PM</td>
        <td>Destinatioin2</td>
        <td> <a href="url"> Delete</a> </td>
        <td><a href="url"> Edit</a></td>
      </tr>
      <tr>
        <td>Destinatioin</td>
        <td>05/20/2023 9:27 PM</td>
        <td>06/06/2023 9:27 PM</td>
        <td>Destinatioin2</td>
        <td> <a href="url"> Delete</a> </td>
        <td><a href="url"> Edit</a></td>
      </tr>
    </tbody>
  </table>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>