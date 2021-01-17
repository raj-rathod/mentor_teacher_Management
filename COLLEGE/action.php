<?php 
$con=mysqli_connect('localhost','root','','collage');
session_start();
if (isset($_POST['mlogin'])) {
	$name=$_POST['mid'];
	$psw=$_POST['psw'];
	$sql="SELECT * FROM mentor WHERE mid='$name'AND psw='$psw'";
	$run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)==1) {
		$_SESSION['mid']=$name;
		header('location:../mentor.php');
	}
}
if (isset($_POST['msignup'])) {
	$name=$_POST['name'];
	$mid=$_POST['mid'];
	$yer=$_POST['yer'];
	$bran=$_POST['bran'];
	$sem=$_POST['sem'];
	$sec=$_POST['sec'];
	$psw=$_POST['psw'];
	$sql="SELECT * FROM mentor WHERE mid='$mid'";
	$run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)>0) {
		echo "<h4>Mentor ALREADY EXIST PLEASE ENTER VALID USERNAME</h4>";
	}else{
		$sql="INSERT INTO `mentor` (`mid`, `mname`, `branch`, `sec`, `sem`, `year`, `psw`)
		 VALUES ('$mid', '$name', '$bran', '$sec', '$sem', '$yer', '$psw')";
		$run=mysqli_query($con,$sql);
		if($run){
			$_SESSION['mid']=$mid;
			header('location:menlogin.php');
		}
	}
}

if (isset($_POST['signup'])) {
	$name=$_POST['name'];
	$usn=$_POST['usn'];
	$bat=$_POST['bat'];
	$yer=$_POST['yer'];
	$sex=$_POST['sex'];
	$bran=$_POST['bran'];
	$sem=$_POST['sem'];
	$sec=$_POST['sec'];
	$pno=$_POST['pno'];
	$psw=$_POST['psw'];
	$email=$_POST['email'];
	$sub1=$bat.$bran.$sem."1";
	$sub2=$bat.$bran.$sem."2";
	$sub3=$bat.$bran.$sem."3";
	$sub4=$bat.$bran.$sem."4";
	$sub5=$bat.$bran.$sem."5";
	$sub6=$bat.$bran.$sem."6";
	
	$sql="SELECT * FROM student WHERE usn='$usn'";
	$run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)>0) {
		echo "<h4>USN ALREADY EXIST PLEASE ENTER VALID USERNAME</h4>";
	}else{
		$sql="INSERT INTO `student` (`sid`, `sname`, `usn`, `batch`, `year`, `branch`, `sem`, `sec`, `phone`, `email`, `psw`,`sex`) 
		VALUES (NULL, '$name', '$usn', '$bat', '$yer', '$bran', '$sem', '$sec', '$pno', '$email', '$psw','$sex')";
		$run=mysqli_query($con,$sql);
		$sql1="INSERT INTO `subject` (`usn`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`)
		 VALUES ('$usn', '$sub1', '$sub2', '$sub3', '$sub4', '$sub5', '$sub6')";
	    $run1=mysqli_query($con,$sql1);
		if($run){
			$_SESSION['usn']=$usn;
			$_SESSION['uname']=$name;
			header('location:login.php');
		}
	}
}
if (isset($_POST['login'])) {
   $name=$_POST['usn'];
   $psw=$_POST['psw'];
   $sql="SELECT * FROM student WHERE usn='$name'AND psw='$psw'";
   $run=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($run);
   if (mysqli_num_rows($run)==1) {
        $_SESSION['usn']=$row['usn'];
		$_SESSION['uname']=$row['sname'];
		header('location:../profile.php');
	}
}
if (isset($_POST['ia1'])) {
	$usn=$_POST['usn'];
	$sub1=$_POST['sub1'];
	$sub2=$_POST['sub2'];
	$sub3=$_POST['sub3'];
	$sub4=$_POST['sub4'];
	$sub5=$_POST['sub5'];
	$sub6=$_POST['sub6'];
	$sql="SELECT * FROM student WHERE usn='$usn'";
	$run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)==0) {
		echo "<h4 style='font-size:60px;text-align:center; margin-top:150px;'>This USN Number does not exist Please Enter valid USN</h4>";
	}else{
		$sql="SELECT * FROM internal1 WHERE usn='$usn'";
	    $run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)>0) {
		echo "<h4 style='font-size:60px;text-align:center; margin-top:150px;'>You have already entered Internal marks Please check usn </h4>";
	}else{
		$sql="INSERT INTO `internal1` (`usn`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`)
		 VALUES ('$usn', '$sub1', '$sub2', '$sub3', '$sub4', '$sub5', '$sub6')";
		 $run=mysqli_query($con,$sql);
		 if ($run) {
		 	header('location:../mentor.php');
		 }
	}
	}
	

}
if (isset($_POST['ia2'])) {
	$usn=$_POST['usn'];
	$sub1=$_POST['sub1'];
	$sub2=$_POST['sub2'];
	$sub3=$_POST['sub3'];
	$sub4=$_POST['sub4'];
	$sub5=$_POST['sub5'];
	$sub6=$_POST['sub6'];
	$sql="SELECT * FROM student WHERE usn='$usn'";
	$run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)==0) {
		echo "<h4 style='font-size:60px;text-align:center; margin-top:150px;'>This USN Number does not exist Please Enter valid USN</h4>";
	}else{
		$sql="SELECT * FROM internal2 WHERE usn='$usn'";
	    $run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)>0) {
		echo "<h4 style='font-size:60px;text-align:center; margin-top:150px;'>You have already entered Internal marks Please check usn </h4>";
	}else{
		$sql="INSERT INTO `internal2` (`usn`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`)
		 VALUES ('$usn', '$sub1', '$sub2', '$sub3', '$sub4', '$sub5', '$sub6')";
		 $run=mysqli_query($con,$sql);
		 if ($run) {
		 	header('location:../mentor.php');
		 }
	}
	}
	

}

