
<!DOCTYPE html>
<html>
<head>
<title>Po. Sawit Ondew</title>
<link rel="shortcut icon" href="Logo.PNG"type="image/x-icon">
<link rel="stylesheet" href="style.css">
<style>
#card {
background :white;
border-radius:8px;
box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
height: 500px;
margin: 6rem auto 8.1rem auto;
width: 329px;
}
#card-content {
      padding: 12px 44px;
}
#card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center;
}
.underline-title {
      background: #D2B48C;
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: 89px;
}
a {
    text-decoration: none;
}
label {
    font-family: "Raleway", sans-serif;
    font-size: 11pt;
}
#forgot-pass {
    color: #2dbd6e;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 3px;
    text-align: right;
}
.form {
    align-items: left;
    display: flex;
    flex-direction: column;
}
.form-border {
    background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
    height: 1px;
    width: 100%;
}
.form-content {
    background: #fbfbfb;
    border: none;
    outline: none;
    padding-top: 14px;
}
#signup {
    color: #FFA07A;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
}
#submit-btn {
    background: -webkit-linear-gradient(right, #E9967A, #FFA07A);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 153px;
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px #24c64f;
}
</style>
</head>
<body align="center">
<form method="post" action="proses_login.php">
<body style="background:#D2B48C; color:Black">
<div id="card"> 
<div class="logo">
<img src="logo.png" width="100px"/>
<div id="card-content">
  <div id="card-title">
    <h2>LOGIN</h2>
    <div class="underline-title"></div>
  </div>
  <!-- cek pesan notifikasi -->
<form method="post" class="form">
<label for="user-email" style="padding-top:13px"> Username</label>
  <input
   id="username"
   class="form-content"
   type="username"
   name="username"
   autocomplete="on"
   Required oninvalid="this.setCustomValidity('username tidak boleh kosong')" oninput="setCustomValidity('')"/>
  <div class="form-border"></div>
<label for="user-password" style="padding-top:22px">Password</label>
  <input
   id="user-password"
   class="form-content"
   type="password"
   name="password"
   Required oninvalid="this.setCustomValidity('password tidak boleh kosong')" oninput="setCustomValidity('')"/>
  <div class="form-border"></div>
<input id="submit-btn" type="submit" name="submit" value="LOGIN" />

 </form>
</div>  
    </div>
</html> 