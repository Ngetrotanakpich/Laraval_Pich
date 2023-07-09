<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tour With Me </title>
    <link rel="stylesheet" href="./style_book.css">


</head>

<body>
    <!-- partial:index.partial.html -->
    <h1><span class="blue">&lt;</span>User<span class="blue">&gt;</span> <span class="yellow">History</span></h1>

    <h2>Created with love by | <a href="https://github.com/pablorgarcia" target="_blank">LyHeng & Kasiet</a></h2>

    <table class="container">
        <thead>
            <tr>
                <th>
                    <h1>User-ID</h1>
                </th>
                <th>
                    <h1>Username</h1>
                </th>
                <th>
                    <h1>Email</h1>
                </th>
                <th>
                    <h1>Start Date</h1>
                </th>

                <th>
                    <h1>Price</h1>
                </th>
                <th>
                    <h1>Destination</h1>
                </th>
                <th>
                    <h1>Amount People</h1>
                </th>
                <th>
                    <h1>Request</h1>
                </th>
                <th>
                    <h1>Action</h1>
                </th>
            </tr>
        </thead>

        <tbody>


            @foreach ($v_show as $info)

            @if ($info->user_id === Auth::user()->id)

            <tr>
                <td> {{ $info->user_id}} </td>
                <td> {{ $info->name}} </td>
                <td> {{ $info->email}} </td>
                <td> {{ $info->start }} </td>

                <td> {{ $info->price }} </td>
                <td> {{ $info->country}} </td>
                <td> {{ $info->amount }} </td>
                <td> {{ $info->s_request }} </td>
                <td><a href="/edit/{{ $info->id }}"> | Edit | </td>
            </tr>
            @endif

            @endforeach
        </tbody>
    </table>
    <!-- partial -->
    <script src="./script.js"></script>
</body>

</html>