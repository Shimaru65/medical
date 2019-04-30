<html>
    <head>   
        <meta charset="windows-874">
    </head>
    <?php include 'connect/dbconnect.php'; ?>
    <body>
        <?php
  
        ?>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">                           
                            <div class="card-header">
                                <?php 
                              $show2 = "SELECT dbo.disease_list.disease_list_name, dbo.check_result.year, dbo.check_result.id_employee, dbo.disease_list.disease_id
FROM            dbo.check_result INNER JOIN
                         dbo.disease_list ON dbo.check_result.disease_id = dbo.disease_list.disease_id
WHERE        (dbo.check_result.id_employee = ".$_GET[id_employee]." and check_result.disease_id=".$_GET[disease_id].")";
                                $result2 = mssql_query($show2);
                          
                                while ($record2 = mssql_fetch_array($result2)) {
                                    
                                   
                                ?>
                                <table border="1">
                                    <tr>
                                        <td>
                                            <?php
                                            
                                             echo $record2[disease_list_name]."Ле".$record2[year];
                                            ?>
                                            
                                            
                                        </td>
                                         <td>
                                           
                                            
                                        </td>
                                        
                                    </tr>
                                     <tr>
                                        <td>
                                            
                                        </td>
                                          <td>
                                            
                                        </td>
                                        
                                    </tr>
                                    
                                </table>
                              <?php 
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </body>
</html>