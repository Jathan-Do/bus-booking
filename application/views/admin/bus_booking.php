<div class="content-wrapper">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Manage FUTA Bus Booking <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-success btn-sm float-right">New</a></h2>
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#id</th>
                        <th>Name</th>
                        <th>Mobile Name</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Amount</th>
                        <th>Bus Number</th>
                        <th>Bus Ticket ID</th>
                        <th>Number Of Member</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($bookings as $key => $booking) { ///////////////////////////
                    ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $booking['name']; ?></td>
                            <td><?php echo $booking['mobile']; ?></td>
                            <td><?php
                                foreach ($locations as $location) {
                                    if ($location['id'] == $booking['start']) {
                                        echo $location["name"];
                                    }
                                } ?></td>
                            <td><?php
                                foreach ($locations as $location) {
                                    if ($location['id'] == $booking['end']) {
                                        echo $location["name"];
                                    }
                                } ?></td>
                            <td><?php echo $booking['amount'] * $booking['numberofmember']; ?></td>
                            <td><?php echo $booking['bus_number']; ?></td>
                            <td><?php echo $booking['bus']; ?></td>
                            <td><?php echo $booking['numberofmember']; ?></td>
                            <td>
                                <?php if ($booking['status'] == 0) {
                                    echo "Pending";
                                } else if ($booking['status'] == 1) {
                                    echo "Completed";
                                }
                                ?>
                            </td>
                            <td>
                                <a href="<?php echo base_url("admin/edit_booking/" . $booking['id']) ?>" class="btn btn-info btn-sm">Edit</a>
                                <a href="<?php echo base_url("admin/bus_booking_delete/" . $booking['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
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
                <h4 class="modal-title">Add New Booking</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="database_operation_from" data-url="<?php echo base_url('admin/bus_booking'); ?>">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" required class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="text" name="mobile" required class="form-control" placeholder="Enter Mobile Number">
                    </div>
                    <div class="form-group">
                        <label>Mobile Number Of Member</label>
                        <input type="text" name="numberofmember" required class="form-control" placeholder="Enter Number Of Member">
                    </div>
                    <div class="form-group">
                        <label>Bus</label>
                        <select name="bus" required class="form-control">
                            <option value="">Select Bus</option>
                            <?php
                            foreach ($schedules as $schedule) {
                            ?>
                                <option value="<?php echo $schedule['id'] ?>"><?php echo $schedule['bus_number'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success float-right">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>