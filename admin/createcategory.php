
<?php
include "header.php";
?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="assets/img/theme/user-avatar.png">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Hello, <?php echo(isset($_SESSION['user'])) ? $_SESSION['user'][0]['name']: "Admin" ?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="../logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">CreateCategory</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="index.php">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">CreateCategory</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
          <!-- Card stats -->
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">

                </div>
            </div>
        </div>
        </div>
    </div>
</div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary border-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-4"></div>
              <div class="text-center">
                Create Category
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form">
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <?php
                    include_once "tbl_product.php";
                    $product=new tbl_product();
                    $row=$product->getMainCategory();
                    if ($row!=false) {
                      echo '<input class="form-control" value="   '.$row[0]['prod_name'].'" type="text" disabled>';
                    }
                    else{
                      echo '<input class="form-control"  placeholder="Product Category" type="text">';
                    }
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Product Name" type="text" id="productname">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                          <textarea class="link"  placeholder="HTML" name="editor"></textarea>
                      </div>
                    </div>
                  </div>
                <div class="row my-4">
                  <div class="col-12">
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button type="button"  onclick="javascript:return confirm('Do you really want to create?');" class="btn btn-primary mt-4" id="createcategory">Create Category</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>





<!-- table display -->
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="table-responsive">
              <!-- Projects tableid="showProduct" -->
              <table class="table align-items-center table-flush" id="showProduct" >
                <thead class="thead-light">
                    <tr>
                        <th>Category Parent Name</th>
                        <th>Category Name</th>
                        <th>Link</th>
                        <th>category Availability</th>
                        <th>Category Launch Date</th>
                        <th>Action</th>
                        
                    </tr> </thead>
                    
                      <?php $data=$product->getSubCategory();
                            if ($data!=false) {
                              for ($i=0;$i<count($data);$i++) {
                                 ?>
                                 <tr>
                                 <td>Hosting</td>
                      <td><?php echo $data[$i]['prod_name']?></td>
                      <td><?php echo $data[$i]['html']?></td>
                      
                      <td><?php if ($data[$i]['prod_available']==1){echo "Available";}else{echo "Not available";}?></td>
                      <td><?php echo $data[$i]['prod_launch_date']?></td>
                      <td><button data-toggle="modal" data-target="#exampleModalSignUp" onclick="edit(<?php echo $data[$i]['id']?>)"class="btn btn-warning">Edit</button><button onclick=" del(<?php  echo $data[$i]['id'] ?> )" class="btn btn-danger">delete</button></td>

                      </tr>
                              <?php } 
                              } ?>
                  
               
              </table>
            </div>
          </div>
        </div>
      </div>
