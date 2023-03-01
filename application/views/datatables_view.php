<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <table id="table" class="display" style="width:100%">
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "<?php echo base_url('datatables/datatables'); ?>"
            });
        });
    </script>
</body>
</html>
