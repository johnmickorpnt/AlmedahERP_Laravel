<nav class="navbar navbar-expand-lg navbar-light bg-light" style="justify-content: space-between;">
    <div class="container-fluid">
        <h2 class="navbar-brand" style="font-size: 35px;">Team Members</h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown li-bom">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        More
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Edit</a></li>
                        <li><a class="dropdown-item" href="#">Delete</a></li>
                    </ul>
                </li>
                <li class="nav-item li-bom">
                    <button class="btn btn-refresh" style="background-color: #d9dbdb;" type="submit"
                        onclick="">Refresh</button>
                </li>
                <li class="nav-item li-bom">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newTracePrompt">
                        New
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>
<table id="employeeTable" class="table table-striped table-bordered hover" style="width:100%">
    <thead>
        <tr>
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Position</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td class="text-bold">EMP001</td>
            <td>Juan Dela Cruz</td>
            <td class="text-bold">Supervisor</td>
            <td>juandelacruz@gmail.com</td>
            <td>Role1</td>
        </tr>
        <tr>
            <td class="text-bold">MNGR001</td>
            <td>John Doe</td>
            <td class="text-bold">Manager</td>
            <td>johndoe@gmail.com</td>
            <td>Role2</td>
        </tr>
    </tbody>
</table>


<script>
    $(document).ready(function () {
        x = $('#employeeTable').DataTable();
        z = $('#itemListViewTableST').DataTable();
    });
</script>

<!-- Modal New Record-->
<div class="modal fade" id="newTracePrompt" tabindex="-1" role="dialog" aria-labelledby="newTracePromptTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add new team member</h5>
                <div class="d-flex flex-row-reverse">
                    <button type="submit" class="btn btn-primary m-1" data-target="#newTracePrompt" id="saveTrace1">
                        <a class="" href="#" style="text-decoration: none;color:white">
                            Save
                        </a>
                    </button>
                    <button type="button" class="btn btn-secondary m-1" data-dismiss="modal"
                        data-target="#newTracePrompt" id="closeTracePrompt">
                        Close
                    </button>
                </div>
            </div>
            <div class="modal-body p-5">
                <?php include 'newMemberForm.php' ?>
            </div>
            <div class="modal-footer d-flex">
                <span id="notif" class="mr-auto text-danger">There are Missing inputs!</span>
            </div>
        </div>
    </div>
</div>

<!-- Modal ItemList -->
<div class="modal fade" id="itemListTrace" tabindex="-1" role="dialog" aria-labelledby="itemListTrace"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Item List</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="itemListViewTableST" class="table table-striped table-bordered hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Quantity Borrowed</th>
                            <th>Quantity Returned</th>
                            <th>Date Borrowed</th>
                            <th>Date Returned</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-bold">Pliers</td>
                            <td>2</td>
                            <td>2</td>
                            <td>8/16/2021 8:51:32AM</td>
                            <td>8/17/2021 8:55:52AM</td>
                        </tr>
                        <tr>
                            <td class="text-bold">Hammer</td>
                            <td>3</td>
                            <td>3</td>
                            <td>8/16/2021 8:51:32AM</td>
                            <td>8/17/2021 8:55:52AM</td>
                        </tr>
                        <tr>
                            <td class="text-bold">Screwdriver</td>
                            <td>2</td>
                            <td>2</td>
                            <td>8/16/2021 8:51:32AM</td>
                            <td>8/17/2021 8:55:52AM</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal EditList -->
<div class="modal fade" id="TraceEdit" tabindex="-1" role="dialog" aria-labelledby="TraceEdit" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">New Record</h5>
                <div class="d-flex flex-row-reverse">
                    <button type="submit" class="btn btn-primary m-1" data-target="#newSalePrompt" id="saveSaleOrder1">
                        <a class="" href="#" style="text-decoration: none;color:white">
                            Save
                        </a>
                    </button>
                    <button type="button" class="btn btn-secondary m-1" data-dismiss="modal"
                        data-target="#newSalePrompt" id="closeSaleOrderModal">
                        Close
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <table id="itemListViewTableST" class="table table-striped table-bordered hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Quantity Borrowed</th>
                            <th>Quantity Returned</th>
                            <th>Date Returned</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-bold">Pliers</td>
                            <td>2</td>
                            <td><input type="number" class="form-input form-control" min="0" max="2"
                                    id="returnQuantity1"></td>
                            <td><input type="datatime" class="form-input form-control" id="timeReturned"></td>
                        </tr>
                        <tr>
                            <td class="text-bold">Hammer</td>
                            <td>3</td>
                            <td><input type="number" class="form-input form-control" min="0" max="3"
                                    id="returnQuantity1"></td>
                            <td><input type="datatime" class="form-input form-control" id="timeReturned"></td>
                        </tr>
                        <tr>
                            <td class="text-bold">Screwdriver</td>
                            <td>2</td>
                            <td><input type="number" class="form-input form-control" min="0" max="2"
                                    id="returnQuantity1"></td>
                            <td><input type="datetime" class="form-input form-control" id="timeReturned"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>