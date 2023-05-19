<?php include './header.php'?>
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Quotation Master</h4>
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
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
               
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-black">Invoice</h4>
                            </div>
                            <form action="invoice_backend.php"  method="POST">
                               
                                <div class="form-body">
                                    <div class="card-body">
                                        <div class="row p-t-20">
                                          <div class="col-md-2">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Branch ID :</label>
                                                    <select class="form-control custom-select" id="branchID" name="branchID">
                                                        <option value="">select ID</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="control-label">Quotation No:</label>
                                                    <input type="number" class="form-control" id="invoiceno" name="invoiceno">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="control-label">Date :</label>
                                                    <input type="date" class="form-control" id="date" name="date">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="control-label">E-Way Bill No:</label>
                                                    <input type="number" class="form-control" id="billno" name="billno">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Terms of Payment:</label>
                                                    <select class="form-control custom-select" id="top" name="top">
                                                        <option value="">select ID</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Delivery Note:</label>
                                                    <input type="number" class="form-control" id="deliveryNote" name="deliveryNote">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Delivery Date:</label>
                                                    <input type="date" class="form-control" id="deliverydate" name="deliverydate">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Bill To</label>
                                                    
                                                    <select class="form-control custom-select" id="custID" name="custID">
                                                        <option value=""></option>
                                                       
                                                    </select>
                                                    <button class="btn btn-success plusBtn" type="button" ><i class="fa fa-plus"></i>Customer</button>
                                                    </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="control-label">Referance No:</label>
                                                    <input type="text" id="firstName" class="form-control" placeholder="" id="refno" name="refno">
                                                     </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="control-label">Other Referance:</label>
                                                    <input type="text" class="form-control" id="otherRef" name="otherRef">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="control-label">Order No:</label>
                                                    <input type="number" class="form-control" id="orderno" name="orderno">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="control-label">Dated:</label>
                                                    <input type="date" class="form-control" id="orderdate" name="orderdate">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Dispatch Document No:</label>
                                                    <input type="number" class="form-control" id="dispatchdocNo" name="dispatchdocNo">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="control-label">Destination:</label>
                                                    <input type="text" class="form-control" id="destination" name="destination">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Dispatch through:</label>
                                                    <input type="text" class="form-control" id="dispatch" name="dispatch">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="control-label">terms of Delivery:</label>
                                                    <input type="text" class="form-control" id="termOfDelivery" name="termOfDelivery">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                               
                                <h4 class="m-b-0 text-black">Particulars</h4>
                                <div class="row p-t-20" id="add_item">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <select class="form-control custom-select" id="itemName" name="itemName[]" placeholder="itemName" onchange="selectProduct()">
                                                        <option value=""></option>
                                                        <?php
                                                                $k=$_POST['id'];
                                                                $k=trim($k);
                                                                include '../connect.php';
                                                                $sql = "SELECT * FROM product where productnm='{$k}' ";
                                                                  $res=mysqli_query($con,$sql);
                                                                while($rows = mysqli_fetch_array($res)){
                                                                
                                                            ?>
                                                                 <option value="<?php echo $rows["productnm"];?>"><?php echo $rows["productnm"];?></option>  
                                                                 <tr>
                                                                     <td><?php echo $rows['itemName'];?></td>
                                                                     <td><?php echo $rows['quntt'];?></td>
                                                                     <td><?php echo $rows['unit'];?></td>
                                                                     <td><?php echo $rows['sprice'];?></td>
                                                                     <td><?php echo $rows['diss'];?></td>
                                                                     <td><?php echo $rows['amount'];?></td>

                                                                </tr> 
                                                            <?php
                                                        }
                                                        echo $sql;
                                                    ?>
                                        </select> 
                                        <button class="btn btn-success" style="padding-right: 15px;"> +Add Item </button>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="hsn" name="hsn[]" placeholder="HSN/SAC">
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="gst" name="gst[]" placeholder="GST Rate">
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="quntt" name="quntt[]" placeholder="Quantity">
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="unit" name="unit[]" placeholder="Unit">
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="sprice" name="sprice[]" placeholder="Sale Price">
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                    <div class="form-group">
                                            <input type="text" class="form-control" id="diss" name="diss[]" placeholder="Discount">
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <button class="btn btn-success plusBtn" type="button" ><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <textarea class="form-control" id="description" name="description[]" placeholder="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="amount" name="amount[]" placeholder="Amount">

                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                        <div class="card-body">
                                            <button type="submit" id="submit" name="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                            <button type="button" class="btn btn-dark">Cancel</button>
                                        </div>
                                    </div>
                        </div>
                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                
                <!-- Row -->
               
               
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            
<?php include './footer.php'?>
<script src="../../assets/libs/jquery.repeater/jquery.repeater.min.js"></script>
    <script src="../../assets/extra-libs/jquery.repeater/repeater-init.js"></script>
    <script src="../../assets/extra-libs/jquery.repeater/dff.js"></script>
    <script>
       function selectProduct() {
           var x = document.getElementById("itemName").value;
           $.ajax(
               {
                  
                   method: "POST",
                   data:{
                       id:x
                   },
                   success:function(data){
                       $("#ans").html(data);
                   }
               } )
       }
</script>