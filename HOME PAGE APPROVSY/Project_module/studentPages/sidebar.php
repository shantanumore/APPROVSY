     <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info"  style="background: url('https://image.shutterstock.com/image-vector/colorful-purple-vivid-polygonal-triangular-260nw-1924160825.jpg');">
                <div class="image" >
                    <?php
                    $groupCode=$_SESSION["groupCode"];
                    $sql="select profile_picture from student where group_code='".$groupCode."'";
                    $res=mysqli_query($mysqli,$sql);
                    if(mysqli_num_rows($res)==0)
                    {
                         ?>
                    <img src="/APPROVSY/HOME PAGE APPROVSY/Project_module/image/user_image.jpg" width="48" height="48" alt="User" />
                    <?php
                    }
                    while($row=mysqli_fetch_array($res))
                    {
                        if($row["profile_picture"]==NULL)
                        {
                         ?>
                    <img src="/APPROVSY/HOME PAGE APPROVSY/Project_module/image/user_image.jpg" width="48" height="48" alt="User" />
                    <?php                            
                        }
                        else
                        {
                        ?>
                    <img src="/APPROVSY/HOME PAGE APPROVSY/Project_module/image/<?php echo $row["profile_picture"]; ?>" width="48" height="48" alt="User" />
                    <?php
                    }
                    }
                    ?>
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php
                        echo $_SESSION["groupCode"];
                        ?>
                    </div>
                    <div class="email">
                        <?php
                          echo $_SESSION["username"];
                        ?>
                    </div>
                  
                        <i class="dropdown-toggle" data-toggle="dropdown"></i>
                        <!-- <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header" style="background-color: #BE9CFF; color:black;">MAIN NAVIGATION</li>
                    <li>
                        <a href="/APPROVSY/HOME PAGE APPROVSY/Project_module/studentPages/homePage.php">
                            <i class="material-icons"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="/APPROVSY/HOME PAGE APPROVSY/Project_module/studentPages/profilePage.php">
                            <i class="material-icons"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                     <li>
                        <a href="/APPROVSY/HOME PAGE APPROVSY/Project_module/studentPages/changePassword.php">
                            <i class="material-icons"></i>
                            <span>Change Password</span>
                        </a>
                    </li>
                     <li>
                        <a href="/APPROVSY/HOME PAGE APPROVSY/Project_module/studentPages/uploadImagePage.php">
                            <i class="material-icons"></i>
                            <span>Upload Image</span>
                        </a>
                    </li>
                    <li>
                        <a  class="menu-toggle">
                            <i class="material-icons"></i>
                            <span>Instruction</span>
                        </a>

                        <ul class="ml-menu">
                            <li>
                                <a href="/APPROVSY/HOME PAGE APPROVSY/Project_module/studentPages/instructionPage1.php">
                                    <span>Synopsis</span>
                                </a>
                            </li>
                            <li>
                                <a class="menu-toggle">
                                    <span>Report</span>
                                </a>
                                <ul class="ml-menu">
                                   <li> <a href="/APPROVSY/HOME PAGE APPROVSY/Project_module/studentPages/instructionPage2.php">
                                        <span>Introduction</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/APPROVSY/HOME PAGE APPROVSY/Project_module/studentPages/instructionPage3.php">
                                        <span>Litreature Survey</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/APPROVSY/HOME PAGE APPROVSY/Project_module/studentPages/instructionPage4.php">
                                        <span>Software Engineering Approch</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/APPROVSY/HOME PAGE APPROVSY/Project_module/studentPages/instructionPage5.php">
                                        <span>Design</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/APPROVSY/HOME PAGE APPROVSY/Project_module/studentPages/instructionPage6.php">
                                        <span>Implementation</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/APPROVSY/HOME PAGE APPROVSY/Project_module/studentPages/instructionPage7.php">
                                        <span>Testing Objective</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/APPROVSY/HOME PAGE APPROVSY/Project_module/studentPages/instructionPage8.php">
                                        <span>Limitation of project</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/APPROVSY/HOME PAGE APPROVSY/Project_module/studentPages/instructionPage9.php">
                                        <span>Future enhancement</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/APPROVSY/HOME PAGE APPROVSY/Project_module/studentPages/instructionPage10.php">
                                        <span>Conclusion</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/APPROVSY/HOME PAGE APPROVSY/Project_module/studentPages/instructionPage11.php">
                                        <span>Refrences</span>
                                    </a>
                                </li>

                                </ul>
                            </li>
                            <li>
                                <a href="/APPROVSY/HOME PAGE APPROVSY/Project_module/studentPages/instructionPage12.php">
                                <span>Format of Report</span> 
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="/APPROVSY/HOME PAGE APPROVSY/Project_module/studentPages/downloadInstructions.php">
                            <i class="material-icons"></i>
                            <span>Download Instructions</span>
                        </a>
                    </li>                    

                    <li>
                        <a href="/APPROVSY/HOME PAGE APPROVSY/Project_module/studentPages/facultyDetail.php">
                            <i class="material-icons"></i>
                            <span>Faculty Detail</span>
                        </a>
                    </li>
                    <li>
                        <a href="/APPROVSY/HOME PAGE APPROVSY/Project_module/studentPages/submissionPage.php">
                            <i class="material-icons"></i>
                            <span>Submission</span>
                        </a>
                    </li>
                                        <li>
                        <a href="/APPROVSY/HOME PAGE APPROVSY/Project_module/studentPages/allSubmission.php">
                            <i class="material-icons"></i>
                            <span> Total Submission</span>
                        </a>
                    </li>

                    <li>
                        <a href="/APPROVSY/HOME PAGE APPROVSY/Project_module/studentPages/signOut.php">
                            <i class="material-icons"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2021 <a href="javascript:void(0);">APPROVSY</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>