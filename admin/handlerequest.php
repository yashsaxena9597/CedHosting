<?php
session_start();
require_once "tbl_product.php";
$product=new tbl_product();
if (isset($_POST['productadd'])) {
    $productname=$_POST['productname'];
    $link=$_POST['link'];
   
     
     $duplicatecheck=$product->duplicateCategoryCheck($productname);
    
     if ($duplicatecheck) {
         echo "Duplicate Category Name is Not Allowed";
     } else {
         $data=$product->insertProductBYCategory($productname, $link);
         echo true;
     }

}if(isset($_POST['id'])&& isset($_POST['action'])){
    $id=$_POST['id'];
    $action=$_POST['action'];
   echo $action;
     $data=$product->manageProductBYCategory($id, $action);
     if ($data=="true") {
                echo json_encode("true");
            } elseif ($data=="false") {
                echo json_encode("false");
        } elseif ($data!="true" && $data!="false") {
             print_r(json_encode($data));
             }
  
}







if (isset($_POST['productupdate'])) {
    $id=$_POST['id'];
    $productcategory=$_POST['productcategory'];
    $productname=$_POST['productname'];
    $pageurl=$_POST['pageurl'];
    $monthlyprice=$_POST['monthlyprice'];
    $annualprice=$_POST['annualprice'];
    $sku=$_POST['sku'];
    $webspace=$_POST['webspace'];
    $bandwidth=$_POST['bandwidth'];
    $freedomain=$_POST['freedomain'];
    $languagetechnology=$_POST['languagetechnology'];
    $mailbox=$_POST['mailbox'];
    $data=$product->productUpdate($id, $productcategory, $productname, $pageurl, $monthlyprice, $annualprice, $sku, $webspace, $bandwidth, $freedomain, $languagetechnology, $mailbox);
    if ($data=="true") {
        echo json_encode("true");
    } else {
        echo json_encode("false");
    }
}
if (isset($_POST['manageproductsbycategory'])) {
    $id=$_POST['id'];
    $action=$_POST['action'];
    $data=$product->manageProductsBYCategory($id, $action);
    if ($data=="true") {
        echo json_encode("true");
    } elseif ($data=="false") {
        echo json_encode("false");
    } elseif ($data!="true" && $data!="false") {
        print_r(json_encode($data));
    }
}
if (isset($_POST['updatecategory'])) {
    $id=$_POST['id'];
    $productname=$_POST['productname'];
    $link=$_POST['link'];
    $availability=$_POST['availability'];
    $data=$product->updateProductByCategory($productname, $link, $availability, $id);
    if ($data) {
        echo true;
    } else {
        echo false;
    }
}
if (isset($_GET['cartdata'])) {
    $arr['data']=array();
    if (isset($_SESSION['cartdata'])) { 
        $cartdata=$_SESSION['cartdata'];
        for ($i=0;$i<count($cartdata);$i++) {
            $arr['data'][]=$cartdata[$i];
        }
    }
    echo json_encode($arr);
}
if (isset($_POST['addtocart'])) {
    $temp=true;
    $prodid=$_POST['prodid'];
    if (!isset($_SESSION['cartdata'])) {
        $_SESSION['cartdata']=array();
    }
    $cartdata=$_SESSION['cartdata'];
    for ($i=0;$i<count($cartdata);$i++) {
        if ($cartdata[$i][0]==$prodid) {
            $_SESSION['cartdata'][$i][4]+=1;
            $temp=false;
        }
    }
    if ($temp==true) {
        $data=$product->addToCart($prodid);
        $_SESSION['cartdata'][]=[$data['prod_id'], $data['prod_name'], $data['mon_price'], $data['annual_price'], 1, "<a href='javascript:void(0)' data-id=".$data['prod_id']." id='deletecartproduct'><i class='fa fa-trash' aria-hidden='true'></i></a>"];
    }
    print_r($_SESSION['cartdata']);
}
if (isset($_POST['deletecartproduct'])) {
    $prodid=$_POST['prodid'];
    $cartdata=$_SESSION['cartdata'];
    for ($i=0;$i<count($cartdata);$i++) {
        if ($cartdata[$i][0]==$prodid) {
            unset($_SESSION['cartdata'][$i]);
            $_SESSION['cartdata']=array_values($_SESSION['cartdata']);
            break;
        }
    }
}
if (isset($_POST['checkout'])) {
    if (isset($_SESSION['user'])) {
        if (isset($_SESSION['cartdata'])) {
            if (count($_SESSION['cartdata'])==0) {
                echo "no items in cart";
            } else {
                echo count($_SESSION['cartdata'])." item in the cart";
            }
        }
    } else {
        echo "refer to login page";
    }
    
}
?>