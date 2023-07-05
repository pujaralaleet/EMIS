<!DOCTYPE html>
<html>
<head>
    <title>Dashboard with Sidebar Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        /* Custom styles for the sidebar menu */
        #sidebar {
            background-color: #333;
            color: #fff;
            padding: 20px;
            height: 100vh;
        }
        
        #sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        
        #sidebar ul li {
            margin-bottom: 10px;
            cursor: pointer;
        }
        
        #sidebar ul li:hover {
            background-color: #555;
        }
        
        #sidebar ul li a {
            color: #fff;
            text-decoration: none;
        }
        
        #content {
            padding: 20px;
        }
        
        .hidden {
            display: none;
        }

        #sidebar ul li:hover {
            background-color: #555;
        }

        #sidebar ul li a {
            color: #946767;
        }

        .dropdown-item {
            background-color: #653a3a;
        }

        /* Adjusted styles for the content width */
        #content1,
        #content2 {
            width: 100%;
        }

    </style>
</head>
<body>
    <?php  require_once("../header.php");?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 offset-0" id="sidebar">
                <ul>
                <li class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="studentDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; text-decoration: none;">
                            Student Info
                        </a>
                        <div class="dropdown-menu" aria-labelledby="studentDropdown">
                            <a class="dropdown-item" href="#" onclick="showContent('content1')">Register</a>
                            <a class="dropdown-item" href="#" onclick="showContent('content2')">Info 2</a>
                            <a class="dropdown-item" href="#" onclick="showContent('content3')">Info 3</a>
                        </div>
                    </li>
                    <li><a href="#" onclick="showContent('content2')">Teacher's Info</a></li>
                    <li><a href="#" onclick="showContent('content3')">Management</a></li>
                    <li><a href="#">Exam</a></li>
                </ul>
            </div>
            
            <div class="col-md-9" id="content">
                <div id="content1" class="hidden">
                    <div class="col-sm-7 offset-1">
                    <form name="iksk" method="POST" action="registercontroller.php" enctype="">

<table width="739" height="895" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000033" bgcolor="#FFFFFF">
           
