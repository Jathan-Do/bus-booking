<div class="content-wrapper">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Manage Locations <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-sm float-right">Add New</a></h2>
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ujjain</td>
                        <td><input type="checkbox"> Active</td>
                        <td><a href="" class="btn btn-danger btn-sm">Delete</a> &nbsp; <a href="" class="btn btn-info btn-sm">Update</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Indore</td>
                        <td><input type="checkbox"> Active</td>
                        <td><a href="" class="btn btn-danger btn-sm">Delete</a> &nbsp; <a href="" class="btn btn-info btn-sm">Update</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Location</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="database_operation_from" data-url="<?php echo base_url('admin/locations/insert'); ?>">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" required class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info float-right">Add Location</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>