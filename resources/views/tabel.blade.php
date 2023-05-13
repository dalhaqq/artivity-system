<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ url('https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css') }}">
</head>
<body>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>Column 1</th>
                <th>Column 2</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
        <tr>
            <td>na 2 Data 1</td>
            <td>Ri 2 Data 2</td>
        </tr>
    </tbody>
</table>
<script src="{{ url('https://code.jquery.com/jquery-3.6.4.min.js') }}" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="{{ url('https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js') }}"></script>
<script>
    let table = new DataTable('#myTable');
</script>

</body>
</html>
