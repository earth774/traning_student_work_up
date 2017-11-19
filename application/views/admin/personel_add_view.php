        <script type="text/javascript">  
                  $(document).ready(function() {  
                     $("#part").change(function(){  
                     /*dropdown post *///  
                     $.ajax({  
                        url:"<?php echo base_url();?>index.php/admin/personel/part",  
                        data: {id:  
                           $(this).val()},  
                        type: "POST",  
                        success:function(data){  
                        $("#mejor_id").html(data);  
                     }  
                  });  
               });  
            });  
         </script>   


        <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Personel</h2>
            </div>
          </header>
             <ul class="breadcrumb">
            <div class="container-fluid">
              <li class="breadcrumb-item"><a href="<?PHP echo base_url('index.php/admin/personel'); ?>">Admin</a></li>
              <li class="breadcrumb-item active">Personel</li>
            </div>
          </ul>

 <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">All form elements</h3>
                    </div>
                    <div class="card-body">

                <form method="post" method="post" action="<?PHP echo base_url('index.php/admin/personel/save'); ?>">
                      <div class="form-group">
                          <label class="form-control-label">คำนำหน้าชื่อ</label>
                          <select class="form-control" name="title_id">
                          <?PHP
                            $title = $this->sql_model->select("SELECT * from personel_title");
                             foreach ($title as $value) {
                           ?>
                              <option value="<?PHP echo $value->title_id; ?>"><?PHP echo $value->title_nameth;  ?></option>
                          <?PHP } ?>

                               
                            </select>
                        </div>

                        <div class="form-group">
                          <label class="form-control-label">ชื่อ</label>
                          <input type="text" class="form-control" name="personel_fname_th">
                        </div>
                        <div class="form-group">       
                          <label class="form-control-label">นามสกุล</label>
                          <input type="text"  name="personel_lname_th" class="form-control">
                        </div>
                         <div class="form-group">       
                          <label class="form-control-label">ชื่อภาษาอังกฤษ</label>
                          <input type="text"  name="personel_fname_en" class="form-control">
                        </div>

                          <div class="form-group">
                          <label class="form-control-label">สาขา</label>
                          <select class="form-control" name="mejor_id">
                          <?PHP 
                            $mejor = $this->sql_model->select("SELECT * FROM mejor");
                           
                            if($mejor){
                                foreach ($mejor as $value) { 
                          ?>
     <option value="<?PHP echo $value->mejor_id;?>"><?PHP echo $value->major_name; ?></option>
                        

                        <?PHP } } ?>
                      
                            </select>
                               
                         
                        </div>



                        <div class="form-group">  
                            <input type="submit" value="Save" class="btn btn-primary">
                        </div>
                      </form>



               
   </div>
                    </div>
                    </div>