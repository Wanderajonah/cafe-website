<?php include 'includes/header.php'; ?>
<!-- <h1>This is a job listing page</h1> -->
<div class="container py-4">
    <h2 class="mb-4 text-center text-primary">Job Listings</h2>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-dark">Manager</h5>
                    <p class="card-text text-muted">Department: Administration | Posted: April 10, 2025</p>
                    <a href="manager.php" class="btn btn-primary btn-sm">View Applicants</a>
                    <h5>Total Applicants:</h5>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-dark">Human Resource</h5>
                    <p class="card-text text-muted">Department: Marketing | Posted: April 12, 2025</p>
                    <a href="hr.php" class="btn btn-primary btn-sm">View Applicants</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-dark">System Administrator</h5>
                    <p class="card-text text-muted">Department: IT | Location: On-site | Posted: April 14, 2025</p>
                    <a href="sa.php" class="btn btn-primary btn-sm">View Applicants</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-dark">Lab Technician</h5>
                    <p class="card-text text-muted">Department: IT | Posted: April 14, 2025</p>
                    <a href="lab.php" class="btn btn-primary btn-sm">View Applicants</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               All Applicants
                            </div>
                            <div class="table-responsive">
            <?php
    $connection = mysqli_connect("localhost", "root", "", "test");

    $query = "SELECT * FROM applicants";
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

                        




