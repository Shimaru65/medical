<html>
    <head>   
      <meta charset="windows-874">
    </head>
    <body>
        <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>��Ǣ�͵�Ǩ�ä</strong>
                      </div>
                      <div class="card-body card-block">
                          <form action="<?php echo"add_disease_detail_code.php?disease_id=$_GET[disease_id]"?>" method="POST"  enctype='multipart/form-data' class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-12">
                              <div class="input-group">
                                  <input type="text" id="detail_name" name="detail_name" placeholder="��Ǣ�͵�Ǩ�ä"  class="form-control">
                                <div class="input-group-btn"><button class="btn btn-primary">�׹�ѹ</button></div>
                              </div>
                            </div>
                          </div>                        
                        </form>
                      </div>                  
                    </div>
                  </div>
        
                  <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                  
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><?php echo" $_GET[disease_list_name] "?></strong>
                        </div>       
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th width="5%">�ѹ�Ѻ</th>
                        <th width="80%">������</th>   
                        <th>ź</th> 
                        </tr>
                    </thead> 
                    <tbody>
                      <?php
                      include 'connect/dbconnect.php';
                      $showdetail = "select * from disease_detail where disease_id = $_GET[disease_id]";
                      $result = mssql_query($showdetail);
                      $i = 0;
                      while ($record = mssql_fetch_array($result)){
                          
                      ?>
                        <tr>
                            <td><?php echo ++$i;?></td>
                            <td>
                                <?php
                                echo" $record[detail_name]";
                                ?>
                            </td> 
                            <td><?php echo"<a href=delete_disease_detail_code.php?detail_id=$record[detail_id]&disease_id=$_GET[disease_id]>ź"?></a></td>
                        </tr>
                        <?php
                      }
                      ?>
                    </tbody>
                  </table>
                        </div></div></div></div></div></div>
    </body>
</html>