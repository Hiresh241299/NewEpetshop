<?php
include "functions.php";

//verify user credentials
if (verifyUserCredentials("hireshmh24@gmail.com","12345")){
    echo "user exists \n";
}else{
    echo "user does not exists\n";
    echo password_hash(12345, PASSWORD_DEFAULT) . "<br>";
}

//add user
//$res = addUser("newtest", "test", "Male", "1999-08-08", "test", "test", "test", "test@gmail.com", "52345678", "1999-08-08", password_hash("test123",PASSWORD_DEFAULT), 1, 1);
//echo "Add User :" . $res;

//get user role
echo getUserRole("hireshmh24@gmail.com") . "<br>";

echo "\n";
//get user id
echo getUserID("hiresh@gmail.com"). "<br>";

//add petshop
//$addpetsh = addPetshop("Dy", "breeding", "tt", "tt", "tt", 12 , 12 , 1 , 31 , 1, "1999-08-08");
//echo $addpetsh;


//add product
//addProduct($prodname, $brandID, $desc, $img, $prodcatid, $specialityid, $status, $dateposted, $lastmodif, $petshopid)
$result = addProduct("Pimafix", 1, "Medication", "x",2, 1, 1, "2021-09-14 09:22:26", "2021-09-14 09:22:26",1);
if ($result == 1){
    echo "Product added" . "<br>";
}else{
    echo "Product failed to add" . "<br>";
}

//add product line
//addProductLine($F_unit, $F_amount, $F_qoh, $F_price, $F_lastmodif, $F_status, $productID);
$result = addProductLine('kg', 5, 2, 1000, "2021-09-14 09:22:26", 1, 26);
if ($result == 1){
    echo "Product Line added" . "<br>";
}else{
    echo "Product Line failed to add" . "<br>";
}

//get petshop id
echo "petshop id is" . getPetshopID(31). "<br>";

//send email (email, fname, lname, subject, body)
$result = sendEmail("hireshmh24@gmail.com", "Hiresh", "Mohun", "E-petshop Registration", "Please view the terms and conditions before
accepting! 
");
if($result == 1){
    echo "\n mail sent!!" . "<br>";
}else if ($result == 0){
    echo "\n mail not sent!!!!" . "<br>";
}

//add admin
//$res = addUser("newtest", "test", "Male", "1999-08-08", "test", "test", "test", "test@gmail.com", "52345678", "1999-08-08", password_hash("test123",PASSWORD_DEFAULT), 1, 1);
//$result = addUser("Hiresh", "Mohun", "Male", "1999-12-24", "", "", "", "admin@gmail.com", 59251209, "2021-09-14 09:22:26", password_hash("admin",PASSWORD_DEFAULT), 1,1);

//if ($result == 1){
//    echo "\n admin created successfully" . "<br>";
//}else{
//    echo "\n admin not created" . "<br>";
//}


//update product
//updateProduct($productID,$name, $brandID, $description, $imgpath, $prodCatID, $petCatID, $status, $lastMDT)
$result = updateProduct(62 ,"testnew", 2, "NewDesc", "x", 1, 1, 1, "2021-09-14 09:22:26");
if($result == 1){
    echo "Product Updated!!" . "<br>";
}else if ($result == 0){
    echo "Product not Updated!!" . "<br>";
}
?>