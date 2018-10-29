     <?php $this->load->view('includes/header'); ?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
             <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Student Listing
                          </header>
                          <input type="text" name="searchfield" id="searchfield" placeholder="Search your string" onkeypress="searchFilter();">
                          <select name="sortby" id="sortby" onchange="searchFilter()">
                            <option value="ASC">Accending Order.</option>
                            <option value="DESC">Decending Order.</option>
                          </select>
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Full Name</th>
                                 <th><i class="icon_mail_alt"></i> Email</th>
                                 <th><i class="icon_mobile"></i> Mobile</th>
                                 <th><i class="icon_mobile"></i>Status</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                              <?php //print_r($student_list); ?>
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
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->

  </section>
  <!-- container section start -->
  <?php $this->load->view('includes/footer'); ?>
<script type="text/javascript">
  function searchFilter(page_num) {
    page_num = page_num?page_num:0
    var search=$("#searchfield").val();
    var sort=$("#sortby").val();-
    if(search!="" || sort!=""){
      $.ajax({
        url:"<?php echo PATHBASE; ?>ecadmin/student_ctrl/ajaxpagination/"+page_num,
        type:"POST",
        data:"page="+page_num+"&keywords="+search+"&sorting="+sort,
        beforeSend:function() {
          $(".loading").show();
        },
        success:function(s){
          $(".loading").fadeOut('slow');
          $("#post-list").html(s);
        },
      });
    }
  }
</script>