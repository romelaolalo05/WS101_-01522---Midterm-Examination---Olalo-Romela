
<html>
<head>
 <meta charset="utf/8"/>
 <meta name="viewport" content="width=device-width,initial-scale=1.0"/>


 <title>ATM Machine</title>
 <style>body{
 margin:0px;
 padding:0px;

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
.main-container{
 margin:22px auto;
 width:95%;
 height:535px;
 height:530px;
 background-color:#c4c1b9;
 border-style:solid;
 border-color:white;
 border-width:15px;
}.name{
 border-bottom-style:solid;
 border-bottom-color:white;
 border-bottom-width:15px;
}
.name-b{
 padding-left:20px;
 font-family:lato;
 font-weight:900;
 font-size:35px;
}

.main{
 
 height:428px;
 width:100%;
 margin-top:0px;
}
.buttons{
 position:absolute;
 top:150px;
 width:100%;
 
 
}
.pas{
 position:absolute;
 top:180px;
 left:460px;
}
.pin{
 height:50px;
 width:400px;
 margin-top:20px;
 border-style:solid;
 border-radius:30px;
 border-color:black;
 background-color:#c4c1b9;
 padding-left:20px;
 outline:none;
 color:white;
 font-size:20px;
}
::placeholder{
 font-size:20px;
}
.buttons-right{
 float:right;
 width:50%;
 display:inline;
}
.buttons-left{
 float:left;
 width:50%;
 display:inline;
}
.btn{
 display:flex;
 height:50px;
 width:400px;
 margin-top:20px;
 border-style:solid;
 border-radius:30px;
 border-color:black;
 background-color:#c4c1b9;
 color:white;
 outline:none;
 
 
}
.btn:hover{
 background-color:#9B9B9B;
}
.btn-text{
 font-size:17px;
 text-align:center;
 font-weight:600;
 padding-left:110px;
 padding-top:2px;
 outline:none;
}
.buttons-left{
 margin-left:160px;
 margin-top:30px;
}
.buttons-right{
 margin-left:0px;
 margin-top:-210px;
 
}
.btnOK{
 width:100px;
 height:55px;
 border-style:solid;
 border-top-right-radius:30px;
 border-bottom-right-radius:30px;
 border-color:black;
 background-color:black;
 color:white;
 font-family:lato;
 font-weight:900;
 font-size:17px;
 position:relative;
 top:0px;
 right:102px;
 outline:none;
}
.head1{
 margin-right:100px;
}
.btnOK:hover{
 background-color:white;
 color:black;
 outline:none;
}
.transcations{
  position:absolute;
 top:180px;
 left:460px;
 
}
.heading{
 
 text-align:center;
 font-family:lato;
 margin-top:40px;
}</style>
</head>
 <div class="main-container">
  <div>
  <nav>
<h2 class="logo">Central<span>Bank</span></h2>

    
    <div class="pas" id="pas" style="display:block">
    <div><h1 class="heading head1" id="pinHeading">Please Enter Your Pin</h1></div>
    <div id="pinDiv" style="display:;">
    <input type="password" id="pin1" placeholder="" class="pin" maxlength="4"/>
    <button class="btnOK" id="btnEnter">Enter</button>
    </div>
    <div class="trans"><h3 id="pinMsg" class="heading head1" style="color:red"></h3></div>
    </div>
    <div class="buttons" style="display:none" id="btnsSecreen">
     <div><h1 class="heading">Please Select Your Desired Transactions</h1></div>
    <div class="buttons-left">
      <button class="btn" id="withdarawal"><h1 class="btn-text"><i style="font-size:21px;margin-right:10px; color:white" class="fas fa-caret-right"></i>Cash Withdrawal</h1></button>
      <button class="btn" id="billPay"><h1 class="btn-text"><i style="font-size:21px;margin-right:10px; color:white" class="fas fa-caret-right"></i>Bill Payment</h1></button>
      <button class="btn" id="ballanceInquiry"><h1 class="btn-text"><i style="font-size:21px;margin-right:10px; color:white" class="fas fa-caret-right"></i>Ballance Inquiry</h1></button>
      
     </div>
     <div class="buttons-right">
      <button class="btn" id="transfer"><h1 class="btn-text"><i style="font-size:21px;margin-right:10px; color:white" class="fas fa-caret-right"></i>Transfer</h1></button>
      <button class="btn" id="deposit"><h1 class="btn-text"><i style="font-size:21px;margin-right:10px; color:white" class="fas fa-caret-right"></i>Deposit</h1></button>
      <button class="btn" id="Exit"><h1 class="btn-text"><i style="font-size:21px;margin-right:10px; color:white" class="fas fa-caret-right"></i>Exit</h1></button>
       
      
     </div>
    </div>
    <div class="transcations" id="transactions" style="display:none">
     
     <div class="trans"><h1 id="firstText" class="heading head1"></h1></div>
     
     <div id="amounts" style="display:">
     <input id="amountIn" type="number"  placeholder="" class="pin" />
     <button class="btnOK" id="btnOK"><span id="num">$</span></button>
     </div>
     <div class="trans"><h3 id="secondText" class="heading head1"></h3></div>
     <div class="trans"><h3 class="heading head1" id="amount"></span></h3></div>
     <div class="trans"><a id="lin1" href="#"><h3 class="heading head1" id="back">Back to main secreen</h3></a></div>
    </div>
    <div class="transcations" id="billPayDiv" style="display:none">
     
     <div class="trans"><h1 id="firstText2" class="heading head1"></h1></div>
     <div id="ref" style="display:block">
     <input id="reffIn" type="number"  placeholder="" class="pin" />
     <button class="btnOK" id="btnReff"><span id="num">Enter</span></button>
     </div>
     <div id="billIn" style="display:none">
     <input id="amountIn2" type="number"  placeholder="" class="pin" />
     <button class="btnOK" id="btnOK2"><span id="num">$</span></button>
     </div>
     <div class="trans"><h3 id="secondText2" class="heading head1"></h3></div>
     <div class="trans"><h3 class="heading head1" id="amount2"></span></h3></div>
     <div class="trans"><a id="lin2" href="#"><h3 class="heading head1" id="back">Back to main secreen</h3></a></div>
    </div>
    
    
   </div>
    </div>
 </div>
 <script>
   let totalAmount=20000;
  
  let withdarawalBtn=document.getElementById('withdarawal');
  let billPay=document.getElementById('billPay');
  let ballanceInquiryBtn=document.getElementById('ballanceInquiry');
  let ref=document.getElementById('ref');
  let btnReff=document.getElementById('btnReff');
  
  let transferBtn=document.getElementById('transfer');
  let depositBtn=document.getElementById('deposit');
  let otherTransaction=document.getElementById('otherTransaction');
  let firstText=document.getElementById('firstText');
 let firstText2=document.getElementById('firstText2');
  let Exit=document.getElementById('Exit');
 let btnOK=document.getElementById('btnOK');
 let btnOK2=document.getElementById('btnOK2');
 let amounts=document.getElementById('amounts');
  let secondText=document.getElementById('secondText');
  let secondText2=document.getElementById('secondText2');
  let amount=document.getElementById('amount');
  let amount2=document.getElementById('amount2');
  let doubleTransactions=document.getElementById('doubleTransactions');
  let  amountIn=document.getElementById('amountIn').value;
  let back=document.getElementById('back');
  let lin1=document.getElementById('lin1');
  let lin2=document.getElementById('lin2');
  let transactions=document.getElementById('transactions');
  let btnsSecreen=document.getElementById('btnsSecreen');
     let pin1=document.getElementById('pin1').value;
  let btnEnter=document.getElementById('btnEnter');
  let pas=document.getElementById('pas');
  let num=document.getElementById('num');
  let pinMsg=document.getElementById('pinMsg');
  let billPayDiv=document.getElementById('billPayDiv');
  let pinDiv=document.getElementById('pinDiv');
  let pinHeading=document.getElementById('pinHeading');
  withdarawalBtn.onclick=withdarawal;
  
  function withdarawal(){
  
  btnsSecreen.style.display="none";
  transactions.style.display="block";
  firstText.innerHTML="Please Enter Your Amount ";
    
  }
  
  btnOK.onclick=OK;
  function OK(){
  let  amountIn=document.getElementById('amountIn').value;
  if(amountIn<totalAmount){
  secondText.innerHTML="Transaction Succesed $"+amountIn;
  amount.innerHTML="Remaining amount is $"+(totalAmount-amountIn);
  back.innerHTML="Back to main secreen";}
  else{
  secondText.innerHTML="You have't enough credit";
  amount.innerHTML="Your total ballance is $"+totalAmount;
  back.innerHTML="Back to main secreen";}
  
  }
  btnOK2.onclick=OK2;
  function OK2(){
  let  amountIn2=document.getElementById('amountIn2').value;
  if(amountIn2<totalAmount){
  secondText2.innerHTML="Transaction Succesed $"+amountIn2;
  amount2.innerHTML="Remaining amount is $"+(totalAmount-amountIn2);
  back.innerHTML="Back to main secreen";}
  else{
  secondText2.innerHTML="You have't enough credit";
  amount2.innerHTML="Your total ballance is $"+totalAmount;
  back.innerHTML="Back to main secreen";}
  
  }
  
  
  lin2.onclick=Back;
  function Back(){
  billPayDiv.style.display="none";
  billPayDiv.style.display="none";
  btnsSecreen.style.display="block";
  }
  btnEnter.onclick=login;
  function login(){
  let pin1=document.getElementById('pin1').value;
  
   if(pin1==1234){
    pas.style.display="none";
    btnsSecreen.style.display="block";
   
   }
   else{
    pinMsg.innerHTML="**Password not matched";
   
   }
  }
  billPay.onclick=billPayment;
  function billPayment(){
  firstText2.innerHTML="Please Enter Bill Refference No";
  btnsSecreen.style.display="none";
  billPayDiv.style.display="block";
  
 
  }
  
  btnReff.onclick=change;
  function change(){
  ref.style.display="none";
  billIn.style.display="block";
  firstText2.innerHTML="Please Enter Your Total Bill";
  
  
  }
  
  
  
  ballanceInquiry.onclick=billInquiry;
  function billInquiry(){
  btnsSecreen.style.display="none";
  billPayDiv.style.display="none";
  transactions.style.display="block";
  ref.style.display="none";
  amounts.style.display="none";
  firstText.innerHTML="Ballance Inquiry";
  secondText.innerHTML="Your Total Ballance is $"+totalAmount;
  
  }
  transferBtn.onclick=transferMoney;
  function transferMoney(){
  transactions.style.display="none";
  
  btnsSecreen.style.display="none";
  billPayDiv.style.display="block";
  firstText2.innerHTML="Enter the account number";
  
  }
  depositBtn.onclick=depositMoney;
  function depositMoney(){
  transactions.style.display="block";
  btnsSecreen.style.display="none";
  billPayDiv.style.display="none";
  firstText.innerHTML="Enter your amount";
  btnOK.onclick=function(){
   let pin1=document.getElementById('pin1').value;
   secondText.innerHTML="Succesfully Added $"+pin1;
   amount.innerHTML="Your new ballance is $"+(totalAmount+Number(pin1));
   
  
  }
  
  }
  Exit.onclick=exit;
  function exit(){
  transactions.style.display="none";
  billPayDiv.style.display="none";
  btnsSecreen.style.display="none";
  pas.style.display="block";
  pinDiv.style.display="none";
  pinHeading.innerHTML="Thankx for chosing us :)";
  pinMsg.innerHTML="We don't compromise on client safety !";
  
  }
  
back.onclick=Back;
  function Back(){
  location.reload();
  pas.style.display="block";
  transactions.style.display="none";
  billPayDiv.style.display="none";
  
  
   
 
  
  }
 
  
  
 
 </script>
</body>
</html>