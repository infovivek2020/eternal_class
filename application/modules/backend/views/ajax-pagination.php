 <?php if(!empty($student_list)): 
                                foreach($student_list as $key=>$value):
                                ?>
                              <tr id="post-list">
                                 <td><?php echo $value->name; ?></td>
                                
                                 <td><?php echo $value->email; ?></td>
                              
                                 <td><?php echo $value->mobile; ?></td>
                                 <td><?php if($value->status==1) 
                                 echo 'Not Verified.';
                                 else if($value->status==2){
                                   echo 'Active';
                                 }else if($value->status==3){
                                  echo 'Not Approved.';
                                 }else if($value->status==5){
                                  echo 'Blocked.';
                                 }else{
                                  echo 'Forgot Password';
                                 }


                                        ?></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>  
                              <?php 
                            endforeach;
                            ?> 
                            <?php else: ?>
                            <tr><td colspan="7" align="center">No Record Found.</td></tr>
                            <?php
                            endif; ?>  
                            <?php echo $this->ajax_pagination->create_links(); ?>          