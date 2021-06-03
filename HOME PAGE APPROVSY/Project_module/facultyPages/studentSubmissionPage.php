<?php 
include "../db.php";
// session_start();
// exit;
include 'header.php';
include 'sidebar.php';


$abc=$_SESSION["username"];
$sql="select s.* from student_group as s inner join faculty as f where f.code=s.faculty_code and s.faculty_code='".$abc["code"]."'";
$res=mysqli_query($mysqli,$sql);
// while($row=mysqli_fetch_array($res))
// {
// 	//print_r($row["code"]);
// 	$sql2="select * from student_file where group_code='".$row["code"]."'";
// 	$res2=mysqli_query($mysqli,$sql2);
// 	// while($row2=mysqli_fetch_array($res2))
// 	// {
// 	// 	print_r($row2);
// 	// }
// }

?>

  <section class="content">
        <div class="container-fluid">
        <div class='form-row'>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" style="padding-left: 20px;padding-right: 20px;">
                        <div class="header">
                            <h2 style="text-align: center;">
                                All Submissions
                            </h2>
                            </div>
                        <div class="body">
                        	<table class="table">
                        		<thead>
                        			<th>S.No</th>
                        			<th>Group Email</th>
                        			<th>Title</th>
                        			<th>Comment</th>
                        			<th >Date of Creation</th>
                        			<th >Time Of Creation</th>
                        			<th>File Type</th>
                        			<th class="col-lg-1">File Name</th>
                        			<th class="col-lg-2">Approval</th>
                        		</thead>
								<tbody>
                                <?php
                                while($row=mysqli_fetch_array($res))
								{
									$i=1;
									$sql2="select * from student_file where group_code='".$row["code"]."' and isApproved=0 and isReject=0";
									$res2=mysqli_query($mysqli,$sql2);
                                while($row2=mysqli_fetch_array($res2))
                                {
                                ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $row["email_id"];?></td>
                                        <td><?php echo $row2["title"];?></td>
                                        <td><?php echo $row2["comment"];?></td>
                                        <td><?php echo $row2["date_of_creation"];?></td>
                                        <td><?php echo $row2["time_of_creation"];?></td>
                                        <td><?php echo $row2["file_type"];?></td>
                                        <td><a href="/APPROVSY/HOME PAGE APPROVSY/Project_module/facultyPages/downloadFile.php?filename=<?php echo $row2["file"]; ?>"><?php echo $row2["file"];?></a></td>
                                        <td>
                                        <form method="post">
                                            
                                            
                                             <input type="hidden" value="<?php echo $row2['code']; ?>" name="approved"> 
                                             <input type="submit" class="btn btn-success"   value="Approve">
                                        </form>
                                        <form method="post">
                                        	
                                            <input type="hidden" value="<?php echo $row2['code']; ?>" name="rejected"> 
                                            <input type="submit" class="btn btn-danger"  value="Reject" style="margin-top: -53px;margin-left: 80px;">
                                        </form>
                                        </td>
                                    </tr>
                                    <?php
                                    $i=$i+1;
                                }
                            }
                                    ?>
                                </tbody>
                              	</table>

                        </div>
                        </div>
                        </div>
                        </div>        	
		</div>
  </section>

<?php


$ids=isset($_POST['code']);

if (isset($_POST['approved'])){
    $status=1;
    $ids=$_POST["approved"];
    $sql = "UPDATE student_file set isApproved = $status where code=$ids";
    echo "<meta http-equiv='refresh' content='0'>";
    }
    
    if (isset($_POST['rejected'])){
    $status=1;
    $ids=$_POST["rejected"];
    $sql = "UPDATE student_file set isReject = $status where code=$ids";
    echo "<meta http-equiv='refresh' content='0'>";
    }

    $res=mysqli_query($mysqli,$sql);
	$affectedRows=mysqli_affected_rows($mysqli);
    
    include 'footer.html';
?>