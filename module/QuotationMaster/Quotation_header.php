<?php include '../header.php' ?>
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
        <!-- <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <div class="m-r-10">
                                <div class="lastmonth"></div>
                            </div>
                            <div class=""><small>LAST MONTH</small>
                                <h4 class="text-info m-b-0 font-medium">$58,256</h4></div>
                        </div>
                    </div>-->
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->

    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-black">Quotation</h4>
                </div>
                <form action="Quotation_Backend.php" method="POST">

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
                                        <input type="number" class="form-control" id="quotationno" name="quotationno">
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
                                        <button class="btn btn-success plusBtn" type="button"><i class="fa fa-plus"></i>Customer</button>
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
                                        <select class="form-control custom-select" id="productnm" name="productnm[]" placeholder="itemName">
                                            <option value=""></option>
                                            <?php
                                            include '../connect.php';
                                            $query = "SELECT * FROM product";
                                            $results = mysqli_query($conn, $query);
                                            //loop
                                            foreach ($results as $r) {
                                            ?>
                                                <option value="<?php echo $r["id"] . ',' . $r["productnm"]; ?>"><?php echo $r["productnm"]; ?></option>
                                            <?php
                                            }
                                            ?>



                                        </select>
                                        <!--<input type="text" class="form-control" id="productnm" name="productnm[]" onkeyup="GetDetail(this.value)" value="" placeholder="GST Rate" >-->
                                        <button class="btn btn-success" style="padding-right: 15px;"> +Add Item </button>
                                    </div>

                                </div>
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="hsnno" name="hsnno[]" placeholder="HSN/SAC">
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="gst" name="gst[]" placeholder="GST Rate">
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="qty" name="qty[]" placeholder="Quantity">
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
                                        <input type="text" class="form-control" id="disc" name="disc[]" placeholder="Discount">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <button class="btn btn-success plusBtn" type="button"><i class="fa fa-plus"></i></button>
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

<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->

<?php include '../footer.php' ?>
<script src="../../assets/libs/jquery.repeater/jquery.repeater.min.js"></script>
<script src="../../assets/extra-libs/jquery.repeater/repeater-init.js"></script>
<script src="../../assets/extra-libs/jquery.repeater/dff.js"></script>
<script>
    $(document).ready(function() {
        //var room = 1;
        var room1 = 1;
        $(".plusBtn").on('click', function(event) {
            //alert('test');
            room1++;
            var divtest = '<div class="col-md-4 form-group removeclass' + room1 + '"><select class="form-control" id=itemName' + room1 + '" name="itemName[]" ></select></div><div class="col-md-1 form-group removeclass' + room1 + '"><input type="text" class="form-control" placeholder="HSN/SAC" name="hsn[]" id="hsn' + room1 + '"></div><div class="col-md-1 form-group removeclass' + room1 + '"><input type="text" class="form-control" id=gst' + room1 + '" name="gst[]" placeholder="GST"></div><div class="col-md-1 form-group removeclass' + room1 + '"><input type="text" class="form-control" id=quntt' + room1 + '" name="quntt[]" placeholder="quantity"></div><div class="col-md-1 form-group removeclass' + room1 + '"><input type="text" class="form-control" id=unit' + room1 + '" name="unit[]" placeholder="Unit"></div><div class="col-md-1 form-group removeclass' + room1 + '"><input type="text" class="form-control" id=sprice' + room1 + '" name="sprice[]" placeholder="Rate"></div><div class="col-md-1 form-group removeclass' + room1 + '"><input type="text" class="form-control" id=diss' + room1 + '" name="diss[]" placeholder="Discount"></div><div class="col-sm-2 form-group removeclass' + room1 + '"><button class="btn btn-success btnRemove1" type="button" id="' + room1 + '" > <i class="fa fa-minus"></i> </button> </div><div class="col-md-8 form-group removeclass' + room1 + '"><textarea class="form-control" id=description' + room1 + '" name="description[]" placeholder="Description"></textarea></div><div class="col-md-2 form-group removeclass' + room1 + '"><input type="text" class="form-control" id=amount' + room1 + '" name="amount[]" placeholder="Amount"></div>';
            $("#add_item").append(divtest);
        });
    });
    $(document).on('click', ".btnRemove1", function() {
        var rid1 = this.id;
        //alert(rid1);
        $('.removeclass' + rid1).remove();
    });
