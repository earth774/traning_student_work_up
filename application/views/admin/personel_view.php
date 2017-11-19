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
                      <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                            <?PHP
                            $i=1;
                            $personel = $this->sql_model->select("SELECT
personel_info.personel_id,
personel_info.title_id,
personel_info.personel_gender,
personel_info.personel_fname_th,
personel_info.personel_fname_en,
personel_info.personel_lname_th,
personel_info.personel_lname_en,
personel_info.type_id,
personel_info.division_id,
personel_info.positionacademic_id,
personel_info.positionmanagement_id,
personel_info.room_id,
personel_info.personel_tel,
personel_info.pesonel_tel_in,
personel_info.personel_mail,
personel_info.personel_hompage,
personel_info.personel_pic,
personel_info.personel_record_status,
personel_info.personel_date,
personel_info.personel_last_user,
personel_info.personel_username,
personel_info.personel_workdate,
personel_info.personel_containdate,
personel_title.title_nameth
FROM
personel_info
Inner Join personel_title ON personel_title.title_id = personel_info.title_id

");                                                  
                          if($personel){
                                foreach ($personel as $value) {
                            ?>
                          <tr>
                            <th scope="row"><?PHP echo $i++; ?></th>
                            <td><?PHP echo $value->title_nameth.'   '.$value->personel_fname_th;?></td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><a href="<?PHP echo base_url('index.php/admin/personel/frm_edit/'.$value->personel_id); ?>" class="btn btn-success"><i class="icon-form"></i> edit</a> <a href="<?PHP echo base_url('index.php/admin/personel/delete/'.$value->personel_id); ?>" class="btn btn-danger"><i class="icon-form"></i> Del</a></td>
                          </tr>
                            <?PHP }} ?>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                  </section>