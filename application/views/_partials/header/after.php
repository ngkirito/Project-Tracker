<div class="btn-group" style="height: 40px; width: 200px">
    <button type="button" class="btn btn-danger" style="font-size: 70%;"><?php echo $user_name; ?></button>
    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo base_url() . 'index.php/main/logout' ?>">Logout</a>
        <?php if ($this->session->userdata('access_type') == 0): ?>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModalx">Add Module/Git Repo</a>
      <?php endif ?>
    </div>
</div>
