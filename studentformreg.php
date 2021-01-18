<?php
// connection
 include ('connect.php');

 // Post Request
$sname=$_POST['sname'];
$stfathername=$_POST['stfathername'];
$stmothername=$_POST['stmothername'];
$stdob=$_POST['stdob'];
$stclass=$_POST['stclass'];
$stgender=$_POST['stgender'];
$stustatus=$_POST['stustatus'];
$stuadno=$_POST['stuadno'];
$stuayear=$_POST['stuayear'];
$stareapincode=$_POST['stareapincode'];
$stureligion=$_POST['stureligion'];
$stuemail=$_POST['stuemail'];
$stupassword=$_POST['stupassword'];
$stupemail=$_POST['stupemail'];
$stuppassword=$_POST['stuppassword'];
$stucontact=$_POST['stucontact'];
$stuptcontact=$_POST['stuptcontact'];
$stuaddress=$_POST['stuaddress'];
$stupaddress=$_POST['stupaddress'];
$stuimage=$_POST['stuimage'];
$stusign=$_POST['stusign'];
$stupimage=$_POST['stupimage'];
$stupsign=$_POST['stupsign'];

// Attempt insert query execution for student table
$sql = "INSERT INTO students(
    s_name, 
    s_email, 
    s_password, 
    s_contact, 
    s_dob, 
    s_class, 
    s_adhar_no, 
    s_address, 
    st_pincode, 
    s_en_year, 
    s_religion, 
    s_gender, 
    s_status, 
    s_photo, 
    s_signature, 
    s_reg_date
)
VALUES(
    '$sname', 
    '$stuemail',
    '$stupassword', 
    '$stucontact', 
    '$stdob', 
    '$stclass', 
    '$stuadno', 
    '$stuaddress', 
    '$stareapincode', 
    '$stuayear', 
    '$stureligion', 
    '$stgender', 
    '$stustatus', 
    '$stuimage', 
    '$stusign', 
    '$stdob'
)";

//executing query to insert data into students
if(mysqli_query($conn, $sql)){
echo "Data Inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

//inserting the same into table and row
$idquery = "SELECT s_id FROM students WHERE s_email = '$stuemail'";
$idqueryresult = mysqli_query($conn, $idquery);
$idqueryresult = mysqli_fetch_array($idqueryresult);
$idqueryresult = $idqueryresult['s_id'];

//inserting data into parents table
$sql1 = "INSERT INTO parents(
    p_email, 
    p_password, 
    p_contact, 
    p_address, 
    p_father_name, 
    p_mother_name, 
    p_photo, 
    p_signature,
    s_id 
) 
VALUES(
    '$stupemail',
    '$stuppassword',
    '$stuptcontact',
    '$stupaddress',
    '$stfathername',
    '$stmothername',
    '$stupimage',
    '$stupsign',
    '$idqueryresult'
)";
if(mysqli_query($conn, $sql1)){
echo "Data Inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}
// Close connection
mysqli_close($conn);

?>