if (isset($_POST['ia3'])) {
	$usn=$_POST['usn'];
	$sub1=$_POST['sub1'];
	$sub2=$_POST['sub2'];
	$sub3=$_POST['sub3'];
	$sub4=$_POST['sub4'];
	$sub5=$_POST['sub5'];
	$sub6=$_POST['sub6'];
	$sql="SELECT * FROM student WHERE usn='$usn'";
	$run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)==0) {
		echo "<h4 style='font-size:60px;text-align:center; margin-top:150px;'>This USN Number does not exist Please Enter valid USN</h4>";
	}else{
		$sql="SELECT * FROM internal3 WHERE usn='$usn'";
	    $run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)>0) {
		echo "<h4 style='font-size:60px;text-align:center; margin-top:150px;'>You have already entered Internal marks Please check usn </h4>";
	}else{
		$sql="INSERT INTO `internal3` (`usn`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`)
		 VALUES ('$usn', '$sub1', '$sub2', '$sub3', '$sub4', '$sub5', '$sub6')";
		 $run=mysqli_query($con,$sql);
		 if ($run) {
		 	header('location:../mentor.php');
		 }
	}
	}
	

}
if (isset($_POST['mentor'])) {
      $usn=$_SESSION['usn'];
      $sql="SELECT * FROM student WHERE usn='$usn'";
      $run=mysqli_query($con,$sql);
      $row=mysqli_fetch_array($run);
      $sem=$row['sem'];
      $sec=$row['sec'];
      $branch=$row['branch'];
      $sql1="SELECT * FROM mentor WHERE sem='$sem'AND sec='$sec' AND branch='$branch'";
      $run1=mysqli_query($con,$sql1);
      $row=mysqli_fetch_array($run1);
      $mname=$row['mname'];
      echo " <h3 class='text-center'>Mentor Name : $mname </h3>";

}
if (isset($_POST['siamarkav'])) {
     $usn=$_POST['usn'];
     $sql="SELECT * FROM internal1 WHERE usn='$usn'";
     $run=mysqli_query($con,$sql);
     $row=mysqli_fetch_array($run);
                     $sub1=$row['sub1'];
                     $sub2=$row['sub2'];
                     $sub3=$row['sub3'];
                     $sub4=$row['sub4'];
                     $sub5=$row['sub5'];
                     $sub6=$row['sub6'];
     $sql="SELECT * FROM internal2 WHERE usn='$usn'";
     $run=mysqli_query($con,$sql);
     $row=mysqli_fetch_array($run);
                     $sub21=$row['sub1'];
                     $sub22=$row['sub2'];
                     $sub23=$row['sub3'];
                     $sub24=$row['sub4'];
                     $sub25=$row['sub5'];
                     $sub26=$row['sub6'];
     $sql="SELECT * FROM internal3 WHERE usn='$usn'";
     $run=mysqli_query($con,$sql);
     $row=mysqli_fetch_array($run);
                     $sub31=$row['sub1'];
                     $sub32=$row['sub2'];
                     $sub33=$row['sub3'];
                     $sub34=$row['sub4'];
                     $sub35=$row['sub5'];
                     $sub36=$row['sub6'];
     $sub1avg=ceil(($sub1+$sub21+$sub31)/3);
     $sub2avg=ceil(($sub2+$sub22+$sub32)/3);
     $sub3avg=ceil(($sub3+$sub23+$sub33)/3);
     $sub4avg=ceil(($sub4+$sub24+$sub34)/3);
     $sub5avg=ceil(($sub5+$sub25+$sub35)/3);
     $sub6avg=ceil(($sub6+$sub26+$sub36)/3);

             echo " <div class='row'>
            <div class='col-md-2 text-white'> $sub1avg </div>
             <div class='col-md-2 text-white'>   $sub2avg</div>
              <div class='col-md-2 text-white'>  $sub3avg </div>
               <div class='col-md-2 text-white'>   $sub4avg</div>
                <div class='col-md-2 text-white'>   $sub5avg</div>
                 <div class='col-md-2 text-white'>   $sub6avg</div>
          </div>";
}
if (isset($_POST['sdetform'])) {
	$branch=$_POST['branch'];
	$sem=$_POST['sem'];
	$sec=$_POST['sec'];
	$sql="SELECT * FROM student WHERE branch='$branch'AND sem='$sem' AND sec='$sec'";
    $run=mysqli_query($con,$sql);
    if (mysqli_num_rows($run)==0) {
                        echo "<h4 class='text-center text-white'>Result not Found</h4>";
    }else{
    	while ($row=mysqli_fetch_array($run)) {
    		$usn=$row['usn'];
    		$name=$row['sname'];
    		$sem=$row['sem'];
    		$sec=$row['sec'];
    		$phone=$row['phone'];
    		$branch=$row['branch'];
    		echo "<div class='row'>
            <div class='col-md-2 text-white'> $usn</div>
             <div class='col-md-2 text-white'> $name</div>
              <div class='col-md-2 text-white'>$sec </div>
               <div class='col-md-2 text-white'> $sem</div>
                <div class='col-md-2 text-white'> $branch</div>
                 <div class='col-md-2 text-white'>$phone</div>
          </div><br>";
    	}
    }

}
if (isset($_POST['ssex'])) {
	$sql="SELECT * FROM student WHERE sem='1'AND sex='M'AND sec='A' ";
	$run=mysqli_query($con,$sql);
	$count1ma=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='1'AND sex='F'AND sec='A'";
	$run=mysqli_query($con,$sql);
	$count1fa=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='1'AND sex='M'AND sec='B' ";
	$run=mysqli_query($con,$sql);
	$count1mb=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='1'AND sex='F'AND sec='B'";
	$run=mysqli_query($con,$sql);
	$count1fb=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='1'AND sex='M'AND sec='C' ";
	$run=mysqli_query($con,$sql);
	$count1mc=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='1'AND sex='F'AND sec='C'";
	$run=mysqli_query($con,$sql);
	$count1fc=mysqli_num_rows($run);
	echo " <div class='container'>
      <div class='card'>
        <div class='card-header bg-info'>
          <h3 class='text-center text-white'>First Semester</h3>
        </div>
        <div class='card-body bg-dark'>
          <div class='row'>
            <div class='col-md-4'>
              <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section A</h3>
                </div>
                <div class='card-body'>
                  <h4>Male : $count1ma</h4>
                  <h4>Female : $count1fa</h4>
                </div>
              </div>
            </div>
             <div class='col-md-4'>
                <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section B</h3>
                </div>
                <div class='card-body'>
                  <h4>Male :  $count1mb</h4>
                  <h4>Female : $count1fb</h4>
                </div>
              </div>
            
             </div>
              <div class='col-md-4'>
                <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section C</h3>
                </div>
                <div class='card-body'>
                  <h4>Male : $count1mc</h4>
                  <h4>Female : $count1fc</h4>
                </div>
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>";
    $sql="SELECT * FROM student WHERE sem='2'AND sex='M'AND sec='A' ";
	$run=mysqli_query($con,$sql);
	$count1ma=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='2'AND sex='F'AND sec='A'";
	$run=mysqli_query($con,$sql);
	$count1fa=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='2'AND sex='M'AND sec='B' ";
	$run=mysqli_query($con,$sql);
	$count1mb=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='2'AND sex='F'AND sec='B'";
	$run=mysqli_query($con,$sql);
	$count1fb=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='2'AND sex='M'AND sec='C' ";
	$run=mysqli_query($con,$sql);
	$count1mc=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='2'AND sex='F'AND sec='C'";
	$run=mysqli_query($con,$sql);
	$count1fc=mysqli_num_rows($run);
	echo " <div class='container'>
      <div class='card'>
        <div class='card-header bg-info'>
          <h3 class='text-center text-white'>Second Semester</h3>
        </div>
        <div class='card-body bg-dark'>
          <div class='row'>
            <div class='col-md-4'>
              <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section A</h3>
                </div>
                <div class='card-body'>
                  <h4>Male : $count1ma</h4>
                  <h4>Female : $count1fa</h4>
                </div>
              </div>
            </div>
             <div class='col-md-4'>
                <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section B</h3>
                </div>
                <div class='card-body'>
                  <h4>Male :  $count1mb</h4>
                  <h4>Female : $count1fb</h4>
                </div>
              </div>
            
             </div>
              <div class='col-md-4'>
                <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section C</h3>
                </div>
                <div class='card-body'>
                  <h4>Male : $count1mc</h4>
                  <h4>Female : $count1fc</h4>
                </div>
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>";
    $sql="SELECT * FROM student WHERE sem='3'AND sex='M'AND sec='A' ";
	$run=mysqli_query($con,$sql);
	$count1ma=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='3'AND sex='F'AND sec='A'";
	$run=mysqli_query($con,$sql);
	$count1fa=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='3'AND sex='M'AND sec='B' ";
	$run=mysqli_query($con,$sql);
	$count1mb=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='3'AND sex='F'AND sec='B'";
	$run=mysqli_query($con,$sql);
	$count1fb=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='3'AND sex='M'AND sec='C' ";
	$run=mysqli_query($con,$sql);
	$count1mc=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='3'AND sex='F'AND sec='C'";
	$run=mysqli_query($con,$sql);
	$count1fc=mysqli_num_rows($run);
	echo " <div class='container'>
      <div class='card'>
        <div class='card-header bg-info'>
          <h3 class='text-center text-white'>Third Semester</h3>
        </div>
        <div class='card-body bg-dark'>
          <div class='row'>
            <div class='col-md-4'>
              <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section A</h3>
                </div>
                <div class='card-body'>
                  <h4>Male : $count1ma</h4>
                  <h4>Female : $count1fa</h4>
                </div>
              </div>
            </div>
             <div class='col-md-4'>
                <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section B</h3>
                </div>
                <div class='card-body'>
                  <h4>Male :  $count1mb</h4>
                  <h4>Female : $count1fb</h4>
                </div>
              </div>
            
             </div>
              <div class='col-md-4'>
                <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section C</h3>
                </div>
                <div class='card-body'>
                  <h4>Male : $count1mc</h4>
                  <h4>Female : $count1fc</h4>
                </div>
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>";
     $sql="SELECT * FROM student WHERE sem='4'AND sex='M'AND sec='A' ";
	$run=mysqli_query($con,$sql);
	$count1ma=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='4'AND sex='F'AND sec='A'";
	$run=mysqli_query($con,$sql);
	$count1fa=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='4'AND sex='M'AND sec='B' ";
	$run=mysqli_query($con,$sql);
	$count1mb=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='4'AND sex='F'AND sec='B'";
	$run=mysqli_query($con,$sql);
	$count1fb=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='4'AND sex='M'AND sec='C' ";
	$run=mysqli_query($con,$sql);
	$count1mc=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='4'AND sex='F'AND sec='C'";
	$run=mysqli_query($con,$sql);
	$count1fc=mysqli_num_rows($run);
	echo " <div class='container'>
      <div class='card'>
        <div class='card-header bg-info'>
          <h3 class='text-center text-white'>Forth Semester</h3>
        </div>
        <div class='card-body bg-dark'>
          <div class='row'>
            <div class='col-md-4'>
              <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section A</h3>
                </div>
                <div class='card-body'>
                  <h4>Male : $count1ma</h4>
                  <h4>Female : $count1fa</h4>
                </div>
              </div>
            </div>
             <div class='col-md-4'>
                <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section B</h3>
                </div>
                <div class='card-body'>
                  <h4>Male :  $count1mb</h4>
                  <h4>Female : $count1fb</h4>
                </div>
              </div>
            
             </div>
              <div class='col-md-4'>
                <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section C</h3>
                </div>
                <div class='card-body'>
                  <h4>Male : $count1mc</h4>
                  <h4>Female : $count1fc</h4>
                </div>
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>";
     $sql="SELECT * FROM student WHERE sem='5'AND sex='M'AND sec='A' ";
	$run=mysqli_query($con,$sql);
	$count1ma=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='5'AND sex='F'AND sec='A'";
	$run=mysqli_query($con,$sql);
	$count1fa=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='5'AND sex='M'AND sec='B' ";
	$run=mysqli_query($con,$sql);
	$count1mb=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='5'AND sex='F'AND sec='B'";
	$run=mysqli_query($con,$sql);
	$count1fb=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='5'AND sex='M'AND sec='C' ";
	$run=mysqli_query($con,$sql);
	$count1mc=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='5'AND sex='F'AND sec='C'";
	$run=mysqli_query($con,$sql);
	$count1fc=mysqli_num_rows($run);
	echo " <div class='container'>
      <div class='card'>
        <div class='card-header bg-info'>
          <h3 class='text-center text-white'>Fifth Semester</h3>
        </div>
        <div class='card-body bg-dark'>
          <div class='row'>
            <div class='col-md-4'>
              <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section A</h3>
                </div>
                <div class='card-body'>
                  <h4>Male : $count1ma</h4>
                  <h4>Female : $count1fa</h4>
                </div>
              </div>
            </div>
             <div class='col-md-4'>
                <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section B</h3>
                </div>
                <div class='card-body'>
                  <h4>Male :  $count1mb</h4>
                  <h4>Female : $count1fb</h4>
                </div>
              </div>
            
             </div>
              <div class='col-md-4'>
                <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section C</h3>
                </div>
                <div class='card-body'>
                  <h4>Male : $count1mc</h4>
                  <h4>Female : $count1fc</h4>
                </div>
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>";
     $sql="SELECT * FROM student WHERE sem='6'AND sex='M'AND sec='A' ";
	$run=mysqli_query($con,$sql);
	$count1ma=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='6'AND sex='F'AND sec='A'";
	$run=mysqli_query($con,$sql);
	$count1fa=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='6'AND sex='M'AND sec='B' ";
	$run=mysqli_query($con,$sql);
	$count1mb=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='6'AND sex='F'AND sec='B'";
	$run=mysqli_query($con,$sql);
	$count1fb=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='6'AND sex='M'AND sec='C' ";
	$run=mysqli_query($con,$sql);
	$count1mc=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='6'AND sex='F'AND sec='C'";
	$run=mysqli_query($con,$sql);
	$count1fc=mysqli_num_rows($run);
	echo " <div class='container'>
      <div class='card'>
        <div class='card-header bg-info'>
          <h3 class='text-center text-white'>Sixth Semester</h3>
        </div>
        <div class='card-body bg-dark'>
          <div class='row'>
            <div class='col-md-4'>
              <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section A</h3>
                </div>
                <div class='card-body'>
                  <h4>Male : $count1ma</h4>
                  <h4>Female : $count1fa</h4>
                </div>
              </div>
            </div>
             <div class='col-md-4'>
                <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section B</h3>
                </div>
                <div class='card-body'>
                  <h4>Male :  $count1mb</h4>
                  <h4>Female : $count1fb</h4>
                </div>
              </div>
            
             </div>
              <div class='col-md-4'>
                <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section C</h3>
                </div>
                <div class='card-body'>
                  <h4>Male : $count1mc</h4>
                  <h4>Female : $count1fc</h4>
                </div>
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>";
     $sql="SELECT * FROM student WHERE sem='7'AND sex='M'AND sec='A' ";
	$run=mysqli_query($con,$sql);
	$count1ma=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='7'AND sex='F'AND sec='A'";
	$run=mysqli_query($con,$sql);
	$count1fa=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='7'AND sex='M'AND sec='B' ";
	$run=mysqli_query($con,$sql);
	$count1mb=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='7'AND sex='F'AND sec='B'";
	$run=mysqli_query($con,$sql);
	$count1fb=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='7'AND sex='M'AND sec='C' ";
	$run=mysqli_query($con,$sql);
	$count1mc=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='7'AND sex='F'AND sec='C'";
	$run=mysqli_query($con,$sql);
	$count1fc=mysqli_num_rows($run);
	echo " <div class='container'>
      <div class='card'>
        <div class='card-header bg-info'>
          <h3 class='text-center text-white'>Seventh Semester</h3>
        </div>
        <div class='card-body bg-dark'>
          <div class='row'>
            <div class='col-md-4'>
              <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section A</h3>
                </div>
                <div class='card-body'>
                  <h4>Male : $count1ma</h4>
                  <h4>Female : $count1fa</h4>
                </div>
              </div>
            </div>
             <div class='col-md-4'>
                <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section B</h3>
                </div>
                <div class='card-body'>
                  <h4>Male :  $count1mb</h4>
                  <h4>Female : $count1fb</h4>
                </div>
              </div>
            
             </div>
              <div class='col-md-4'>
                <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section C</h3>
                </div>
                <div class='card-body'>
                  <h4>Male : $count1mc</h4>
                  <h4>Female : $count1fc</h4>
                </div>
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>";
     $sql="SELECT * FROM student WHERE sem='8'AND sex='M'AND sec='A' ";
	$run=mysqli_query($con,$sql);
	$count1ma=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='8'AND sex='F'AND sec='A'";
	$run=mysqli_query($con,$sql);
	$count1fa=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='8'AND sex='M'AND sec='B' ";
	$run=mysqli_query($con,$sql);
	$count1mb=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='8'AND sex='F'AND sec='B'";
	$run=mysqli_query($con,$sql);
	$count1fb=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='8'AND sex='M'AND sec='C' ";
	$run=mysqli_query($con,$sql);
	$count1mc=mysqli_num_rows($run);
	$sql="SELECT * FROM student WHERE sem='8'AND sex='F'AND sec='C'";
	$run=mysqli_query($con,$sql);
	$count1fc=mysqli_num_rows($run);
	echo " <div class='container'>
      <div class='card'>
        <div class='card-header bg-info'>
          <h3 class='text-center text-white'>Eighth Semester</h3>
        </div>
        <div class='card-body bg-dark'>
          <div class='row'>
            <div class='col-md-4'>
              <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section A</h3>
                </div>
                <div class='card-body'>
                  <h4>Male : $count1ma</h4>
                  <h4>Female : $count1fa</h4>
                </div>
              </div>
            </div>
             <div class='col-md-4'>
                <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section B</h3>
                </div>
                <div class='card-body'>
                  <h4>Male :  $count1mb</h4>
                  <h4>Female : $count1fb</h4>
                </div>
              </div>
            
             </div>
              <div class='col-md-4'>
                <div class='card'>
                <div class='card-header bg-success'>
                  <h3 class='text-center'>Section C</h3>
                </div>
                <div class='card-body'>
                  <h4>Male : $count1mc</h4>
                  <h4>Female : $count1fc</h4>
                </div>
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>";
	
}
if (isset($_POST['sdetia'])) {
	$usn=$_POST['usn'];
	$ia=$_POST['ia'];
	switch ($ia) {
		case '1':
			     $sql="SELECT * FROM internal1 WHERE usn='$usn'";
			     $run=mysqli_query($con,$sql);
			     $row=mysqli_fetch_array($run);
			         $sub1=$row['sub1'];
                     $sub2=$row['sub2'];
                     $sub3=$row['sub3'];
                     $sub4=$row['sub4'];
                     $sub5=$row['sub5'];
                     $sub6=$row['sub6'];
                     echo "<div class='card'>
        <h3 class='text-center'>Ist Internal Marks</h3>
        <div class='card-header bg-info'>
         <div class='row'>
          <div class='col-md-4'>USN</div>
           <div class='col-md-1'>Sub1</div>
           <div class='col-md-1'>Sub2</div>
           <div class='col-md-1'>Sub3</div>
           <div class='col-md-1'>Sub4</div>
           <div class='col-md-1'>Sub5</div>
           <div class='col-md-1'>Sub6</div>
        </div>
        </div>
        <div class='card-body'>
         <div class='row'>
           <div class='col-md-4'>$usn</div>
           <div class='col-md-1'>$sub1</div>
           <div class='col-md-1'>$sub2</div>
           <div class='col-md-1'>$sub3</div>
           <div class='col-md-1'>$sub4</div>
           <div class='col-md-1'>$sub5</div>
           <div class='col-md-1'>$sub6</div>
          </div>
        </div>
      </div>";
			break;
	 case '2':
			     $sql="SELECT * FROM internal2 WHERE usn='$usn'";
			     $run=mysqli_query($con,$sql);
			     $row=mysqli_fetch_array($run);
			         $sub1=$row['sub1'];
                     $sub2=$row['sub2'];
                     $sub3=$row['sub3'];
                     $sub4=$row['sub4'];
                     $sub5=$row['sub5'];
                     $sub6=$row['sub6'];
                     echo "<div class='card'>
        <h3 class='text-center'>2nd Internal Marks</h3>
        <div class='card-header bg-info'>
         <div class='row'>
          <div class='col-md-4'>USN</div>
           <div class='col-md-1'>Sub1</div>
           <div class='col-md-1'>Sub2</div>
           <div class='col-md-1'>Sub3</div>
           <div class='col-md-1'>Sub4</div>
           <div class='col-md-1'>Sub5</div>
           <div class='col-md-1'>Sub6</div>
        </div>
        </div>
        <div class='card-body'>
         <div class='row'>
           <div class='col-md-4'>$usn</div>
           <div class='col-md-1'>$sub1</div>
           <div class='col-md-1'>$sub2</div>
           <div class='col-md-1'>$sub3</div>
           <div class='col-md-1'>$sub4</div>
           <div class='col-md-1'>$sub5</div>
           <div class='col-md-1'>$sub6</div>
          </div>
        </div>
      </div>";
			break;
	case '3':
			     $sql="SELECT * FROM internal3 WHERE usn='$usn'";
			     $run=mysqli_query($con,$sql);
			     $row=mysqli_fetch_array($run);
			         $sub1=$row['sub1'];
                     $sub2=$row['sub2'];
                     $sub3=$row['sub3'];
                     $sub4=$row['sub4'];
                     $sub5=$row['sub5'];
                     $sub6=$row['sub6'];
                     echo "<div class='card'>
        <h3 class='text-center'>3rd Internal Marks</h3>
        <div class='card-header bg-info'>
         <div class='row'>
          <div class='col-md-4'>USN</div>
           <div class='col-md-1'>Sub1</div>
           <div class='col-md-1'>Sub2</div>
           <div class='col-md-1'>Sub3</div>
           <div class='col-md-1'>Sub4</div>
           <div class='col-md-1'>Sub5</div>
           <div class='col-md-1'>Sub6</div>
        </div>
        </div>
        <div class='card-body'>
         <div class='row'>
           <div class='col-md-4'>$usn</div>
           <div class='col-md-1'>$sub1</div>
           <div class='col-md-1'>$sub2</div>
           <div class='col-md-1'>$sub3</div>
           <div class='col-md-1'>$sub4</div>
           <div class='col-md-1'>$sub5</div>
           <div class='col-md-1'>$sub6</div>
          </div>
        </div>
      </div>";
			break;
		
		
	}
}
?> 