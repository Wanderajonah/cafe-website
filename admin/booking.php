<?php include 'includes/header.php'; ?>
<!-- <h1>This is a bookings page</h1> -->
<?php
$connection = mysqli_connect("localhost", "root", "", "test");
$total_bookings = 0;
if ($connection) {
    $count_query = "SELECT COUNT(*) as total FROM bookings";
    $count_result = mysqli_query($connection, $count_query);
    if ($count_result) {
        $row_count = mysqli_fetch_assoc($count_result);
        $total_bookings = $row_count['total'];
    }
}
?>
<h1>Bookings</h1>
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Total Bookings: <?php echo $total_bookings; ?></div>
        </div>
    </div>
      
</div>
<!-- Booking Table -->
<div class="card-body">
    <h4>Bookings table</h4>
    <div class="table-responsive">
        <?php
        $query = "SELECT * FROM bookings";
        $query_run = mysqli_query($connection, $query);
        ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CLIENT NAME</th>
                    <th>ORGANISATION NAME</th>
                    <th>BOOKING TYPE</th>
                    <th>DATE</th>
                    <th>TIME</th>
                    <th>NO. OF PARTICIPANTS</th>
                    <th>SPECIAL REQUIREMENTS</th>
                    <th>STATUS</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($query_run) > 0) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['client_name']; ?></td>
                            <td><?php echo $row['org_name']; ?></td>
                            <td><?php echo $row['booking_type']; ?></td>
                            <td><?php echo $row['preferred_date']; ?></td>
                            <td><?php echo $row['preferred_time']; ?></td>
                            <td><?php echo $row['participants']; ?></td>
                            <td><?php echo $row['special_requirements']; ?></td>
                            <td>
                    <select name="status" class="form-select form-select-sm me-2 status-select" required>
                        <option value="" disabled selected>Select status</option>
                        <option value="Shortlist">Approved</option>
                        <option value="appending">appending</option>
                        <option value="Rejected">Rejected</option>
                    </select>
                </td>

                            <td>
<form action="book.php" method="post">
    <button type="submit" name="deletebtn" class="btn btn-danger">DELETE</button>
    <input type="hidden" name="delete_id" value="<?php echo $row ['id']; ?>">
</form>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "No Record Found";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

</div>
