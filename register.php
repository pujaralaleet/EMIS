

<?php  require_once("header.php");?>
<style>
  body {
    background-image: url("View/img/dadel.jpg");
    /* background-color: #cccccc; */
  }
  table{
    -background-image: url("View/img/dadel.jpg");
   
    color: purple;
  }
  #form-heading {

    margin-top: 25px;
    font-size: x-large;
    font-family: cursive;
    color: purple;
  }
</style>

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
            <!-- <tr>
              <td height="34" align="right">
              <div align="center" class="style5 style15"><strong>Marital status</strong></div></td>
              <td>
                
                <div align="left">
                  <label>
                  <select name="m_satus">
                    <option>Married</option>
                    <option>Unmarried</option>
                  </select>
                  </label>
                </div></td>
            </tr> -->
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


</body>

</html>



  <!-- Optional JavaScript; choose one of the two! -->

  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
  crossorigin="anonymous"></script>

``