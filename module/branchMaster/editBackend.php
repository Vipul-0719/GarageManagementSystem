<!-- Update Query Page -->

<?php
include '../connect.php';

$id = $_GET['id'];
$branchName = $_GET['branchName'];
$branchLogo = $_GET['branchLogo'];
$establishmentDate = $_GET['establishmentDate'];
$gstNumber = $_GET['gstNumber'];
$cinNumber = $_GET['cinNumber'];

$countryBranch = $_GET['countryBranch'];
$stateBranch = $_GET['stateBranch'];
$cityBranch = $_GET['cityBranch'];
$pincodeBranch = $_GET['pincodeBranch'];
$addressBranch = $_GET['addressBranch'];

$ownerName = $_GET['ownerName'];
$contactNumber = $_GET['contactNumber'];
$gender = $_GET['gender'];
$email = $_GET['email'];

$bankName = $_GET['bankName'];
$ifscCode = $_GET['ifscCode'];
$bankBranch = $_GET['bankBranch'];
$accountNumber = $_GET['accountNumber'];

$query="UPDATE `branch_master` SET `branchName` = '$branchName',`branchLogo` = '$branchLogo', `establishmentDate` = '$establishmentDate', `gstNumber` = '$gstNumber', `cinNumber` = '$cinNumber', `countryBranch` = '$countryBranch', `stateBranch` = '$stateBranch', `cityBranch` = '$cityBranch', `pincodeBranch` = '$pincodeBranch', `addressBranch` = '$addressBranch', `ownerName` = '$ownerName', `contactNumber` = '$contactNumber', `gender` = '$gender', `email` = '$email', `bankName` = '$bankName', `ifscCode` = '$ifscCode', `bankBranch` = '$bankBranch',`accountNumber`='$accountNumber' WHERE `branch_master`.`id` = $id";

$result = mysqli_query($conn,$query);

if($result)
{
    echo '<script>';
    echo 'alert("Branch Data Updated Succefully!");';
    echo 'window.location.href = "http://localhost:8080/GarageMgtSystem/module/branchMaster/list.php"';
    echo '</script>';

}
else
{
    die(mysqli_error($conn));
}

?>


