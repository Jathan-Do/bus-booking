<div class="content-wrapper">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Manage Locations <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-success btn-sm float-right">New</a></h2>
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#id</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($locations as $key => $location) {
                    ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $location['name'] ?></td>
                            <td><input type="checkbox" data-url="<?php echo base_url("admin/location_status/" . $location['id']) ?>" id="location_<?php echo $location['id'] ?>" data-selector="location_<?php echo $location['id'] ?>" class="manage_status" <?php if ($location["status"] == 1) {
                                                                                                                                                                                                                                                                    echo "checked";
                                                                                                                                                                                                                                                                } ?> /> Active</td>
                            <td>
                                <a href="<?php echo base_url("admin/update_location/" . $location['id']) ?>" class="btn btn-info btn-sm">Edit</a> &nbsp;
                                <a href="<?php echo base_url("admin/delete_location/" . $location['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
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
                        <button class="btn btn-success float-right">Add Location</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>