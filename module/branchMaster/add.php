<?php require '../header.php'; ?>
<?php require '../connect.php'; ?>

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Branch Master</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Add Branch</h4>
                </div>
                <div class="card-body wizard-content">
                    <form action="addBackend.php" method="POST" enctype="multipart/form-data" type="submit" name="branchMaster" id="branchMaster" class="validation-wizard wizard-circle m-t-40">
                        <!-- Step 1 -->
                        <h6>Branch Info</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="branchName">Branch Name : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control    " id="branchName" name="branchName">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Logo : </label>
                                        <input type="file" class="form-control " id="branchLogo" name="branchLogo">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="establishmentDate">Establishment : <span class="danger">*</span></label>
                                        <input type="date" class="form-control  " id="establishmentDate" name="establishmentDate">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gstNumber"> GST Number : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control  " id="gstNumber" name="gstNumber">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cinNumber"> Cin Number : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control  " id="cinNumber" name="cinNumber">
                                    </div>
                                </div>
                                <div class="col-md-6">

                                </div>
                            </div>
                        </section>
                        <!-- Step 2 -->
                        <h6>Branch Address</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="countryBranch"> Country : <span class="danger">*</span> </label>
                                        <select name="countryBranch" id="countryBranch" class="form-control">
                                            <option value="">--Select Country--</option>
                                            <?php 
                                                $sql = "SELECT * FROM country_master";
                                                $result = mysqli_query($conn, $sql);
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    // echo "<option value='".$row[0]."'>".$row[1]."</option>";
                                                    echo $row;
                                                }
                                             ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stateBranch"> State : <span class="danger">*</span> </label>
                                        <select name="stateBranch" id="stateBranch" class="form-control">
                                        <option value="">--Select State--</option>
                                            <?php 
                                                $state_id = $_GET['id'];
                                                $sql = "SELECT * FROM state_master";      
                                                $result = $conn->query($sql);
                                                while($row = $result->fetch_array()) {
                                                    echo "<option value='".$row[0]."'>".$row[1]."</option>";
                                                }
                                             ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cityBranch"> Town/City : <span class="danger">*</span> </label>
                                        <select name="cityBranch" id="cityBranch" class="form-control">
                                            <option value="">Kolhapur</option>
                                            <option value="">Pune</option>
                                            <option value="">Mumbai</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pincodeBranch"> Pin Code : </label>
                                        <input type="text" class="form-control  " id="pincodeBranch" name="pincodeBranch">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="addressBranch"> Street : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control  " id="addressBranch" name="addressBranch">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Step 3 -->
                        <h6>Branch Manager</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ownerName">Owner Name :</label>
                                        <input type="text" class="form-control  " id="ownerName" name="ownerName">
                                    </div>
                                    <div class="form-group">
                                        <label for="contactNumber"> Contact : </label>
                                        <input type="text" class="form-control  " id="contactNumber" name="contactNumber">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Gender :</label>
                                        <select class="custom-select form-control  " id="gender" data-placeholder="Type to search cities" name="gender">
                                            <option value="">-- Select Gender --</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="email"> Email : </label>
                                        <input type="text" class="form-control  " id="email" name="email">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Step 4 -->
                        <h6>Bank Details</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bankName">Bank Name :</label>
                                        <input type="text" class="form-control  " id="bankName" name="bankName">
                                    </div>
                                    <div class="form-group">
                                        <label for="ifsc">IFSC Code : </label>
                                        <input type="text" class="form-control  " id="ifscCode" name="ifscCode">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bankBranch">Branch :</label>
                                        <input type="text" class="form-control  " id="bankBranch" name="bankBranch">
                                    </div>
                                    <div class="form-group">
                                        <label for="accountNumber">Account Number :</label>
                                        <input type="text" class="form-control  " id="accountNumber" name="accountNumber">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="submit" name="submit" style="display:none;"></button>
                        </section>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
<?php require '../footer.php'; ?>