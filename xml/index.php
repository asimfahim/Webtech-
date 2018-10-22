<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Title</title>
</head>
<body>
File Write:
<hr>
<form name="xmlwrite" method="post" action="write.php">
    <table>
        <tr>
            <td>MENU</td>
            <td>:</td>
            <td><input type="text" name="menu" placeholder="menu"/></td>
        </tr>
        <tr>
            <td>ITEM</td>
            <td>:</td>
            <td><input type="text" name="item" placeholder="item"/></td>
        </tr>
		 <tr>
            <td>Price</td>
            <td>:</td>
            <td><input type="text" name="price" placeholder="price of item"/></td>
        </tr>
        <tr>
            <td><input type="submit"/></td>
            <td><input type="reset" /> </td>
            
        </tr>
    </table>
</form>
<a href='read.php'>Read XML</a>
</body>
</html>