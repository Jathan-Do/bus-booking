<div class="content-wrapper">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Manage User <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-success btn-sm float-right">New</a></h2>
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($users as $key => $user) {
                    ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $user['name'] ?></td>
                            <td><?php echo $user['email'] ?></td>
                            <td><?php echo $user['password'] ?></td>
                            <td><input type="checkbox" data-url="<?php echo base_url("admin/user_status/" . $user['id']) ?>" id="location_<?php echo $user['id'] ?>" data-selector="location_<?php echo $user['id'] ?>" class="manage_status" <?php if ($user["status"] == 1) {
                                                                                                                                                                                                                                                    echo "checked";
                                                                                                                                                                                                                                                } ?> /> Active</td>
                            <td>
                                <a href="<?php echo base_url("admin/update_user/" . $user['id']) ?>" class="btn btn-info btn-sm">Edit</a> &nbsp;
                                <a href="<?php echo base_url("admin/delete_user/" . $user['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
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
                <h4 class="modal-title">Add New User</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="database_operation_from" data-url="<?php echo base_url('admin/user_account/insert'); ?>">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" required class="form-control" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" required class="form-control" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" required class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success float-right">Add User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>