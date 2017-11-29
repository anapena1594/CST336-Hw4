 <!DOCTYPE HTML>  
<html>
<head>
  
  
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>  

<div class="jumbotron text-center">
<h1>Calculator </h1>
<h2>Please fill out the form to calculate summary for 3 numbers. </h2>
</div>
<form id="myForm" class="text-center" >
 
  Number 1: <input id ="n1" type="number" name="num1" >
  <br><br>
  
  Math Symbol: <select id = "m1" name="math1" class="btn btn-primary dropdown-toggle">
  
                
                <option value="-" > Subtract</option>
                <option value="*" > Multiply </option>
                <option value="+" > Add </option>
  </select>
  
  </br></br>
  
  Number 2: <input id = "n2" type="number" name="num2">
  <br><br>
 
  
  Math Symbol: <select id = "m2" name="math2" class="btn btn-primary dropdown-toggle">
  
                
                <option value="-" > Subtract</option>
                <option value="*" > Multiply </option>
                <option value="+" > Add </option>
  </select>
  
  <br><br>
  
  Number 3: <input id ="n3" type="number" name="num3" >
  <br><br>
  <input id = "bu" type="button"  value="Submit form" class="btn btn-primary">
</form>

<div class="jumbotron text-center">
<h1> Answer: </h1>

<p id="demo"></p>

</div>
<script>




$("#bu").click(function(e){
e.preventDefault();  
var name = "";
var num1 = "";
var math1 = "";
var math2 = "";
var num2 = "";
var num3 = "";
var result1= "";
var result2 = "";

    
    num1 = document.getElementById("n1").value ;
    num2 =document.getElementById("n2").value ;
    math1 =document.getElementById("m1").value ;
    math2 =document.getElementById("m2").value ;
    num3 =document.getElementById("n3").value ;
    var greeting;

if ((num1 == "")||(num2=="")||(num3=="")){
   alert("All 3 numbers have to be enter!")
 }
 
 else{   

if (math1=='+'){
  result1 = (+num1 + +num2);
  
}
if (math1=='-'){
  result1 = (+num1 - +num2);
  
}

if (math1=='*'){
  result1 = (+num1 * +num2);
  
}

if (math2=='+'){
  result2 = (+result1 + +num3);
  
}
if (math2=='-'){
  result2 = (+result1 - +num3);
  
}

if (math2=='*'){
  result2 = (+result1 * +num3);
  
}
   



document.getElementById("demo").innerHTML = result2; 
}
});
</script>


</body>
    
</html>