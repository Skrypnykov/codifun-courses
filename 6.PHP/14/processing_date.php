<?php
  function getInfo(){
      echo '<div class="content"><h1>Черешня</h1><p>... А Вы знали, что <strong>черешня</strong> 
      является естественным источником мелатонина, гормона, который помогает регулировать цикл 
      сна-бодрствования человека...</p></div>';
  }
  function formGeneration() {
?>
<h1>Контрольный тест знаний о черешне</h1>
<h5>Первые три поля являются обязательными для заполнения</h5>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <label>Ваще имя: <input type="text" name="name" maxlength="15" pattern="[A-zА-я]{1,15}[- ]?[A-zА-я]{0,15}" title="Введите только буквы!" /></label>
    <hr/>
    <p>Черешня растет...</p>
        <input type="radio" value="1" name="s1" />на деревьях
        <input type="radio" value="2" name="s2" />в земле
    <hr/> 
    <p>Период созревания черешни?</p>
        <input type="radio" value="1" name="s1" />май-июнь
        <input type="radio" value="2" name="s2" />август-сентябрь
    <hr/>
    <p>Какого цвета <strong>не</strong> может быть черешня?</p>
        <input type="checkbox" name="v1" />синего
        <input type="checkbox" name="v2" />белого
        <input type="checkbox" name="v3" />красного
    <br/><br/>
    <input type="reset" value="Отменить" />
    <input type="submit" name="start" value="Посмотреть результат" />
</form>
<?php
  }
  function processingData(){
      $text_mess="";
      if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST['name'])||empty($_POST['s1'])||empty($_POST['s2'])){
            $text_mess="Заполните, пожалуйста, согласно требованиям!!!";
        }else{
        $points=0;
        if($_POST['s1']=='1'){$points=$points+5;}
        if($_POST['s2']=='1'){$points=$points+5;}
        $check=0;
        if(@$_POST['v1']=='on')$check=$check+2.5;
        if(@$_POST['v2']=='on')$check=$check+2.5;
        if(@$_POST['v3']=='on')$check=$check-5;
        if($check>0){$points=$points+$check;}
        $text_mess=$_POST['name'];
        if($points==0){$text_mess.=",вы ничего не знаете о черешне :(<br/>";}
        if(($points>=5)&&($points<=10)){$text_mess.=", что-то вы знаете, но вы все равно должны есть черешню летом!<br/>";}
        if($point>10){$text_mess.=", вы обожаете черешню!<br/>";}
      }
  }
  return $text_mess;
  }
?>