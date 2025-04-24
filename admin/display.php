<?php include 'includes/header.php'; ?>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
    <div class="card-body">
        <table id="datatablesSimple" class="table table-bordered">
            <thead>
                <tr>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                require 'connect.php';     
                require 'includes/header.php';
$query = mysqli_query($con, "SELECT * FROM register"); // Replace 'your_table_name' with your actual table name
if(mysqli_num_rows($query) > 0){

    echo "<table border='1'> ";
        echo "<tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Action</th>
        </tr>";
    
    //fetch rows using while loop
    while($udetails = mysqli_fetch_assoc($query)){
    echo "<tr>";
    echo "<td>".$udetails['fname']."</td>";
    echo "<td>".$udetails['lname']."</td>";
    echo "<td>".$udetails['age']."</td>";
    echo "<td>".$udetails['email']."</td>";
    echo "</td>";
    echo "</tr>";
    }
    echo "</table>";
    }else{ 
    echo "no records found";
    }
    
    //close connection
    mysqli_close($con);
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php include 'includes/footer.php'; ?>