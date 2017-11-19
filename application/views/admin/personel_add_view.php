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

                   

              


                     
                      <form method="post" action="<?PHP echo base_url('index.php/admin/personel/save'); ?>">


                        <label class="custom-file">
        <input type="file" id="file" class="custom-file-input">
        <span class="custom-file-control"></span>
      </label>

                      

                                <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Password</label>
                          <div class="col-sm-9">
                            <input type="password" name="password" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Placeholder</label>
                          <div class="col-sm-9">
                            <input type="text" placeholder="placeholder" class="form-control">
                          </div>
                        </div>

                      <div class="form-group">
                          <label class="form-control-label">สาขา</label>
                          <select class="form-control" id="part">
                          <?PHP 
                            $personel = $this->sql_model->select("SELECT * FROM part");
                           
                            if($personel){
                                foreach ($personel as $value) { 
                          ?>
                              <option value="<?PHP echo $value->part_id;?>"><?PHP echo $value->part_name; ?></option>
                        

                        <?PHP } } ?>
                      
                            </select>

                             <select name="mejor_id" id="mejor_id" class="form-control">  
                             <option value="">Select</option>  
                          </select>   
                          
                        </div>

                        <div class="row">
  <div class="col-xs-6">.col-xs-6</div>
  <div class="col-xs-6">.col-xs-6</div>
</div>

                        <div class="rows">
                       <div class="col-sm-4">

                        <div class="form-group">
                          <label class="form-control-label">ชื่อ</label>
                          <input type="text" placeholder="fname" class="form-control" name="personel_fname_th">
                          </div>
                      
                          </div>
                 
                           <div class="col-sm-4">



                        
                        <div class="form-group">       
                          <label class="form-control-label">นามสกุล</label>
                          <input type="text" placeholder="lname" name="personel_lname_th" class="form-control">
                        </div>
                      </div>
                      </div>


                        <div class="form-group">       
                          <input type="submit" value="Save" class="btn btn-primary">
                        </div>
                      </form>




               
   </div>
                    </div>
                    </div>