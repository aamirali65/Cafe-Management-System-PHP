<?php
include('header.php');

?>
<style type="text/css">
.card_data {
    box-shadow: 5px 11px 28px #ccc !important;
    height: 110px;
    text-align: center;

}

.card {
    margin-bottom: 5px !important;
}

.col-md-3 {
    padding: 6px !important
}

.col-md-3 .card-body {
    padding-left: 5px !important;
    padding-right: 5px !important;
}
</style>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Order</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                <li class="breadcrumb-item active">Order</li>
            </ol>
        </div>
        <div class="">

        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputEmail1">Table no</label>
                                        <select name="cat" class="form-control" id="tno">
                                            <option selected value="0" hidden>Select One </option>




                                            <?php
                      foreach ($ob->sel_table() as $bb) {

                        echo ("<option value='" . $bb['id'] . "'>Order " . $bb['name'] . " </option>");
                      }
                      ?>
                                        </select>
                                    </div>

                                    <div class="col-md-12">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <?php
                      foreach ($ob->sel_cat() as $bb) {

                        // echo("<option value='".$bb['id']."'> ".$bb['name']." </option>");
                        echo ('<li class="nav-item cat_sel" value="' . $bb['id'] . '">
      <a class="nav-link"  value="' . $bb['id'] . '" data-toggle="tab" href="#' . $bb['name'] . '">' . $bb['name'] . '</a>
    </li>');
                      }



                      ?>

                                        </ul>


                                        <div class="row">
                                            <div class="col-md-8">
                                                <br>
                                                <br>

                                                <div id="cart_dataa">



                                                </div>
                                            </div>

                                            <div class="col-md-4">

                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Items</h4>

                                                        <div class="table-responsive">
                                                            <table id="printTable"
                                                                class="table color-bordered-table dark-bordered-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Qty</th>
                                                                        <th>@</th>

                                                                        <th>Action</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody id="items_inv">
                                                                    <tr>
                                                                        <td> -</td>
                                                                        <td>- </td>

                                                                        <td> -</td>
                                                                        <td class="text-nowrap">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                data-original-title="Close"> <i
                                                                                    class="fa fa-check text-danger"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <textarea class="form-control" rows="2" id="home_add"
                                                    placeholder="Enter Delivery Address"
                                                    style="display: none"></textarea>


                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <?php
                foreach ($ob->sel_setting() as $data) {

                  echo ('<input type="hidden" id="nu" value="' . $data['number'] . '">');
                  echo ('<input type="hidden" id="title" value="' . $data['logo'] . '">');
                  echo ('<input type="hidden" id="add_data"value="' . $data['address'] . '">');
                }
                ?>



                        </div>
                        <textarea class="form-control" rows="2" id="home_add" placeholder="Enter Delivery Address"
                            style="display: none"></textarea>

                        <br>




                    </div>


                    <div class="row">
                        <div class="form-group col-md-12">

                            <input type="button" name="tab" id="print_now" onclick="printit()" value="Print"
                                class="btn btn-info btn-block" placeholder="Items Name">
                        </div>

                    </div>

                    </form>
                </div>
            </div>


        </div>
    </div>


</div>
<div id="print-area-1" class="print-area">
</div>
<script>
var tno = document.getElementById('tno');
var cat_sel = document.getElementById('cat_sel');
var items_inv = document.getElementById('items_inv');
var i_name = "";
var tam = 0;
var retam = "";
var recam = "";
var rtn = 0;
var discount = 0;

function send_for_table() {
    $.ajax({
        type: "post",
        url: "main.php",
        data: {
            t_show: tno.value
        },
        success: function(response) {
            items_inv.innerHTML = null;
            var json = JSON.parse(response);
            for (let i = 0; i < json.length; i++) {
                items_inv.innerHTML += json[i];
            }
            iname = document.getElementsByName('i_name');
            qty = document.getElementsByName('qtys');
            price = document.getElementsByName('price');
            retam = document.getElementById('retam');
            recam = document.getElementById('recam');
            payment = document.getElementById('payment');
            discount = document.getElementById('dis');

            tam = parseInt(document.getElementById('tam').innerHTML);


        }
    });
}

tno.addEventListener('change', function() {
    send_for_table();
});
var cat_sel = document.getElementsByClassName('cat_sel');
for (let k = 0; k < cat_sel.length; k++) {
    cart_data = document.getElementById('cart_dataa');

    cat_sel[k].addEventListener('click', function() {

        $.ajax({
            type: "post",
            url: "main.php",
            data: {
                cat_v: this.getAttribute('value')
            },
            success: function(response) {
                var js = JSON.parse(response);
                console.log(js);
                cart_data.innerHTML = '';

                for (let a = 0; a < js.length; a++) {

                    cart_data.innerHTML +=
                        '<a onclick="additem(this)" data-item="add" data-i-id="' + js[a]['id'] +
                        '" data-toggle="tooltip" data-original-title="Close"> <div class="col-md-3" style="display: block;flex: 0;float: left;"> <div class="card card-body card_data"> ' +
                        js[a]["name"] + '<br> ' + js[a]["Price"] + ' </div> </div></a>'
                }




            }

        });

    });

}

function additem(i_id) {
    var tno = document.getElementById('tno').value;
    if (tno == '' || tno == 0) {
        alert('Please select order First');
    } else {
        $.ajax({
            type: "post",
            url: "main.php",
            data: {
                i_id: i_id.getAttribute('data-i-id'),
                t_id: document.getElementById('tno').value,
                i_sel: i_id.getAttribute('data-item')
            },
            success: function(response) {
                send_for_table();
            }
        });
    }
}


function changeam() {
    var sh = discount.value / 100;
    var ad = tam * sh;
    rtn = retam.innerHTML = (recam.value - (tam - ad)).toString();
}

function printit() {
    var oid = parseInt(document.getElementById('i_name').getAttribute('data-oid')) + 1;
    var print_area = document.getElementById('print-area-1');
    var tb = 0;
    var divToPrint = document.getElementById("printTable");
    var tm = 0;
    var disc = 0;
    var date = new Date();
    var rand = Math.ceil(Math.random() * 5000);
    var d = date.getMonth() + 1;
    var pri = document.getElementById('recam');
    var ap = date.getHours() >= 12 ? 'PM' : 'AM';
    var h = (date.getHours() + 12) + ':' + date.getMinutes() + ':' + date.getSeconds() + " " + ap;
    var nu = document.getElementById('nu').value;
    var title = document.getElementById('title').value;






    newWin = window.open("");
    // newWin.document.write('<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">');
    newWin.document.write('<link rel="stylesheet" href="css/some.css">');
    newWin.document.write('<div id="invoice-POS"> <center id="top"> <div class="info"> <h2>' + title +
        '</h2> </div><!--End Info--> <div class="info-down"> <div class="right"><span> Order  : ORD-' + oid +
        ' <span></div> <div class="left"><span>Time : ' + h + '<span></div> <div class="right"><span> Date : ' +
        date.getDate() + "-" + d + "-" + date.getFullYear() +
        '<span> </div> <div class="left"><span> <span></div> </div> </center>  <div id="table"> <table> <tr class="tabletitle"> <td class="item"><h2>Item</h2></td> <td class="Hours"><h2>Qty</h2></td> <td class="Hours"><h2>@</h2></td> <td class="Rate"><h2>Sub Total</h2></td> </tr>'
    );



    for (let i = 0; i < iname.length; i++) {
        var total = parseInt(price[i].innerHTML) * parseInt(qty[i].innerHTML);
        var tm = total + tm;
        newWin.document.write('<tr><td>' + iname[i].innerHTML + ' </td><td style="text-align:center">' + qty[i]
            .innerHTML + '</td><td style="text-align:center">' + price[i].innerHTML +
            ' </td><td style="text-align:center">' + total + ' </td></tr>');
    }
    if (document.getElementById('tno').value == 9286 && document.getElementById('tno').value == 928638) {
        home = document.getElementById('home_add').value;
        var addr = 'Delivery Address:' + home;

    } else {
        home = 0;
        var addr = 'Dinning';
    }


    var add = document.getElementById('add_data').value;
    var real = discount.value / 100;
    var dis = tm - (tm * real);
    disc = real * 100;
    // if (document.getElementById('tno').value == 9286 && document.getElementById('tno').value == 928638) {
    //   newWin.document.write('<ul class="total_data"><li>Total : <span>' + tm + '</span></li><li>Discount : <span>' + dis + '</span></li><li>Paid : <span>' + recam.value + '</span></li><li>Return : <span>' + rtn + '</span></li></ul> ');
    // }
    newWin.document.write(
        '<div class="table_data"><table class="total_data"><tr><div class="for_order" style="  display: flex;position: relative;flex-direction:row-reverse;top: 1px;line-height: 27px;border-bottom:1px solid;"><span style="position: relative;left:-30px;">Total : ' +
        tm +
        '</span></div></tr></table><table><tr><div class="for_order" style="  display: flex;position: relative;flex-direction:row-reverse;top: 1px;line-height: 27px;border-bottom:1px solid;"><span style="position: relative;left:-30px;">Paid : ' +
        recam.value +
        '</span></div></tr></table><tr><div class="for_order" style="  display: flex;position: relative;flex-direction:row-reverse;top: 1px;line-height: 27px;border-bottom:1px solid;"><span style="position: relative;left:-30px;">Return : ' +
        rtn + '</span></div></tr></table> </div>');
    newWin.document.write('</table> </table></div><div id="legalcopy"> <p class="legal"><strong>Address :  ' + add +
        '</strong>  </p> </div></div></div>');

    if (document.getElementById('tno').value == 9286 && document.getElementById('tno').value == 928638) {
        newWin.document.write('<h6></h6> <center> <div class="kitchen"> <h1>Kitchen Slip</h1> <h3>ORD-' + oid +
            '</h3><span>Time : ' + h +
            '<span> </div> </center> <div id="table"> <table style="width:100%"> <tr class="tabletitle"> <td class="item"><h2>Item</h2></td> <td class="Hours"><h2>Qty</h2></td>'
        );

        for (let i = 0; i < iname.length; i++) {
            var total = parseInt(price[i].innerHTML) * parseInt(qty[i].innerHTML);
            var tm = total + tm;
            newWin.document.write('<tr class="service"><td class="tableitem"><p class="itemtext">' + iname[i]
                .innerHTML + ' </p></td><td class="tableitem"><p class="itemtext" style="text-align:center">' + qty[
                    i].innerHTML + '</td></tr>');
        }
    }
    // <tr class="service"> <td class="tableitem"><p class="itemtext">Asset Gathering</p></td> <td class="tableitem"><p class="itemtext">3</p></td> </tr> 

    // <tr class="tabletitle"> <td class="Rate"><h2>Total</h2></td> <td class="payment"><h2>$3,644.25</h2></td> </tr> </table> </div>'6); 

    $.ajax({
        type: "post",
        url: "main.php",
        data: {
            tb: document.getElementById('tno').value,
            paid: document.getElementById('payment').value,
            home: home
        },
        success: function(response) {

            var ab = setInterval(function() {

                newWin.document.close();
                newWin.print();

                newWin.close();
                a = 1;
                if (a == 1) {
                    clearInterval(ab)
                }
            }, 1);
        }
    });
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
document.getElementById('tno').addEventListener("change", function() {
    var home = document.getElementById('tno').value;
    if (home == '9286') {
        document.getElementById('home_add').style.display = "block";
    } else {
        document.getElementById('home_add').style.display = "none";
    }


});




function by_defult() {

    var cat_sel = document.getElementsByClassName('cat_sel');
    var c = (cat_sel[0].getAttribute('value'));
    cat_sel[0].classList.add("ac");

    $.ajax({

        type: "post",
        url: "main.php",
        data: {
            cat_v: c
        },
        success: function(response) {

            var js = JSON.parse(response);
            console.log(js);
            cart_data.innerHTML = '';

            for (let a = 0; a < js.length; a++) {

                cart_data.innerHTML += '<a onclick="additem(this)" data-item="add" data-i-id="' + js[a][
                        'id'
                    ] +
                    '" data-toggle="tooltip" data-original-title="Close"> <div class="col-md-3" style="display: block;flex: 0;float: left;"> <div class="card card-body card_data"> ' +
                    js[a]["name"] + '<br> ' + js[a]["Price"] + ' </div> </div></a>'
            }




        }

    });

}
by_defult();

function ac_data() {
    var cat_sel = document.getElementsByClassName('cat_sel');
    for (let k = 0; k < cat_sel.length; k++) {

        cat_sel[k].addEventListener('click', function() {
            for (let l = 0; l < cat_sel.length; l++) {
                cat_sel[l].classList.remove('ac');
            }
            this.classList.add("ac");
        })


    }
}
ac_data()
</script>

<?php

include('footer.php');
?>