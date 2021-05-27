<?php 

include 'header.php';
include 'sidebar.php';

$groupCode=$_SESSION["groupCode"];
$sql="select * from student where group_code='".$groupCode."'";
$res=mysqli_query($mysqli,$sql);
//print_r($row["mobile_number"]);

?>
  <section class="content">
        <div class="container-fluid">
            <div class='form-row'>
                <?php
                $numberOfRows=mysqli_num_rows($res);
                while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
                {
                    if($numberOfRows==2)
                    {
                ?>
            	<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
                <?php
                }
                if($numberOfRows==3)
                {
                ?>
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <?php
                }
                if($numberOfRows==4)
                {
                ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <?php
                }
                ?>
                    <div class="card" style="height:auto;">
                        <div class="header" style="text-align: center ; background-color: #BE9CFF;">
                            <?php
                            if($row["profile_picture"]==NULL)
                            {
                                ?>
                               <img src="/APPROVSY/HOME PAGE APPROVSY/Project_module/image/user_image.jpg"  width="150" height="150" style="border: 3px solid ; border-color: purple;">
                            <?php
                            }
                            else
                            {
                            ?>
                        	<img src="/APPROVSY/HOME PAGE APPROVSY/Project_module/image/<?php echo $row["profile_picture"]; ?>"  width="150" height="150" style="border: 3px solid ; border-color: purple;" >
                            <?php
                            }
                            ?>
                        		<br/>
                        </div>
                        <div class="body">
                        	<table class="table borderless">
                        		<tr class="table-primary">
                        			<td>First Name</td>
                        			<td>
                                    <?php
                                    echo $row["first_name"];
                                    ?>         
                                    </td>
                        		</tr>
								<tr class="table-secondary">
									<td>Last Name</td>
                        			<td>
                                    <?php
                                    echo $row["last_name"];
                                    ?>         
                                    </td>
								</tr>
								<tr class="table-success">									
									<td>mobile number</td>
                        			<td>
                                    <?php
                                    echo $row["mobile_number"];
                                    ?> 
                                    </td>
								</tr>
								<tr class="table-danger">
									<td>Roll Number</td>
                        			<td>
                                   <?php
                                    echo $row["roll_number"];
                                    ?>
                                    </td>
								</tr>
                                <tr class="table-danger">
                                    <td>year</td>
                                    <td>
                                   <?php
                                    echo $row["year"];
                                    ?>
                                    </td>
                                </tr>
                                <tr class="table-danger">
                                    <td>semester</td>
                                    <td>
                                   <?php
                                    echo $row["semester"];
                                    ?>
                                    </td>
                                </tr>
                                <tr class="table-danger">
                                    <td>Section</td>
                                    <td>
                                   <?php
                                    echo $row["section"];
                                    ?>
                                    </td>
                                </tr>
                                <tr class="table-danger">
                                    <td>Department</td>
                                    <td>
                                   <?php
                                    echo $row["department"];
                                    ?>
                                    </td>
                                </tr>

                        	</table>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
			</div>
		</div>
  </section>

<?php
include 'footer.html';
?>