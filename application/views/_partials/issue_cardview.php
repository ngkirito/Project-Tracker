<tr>
<<<<<<< HEAD
  <td style="color: <?php echo $priority_color;?> ;"><?php echo $issue_title; ?></td>
  <td><?php echo $this->themodeloftruth->create($created_by); ?></td>
  <td>
    <?php
      if ($assigned_to == null) {
        echo "unassigned";
      }
      else{
        echo $this->themodeloftruth->dev($assigned_to);
      }
    ?>
  </td>
  <td><?php echo $this->themodeloftruth->git($git_repo_id); ?></td>
  <td><?php echo $this->themodeloftruth->module($modules_tbl_id); ?></td>
  <td><?php echo $this->themodeloftruth->platform($platform_type_id); ?></td>
  <td><?php echo $date_created; ?></td>
  <td colspan="3" style="text-align: center;">
  <?php if ($this->session->userdata('access_type') != 0) { echo '<a class="btn btn-primary btn-sm claim" href="'.base_url().'index.php/listofissue'.'" data-raw="' . $id . '"><span class="glyphicon glyphicon-plus-sign claim"></span>&nbsp;Current</a>'; } ?>
    <a class="btn btn-info btn-sm details" data-toggle="modal" data-target="#myModalDetails" data-raw="<?php echo $id; ?>"><span class="glyphicon glyphicon-th-list"></span>&nbsp;Details</a>
    <a class="btn btn-warning btn-sm history" data-toggle="modal" data-target="#myModalDetails" data-raw="<?php echo $track_issue_id ?>" <?php if ($track_issue_id == null) {echo 'style="opacity: 0.65; cursor: not-allowed;"';} ?>><span class="glyphicon glyphicon-record"></span>&nbsp;History</a>
  </td>
=======
  <td><?php echo $issue_title; ?></td>
<<<<<<< HEAD
  <td><?php echo $this->themodeloftruth->create($created_by); ?></td>
  <td><?php if($assigned_to == null) {echo 'unassigned';} else {echo $this->themodeloftruth->dev($assigned_to);} ?></td>
  <td><?php echo $this->themodeloftruth->git($git_repo_id); ?></td>
  <td><?php echo $date_created; ?></td>
  <td colspan="3" style="text-align: center;">

  		<a href="#" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-list-alt"></span> Current
        </a>
        <a href="#" class="btn btn-primary btn-sm">
          <span class="glyphicon glyphicon-list-alt"></span> Details
        </a>
        <a href="#" class="btn btn-info btn-sm"<?php if ($track_issue_id == null) {echo 'style="opacity: 0.50; cursor: not-allowed;"';} ?>>
        <span class="glyphicon glyphicon-list-alt"></span> History
       	</a>

    	
  </td>
=======
  <td><?php echo $created_by; ?></td>
  <td><?php echo $git_repo_id; ?></td>
  <td><?php echo $date_created; ?></td>
  <td colspan="2" style="text-align: center;">Sample</td>
>>>>>>> 3b90e1a1a186eace6e864ea12a93ab1bb23871df
>>>>>>> b59526cff2c9ac817b88ef723a4fcec7c53e2eda
</tr>
