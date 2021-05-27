<?php 
include "../db.php";
include 'header.php';
include 'sidebar.php';

$abc=$_SESSION["username"];
// $sql="select f.* from faculty as f left join student_group as sg on sg.faculty_code=f.code";
// $res=mysqli_query($mysqli,$sql);
// $row=mysqli_fetch_array($res,MYSQLI_ASSOC);

?>

  <section class="content">
        <div class="container-fluid">
            <div class='form-row'>
                <div class="col-lg-2"></div>
            	<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" style="height:auto;">
                        <div class="header " style="text-align: center; background-color: #BE9CFF;">
                           <img src="/APPROVSY/HOME PAGE APPROVSY/Project_module/image/<?php echo $_SESSION["username"]["image"]; ?>"  width="120" height="150" style="border: 3px solid ; border-color: purple;"  alt="User" />

                                <br/>
                            <h2>
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table borderless" style="text-align: center;">
                                <tr class="table-primary">
                                    <td>First Name</td>
                                    <td>
                                    <?php
                                    echo $abc["first_name"];
                                    ?>
                                    </td>
                                </tr>
                                <tr class="table-secondary">
                                    <td>Last Name</td>
                                    <td>
                                        <?php
                                        echo $abc["last_name"];
                                        ?>
                                    </td>
                                </tr>
                                <tr class="table-success">                             
                                    <td>mobile number</td>
                                    <td>
                                        <?php
                                        echo $abc["mobile_number"];
                                        ?>                                        
                                    </td>
                                </tr>
                                <tr class="table-success">                             
                                    <td>Email Id</td>
                                    <td>
                                        <?php
                                        echo $abc["email_id"];
                                        ?>                                        
                                    </td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>

			</div>
		</div>
  </section>

<?php
include 'footer.html';
?>