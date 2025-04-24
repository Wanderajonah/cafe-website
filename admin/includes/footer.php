<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex flex-column align-items-center justify-content-center small">
            <div class="text-muted">Copyright &copy; Your g5cafe.com 2025</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<!-- Existing header content -->

<!-- Add Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Add jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const selects = document.querySelectorAll('.status-select');
    selects.forEach(select => {
        function updateColor() {
            switch (select.value) {
                case 'Shortlist':
                    select.style.backgroundColor = '#28a745'; // green
                    select.style.color = 'white';
                    select.nextElementSibling && (select.nextElementSibling.textContent = 'Shortlisted');
                    select.nextElementSibling && select.nextElementSibling.classList.remove('btn-primary');
                    select.nextElementSibling && select.nextElementSibling.classList.add('btn-success');
                    break;
                case 'appending':
                    select.style.backgroundColor = '#ffc107'; // yellow
                    select.style.color = 'black';
                    select.nextElementSibling && (select.nextElementSibling.textContent = 'Appending');
                    select.nextElementSibling && select.nextElementSibling.classList.remove('btn-primary');
                    select.nextElementSibling && select.nextElementSibling.classList.add('btn-warning');
                    break;
                case 'Rejected':
                    select.style.backgroundColor = '#dc3545'; // red
                    select.style.color = 'white';
                    select.nextElementSibling && (select.nextElementSibling.textContent = 'Rejected');
                    select.nextElementSibling && select.nextElementSibling.classList.remove('btn-primary');
                    select.nextElementSibling && select.nextElementSibling.classList.add('btn-danger');
                    break;
                default:
                    select.style.backgroundColor = '';
                    select.style.color = '';
                    select.nextElementSibling && (select.nextElementSibling.textContent = 'Update');
                    select.nextElementSibling && select.nextElementSibling.classList.remove('btn-success', 'btn-warning', 'btn-danger');
                    select.nextElementSibling && select.nextElementSibling.classList.add('btn-primary');
                    select.nextElementSibling && select.nextElementSibling.classList.add('btn-primary');
            }
        }
        select.addEventListener('change', updateColor);
        updateColor(); // initial call to set color if value preselected
    });
});
</script>
    </body>
</html>
