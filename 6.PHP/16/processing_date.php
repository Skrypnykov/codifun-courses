<?php
    function formGeneration($form){
?>
<h1>Data for server</h1>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<input type="text" name="name" placeholder="Ваше имя" pattern="[A-zА-я]{1,15}[- ]?[A-zА-я]{0,15}" value="" />
<span class="err">*<?php ?></span><br/>
<input type="email" name="email" placeholder="Адрес вашей электронной почты" value="" />
<span class="err">*<?php ?></span><br/>
<input type="submit" name="start" value="Отправить" />
</form>
<?php
}
function filter($data){
    $data=trim($data);
    $data=htmlspecialchars($data);
    $dat=stripcslashes($data);
  return $data;
}
function processingData(){
    $name=$email="";
    $err_name=$err_mail=$message="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(!empty($_REQUEST['name'])){
            if(!preg_match('/^[A-z]{1,10}[- ]?[A-z]{1,10}$/',$_REQUEST['name'])){
                $err_name="Input correct name!";
                }else{
                $name=$_REQUEST['name'];
            }
        }else{
            $err_name="Input name!";
        }
        if(!empty($_REQUEST['email'])){
            $email=filter($_REQUEST['email']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $err_mail="Insert valid email!";
            }
        }else{
            $err_mail="Input email!";
        }
        if($err_name.$err_mail=""){
            $message="Your name is: ".$name." and your email is: ".$email;
        }else{
            $message="Input all data!";
        }
    }
}
?>