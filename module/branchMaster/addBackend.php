<?php include '../connect.php'; ?>
<?php require '../config.php';?>
<?php
if (isset($_POST['submit'])) {
    $branchName = $_POST['branchName'];
    $branchLogo = $_FILES['branchLogo']["name"];
    $establishmentDate = $_POST['establishmentDate'];
    $gstNumber = $_POST['gstNumber'];
    $cinNumber = $_POST['cinNumber'];

    $countryBranch = $_POST['countryBranch'];
    $stateBranch = $_POST['stateBranch'];
    $cityBranch = $_POST['cityBranch'];
    $pincodeBranch = $_POST['pincodeBranch'];
    $addressBranch = $_POST['addressBranch'];

    $ownerName = $_POST['ownerName'];
    $contactNumber = $_POST['contactNumber'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $bankName = $_POST['bankName'];
    $ifscCode = $_POST['ifscCode'];
    $bankBranch = $_POST['bankBranch'];
    $accountNumber = $_POST['accountNumber'];
} { {
        $x = array(
            'branchName' => "'" . $branchName . "'",
            'branchLogo' => "'" . $branchLogo . "'",
            'establishmentDate' => "'" . $establishmentDate . "'",
            'gstNumber' => "'" . $gstNumber . "'",
            'cinNumber' => "'" . $cinNumber . "'",

            'countryBranch' => "'" . $countryBranch . "'",
            'stateBranch' => "'" . $stateBranch . "'",
            'cityBranch' => "'" . $cityBranch . "'",
            'pincodeBranch' => "'" . $pincodeBranch . "'",
            'addressBranch' => "'" . $addressBranch . "'",

            'ownerName' => "'" . $ownerName . "'",
            'contactNumber' => "'" . $contactNumber . "'",
            'gender' => "'" . $gender . "'",
            'email' => "'" . $email . "'",

            'bankName' => "'" . $bankName . "'",
            'ifscCode' => "'" . $ifscCode . "'",
            'bankBranch' => "'" . $bankBranch . "'",
            'accountNumber' => "'" . $accountNumber . "'",

        );
    }

    $col = implode(',', array_keys($x));
    $val = implode(',', array_values($x));

    $sql = "INSERT INTO branch_master ($col) VALUES ($val)";

    if ($conn->query($sql) === TRUE) {

        $query = "select max(id) from branch_master";
        $results = mysqli_query($conn, $query);

        foreach ($results as $r) {
        }
        $id = $r['max(id)'];
        $insertID =  $id;
        $folderPath = "E:/PHP/htdocs/GarageMgtSystem/Upload/branchMaster/" . $insertID;
        $path = "E:/PHP/htdocs/GarageMgtSystem/Upload/branchMaster/" . $insertID . "/";

        $exist = is_dir($folderPath);
        if (!$exist) {
            mkdir($folderPath);
        }
        // $target_dir = "upload/product/";
        $target_file1 = $path . basename($_FILES["branchLogo"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["branchLogo"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["branchLogo"]["tmp_name"], $target_file1)) {
                echo "The file " . htmlspecialchars(basename($_FILES["branchLogo"]["name"])) . " has been uploaded.";
                
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
       
        echo '<script type=text/javascript>';
        echo 'alert("Branch Data Inserted Succefully!");';
        echo 'window.location.href = "http://localhost:8080/GarageMgtSystem/module/branchMaster/list.php"';
        echo '</script>';

    } else {
        die(mysqli_error($conn));
    }
}
?>

