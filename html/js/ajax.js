var reuest, url;

function product_ajax( category_id, sub_category_id){
  
    url="product-ajax.php?category_id="+category_id+"&sub_category_id="+sub_category_id;

if(window.XMLHttpRequest){

    request=new XMLHttpRequest();
}

else if(window.ActiveXObject){

    request=new ActiveXObject("Microsoft.XMLHTTP");

}

try{

    request.onreadystatechange=fun1;
    request.open("GET",url,true);
    request.send();
  
}catch(E){
    alert("Something went worng");
}

}


function fun1(){

    if(request.readyState==4){

        document.getElementById('shop').innerHTML=request.responseText;
    }
}