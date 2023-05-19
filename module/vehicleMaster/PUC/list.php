
<!DOCTYPE html>
<html lang="en">
<?php include '../../header.php';?>
 <?php include '../../connect.php';?>    
    <body> 
    <div class="row">
     <div class="col-12">
        <div class="card">
         <div class="card-body">
            <h4 class="card-title">PUC List</h4>
            <hr>
            <button class="btn btn-primary my-5"><a href="add.php" class="text-light">Add PUC</a></button>
                <div class="table-responsive">
                 <table id="dataTablePUC" class="table table-striped table-bordered display nowrap" style="width:100%">
          
            <thead>
              <tr>
                                      <th><b>ID</b></th>
                                      <th><b>Actions</b></th>
                                      <th><b>VehicleName</b></th>
									<th><b>LicenceNumber</b></th>
                                    <th><b>PUCNumber</b></th> 
									<th><b>CenterName</b></th>	
									<th><b>CenterAddress</b></th>		
									<th><b>TestDate</b></th> 
									<th><b>ValidTill</b></th>	
                                    <th><b>Result</b></th>
									<th><b>FailReason</b></th>
									 
              </tr>
            </thead>
            <?php 
            $sql = 'SELECT * FROM `pucinfo`';
            $result= mysqli_query($conn,$sql);
            if($result){
                while($rows = mysqli_fetch_array($result) ){
            $id = $rows['id']; 
            $vname= 	$rows['vname'];     
            $lnumber= 	$rows['lnumber'];
            $pucnumber= 	$rows['pucnumber'];
			$cname= 	$rows['cname'];
			$caddress= 	$rows['caddress'];
			$tdate= 	$rows['tdate'];
			$valid= 	$rows['valid'];
            $res= 	$rows['res'];
			$freason= 	$rows['freason'];
            echo'<tr>
                   <th scope="row">' .$id.'</th>
                   <td>
                <button class="btn btn-primary">
                <a href="edit.php?id=' . $id . '" class="text-light">Edit</a>
            </button>
            <button class="btn btn-danger">
                <a href="delete.php? deleteid=' . $id . '" class="text-light">Delete</a>
            </button>
              </td>
                   <td>' .$vname. '</td>
                   <td>' .$lnumber. '</td>
                   <td>' .$pucnumber. '</td>
                   <td>' .$cname. '</td>
                   <td>' .$caddress. '</td>
                   <td>' .$tdate. '</td>
                   <td>' .$valid. '</td>
                   <td>' .$res. '</td>
                   <td>' .$freason. '</td>
                
             </tr>';
                }
             ?>
            <?php
                }
             ?>
        <!-- </tbody> -->
            </table>
            </div>
                            </div>
                        </div>
                    </div>
                </div>
           <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        Designed and Developed by <a href="https://wolfox.in/">Wolfox</a>.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
   
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url . 'assets/libs/jquery/dist/jquery.min.js'; ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url . 'assets/libs/popper.js/dist/umd/popper.min.js'; ?>"></script>
    <script src="<?php echo base_url . 'assets/libs/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>
    <!-- apps -->
    <script src="<?php echo base_url . 'dist/js/app.min.js'; ?>"></script>
    <script src="<?php echo base_url . 'dist/js/app.init.js'; ?>"></script>
    <script src="<?php echo base_url . 'dist/js/app-style-switcher.js'; ?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url . 'assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js'; ?>"></script>
    <script src="<?php echo base_url . 'assets/extra-libs/sparkline/sparkline.js'; ?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url . 'dist/js/waves.js'; ?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url . 'dist/js/sidebarmenu.js'; ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url . 'dist/js/custom.js'; ?>"></script>
    <script src="<?php echo base_url . 'assets/libs/jquery-steps/build/jquery.steps.min.js'; ?>"></script>
    <script src="<?php echo base_url . 'assets/libs/jquery-validation/dist/jquery.validate.min.js'; ?>"></script>


    <!--Data Table JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/autofill/2.3.7/js/dataTables.autoFill.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dataTablePUC').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'excelHtml5',
                        title: 'PUC_List',
                        // filename: 'Branch_List',
                        text: 'Click Here to Download Excel Report',
                        orientation: 'landscape',
                        pageSize: 'A4',
                        exportOptions: {
                    modifier: {
                        selected: null
                    },
                    columns: [ 0, 2, 3, 4, 5,6 ,7,8,9,10 ]
                    }
                },
                {
                extend: 'print',
                title:'PUC_List',
                // filename:'Branch_List',
                text: 'Click here to Download / Print Report',
                orientation: 'landscape',
                pageSize: 'A4',
                customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '16pt' )
                         ;
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                },
                exportOptions: {
                    modifier: {
                        selected: null
                    },
                     columns: [ 0, 2, 3, 4, 5,6 ,7,8,9,10 ]
                }
            }

                ]
            });
        });
        $('.buttons-print, .buttons-excel').addClass('btn btn-primary my-5');
    </script>

    <script>
        var form = $(".validation-wizard").show();

        $(".validation-wizard").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: "Submit"
            },
            onStepChanging: function(event, currentIndex, newIndex) {
                return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
            },
            onFinishing: function(event, currentIndex) {
                return form.validate().settings.ignore = ":disabled", form.valid()
            },
            onFinished: function(event, currentIndex) {
                $('button[type="submit"]').trigger('click');
            }
        }), $(".validation-wizard").validate({
            ignore: "input[type=hidden]",
            errorClass: "text-danger",
            successClass: "text-success",
            highlight: function(element, errorClass) {
                $(element).removeClass(errorClass)
            },
            unhighlight: function(element, errorClass) {
                $(element).removeClass(errorClass)
            },
            errorPlacement: function(error, element) {
                error.insertAfter(element)
            },
            rules: {
                email: {
                    email: !0
                }
            }
        })
    </script>
</body>


<!-- Mirrored from themedesigner.in/demo/wrappixel/admin-template/xtreme/html/ltr/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jun 2018 05:50:14 GMT -->

</html>
