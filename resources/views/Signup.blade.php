<!DOCTYPE html>
<html>

<head>
	<title>Signup</title>
	
<style>
    body {
    background-color: black;
    background-attachment: fixed;
}
nav{
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding-top: 45px;
	padding-left: 8%;
	padding-right: 8%;
}
.logo{
	color: white;
	font-size: 35px;
	letter-spacing: 1px;
	cursor: pointer;
}
.logo:hover{
	color: #f9004d;
	transition: .4s;
}
span{
	color: #f9004d;
	transition: .4s;
}
span:hover{
	color: white;
	transition: .4s;
}
nav ul li{
	list-style-type: none;
	display: inline-block;
	padding: 10px  25px;
}
nav ul li a{
    align-items: center;
	color: white;
	text-decoration: none;
	font-weight: bold;
	text-transform: capitalize;
    font-size: 25px;
}
nav ul li a:hover{
	color: #f9004d;
	transition: .4s;
}
.hero {
            height: 100vh;
            width: 100%;
            background-image: url(/photo/rose.jpg);
            background-size: cover;
            background-position: center;
        }
        .content{
	position: absolute;
	top: 50%;
	right:8%;
	transform: translateY(-50%);
}

h1{
	color: white;
	margin: 20px 0px 20px;
	font-size: 75px;
}
h3{
	color: #ff6666;
	font-size: 25px;
	margin-bottom: 50px;
}
h4{
    
	color: #f9004d;
	letter-spacing: 2px;
	font-size: 20px;
}
navi{
    padding: 550px 550px;

}
.nav-link {
    text-align:inline;
    font-family: sans-serif;
    font-size: 20px;
    padding: 5px 5px;
    text-decoration: none;
    color: black; 
    
}

.nav-link:hover {
    color: #A2A2A1FF;
}
.bod {
    margin-top: 15px;
}
section{
    justify-content: left;
}
.first {
    text-align: left;
    font-family: arial;
    font-size: 20px;
    color: black;

}
.about{
	width: 100%;
	padding: 100px 0px;
	background-color: #191919;
}
.about img{
	height: auto;
	width: 430px;
}
.about-text{
	width: 550px;
}
.main{
	width: 1130px;
	max-width: 95%;
	margin: 0 auto;
	display: flex;
	align-items: center;
	justify-content: space-around;
}
.about-text h2{
	color: white;
	font-size: 75px;
	text-transform: capitalize;
	margin-bottom: 20px;
}
.about-text h5{
	color: white;
	letter-spacing: 2px;
	font-size: 22px;
	margin-bottom: 25px;
	text-transform: capitalize;
}
.about-text p{
	color: #fcfc;
	letter-spacing: 1px;
	line-height: 28px;
	font-size: 18px;
	margin-bottom: 45px;
}
button{
	background-color:#f9004d;
	color: white;
	text-decoration: none;
	border: 2px solid transparent;
	font-weight: bold;
	padding: 13px 30px;
	border-radius: 30px;
	transition: .4s; 
}
button:hover{
	background-color: transparent;
	border: 2px solid #f9004d;
	cursor: pointer;
}

.message {
    margin-top: 25px;
    background-color: #dad7d7;
    color: #000000FF;
    text-align: center;
    font-family: arial;
    font-size: 20px;
    border: 1px solid;
    padding-right: 10px;
    padding-left: 10px;
}

.foot {
    color: #0d0c0c;
    text-align: center;
    font-family: arial;
    font-size: 10px;
    
}
::placeholder {
            color: black;
            opacity: 1;
        }
        
      
        
        html {
            background: #56565b;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        body {
            padding-top: 10vh;
        }
        
        .container {
            background: #3c3c42;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: auto;
            height: 465px;
            width: 350px;
            box-shadow: -3px -2px 6px #6c6565, 7px 9px 25px #0b0b0b;
        }
        
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        input {
            height: 30px;
            border: 2px solid #e1dede69;
            border-radius: 5px;
            background: #777272;
            color: black;
            text-align: center;
            outline: none;
            font-size: 15px;
        }
        
        .form-item-username {
            margin: 5px;
            display: flex;
            padding-bottom: 10px;
        }
        
        .form-item-username input {
            width: 150px;
            margin: 0 5px;
        }
        
        .form-item {
            margin: 0 auto;
            padding-bottom: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 90%;
        }
        
        .form-item input {
            margin: 5px;
            width: 100%;
        }
        
        .accept-box {
            display: flex;
            align-items: center;
            margin: auto;
            font-size: 15px;
        }
        
        a {
            color: white;
        }
        
        a:hover {
            color: grey
        }
        
        .form-btns {
            display: flex;
            flex-direction: column;
            padding: 10px 0;
        }
        
        .form-btns button {
            margin: auto;
            font-size: 20px;
            padding: 8px;
            width: 280px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: rgb(75, 61, 61);
            background: #fbba50;
        }
        
        .form-btns button:disabled {
            cursor: not-allowed;
            background: #8f8b85 !important;
            color: rgb(131, 120, 120) !important;
        }
        
        .form-btns button:hover {
            background: #d88a0c;
            color: antiquewhite;
        }
        
        .options {
            padding-top: 15px;
            margin: auto;
            font-size: 13px;
        }
        
        p {
            font-size: 12px;
        }
        
        .pwd-format {
            position: relative;
            color: rgb(65, 62, 62);
            background: rgb(243, 234, 243);
            font-size: 11px;
            width: 150px;
            padding: 5px;
            border-radius: 5px;
            top: 112px;
            right: -81px;
            z-index: 2;
            display: none;
        }
</style>
</head>
<body>
<div class="hero">
<nav>
<h2 class="logo">Sign<span>-up</span></h2>
          
        </nav>

<div class="content">
<form action="/Signup" method="POST">
            <div class="form-item-username">
                <input type="text" name="firstName" id="firstName" placeholder="First Name">
                <input type="text" name="lastName" id="lastName" placeholder="Last Name">
            </div>

            <div class="form-item">
                <input type="email" name="email" id="email" placeholder="Email">
            </div>

            <div class="form-item">
                <!-- add a password format display -->
                <span class="pwd-format">
                    8-15 AlphaNumeric Characters
                </span>
                <input type="password" name="password" id="password" placeholder="Enter password">
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm password">
            </div>

            <div class="accept-box">
                <input type="checkbox" name="accept" id="accept">
                <p>I accept the <a href="#">Terms & Conditions</a></p>
            </div>

            <div class="form-btns">
                <button> <a href="/Login"class="signup" type="submit" >Sign Up</a></button>
                <div><a href="/Login" class="options" >
                    Already hav an account?     
                </div>
            </div>

        </form>
       
    </div>  
</div>
            
    

		

</body>
</html>