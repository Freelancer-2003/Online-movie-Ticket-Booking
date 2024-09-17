<?php
//db connection
$con = mysqli_connect('localhost','root',);
mysqli_select_db($con,invoicedb);
?>
<html>
    <head>
        <title>Invoice generator</title>
</head>
<body>
    select invoice:
    <form method='get' action='invoicedb.php'>
        <select name='invoiceID'>
            <?php
            //show invoices list as options
            $query = mysqli_query($con,"select * from invoice");
            while($invoice = mysqli_fetch_array($query)){
                echo "<option value="
            }
</html>