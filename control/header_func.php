<?php 

function go($url,$time=0){
    if($time == 0){
       return header("Location:../$url");
    }else{
        return header("refresh:$time;url=$url");

       
    }
}

function comeback($time=0,$url,$response=303){
    
  if($time!=0){
    return header("refresh:$time;url=../$url",true,$response);

  }else{
    return header("Location:../$url",true,$response);    
  }
}



?>