<!-- table display -->
<div class="col-md-4">
    <!-- Modal -->
    
   

    <div class="modal fade" id="exampleModalSignUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary shadow border-0 mb-0">
              <div class="card-header bg-white pb-5">
                <div class="text-muted text-center mb-3">
                  <span>Update Category</span>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                
              </div>
              <div class="card-body px-lg-5 py-lg-5">
                <form role="form">
                  <div class="form-group mb-3">
                  <label class="mr-sm-2" for="inlineFormCustomSelect">Category</label>
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <?php
                        include_once "tbl_product.php";
                        $product=new tbl_product();
                        $row=$product->getMainCategory();
                        if ($row!=false) {
                         
                          echo '<input class="form-control" value="   '.$row[0]['prod_name'].'" type="text" disabled>';
                        }
                        else{
                          
                          echo '<input class="form-control"  placeholder="Product Category" type="text">';
                        }
                      ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                      </div>
                      <input class="form-control" type="hidden" id="category-id-update">
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="mr-sm-2" for="inlineFormCustomSelect">Sub Category</label>
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control" placeholder="productname" type="text" id="productname-update">
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="mr-sm-2" for="inlineFormCustomSelect">Html</label>
                  <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                          <textarea class=" form-group" placeholder="html" id="link-update"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Availability</label>
                    <select class="custom-select mr-sm-2" id="availability-update">
                      <option value="Choose...">Choose...</option>
                      <option value="1">Available</option>
                      <option value="0">Unavailable</option>
                    </select>
                  </div>
                  <div class="text-center">
                   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary my-4" id="updatecategory">Update Category</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--  -->
  <script>
  $('#updatecategory').click(function(){
    var productname=($('#productname-update').val()).trim();
    var link=($('#link-update').val()).trim();
    var availability=$('#availability-update').val();
    var categoryid=$('#category-id-update').val();
    var regproductname=/^(?![0-9]*$)([a-zA-Z]+\s?)*([0-9]+\.?)*$/;
    if (availability=="Choose..." || productname=="") {
      alert('please fill product name and availibility');
    }
    else if (!(productname.match(regproductname))) {
      alert("please enter valid product name");
    }
    else if(!isNaN(productname)){
      alert('product name can not be all numbers');
    }
    else {
      $.ajax({
        url: "handlerequest.php",
        method: "post",
        data: {
          productname: productname,
          link: link,
          availability: availability,
          id: categoryid,
          updatecategory: true
        },
        success: function(msg){
          if (msg){
            alert("Category Successfully Updated");
            location.reload();
          }
          else {
            alert("failed updation");
          }
         
        },
        error: function(){
          alert('Update Failed');
        }
      });
    }
  });
 
    $('#createcategory').click(function(){
      var productname=($('#productname').val()).trim();
    //   var link=document.getElementsByClassName("link").value;
      var link=($('.link').val()).trim();
     
      var regproductname=/^(?![0-9]*$)([a-zA-Z]+\s?)*([0-9]+\.?)*$/;
      if (productname=="" || !(productname.match(regproductname))) {
        alert("please enter valid product name");
      }
      else {
          
        $.ajax({
          url:'handlerequest.php',
          method: 'post',
          data:{
            productname: productname,
            link:link,
            productadd:true
          },
          success:function(msg){
            if (msg=="Duplicate Category Name is Not Allowed") {
              alert("Duplicate Category Name is Not Allowed");
            } else {
                console.log(msg);
              alert("Subcategory Added successfully");
              location.reload();
            }
          },
          error:function(){
            alert("error");
          }
          
        });
      }
    });
    $(document).ready(function() {
      showProduct();
    });
    function showProduct(){
          $('#showProduct').DataTable( 
             
           ); 
    }
    function edit(id){
   
      
     
   
       var action="edit";
      
      $.ajax({
          url:'handlerequest.php',
          method: 'Post',
          data:{
            id: id,
            action:action,
            
          },
          dataType:'json',
          success:function(msg){
            console.log(msg['html']);
            var productname=msg['prod_name'];
            
            $('#productname-update').val(productname);
             var link=msg['html'];
             $('#link-update').val(link);
               var categoryid=msg['id'];
               $('#category-id-update').val(categoryid);
                 var availability=msg['prod_available'];
                 $('#availability-update').val(availability).attr('selected','selected');
          },
          error:function(){
            alert("error");
          }
          
        });
      
    }
    function del(id){
      var action="delete";
       var r= confirm("Do you really want to delete??");
       if (r== true){
      $.ajax({
          url:'handlerequest.php',
          method: 'Post',
          data:{
            id: id,
            action:action,
            
          },
          success:function(msg){
            console.log(msg);
            window.location.reload();
          },
          error:function(){
            alert("error");
          }
          
        });}
        
      
    }
    // function manageproductbycategory(action,id){
    //   $.ajax({
    //     url: 'handlerequest.php',
    //     method: 'post',
    //     data: {
    //       id: id,
    //       action: action,
    //       manageproductbycategory: true
    //     },
    //     dataType:'json',
    //     success: function(msg){
         
    //        console.log(msg);
    //         // var productname=msg['prod_name'];
    //         // $('#productname-update').val(productname);
    //         // var link=msg['html'];
    //         // $('#link-update').val(link);
    //         // var categoryid=msg['id'];
    //         // $('#category-id-update').val(categoryid);
    //         // var availability=msg['prod_available'];
    //         // $('#availability-update').val(availability).attr('selected','selected');

    //       }
    //     })
    //   }
    
    
  </script>
<?php
include "footer.php";
?>
