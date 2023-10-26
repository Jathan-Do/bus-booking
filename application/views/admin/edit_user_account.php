<div class="content-wrapper">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Edit User Account</h2>
        </div>
        <div class="card-body">
            <form class="database_operation_from" data-url="<?php echo base_url('admin/update_user/' . $users['id']); ?>">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo $users['name'] ?>" class="form-control" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo $users['email'] ?>" class="form-control" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" value="<?php echo $users['password'] ?>" class="form-control" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <button class="btn btn-info float-right">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>