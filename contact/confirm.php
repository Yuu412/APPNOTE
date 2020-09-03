<?php
//=========文字エンコードの検証==============================
require_once("util.php");

if(!cken($_POST)){
  $encoding = mb_check_encoding();
  $err = "Encoding Error! The expected encoding is". $encoding;
  //エラーメッセージを表示して処理を終了させる
  exit($err);
}
//HTMLエスケープ(XSS対策)
$_POST = es($_POST);
 ?>

 <?php

 //入力された値の設定

 if(isset($_POST['name1'])){
   $name1 = $_POST['name1'];
 }
 else{
   //エラー
   $name1= "";
 }

 if(isset($_POST['name2'])){
   $name2 = $_POST['name2'];
 }
 else{
   //エラー
   $name2= "";
 }

 if(isset($_POST['furigana1'])){
   $furigana1 = $_POST['furigana1'];
 }
 else{
   //エラー
   $furigana1= "";
 }

 if(isset($_POST['furigana2'])){
   $furigana2 = $_POST['furigana2'];
 }
 else{
   //エラー
   $furigana2= "";
 }

 if(isset($_POST['phone'])){
   $phone = $_POST['phone'];
 }
 else{
   //エラー
   $phone= "";
 }

 if(isset($_POST['postnum1'])){
   $postnum1 = $_POST['postnum1'];
 }
 else{
   //エラー
   $postnum1 = "";
 }

 if(isset($_POST['postnum2'])){
   $postnum2 = $_POST['postnum2'];
 }
 else{
   //エラー
   $postnum2= "";
 }

 if(isset($_POST['city'])){
   $city = $_POST['city'];
 }
 else{
   //エラー
   $city= "";
 }

 if(isset($_POST['adress'])){
   $adress = $_POST['adress'];
 }
 else{
   //エラー
   $adress= "";
 }

 if(isset($_POST['buildings'])){
   $buildings = $_POST['buildings'];
 }
 else{
   //エラー
   $buildings= "";
 }

 if(isset($_POST['emargency'])){
   $emargency = $_POST['emargency'];
 }
 else{
   //エラー
   $emargency= "";
 }

 if(isset($_POST['mail'])){
   $mail = $_POST['mail'];
 }
 else{
   //エラー
   $mail= "";
 }

 if(isset($_POST['age'])){
   $age = $_POST['age'];
 }
 else{
   //エラー
   $age= "";
 }

 if(isset($_POST['job'])){
   $job = $_POST['job'];
 }
 else{
   //エラー
   $job= "";
 }

 if(isset($_POST['income'])){
   $income = $_POST['income'];
 }
 else{
   //エラー
   $income= "";
 }

 if(isset($_POST['date'])){
   $date = $_POST['date'];
 }
 else{
   //エラー
   $date= "";
 }

 if(isset($_POST['content'])){
   $content = $_POST['content'];
 }
 else{
   //エラー
   $content= "";
 }
 ?>

<DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>購入画面</title>
    <link rel="stylesheet" type="text/css" href="confirm-mail.css">
  </head>

  <body>
      <ul class = "form">
        <li><label>お名前</label></li>
          <span class="input0"><?php echo $name1?></span>
          <span class="input2"><?php echo $name2?></span><br>
        <li><label>ふりがな</label></li>
          <span class="input0"><?php echo "$furigana1 $furigana2"?></span><br>
        <li><label>電話番号</label></li>
          <span class="input1"><?php echo $phone?></span><br>
        <li><label>郵便番号</label></li>
          <span class="input1"><?php echo "$postnum1-$postnum2"?></span><br>
        <li><label>ご住所</label></li>
          <span class="input3" ><?php echo "$city $adress $buildings"?></span><br>
        <li><label>緊急連絡先</label></li>
          <span class="input5"><?php echo $emargency?></span><br>
        <li><label>メールアドレス</label></li>
          <span class="input4"><?php echo $mail?></span><br>
        <li><label>ご年齢</label></li>
          <span class="input1"><?php echo $age?></span><br>
        <li><label>ご職業</label></li>
          <span class="input5"><?php echo $job?></span><br>
        <li><label>ご年収</label></li>
          <span class="input5"><?php echo $income?></span><br>
        <li><label>参加希望日</label></li>
          <span class="input1"><?php echo $date?></span><br>
        <li><label>その他ご要望など</label></li>
          <span class="input6"><?php echo $content?></span><br>
      </ul>


  <!--戻るボタンのフォーム-->
  <div class="orderBotton">
  <form method="POST" action="contact.php">
    <!--隠しフィールドに個数を設定してPOSTする-->
    <input type="hidden" name ="name1" value="<?php echo $name1;?>">
      <input type="hidden" name ="name2" value="<?php echo $name2;?>">
      <input type="hidden" name ="furigana1" value="<?php echo $furigana1;?>">
      <input type="hidden" name ="furigana2" value="<?php echo $furigana2;?>">
      <input type="hidden" name ="phone" value="<?php echo $phone;?>">
      <input type="hidden" name ="postnum1" value="<?php echo $postnum1;?>">
      <input type="hidden" name ="postnum2" value="<?php echo $postnum2;?>">
      <input type="hidden" name ="city" value="<?php echo $city;?>">
      <input type="hidden" name ="adress" value="<?php echo $adress;?>">
      <input type="hidden" name ="buildings" value="<?php echo $buildings;?>">
      <input type="hidden" name ="emargency" value="<?php echo $emargency;?>">
      <input type="hidden" name ="mail" value="<?php echo $mail;?>">
      <input type="hidden" name ="age" value="<?php echo $age;?>">
      <input type="hidden" name ="job" value="<?php echo $job;?>">
      <input type="hidden" name ="income" value="<?php echo $income;?>">
      <input type="hidden" name ="date" value="<?php echo $date;?>">
      <input type="hidden" name ="content" value="<?php echo $content;?>">

      <input type="submit" value="内容を修正する" style="background-color:#FFFF99;">
  </form>


    <form method="POST" action="mail.php">
      <!--隠しフィールドに個数を設定してPOSTする-->
      <input type="hidden" name ="name1" value="<?php echo $name1;?>">
        <input type="hidden" name ="name2" value="<?php echo $name2;?>">
        <input type="hidden" name ="furigana1" value="<?php echo $furigana1;?>">
        <input type="hidden" name ="furigana2" value="<?php echo $furigana2;?>">
        <input type="hidden" name ="phone" value="<?php echo $phone;?>">
        <input type="hidden" name ="postnum1" value="<?php echo $postnum1;?>">
        <input type="hidden" name ="postnum2" value="<?php echo $postnum2;?>">
        <input type="hidden" name ="city" value="<?php echo $city;?>">
        <input type="hidden" name ="adress" value="<?php echo $adress;?>">
        <input type="hidden" name ="buildings" value="<?php echo $buildings;?>">
        <input type="hidden" name ="emargency" value="<?php echo $emargency;?>">
        <input type="hidden" name ="mail" value="<?php echo $mail;?>">
        <input type="hidden" name ="age" value="<?php echo $age;?>">
        <input type="hidden" name ="job" value="<?php echo $job;?>">
        <input type="hidden" name ="income" value="<?php echo $income;?>">
        <input type="hidden" name ="date" value="<?php echo $date;?>">
        <input type="hidden" name ="content" value="<?php echo $content;?>">

      　<input type="submit" value="送信する" style="background-color:#FFFF99;">
    </form>
  </div>



  </body>

  </html>
