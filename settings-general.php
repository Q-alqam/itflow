<?php include("header.php"); ?>

<?php include("settings-nav.php"); ?>

<div class="card mb-3">
  <div class="card-header">
    <h6 class="float-left mt-1"><i class="fa fa-cog mr-2"></i>General Settings</h6>
  </div>
  <div class="card-body">
    <form class="p-3" action="post.php" method="post" autocomplete="off">
      <div class="form-group">
        <label>Starting Page</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-fw fa-plane-arrival"></i></span>
          </div>
          <select class="form-control selectpicker show-tick" name="config_start_page" required>
            <option <?php if($config_start_page == 'dashboard.php'){ echo 'selected'; } ?> value="dashboard.php">Dashboard</option>
            <option <?php if($config_start_page == 'clients.php'){ echo 'selected'; } ?> value="clients.php">Clients</option>
            <option <?php if($config_start_page == 'invoices.php'){ echo 'selected'; } ?> value="invoices.php">Invoices</option>
            <option <?php if($config_start_page == 'expenses.php'){ echo 'selected'; } ?> value="expenses.php">Expenses</option>
            <option <?php if($config_start_page == 'calendar_events.php'){ echo 'selected'; } ?> value="calendar_events.php">Calendar</option>
            <option <?php if($config_start_page == 'tickets.php'){ echo 'selected'; } ?> value="tickets.php">Tickets</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label>Account Threshold</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-fw fa-piggy-bank"></i></span>
          </div>
          <input type="text" class="form-control" name="config_account_balance_threshold" placeholder="Set an alert for dollar amount" value="<?php echo $config_account_balance_threshold; ?>" required>
        </div>
      </div>

      <div class="form-group mb-5">
        <label>API Key</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-fw fa-lock"></i></span>
          </div>
          <input type="text" class="form-control" name="config_api_key" placeholder="No spaces only numbers and letters" value="<?php echo $config_api_key; ?>">
        </div>
      </div>
      
      <hr>
      
      <button type="submit" name="edit_general_settings" class="btn btn-primary">Save</button>
        
    </form>
  </div>
</div>

<?php include("footer.php");