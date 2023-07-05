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
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Email</th>
          <th>Password</th>
          <th>username</th>
          <th>contact_number</th>
          <th>Delete</th>
          <th>Edit</th>
        </tr>
      </thead>



      @foreach ($v_show as $info)
      <tr>

        <td> {{ $info->id }} </td>
        <td> {{ $info->email }} </td>
        <td> {{ $info->Pw }} </td>
        <td> {{ $info->username}} </td>
        <td> {{ $info->ph }} </td>



        <td><a href="/edit/{{ $info->id }}"> Edit |
            <a href="/delete/{{ $info->id }}">Delete</a></td>
      </tr>
      @endforeach


    </table>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>