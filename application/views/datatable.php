
 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>


<script>
$(document).ready(function() {
    $('#example').DataTable();
} );


</script>


     <ul class="breadcrumb">
            <div class="container-fluid">
              <li class="breadcrumb-item"><a href="<?PHP echo base_url('index.php/admin/personel'); ?>">Admin</a></li>
              <li class="breadcrumb-item active">Personel</li>
            </div>
          </ul>
                  <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <a id="login" href="<?PHP echo base_url('index.php/admin/personel/frm_add'); ?>" class="btn btn-primary"><i class="icon-form"></i> Add</a>
                    </div>
                    <div class="card-body">
                        
                    





<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th></th>
            </tr>
        </thead>
<!--        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>-->
        <tbody>
                   <?PHP
                            $i=1;
                            $personel = $this->sql_model->select("SELECT * from couse");                                                  
                          if($personel){
                                foreach ($personel as $value) {
                            ?>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td><a href="" class="btn-primary">xxxxxx</a></td>
            </tr>
                          <?PHP } }?>
            
        </tbody>
    </table>
                        
                        
                        
                            
                    </div>
                  </div>
                      
                </div>
              </div>
            </div>
                  </section>