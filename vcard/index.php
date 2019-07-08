<?php session_start();?>
<style>
body{
  width: 100%;
  height: 100%;
  margin: 0px;
  padding: 0px;
  display: flex;
  justify-content: center;
  align-items: center;
  background:linear-gradient(white,gray) fixed;
  font-family:'Microsoft JhengHei';
}
#card{
  margin: auto;
  padding: 30px;
  background: linear-gradient(rgba(204, 149, 192, 0.2), rgba(219, 212, 180, 0.5), rgba(122, 161, 210, 0.2));
  border-radius:20px;
  box-shadow: inset 0px 0px 10px black;
}
div h3{
  line-height:50px;
  text-align: center;
  background:rgba(0,0,0,0.5);
  color: white;
  border-radius:20px;
}
table{
  border-collapse: collapse;
  font-size:12px;
}
table input{
  font-size:10px;
  width:200px;
}
td{
  height: 30px;
}
.input{
  margin-left:20px;
  width:60px;
  height:40px;
  font-size:10px;
  color:#999;
  background:linear-gradient(#c5c5c5,#666);
  box-shadow:0 2px 2px black;
  border-radius:10px;
  box-shadow: inset 0 2px 2px #fff,0 2px 2px #000;
  text-shadow: 1px 1px 1px #000,-1px -1px 1px #FFF;
}
.input:hover{
  cursor:pointer;
  background:#6b6b83;
  text-shadow: -1px -1px 1px #000,1px 1px 1px #FFF;
  }


</style>
<div id="flow"></div>
<div id="card">
<h3>Vcard產生器</h3>
<form action="api.php" method="POST" enctype="multipart/form-data">
<table>
<tr>
<td>姓名 || </td>
<td><input type="text" name="name" value="14 Hanna Wang"></td>
</tr>
<tr>
<td>職稱 || </td>
<td><input type="text" name="job" value="エンジニアの助手" ></td>
</tr>
<tr>
<td>聯絡電話 || </td>
<td><input type="tel" name="tel" value="0977404068"></td>
</tr>
<tr>
<td>電子信箱 || </td>
<td><input type="email" name="email" value="hannawang0306@live.com"></td>
</tr>
<tr>
<td style="vertical-align:top;">技能簡介 || </td>
<td><textarea name="skill"cols="30" rows="10">Art,Creo,CAD,PS、撮り</textarea>
</tr>
<tr>
<td>頭像 || </td>
<td><input type="file" name="mypic"></td>
</tr>
<tr>
<td>外殼 || </td>
<td>
  <select name="type">
    <option value="" selected>白</option>
    <option value="gray">灰</option>
    <option value="black">黑</option>
  </select>
</td></tr>
<tr>
<td>亮度 || </td>
<td>
  <select name="type_in">
    <option value="" selected>亮</option>
    <option value="middle">濛</option>
    <option value="dark">暗</option>
  </select>
</td></tr>
<tr>
  <td style="text-align:right" colspan="2">
  <input class="input green" type="submit" value="チェック" title="OK">
  <!-- <input class="input red" type="reset" value="リセット" title="Reset"> -->
  </td>
</tr>
</td>
</table>

</form>
</div>