<div class="content-wrapper">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Manage FUTA Bus Schedule <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-success btn-sm float-right">New</a></h2>
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#id</th>
                        <th>Bus Number</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($schedules as $key => $schedule) {
                    ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $schedule['bus_number'] ?></td>
                            <td><?php echo $schedule['start_location'] ?></td>
                            <td>
                                <?php $scheduleNew = $this->CM->select_data("bms_location", "name", array("id" => $schedule['end']));
                                echo $scheduleNew[0]['name'] ?>
                            </td>
                            <td><?php echo date("M-d, Y", strtotime($schedule['date'])) ?></td>
                            <td><?php echo $schedule['amount'] ?></td>
                            <td>
                                <a href="<?php echo base_url("admin/bus_schedule_edit/" . $schedule['id']) ?>" class="btn btn-info btn-sm">Edit</a> &nbsp;
                                <a href="<?php echo base_url("admin/bus_location_delete/" . $schedule['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
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
<div class=" modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Schedule</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="database_operation_from" data-url="<?php echo base_url('admin/bus_schedule'); ?>">
                    <div class="form-group">
                        <label>Bus Number</label>
                        <input type="text" name="bus_number" required class="form-control" placeholder="Enter Bus Number">
                    </div>
                    <div class="form-group">
                        <label>Start</label>
                        <select name="start" required class="form-control">
                            <option value="">Select Start</option>
                            <?php
                            foreach ($locations as $location) {
                            ?>
                                <option value="<?php echo $location['id'] ?>"><?php echo $location['name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>End</label>
                        <select name="end" required class="form-control">
                            <option value="">Select End</option>
                            <?php
                            foreach ($locations as $location) {
                            ?>
                                <option value="<?php echo $location['id'] ?>"><?php echo $location['name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="date" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Amount</label>
                        <input type="text" name="amount" required class="form-control" placeholder="Enter Amount">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success float-right">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>