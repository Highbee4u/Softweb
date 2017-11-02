
<style type="text/css">
body,td,th {
  font-size: 14px;
}
h1 {
  font-size: 14px;
}
</style>
</head>
<body text="#111111">
  <form action="log_pro.php" method="post" autocomplete ="Off">
  <table width="309" height="141" border="0" align="center">
    <tr bgcolor="#999999">
      <th colspan="2" scope="col"><h1>CLIENT LOGIN</h1></th>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td width="104" height="24"><strong>USERNAME:</strong></td>
      <td width="195"><label for="textfield">
        <input type="text" name="username" required>
      </label></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td height="24"><strong>PASSWORD:</strong></td>
      <td><input type="password" name="password" required></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td>&nbsp;</td>
      <td><input type="submit" name="btn-login" id="button" value="LOGIN">  <input name="remember" value="Remember" type="checkbox">Remember <br> <a href="forgot.php">Forgot Password?</a></td>
    </tr>
  </table>

                        
</form>
