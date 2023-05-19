<?php include '../header.php'; ?>
<!-- List -->
<!--  -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Manage transaction</h4>
                <hr>
                <button class="btn btn-primary my-5"><a href="invoice_header.php" class="text-light">Add transaction</a></button>
                <div class="table-responsive">
                    <table id="dataTableinvoice_header" class="table table-striped table-bordered display nowrap" style="width:100%">
                        <thead>
                            <tr> 
                            <th>SRNO.</th>  
                            <th>Item Name</th>  
                            <th>Quantity</th>  
                            <th>Unit</th> 
                            <th>Sale Price</th>  
                            <th>Diss%</th>  
                            <th>Amount</th>
                        
                             
                            </tr>
                        </thead>

                        <!-- Fetching Data -->
                        <?php include '../connect.php'; ?>
                        <?php

                        $sql = 'SELECT * FROM `invoice_line`';
                        $res = mysqli_query($conn, $sql);

                        while ($rows = mysqli_fetch_assoc($res)) {
                            $id = $rows['id'];
                            $itemName = $rows['itemName'];
                            $quntt = $rows['quntt'];
                            $unit = $rows['unit'];
                            $sprice = $rows['sprice'];
                            $diss = $rows['disc'];
                            $amount= $rows['amount'];

                            echo '<tr>
                                    <th>' . $id . '</th>

                                    <td>
                                        <button class="btn btn-primary">
                                            <a href="edit.php?id=' . $id . '" class="text-light">Edit</a>
                                        </button>

                                        <button class="btn btn-danger">
                                            <a href="delete.php? deleteid=' . $id . '" class="text-light">Delete</a>
                                        </button>
                                    </td>

                                    <td class="" name="id">1</td>  
                                <td><input type="text" class="form-control itemname" name="itemname[]"></td>  
                                <td><input type="text" class="form-control quantity" name="quantity[]"></td>
                                <td><input type="text" class="form-control unit" name="unit[]"></td>    
                                <td><input type="text" class="form-control sprice" name="sprice[]"></td>  
                                <td><input type="text" class="form-control gst" name="gst[]"></td>  
                                <td><input type="text" class="form-control tax" name="tax[]"></td>  
                                <td><input type="text" class="form-control amount" name="amount[]"></td>  
                                <td><a href="#" class="remove">Delete</td>  
                                    
                                </tr>'
                        ?>
                  <th style="text-align:center;" class="total">0<b></b></th>  

                        <?php
                        }
                        ?>

                    </table>
                </div> <!-- /.table-stats -->
            </div>
        </div>
    </div>
</div>
<!-- End List -->
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
            $('#dataTableinvoice_line').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'excelHtml5',
                        title: 'invoice_line_List',
                        // filename: 'Branch_List',
                        text: 'Click Here to Download Excel Report',
                        orientation: 'landscape',
                        pageSize: 'A4',
                        exportOptions: {
                    modifier: {
                        selected: null
                    },
                    columns: [ 0, 2, 3 ]
                    }
                },
                {
                extend: 'print',
                title:'invoice_line_List',
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
                     columns: [ 0, 2, 3 ]
                }
            }

                ]
            });
        });
        $('.buttons-print, .buttons-excel').addClass('btn btn-primary my-5');
    </script>

    
</body>


<!-- Mirrored from themedesigner.in/demo/wrappixel/admin-template/xtreme/html/ltr/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jun 2018 05:50:14 GMT -->

</html>