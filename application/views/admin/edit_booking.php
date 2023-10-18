<div class="content-wrapper">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Edit FUTA Bus Booking</h2>
        </div>
        <div class="card-body">
            <form class="database_operation_from" data-url="<?php echo base_url('admin/edit_booking/' . $booking['id']); ?>">
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option <?php if ($booking['status'] == 0) {
                                    echo "selected";
                                } ?> value="0">Pending</option>
                        <option <?php if ($booking['status'] == 1) {
                                    echo "selected";
                                } ?> value="1">Completed</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo $booking['name'] ?>" required class="form-control" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="text" name="mobile" value="<?php echo $booking['mobile'] ?>" required class="form-control" placeholder="Enter Mobile Number">
                </div>
                <div class="form-group">
                    <label>Mobile Number Of Member</label>
                    <input type="text" name="numberofmember" value="<?php echo $booking['numberofmember'] ?>" required class="form-control" placeholder="Enter Number Of Member">
                </div>
                <div class="form-group">
                    <label>Bus</label>
                    <select name="bus" required class="form-control">
                        <option value="">Select Bus</option>
                        <?php
                        foreach ($schedules as $schedule) {
                        ?>
                            <option value="<?php if ($booking['bus'] == $schedule['id']) {
                                                echo "selected";
                                            }
                                            echo $schedule['id'] ?>"><?php echo $schedule['bus_number'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-info float-right">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>