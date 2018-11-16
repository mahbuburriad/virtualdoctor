<?php

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login/index.php', '_self')</script>";
}

else{

?>
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Insert Categories</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
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
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                       <center>
        
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Category Title</label>

                            <div class="col-md-6">

                                <input type="text" name="cat_title" class="form-control">

                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Category Description</label>

                            <div class="col-md-6">

                                <textarea type="text" name="cat_desc" class="form-control">


</textarea>

                            </div>

                        </div>

                        <div class="form-group">

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <input type="submit" name="submit" value="Insert Category" class="btn btn-primary form-control">

                            </div>

                        </div>

                    </form>



<?php

if(isset($_POST['submit'])){

$cat_title = $_POST['cat_title'];
$cat_desc = $_POST['cat_desc'];
$insert_cat = "insert into categories (cat_title,cat_desc) values ('$cat_title','$cat_desc')";
$run_cat = mysqli_query($con,$insert_cat);
if($run_cat){
echo "<script> alert('New Category Has Been Inserted')</script>";
echo "<script> window.open('index.php?view_cats','_self') </script>";

}

}



?>

                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>