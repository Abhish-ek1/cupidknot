<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="{{asset('css/jquery.dataTables.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery.dataTables.js')}}"></script>
</head>

<body>

    <div class="container-fluid">
        <h3>Users</h3>
        <table id="datatable" class="display">
            <thead>
                <tr align="left">
                    <th>Name</th>
                    <th data-sortable="true">Gender</th>
                    <th data-sortable="true">Age</th>
                    <th data-sortable="true">Income</th>
                    <th data-sortable="true">Family type</th>
                    <th data-sortable="true">Manglik</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

</body>

<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            order: [
                [0, "desc"]
            ],
            ajax: "{{ url('user-data') }}",
            columns: [{
                    data: 'firstname'
                },
                {
                    data: 'gender'
                },
                {
                    data: 'dob'
                },
                {
                    data: 'income'
                },
                {
                    data: 'family'
                },
                {
                    data: 'manglik'
                }
            ]
        });
    });
</script>

</html>