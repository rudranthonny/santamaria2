<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Colegio Santa Marta</title>
    <link rel="shortcut icon" href="imagenes/logo.png">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-image: url("imagenes/fondo2.png");
    background-repeat: repeat;
    background-size: 100% 100%
}

.card {
    padding: 30px 40px;
    margin-top: 60px;
    margin-bottom: 60px;
    border: none !important;
    box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2)
}

.blue-text {
    color: #00BCD4
}

.form-control-label {
    margin-bottom: 0
}

input,
textarea,
button {
    padding: 8px 15px;
    border-radius: 5px !important;
    margin: 5px 0px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    font-size: 18px !important;
    font-weight: 300
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #00BCD4;
    outline-width: 0;
    font-weight: 400
}

.btn-block {
    text-transform: uppercase;
    font-size: 15px !important;
    font-weight: 400;
    height: 43px;
    cursor: pointer
}

.btn-block:hover {
    color: #fff !important
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}</style>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body oncontextmenu='return false' class='snippet-body'>

<!--livewire-->
@livewire('formulario-estudiante')
@livewireScripts
<!--end livewire-->

                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/Javascript'>function validate(val) {
v1 = document.getElementById("fname");
v2 = document.getElementById("lname");
v3 = document.getElementById("email");
v4 = document.getElementById("mob");
v5 = document.getElementById("job");
v6 = document.getElementById("ans");

flag1 = true;
flag2 = true;
flag3 = true;
flag4 = true;
flag5 = true;
flag6 = true;

if(val>=1 || val==0) {
if(v1.value == "") {
v1.style.borderColor = "red";
flag1 = false;
}
else {
v1.style.borderColor = "green";
flag1 = true;
}
}

if(val>=2 || val==0) {
if(v2.value == "") {
v2.style.borderColor = "red";
flag2 = false;
}
else {
v2.style.borderColor = "green";
flag2 = true;
}
}
if(val>=3 || val==0) {
if(v3.value == "") {
v3.style.borderColor = "red";
flag3 = false;
}
else {
v3.style.borderColor = "green";
flag3 = true;
}
}
if(val>=4 || val==0) {
if(v4.value == "") {
v4.style.borderColor = "red";
flag4 = false;
}
else {
v4.style.borderColor = "green";
flag4 = true;
}
}
if(val>=5 || val==0) {
if(v5.value == "") {
v5.style.borderColor = "red";
flag5 = false;
}
else {
v5.style.borderColor = "green";
flag5 = true;
}
}
if(val>=6 || val==0) {
if(v6.value == "") {
v6.style.borderColor = "red";
flag6 = false;
}
else {
v6.style.borderColor = "green";
flag6 = true;
}
}

flag = flag1 && flag2 && flag3 && flag4 && flag5 && flag6;

return flag;
}</script>
                                </body>
                            </html>