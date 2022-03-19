<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	
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
</style>
</head>
<body>
<div class="hero">
<nav>
<h2 class="logo">Dash<span>board</span></h2>
            <ul>
                <li><a href="#"><span>Dashboard</span></a></li>
                <li><a href="/Transaction">Transaction</a></li>
           
            </ul>
           
        </nav>

<div class="content">
            <h1>$20000</h1>
            <h4>Account Balance</h4>
            <h4>Account No: 1234556789976</h4>
            <h4>Romela Olalo</h4>
           

            
    
            
        </div>
        </div>
      
    

</body>
</html>