</script>
<!--<script>
       function selectProduct() {
           var x = document.getElementById("itemName").value;
           $.ajax(
               {
                  
                   method: "POST",
                   data:{
                       id:x
                   },
                   success:function(data){
                       $("#ans").html(data;)
                   }
               } )
       }
</script>
<script>
    function fetch_select(val)
{
    $.ajax
    ({
    type: 'post',
    url: 'invoice_backend.php',
    data: 
    {
        get_option:val
    },
    success: function (response) 
    {
        $('#hsn').val(response);
    }
});
}
</script>-->

<!--<script>
  
  // onkeyup event will occur when the user 
  // release the key and calls the function
  // assigned to this event
  function GetDetail(str) {
      if (str.length == 0) {
          document.getElementById("hsnno").value = "";
          document.getElementById("qty").value = "";
          return;
      }
      else {

          // Creates a new XMLHttpRequest object
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function () {

              // Defines a function to be called when
              // the readyState property changes
              if (this.readyState == 4 && 
                      this.status == 200) {
                    
                  // Typical action to be performed
                  // when the document is ready
                  var myObj = JSON.parse(this.responseText);

                  // Returns the response data as a
                  // string and store this array in
                  // a variable assign the value 
                  // received to first name input field
                    
                  document.getElementById("hsnno").value = myObj[0];
                    
                  // Assign the value received to
                  // last name input field
                  document.getElementById("qty").value = myObj[1];
              }
          };

          // xhttp.open("GET", "filename", true);
          xmlhttp.open("GET", "invoice_backend.php?productnm=" + str, true);
            
          // Sends the request to the server
          xmlhttp.send();
      }
  }
</script>-->
<!--<script>
$(document).ready(function(){

$("#productnm").change(function(){
    var deptid = $(this).val();

    $.ajax({
        url: 'invoicebackend.php',
        type: 'post',
        data: {depart:deptid},
        dataType: 'json',
        success:function(response){

            var len = response.length;

            $("#hsnno").empty();
            for( var i = 0; i<len; i++){
                var id = response[i]['id'];
                var name = response[i]['hsnno'];
                
                $("#hsnno").append("<option value='"+id+"'>"+name+"</option>");

            }
        }
    });
});

});
</script>-->
<script>
    //start of head name
    $(document).ready(function() {

        $('#productnm').change(function() {
            var productnm = this.value;
            alert(productnm);

            $.ajax({
                url: "Quotation_Backend.php",
                method: "POST",
                dataType: "JSON",
                data: {
                    productnm: productnm
                },

                success: function(data) {
                    alert('test');
                    console.log(data);
                    $("#hsnno").val(data.hsnno);
                    $("#gst").val(data.gst);
                    $("#qty").val(data.qty);
                    $("#unit").val(data.unit);
                    $("#amount").val(data.rate);
                    $("#sprice").val(data.sprice);
                    $("#disc").val(data.disc);
                }
            });


        });
    });
</script>
<!--<script>
    $(document).ready(function(){

  $.ajax({

    url: 'invoice_backend.php' ,
    data:"",
    dataType: 'json',
    success:function(data){
        var elementArray = new Array();         //creating the array
        elementArray = data.split("");          //splitting the string which was passed using json_encode()


        var hsnno = elementArray[0];               //passing values corresponding to the columns
        var gst = elementArray[1];
        var qty = elementArray[2];
        var unit = elementArray[3];
        var amount = elementArray[4];


    $("<div>", {                        //creating a new div element and assiging the value and appending it to the column 1
        "class":"cell",
        "text":hsnno
    }) 
    .appendTo("document.body");
    $("<div>", {                        //cloumn 2 value
                "class":"cell",
                "text":gst
            })
            .appendTo("document.body");

            $("<div>", {                        //cloumn 3 value
                "class":"cell",
                "text":qty
            })
            .appendTo("document.body");

            $("<div>", {                        //cloumn 4 value
                "class":"cell",
                "text":unit
            })
            .appendTo("document.body");

            $("<div>", {                        //cloumn 5 value
                "class":"cell",
                "text":amount
            })
            .appendTo("document.body");

            }       

    });

  });

 </script>