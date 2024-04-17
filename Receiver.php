<!DOCTYPE html>
<html>
<body>


    <div class="container">
        <h1>Recieved Data</h1>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Address</th>
                <th>Gender</th>
                <th>Incoming Grade Level</th>
                <th>Reason/s For Joining</th>
                <th>Instrument/s</th>
            </tr>
            <tr>
                <td><?php echo $_POST['fname'];?></td>
                <td><?php echo $_POST['lname'];?></td>
                <td><?php echo $_POST['email'];?></td>
                <td><?php echo $_POST['gender'];?></td>
                <td><?php echo $_POST['why1'];echo ", ";echo $_POST['why2'];echo ", ";echo $_POST['why3'];?></td>
                <td><?php echo $_POST['inst1'];echo ", ";echo $_POST['inst2'];echo ", ";echo $_POST['inst3'];echo ", ";echo $_POST['inst4'];echo ", ";echo $_POST['inst5'];echo ", ";echo $_POST['inst6'];echo ", ";?></td>
            </tr>
    </div>

</body>
</html>