<tr height="">
              <td height="50px" colspan="6" align="center" bordercolor="#CC0000" >


           <h3 id="form-heading">Student's Registration Form</h3> 
          

              </td>
            </tr>
            <tr>
              <td align="right" height="44">
              <div align="center" class="style5 style15"><strong>Name</strong></div></td>
              <td>
                
                <div align="left">
                  <input name="y_name" type="text" size="50" placeholder="Enter Name......" />
                  <br>
                </div></td>
            </tr>
            
            <tr>
              <td height="39" align="right">
              <div align="center" class="style5 style15"><strong>Gender </strong></div></td>
              <td>
                
                <div align="left">
                  <label>
                  <select name="gender">
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                  </label>
                </div></td>
            </tr>
            
            <tr>
              <td height="33" align="right">
              <div align="center" class="style5 style15"><strong>Date of Birth </strong></div></td>
              <td>
                
                <div align="left">
                  <input name="dob" type="date" size="50" placeholder="Enter date of birth ......" />
                </div></td>
            </tr>
            <tr>
              <td height="32" align="right">
              <div align="center" class="style5 style15"><strong>Father Name</strong></div></td>
              <td>
                
                <div align="left">
                  <input name="f_name" type="text" size="50" placeholder="Enter Father's Name......" />
                </div></td>
            </tr>
            <tr>
              <td height="33" align="right">
              <div align="center" class="style5 style15"><strong>Nationality</strong></div></td>
              <td>
                
                <div align="left">
                  <input name="nationality" type="text" size="50" placeholder="Enter the Nationality......" />
                </div></td>
            </tr>
         
            <tr>
              <td height="35" align="right">
              <div align="center" class="style5 style15"><strong>Address</strong></div></td>
              <td>
                
                <div align="left">
                  <input name="address" type="text" size="50" placeholder="Enter Address......" />
                </div></td>
            </tr>
            <tr>
              <td height="31" align="right">
              <div align="center" class="style5 style15"><strong>E-mail</strong></div></td>
              <td>
                
                <div align="left">
                  <input name="e_mail" type="text" size="50" placeholder="Enter e_mail......" />
                </div></td>
            </tr>
            <tr>
              <td height="35" align="right">
              <div align="center" class="style5 style15"><strong>Mobile Number </strong></div></td>
              <td>
                
                <div align="left">
                  <input name="a_r_claimed" type="text" size="50" placeholder="Enter Mobile Number......" />
                </div></td>
            </tr>
            <tr>
              <td height="32" align="right">
              <div align="center" class="style5 style15"><strong>Educational Qualification</strong></div></td>
              <td>
                
                <div align="left">
                  <input name="edu_quali" type="text" size="50" placeholder="Enter Education qualification....." />
                </div></td>
            </tr>
            <tr>
              <td height="32" align="right">
              <div align="center" class="style5 style15"><strong>Upload Image</strong></div></td>
              <td>
                
                <div align="left">
                  <input name="image" type="file" size="50"/>
                </div></td>
            </tr>
            <tr>
              <td height="30" align="right">
              <div align="center" class="style5 style15"><strong>Registration-id</strong></div></td>
              <td>
                
                <div align="left">
                  <input name="reg_id" type="text" size="50" placeholder="Enter regstration-id......" />
                </div></td>
            </tr>
            <tr>
              <td height="34" align="right">
              <div align="center" class="style5 style15"><strong>Registration Date</strong></div></td>
              <td>
                
                <div align="left">
                  <input name="tra_date" type="date" size="50" placeholder="Enter Registration Date......" />
                </div></td>
            </tr>
            <tr>
              <td height="30" align="right">
              <div align="center" class="style5 style15"><strong>Certificate Number </strong></div></td>
              <td>
                
                <div align="left">
                  <input name="fee_paid" type="text" size="50" placeholder="Enter Certificate Number......" />
                </div></td>
            </tr>
            <tr>
              <td height="32" align="right">
              <div align="center" class="style5 style15"><strong>Roll Number </strong></div></td>
              <td>
                
                <div align="left">
                  <input name="agency" type="text" size="50" placeholder="Enter Roll Number......" />
                </div></td>
            </tr>
            <tr>
              <td height="34" align="right">
              <div align="center" class="style5 style15"><strong>Register of date </strong></div></td>
              <td>
                
                <div align="left">
                  <input name="m_payment" type="date" size="50" placeholder="Enter Register of issue......" />
                </div></td>
            </tr>
          
            
  
            
            <tr height="">
              <td height="50px" colspan="6" align="center" bordercolor="#CC0000" >

              <input type="submit" value="register" name="reg_btn"class="btn btn-outline-primary"/>
            

              </td>
            </tr>
          </table>

 
  
</form>
                    </div>
                </div>
                
                <div id="content2" class="hidden">
                    
                    <div class="col-lg-8">
      <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
           
            <h3>lalit pujara</h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Student ID:</strong></p>
            <p class="mb-0"><strong class="pr-1">Class:</strong></p>
            <p class="mb-0"><strong class="pr-1">Section:</strong></p>
          </div>
        </div>
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Roll</th>
                <td width="2%">:</td>
                <td></td>
              </tr>
              <tr>
                <th width="30%">Academic Year	</th>
                <td width="2%">:</td>
                <td></td>
              </tr>
              <tr>
                <th width="30%">Gender</th>
                <td width="2%">:</td>
                <td></td>
              </tr>
              <tr>
                <th width="30%">Religion</th>
                <td width="2%">:</td>
                <td></td>
              </tr>
              <tr>
                <th width="30%">blood</th>
                <td width="2%">:</td>
                <td></td>
              </tr>
            </table>
          </div>
        </div>
          <div style="height: 26px"></div>
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
          </div>
          <div class="card-body pt-0">
             
        </div>
        </div>
      </div>
                   
                </div>
                
                <div id="content3" class="hidden">
                    <h2>Content 3</h2>
                    <p>This is the content for Info 3.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"  crossorigin="anonymous"></script>  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script>
        function showContent(contentId) {
            // Hide all content elements
            var contentElements = document.querySelectorAll("#content > div");
            for (var i = 0; i < contentElements.length; i++) {
                contentElements[i].classList.add("hidden");
            }

            // Show the selected content element
            var selectedContent = document.getElementById(contentId);
            if (selectedContent) {
                selectedContent.classList.remove("hidden");
            }
        }
    </script>
</body>
</html>
