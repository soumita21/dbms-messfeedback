<!DOCTYPE html>
<html>
	<head> 
		<title>Forgot password page</title>
		<link rel="stylesheet" type="text/css" href="styles/style1.css">
        
	</head>
	<body>
    <script >
                            function myfun(){
                                var c=document.getElementById("username").value;
                                var a=document.getElementById("passwords").value;
                                var b=document.getElementById("passwordss").value;
                                if(c==""){
                                    document.getElementById("message1").innerHTML=" Please fill username";
                                    return false;
                                }
                                if(c.length!=10){
                                    document.getElementById("message1").innerHTML="username does not have 10 characters ";
                                    return false;
                                }
                                if(a==""){
                                    document.getElementById("messages").innerHTML="Please fill password";
                                    return false;
                                }
                                if(a.length<5){
                                    document.getElementById("messages").innerHTML="Password length must be greater than 5 characters";  
                                    return false;
                                }
                                if(a.length>15){
                                    document.getElementById("messages").innerHTML="Password length exceeding 15 characters";  
                                    return false;
                                }
                                if(a!=b){
                                    document.getElementById("message");
                                    document.getElementById("message").innerHTML="Password is not same"; 
                                    return false;
                                }
                                if((a.length<=15) && (a==b)){
                                    window.location="header.php";

                                    return false;

                                }
                            }
    </script>  
                  
        <div class="forgot">
             <h2>Forgot password?</h2>
        <form onsubmit="return myfun()">
            <p>Enter Username</p>
            <input type="text" name="username"
            placeholder="Username" id="username" value=""><span id="message1" style="color:yellow"></span>
            <p>Enter New password</p>
            <input type="password"  placeholder="Password" id="passwords" value=""><span id="messages" style="color:yellow"></span>
            <p>Confirm password</p>
            <input type="password" name="password" placeholder="Re-enter password" id="passwordss" value=""><span id="message" style="color:yellow"></span>

            <a href="header.php"><button type="submit" value="Submit" >Submit</button></a>
        
        </form>
        </div>
	</body>
</html> 