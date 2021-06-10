<?php 
  session_start();
  require_once 'core/init.php';
  include 'includes/header.php'; 
?>

<?php 
  $sql = "SELECT * FROM internships WHERE deleted=0";
  $internships = $db->query($sql);
?>
<div class="wrapper" >
<main>
  <b><h2 class="text-center p-3" style="font-weight: bold; color:white; ">Shri Vaishnav Vidyapeeth Vishwavidyalaya</h2></b>
  <h3 class="text-center p-3" style="font-weight: 400; margin-bottom:20px ; color:white; font-family: 'Quicksand', sans-serif;">List of Internships</h3>
  <div class="container-fluid row">
    <!-- List of Internships -->
    <?php while($internship = mysqli_fetch_assoc($internships)): ?>
    <div class="col-md-6 " >
      <div class="card" style="border-radius: 19px;" >
        <div class="card-header text-white" style="background-color: #ffffff; border-radius: 19px 19px 0px 0px;  ">
         <h2 class="p-2 text-center card-title" style="font-family: 'Quicksand', sans-serif;font-size:30px; font-weight:bold ; color:#8D47B9;"><b><?=$internship['nameOfCompany'];?></b></h2>
        </div>
        <div class="card-body " style="font-family: 'Quicksand', sans-serif; ">
          <h4 class="p-2 h4-responsive float-left"><b><?=$internship['category'];?></b></h4>
          <h5 class="p-2 h5-responsive float-right"><b>Location: </b><?=$internship['location'];?></h5>
          <table class="table ">
            <thead style="color:#324e63;">
              <th><b>Duration</b></th>
              <th><b>Stipend</b></th>
              <th><b>Posted On</b></th>
              <th><b>Apply By</b></th>
              <th><b>Available Positions</b></th>
            </thead>
            <tbody>
              <tr>
                <td><?=$internship['duration'];?> months</td>
                <td>&#8377; <?=$internship['stipend'];?></td>
                <td><?=$internship['postedOn'];?></td>
                <td><?=$internship['applyBy'];?></td>
                <td><?=$internship['positions'];?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="card-footer" style="border-top-color: #ffffff;">
          <a href="internship.php?internship=<?=$internship['id'];?>" class="btn btn-success " style="background: none;
    border: none;
    font-family: 'Quicksand', sans-serif;
    font-weight: 700;
    font-size: 14px;
    margin:auto;
    padding: 15px 25px;
    border-radius: 10px;
    background: linear-gradient(45deg, #d5135a, #f05924);
    box-shadow: 0px 4px 30px rgba(223, 45, 70, 0.35);
    color: #fff;" >View Details</a>
        </div>
      </div>
    </div>
    <?php endwhile;?>
  </div>
  <br>
</main>
</div>