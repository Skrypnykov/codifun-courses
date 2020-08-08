<?php
    function formGeneration($mess){
?>
<h1>Форма обратной связи</h1>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<input type="text" name="name" maxlength="15" placeholder="Ваше имя" pattern="[A-zА-я]{1,15}[- ]?[A-zА-я]{0,15}" title="Введите только буквы!" value="<?php echo $mess[1];?>" />
<span class="err">*<?php if(!$mess[0]) echo "Заполните поле!";?></span><br/><br/>
<input type="email" name="email" placeholder="Адрес вашей электронной почты" value="<?php echo $mess[3];?>" />
<span class="err">*<?php if(!$mess[2]) echo "Заполните поле!";?></span><br/><br/>
<textarea name="comment" placeholder="Ваше мнение"><?php echo $mess[5];?></textarea>
<span class="err">*<?php if(!$mess[4]) echo "Заполните поле!";?></span><br/><br/>
<input type="submit" name="start" value="Отправить" />
</form>
<?php
}
function processingData(){
    $mess[0]=$mess[2]=$mess[4]=false;
    $mess[1]=$mess[3]=$mess[5]="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(!empty($_POST['name'])){
            $mess[0]="true";
            $mess[1]=$_POST['name'];
        }
        if(!empty($_POST['email'])){
            $mess[2]="true";
            $mess[3]=$_POST['email'];
        }
        if(!empty($_POST['comment'])){
            $mess[4]="true";
            $mess[5]=$_POST['comment'];
        }
    }
return $mess;
}
function showData($mess){
    if(($mess[0]=="true")&&($mess[2]=="true")&&($mess[4]=="true")){
        echo "<h1>Введенные данные</h1>";
        echo "Ваше имя: ".$mess[1];
        echo "<br/>Адрес электронной почты: ".$mess[3];
        echo "<br/>Комментарий: ".$mess[5];
    }else{
        echo "Заполните правильно все поля - и будут отображаться значения!";
    }
}
?>