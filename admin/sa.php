<?php include('includes/header.php'); ?>

<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                System Administrator Applicants
                            </div>
                            <div class="table-responsive">
            <?php
    $connection = mysqli_connect("localhost", "root", "", "test");

    $query = "SELECT * FROM applicants where job = 'system administrator'";
    $query_run = mysqli_query($connection, $query);
    ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>FIRSTNAME</th>
                                <th>LASTNAME</th>
                                <th>EMAIL</th>
                                <th>Social</th>
                                <th>JOB</th>
                                <th>CITY</th>
                                <th>PHONE</th>
                                <th>FILE</th>
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
                <td><?php echo $row['firstName']; ?></td>
                <td><?php echo $row['lastName']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['social']; ?></td>
                <td><?php echo $row['job']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><a href="download_file.php?id=<?php echo $row['id']; ?>" target="_blank"><?php echo $row['file']; ?></a></td>
                <td>
                    <select name="status" class="form-select form-select-sm me-2 status-select" required>
                        <option value="" disabled selected>Select status</option>
                        <option value="Shortlist">Shortlist</option>
                        <option value="appending">appending</option>
                        <option value="Rejected">Rejected</option>
                    </select>
                </td>
                <td>
                    <form action="applys.php" method="post">
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
    </div>
</div>
<?php include('includes/footer.php'); ?>