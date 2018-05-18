<?php include 'headers.php'; ?>
<!-- table -->

<div class="container-fluid">
    <div class="col-sm-1 text-center">
        Menu<br><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776 </span>
    </div>

<?php
include_once "rockjs/test.php";
?>

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>

<?php include 'footer.php'; ?>