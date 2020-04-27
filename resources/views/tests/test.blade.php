<html>
<head>
<script type="text/javascript">
function setMyCookie(username, password) {
  var s=setMyCookieWithDomain("username",username);
  document.cookie = s;
  var t=setMyCookieWithDomain("password",password);
  document.cookie = t;
  alert(s+"\n"+t); // 保存内容を確認表示
}
function setMyCookieWithDomain(key,val){
  var str = escape(key) + "=" + escape(val);
  str += "; domain=.92.168.33.10:8000"; // 頭に "." を付けたドメイン名を指定（ここがカギ！）
  return str;
}
</script>
</head>
<body>
<input type="button" value="test1-set" onclick="setMyCookie('username1','password1')">
<input type="button" value="test2-set" onclick="setMyCookie('username2','password2')">
@foreach($cosme as $value)
{{$value->id}}<br>
{{$value->name}}<br>
@endforeach
</body>
</html>