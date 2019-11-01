<a class="btn btn-sm btn-primary" href="add.php?hal=add&kd=<?php echo $data['nomor'];?>"><i class="fa fa-edit"></i> Add new item</a>
                      <a class="btn btn-sm btn-primary" href="details.php?hal=add&kd=<?php echo $data['nomor'];?>"><i class="fa fa-edit"></i> Details</a>




button

SQL

$query = mysqli_query($con, "UPDATE Employee SET NAME='$NAME', ADDRESS='$ADDRESS', PHONE='$PHONE', DIVISION='$DIVISION', EMAIL='$EMAIL', ROLE='$ROLE', INFORMATION='$INFORMATION', MAC='$MAC' WHERE ID='$ID'");

