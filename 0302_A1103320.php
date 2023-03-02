<html>
<head>
<meta charset="utf-8">
<title>系烤表單</title>
</head>

<body text="BLACK" bgcolor="CCCCFF" background="img/67.jpg">

<CENTER>
<h1><b>系烤報名表</b></h1>
<h2><b>NUKIM</b></h2>

<P>
<font size="4" color="blue" face="Times New Romen">It is a chance to renew acquaintance with friends</font></P><br>
</P>
</CENTER>

<P>
<font size="4"><b>注意事項</b></font>
<UL>
<LI>需自備餐具
<LI>每人須付250元
<LI>雨天需自備雨衣及雨傘
<LI>六人一組隨機分配
<LI>不可浪費食物        
</UL>    
</P>    

<p>
<font size="4"><b>當日食材</b></font></br>
</br>
<table border="2">
<tr><th>編號</th><th>食材名稱</th><th>數量(份)</th></tr>
<tr><td>1</td><td>肉片</td><td>80</td></tr>
<tr><td>2</td><td>高麗菜</td><td>80</td></tr>
<tr><td>3</td><td>甜不辣</td><td>30</td></tr>
<tr><td>4</td><td>菜盤</td><td>80</td></tr>
<tr><td>5</td><td>丸子</td><td>30</td></tr>
<tr><td>6</td><td>蝦子</td><td>40</td></tr>
<tr><td>7</td><td>米血</td><td>20</td></tr>
<tr><td>8</td><td>吐司</td><td>10</td></tr>
</table>    
</p>

<p>
<font size="4"><b>當日食材預覽圖</b></font></br>
</br>
<image src ="img/meat.png" width="100" height="100" border="5">
<image src ="img/o5DHdvSvA7.jpg" width="100" height="100" border="5" >
<image src ="img/meatball.jpg" width="100" height="100" border="5">
<image src ="img/123.png" width="100" height="100" border="5">
</p>

<P>
<font size="4"><b>更多詳情</b></font></br>
<a href="https://im.nuk.edu.tw/ target="new">高雄大學資管系</a>
</P>

<p>
<font size="4"><b>資料填寫</b></font></br>
<form method="post" action ="0302_A1103320_result.php">

請輸入學號：<input type="text" name="id" placeholder="開頭大寫"><br/>
</br>
請輸入姓名：<input type="text" name="idName"><br/>
</br>
email:<input type="email" name="email"></br>
</br>
gender:<input type="radio" name="gender">男<input type="radio" name="gender">女</br>
</br>
遊戲活動偏好:
<input type="checkbox" name="ball">球類運動
<input type="checkbox" name="sing">聲林之王
<input type="checkbox" name="play">團康活動
<input type="checkbox" name="dance">舞蹈大賽</br>
</br>
請選擇系級：
<select name="grade[]" multiple>
<option value ="freshman">115
<option value="sophomore">114
<option value="junior">113
<option value="senior">112
</select>
</br>
其他注意事項：</br>
<textarea  name="comment" cols="20" rows="10"></textarea>
</br>
<input type="submit">
<input type="reset">
</form>
</p>

</body>

</html>