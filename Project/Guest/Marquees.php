<!-- Styles -->	
<style>
.example3 {
 height: 200px;	
 overflow: hidden;
 position: relative;
}
.example3 h3 {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 -moz-transform:translateY(-100%);
 -webkit-transform:translateY(-100%);	
 transform:translateY(-100%);
 /* Apply animation to this element */	
 -moz-animation: example3 5s linear infinite;
 -webkit-animation: example3 1s linear infinite;
 animation: example3 3s linear infinite;
}
/* Move it (define the animation) */
@-moz-keyframes example3 {
 0%   { -moz-transform: translateY(-100%); }
 100% { -moz-transform: translateY(100%); }
}
@-webkit-keyframes example3 {
 0%   { -webkit-transform: translateY(-100%); }
 100% { -webkit-transform: translateY(100%); }
}
@keyframes example3 {
 0%   { 
 -moz-transform: translateY(-100%); /* Firefox bug fix */
 -webkit-transform: translateY(-100%); /* Firefox bug fix */
 transform: translateY(-100%); 		
 }
 100% { 
 -moz-transform: translateY(100%); /* Firefox bug fix */
 -webkit-transform: translateY(100%); /* Firefox bug fix */
 transform: translateY(100%); 
 }
}
</style>
<!-- HTML -->
<div class="example3">
<h3 style="font-size:35px; padding:35px; text-align:right;"><b><h4 style="color:#063;">Welcome</h4><br/><h5 style="color:#F00;">To</h5><br/><h6 style="color:#00F;">YinfoTech</h6><br/></b></h3>
</div>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>