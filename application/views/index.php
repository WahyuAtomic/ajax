<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<body>
    <table id="example1" class="display">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Message</th>
                <th>Age</th>
            </tr>
        </thead>
        </table>  
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function(){
                    $('#example1').dataTable();
                });
            </script>
</body>
</html>