
<?
session_start();
ob_start();
?>
<html>
<head>
<meta charset="windows-874">
 <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="css/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/assets/css/themify-icons.css">
    <link rel="stylesheet" href="css/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="css/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="css/assets/scss/style.css">
<title>password change</title>
<script language="javascript">
function check(){
if(document.ChangePass.passold.value==""){
	alert('��سҡ�͡ PASSWORD ���');
    document.ChangePass.passold.focus();
	return false;
}else if(document.ChangePass.passnew.value==""){
	alert('��سҡ�͡ PASSWORD ����');
    document.ChangePass.passnew.focus();
	return false;
}else if(document.ChangePass.passnew1.value==""){
	alert('��س��׹�ѹ PASSWORD ����');
    document.ChangePass.passnew1.focus();
	return false;
}else if(document.ChangePass.passnew.value != document.ChangePass.passnew1.value){
	alert('�س��� password ���ç�ѹ');
	document.ChangePass.passnew1.focus();     
	return false;
}
return true;
}
</script>
<style type="text/css">
<!--
.style1 {font-size: 14px}
-->
</style>
</head>
<body>
    <form id="ChangePass" name="ChangePass" method="POST" action="pass_change_code.php" onsubmit="return check()">
 <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">����¹���ʼ�ҹ</div>
                      <div class="card-body card-block">
                        <form action="" method="post" class="">
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon">�������</div>
                              <input type="password" id="passold" name="passold" class="form-control">
                              
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon">��������</div>
                              <input type="password" id="passnew" name="passnew" class="form-control">
                              
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon">�׹�ѹ��������</div>
                              <input type="password" id="passnew1" name="passnew1" class="form-control">
                              
                            </div>
                          </div>
                          <div class="form-actions form-group">            
                              <button type="submit" name="button" id="button" value="�׹�ѹ" class="btn btn-primary btn-sm">�׹�ѹ</button>
                           </div>
                        </form>
                      </div>
                    </div>
                  </div>
    </form>
</body>
</html>