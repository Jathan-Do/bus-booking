<div class="content-wrapper">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Edit FUTA Bus Schedule</h2>
        </div>
        <div class="card-body">
            <form class="database_operation_from" data-url="<?php echo base_url('admin/bus_schedule_edit/' . $schedule['id']); ?>">
                <div class="form-group">
                    <label>Bus Number</label>
                    <input type="text" value="<?php echo $schedule['bus_number'] ?>" name="bus_number" required class="form-control" placeholder="Enter Bus Number">
                </div>
                <div class="form-group">
                    <label>Start</label>
                    <select name="start" required class="form-control">
                        <option>Select Start</option>
                        <?php
                        foreach ($locations as $location) {
                        ?>
                            <option <?php if ($schedule['start'] == $location['id']) {
                                        echo "selected";
                                    } ?> value="<?php echo $location['id'] ?>"><?php echo $location['name'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>End</label>
                    <select name="end" required class="form-control">
                        <option>Select End</option>
                        <?php
                        foreach ($locations as $location) {
                        ?>
                            <option <?php if ($schedule['end'] == $location['id']) {
                                        echo "selected";
                                    } ?> value="<?php echo $location['id'] ?>"><?php echo $location['name'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" name="date" value="<?php echo $schedule['date'] ?>" required class="form-control" />
                </div>
                <div class="form-group">
                    <label>Amount</label>
                    <input type="text" name="amount" value="<?php echo $schedule['amount'] ?> " required class="form-control" placeholder="Enter Amount" />
                </div>
                <div class="form-group">
                    <button class="btn btn-info float-right">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>