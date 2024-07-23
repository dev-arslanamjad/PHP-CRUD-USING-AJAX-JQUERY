<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>Student Management</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <style>
        .toleft{
            width: 41%;
	position: absolute;
	right: 18px;
	top: -68px;
        }
        .overflowww{
             overflow-x: hidden;
        }
        .btntwo{
            width: 50%;
            margin-left: 11px;
        }
    </style>
</head>

<body>

    <div class="container-xl">
        <div class="table-responsive overflowww">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="bg-light p-2 m-2">
                        <h3 class="text-dark text-center">Students Data Managaement</h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-primary toleft" data-toggle="modal"><span>Add New Student</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover" id="tablenew">
                    <thead class="bg-dark text-white ">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="employee_data">
                    </tbody>
                </table>
                <p class="loading">Loading Data</p>
            </div>
        </div>
    </div>
    <!-- add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Student</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body add_epmployee">
                    <div class="error_control"></div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" id="name_input" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email_input" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" id="address_input" required>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" id="phone_input" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Add" onclick="addEmployee()">
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Student</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body edit_employee">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" id="name_input" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email_input" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" id="address_input" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" id="phone_input" class="form-control" required>
                        <input type="hidden" id="employee_id" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" onclick="editEmployee()" value="Save">
                </div>
            </div>
        </div>
    </div>

    <!-- View Modal HTML -->
    <div id="viewEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">View Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body view_employee">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" id="name_input" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email_input" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" id="address_input" readonly></textarea>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" id="phone_input" class="form-control" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="delete_control"></div>    
            <div class="modal-header">
                    <h4 class="modal-title">Delete Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <input type="hidden" id="delete_id">
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" onclick="deleteEmployee()" value="Delete">
                </div>
            </div>
        </div>
    </div>

    <script>

    </script>
    <script>
        $(document).ready(function () {
            employeeList();

        });

        function employeeList() {
            $.ajax({
                type: 'get',
                url: "employee-list.php",
                success: function (data) {
                    var response = JSON.parse(data);
                    console.log(response);
                    var tr = '';
                    for (var i = 0; i < response.length; i++) {
                        var id = response[i].id;
                        var name = response[i].name;
                        var email = response[i].email;
                        var phone = response[i].phone;
                        var address = response[i].address;
                        tr += '<tr>';
                        tr += '<td>' + name + '</td>';
                        tr += '<td>' + email + '</td>';
                        tr += '<td>' + phone + '</td>';
                        tr += '<td>' + address + '</td>';
                        tr += '<td><div class="d-flex">';
                        tr +=
                            '<a href="#editEmployeeModal" class="btn btn-primary btntwo" data-toggle="modal" onclick=viewEmployee("' +
                            id +
                            '")><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>';
                        tr +=
                            '<a href="#deleteEmployeeModal" class="btn btn-danger btntwo" data-toggle="modal" onclick=$("#delete_id").val("' +
                            id +
                            '")><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>';
                        tr += '</div></td>';
                        tr += '</tr>';
                    }
                    $('.loading').hide();
                    $('#employee_data').html(tr);
                }
            });
        }

        function addEmployee() {
            var name = $('.add_epmployee #name_input').val();
            var email = $('.add_epmployee #email_input').val();
            var phone = $('.add_epmployee #phone_input').val();
            var address = $('.add_epmployee #address_input').val();

            if(name != '' & email != '' & phone != '' & address != ''){
                $.ajax({
                type: 'post',
                data: {
                    name: name,
                    email: email,
                    phone: phone,
                    address: address,
                },
                url: "employee-add.php",
                success: function (data) {
                    var response = JSON.parse(data);
                    $('#addEmployeeModal').modal('hide');
                    employeeList();
                    toastr["success"]("New Employee has been Added", "success", {setTimeout: 5000});
                }
                

            })
            }else{
                $(".error_control").append('<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Error!</strong> Fill all the  fields below.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            }
            $('.add_epmployee #name_input').val("")
                $('.add_epmployee #email_input').val("")
                $('.add_epmployee #phone_input').val("")
                $('.add_epmployee #address_input').val("")
        }

        function editEmployee() {
            var name = $('.edit_employee #name_input').val();
            var email = $('.edit_employee #email_input').val();
            var phone = $('.edit_employee #phone_input').val();
            var address = $('.edit_employee #address_input').val();
            var employee_id = $('.edit_employee #employee_id').val();

            $.ajax({
                type: 'post',
                data: {
                    name: name,
                    email: email,
                    phone: phone,
                    address: address,
                    employee_id: employee_id,
                },
                url: "employee-edit.php",
                success: function (data) {
                    var response = JSON.parse(data);
                    $('#editEmployeeModal').modal('hide');
                    employeeList();
                    toastr["info"]("Information Updated", "User Edited")

                    toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-bottom-center",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

                }

            })
        }

        function viewEmployee(id = 2) {
            $.ajax({
                type: 'get',
                data: {
                    id: id,
                },
                url: "employee-view.php",
                success: function (data) {
                    var response = JSON.parse(data);
                    $('.edit_employee #name_input').val(response.name);
                    $('.edit_employee #email_input').val(response.email);
                    $('.edit_employee #phone_input').val(response.phone);
                    $('.edit_employee #address_input').val(response.address);
                    $('.edit_employee #employee_id').val(response.id);
                    $('.view_employee #name_input').val(response.name);
                    $('.view_employee #email_input').val(response.email);
                    $('.view_employee #phone_input').val(response.phone);
                    $('.view_employee #address_input').val(response.address);
                }
            })
        }

        function deleteEmployee() {
            var id = $('#delete_id').val();
            $('#deleteEmployeeModal').modal('hide');
            $.ajax({
                type: 'get',
                data: {
                    id: id,
                },
                url: "employee-delete.php",
                success: function (data) {
                    var response = JSON.parse(data);
                    employeeList();
                    toastr["error"]("User Deleted", "Successfully")

toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-bottom-center",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
                }
            })
        }
    </script>
<script>
$(document).ready(function() {
    $('#tablenew').DataTable({
        "paging": true,         // Enable pagination
        "lengthChange": false,  // Disable length change
        "searching": true,      // Enable search box
        "ordering": true,       // Enable ordering
        "info": true,           // Enable info text
        "autoWidth": false      // Disable auto width calculation
    });
});
</script>
</body>

</html>