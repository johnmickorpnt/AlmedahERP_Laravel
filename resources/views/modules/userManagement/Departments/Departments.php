<nav class="navbar navbar-expand-lg navbar-light bg-light" style="justify-content: space-between;">
    <div class="container-fluid">
        <h2 class="navbar-brand" style="font-size: 35px;">Departments</h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item li-bom">
                    <button class="btn btn-refresh" style="background-color: #d9dbdb;" type="submit"
                        onclick="">Refresh</button>
                </li>
                <li class="nav-item li-bom">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newDeptPrompt">
                        New
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>
<table id="departmentsTable" class="table table-striped table-bordered hover" style="width:100%">
    <thead>
        <tr>
            <th>Department ID</th>
            <th>Department Name</th>
            <th>Department Head</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td class="text-bold"><a href="#editDeptPrompt" data-toggle="modal"
                    data-target="#editDeptPrompt">DEPT-001</a></td>
            <td>Department 1</td>
            <td>Juan Dela Cruz</td>
        </tr>
        <tr>
            <td class="text-bold"><a href="#editDeptPrompt" data-toggle="modal"
                    data-target="#editDeptPrompt">DEPT-002</a></td>
            <td>Department 2</td>
            <td>John Doe</td>
        </tr>
    </tbody>
</table>


<script>
    $(document).ready(function () {
        x = $('#departmentsTable').DataTable();
    });
</script>

<!-- Modal New Record-->
<div class="modal fade" id="newDeptPrompt" tabindex="-1" role="dialog" aria-labelledby="newDeptPromptTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create a Department</h5>

            </div>
            <div class="modal-body">
                <?php include 'newDepartment.php' ?>
            </div>
            <div class="modal-footer d-flex">
                <div class="d-flex flex-row-reverse">
                    <button type="submit" class="btn btn-primary m-1" data-target="#newDeptPrompt" id="saveTrace1">
                        <a class="" href="#" style="text-decoration: none;color:white">
                            Save
                        </a>
                    </button>
                    <button type="button" class="btn btn-secondary m-1" data-dismiss="modal"
                        data-target="#newDeptPrompt" id="closeEmpTypePrompt">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Record-->
<div class="modal fade" id="editDeptPrompt" tabindex="-1" role="dialog" aria-labelledby="editDeptPromptTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Department</h5>

            </div>
            <div class="modal-body">
                <?php include 'editDepartment.php' ?>
            </div>
            <div class="modal-footer d-flex">
                <div class="d-flex flex-row-reverse">
                    <button type="submit" class="btn btn-primary m-1" data-target="#editDeptPrompt" id="saveTrace1">
                        <a class="" href="#" style="text-decoration: none;color:white">
                            Save
                        </a>
                    </button>
                    <button type="button" class="btn btn-danger m-1" data-dismiss="modal" data-target="#editDeptPrompt"
                        id="closeDeptPrompt">
                        Delete <span class="fas fa-trash"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>