<!DOCTYPE html>
<title>Example</title>

<!-- Styles -->	
<style>
.example5 {
 height: 50px;	
 overflow: hidden;
 position: relative;
}
.example5 h3 {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: left;
 /* Apply animation to this element */	
 -moz-animation: example5 5s linear infinite alternate;
 -webkit-animation: example5 5s linear infinite alternate;
 animation: example5 5s linear infinite alternate;
}
/* Move it (define the animation) */
@-moz-keyframes example5 {
 0%   { -moz-transform: translateX(70%); }
 100% { -moz-transform: translateX(0%); }
}
@-webkit-keyframes example5 {
 0%   { -webkit-transform: translateX(70%); }
 100% { -webkit-transform: translateX(0%); }
}
@keyframes example5 {
 0%   { 
 -moz-transform: translateX(70%); /* Firefox bug fix */
 -webkit-transform: translateX(70%); /* Firefox bug fix */
 transform: translateX(70%); 		
 }
 100% { 
 -moz-transform: translateX(0%); /* Firefox bug fix */
 -webkit-transform: translateX(0%); /* Firefox bug fix */
 transform: translateX(0%); 
 }
}
</style>

<!-- HTML -->
<div class="example5">
<h3>Please select your cource</h3>
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