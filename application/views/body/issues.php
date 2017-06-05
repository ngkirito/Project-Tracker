<?php
$navbar = array(
         'page_title' => $page_title,
         'user_name' => $this->session->userdata('firstname')
         );
$this->load->view('_partials/navbar', $navbar);
?>
<?php echo PHP_EOL;?>
<div class="row" style="height:100%;">
    <div class="col-md-9 push-md-3 colTrackTwo">
        <div class="tabIssue" id="tabIssue">
            <!--Tab Title -->
            <!-- Tab panels -->
            <div class="tab-content">
                <!--Panel 1-->
                <div class="tab-pane fade in show active" id="panel5" role="tabpanel" style="margin-top: -12px; margin-right: 12px; padding: 10px">
                    <br>
                    <?php if($this->session->userdata('access_type') == 0): ?>
                    <select name="filter1" class="filter">
                      <option value="" disabled selected style="display: none;">Filter By</option>
                      <option id="filter" value="DONE">DONE</option>
                      <option id="filter1" value="PENDING">PENDING</option>
                    </select>
                    <br><br>
                    <?php endif ?>

                    <div class="tbl-header">
                      <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                          <tr>
                            <th>Issue Title</th>
                            <th>Created By</th>
<<<<<<< HEAD
                            <th>Assigned To</th>
=======
<<<<<<< HEAD
                            <th>Assigned To</th>
                            <th>Git Repo</th>
                            <th>Date Created</th>
                            <th colspan="3" style="text-align: center;">Actions</th>
=======
>>>>>>> b59526cff2c9ac817b88ef723a4fcec7c53e2eda
                            <th>Git Repo</th>
                            <th>Platform</th>
                            <th>Module</th>
                            <th>Date Created</th>
<<<<<<< HEAD
                            <th colspan="3" style="text-align: center;">Actions</th>
=======
                            <th colspan="2" style="text-align: center;">Actions</th>
>>>>>>> 3b90e1a1a186eace6e864ea12a93ab1bb23871df
>>>>>>> b59526cff2c9ac817b88ef723a4fcec7c53e2eda
                          </tr>
                        </thead>
                      </table>
                    </div>
                    <div class="tbl-content" id="contents">
                      <table cellpadding="0" cellspacing="0" border="0">
                        <tbody id="tbody">
                          <?php if ($userdata['results']): ?>
                              <?php foreach ($userdata['results'] as $data): ?>
                                 <?php
                                 $hasCommon = FALSE;
                                 $temp = explode(" ", $this->session->userdata('cart'));
                                 foreach ($temp as $key => $value)
                                 {
                                     # code...
                                     if($data['id'] == $value)
                                     {
                                          $hasCommon = TRUE;
                                          break;
                                     }
                                 }
                                 if(!$hasCommon)
                                 {
                                  $this->load->view('_partials/issue_cardview', $data);
                                 }

                                 ?>
                             <?php endforeach ?>
                          <?php endif ?>
                        </tbody>
                      </table>
                    </div>

                       <!-- Panel trello -->
                        <!-- <div class="card text-center">
                            <div class="card-header default-color-dark white-text" style="background-color: #1CB2CB !important;">
                                <h1>Issues</h1>
                            </div>
                            <div class="card-block">
                                <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                    <?php if ($userdata['results']): ?>
                                        <?php foreach ($userdata['results'] as $data): ?>
                                           <?php
                                           $hasCommon = FALSE;
                                           $temp = explode(" ", $this->session->userdata('cart'));
                                           foreach ($temp as $key => $value)
                                           {
                                               # code...
                                               if($data['id'] == $value)
                                               {
                                                    $hasCommon = TRUE;
                                                    break;
                                               }
                                           }
                                           if(!$hasCommon)
                                           {
                                            $this->load->view('_partials/issue_cardview', $data);
                                           }

                                           ?>
                                       <?php endforeach ?>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="card-footer text-muted default-color-dark white-text" style="background-color: #1CB2CB !important;">
                                    <?php echo $userdata['links']; ?>
                            </div>
                        </div> -->
              <!-- end of panel trello -->
                </div>
            </div>
        </div>
    </div> <!-- end colTrackTwo -->
   <?php
    echo PHP_EOL;
    $arr = array();
    $arr['sidebar'] = data_builder($this->session->userdata('access_type'));
    $this->load->view('_partials/sidebar', $arr);
    echo PHP_EOL;
    ?>
</div> <!-- end of row -->
