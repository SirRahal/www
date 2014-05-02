function showorhide(id){
    if(document.getElementById(id)){    //check the element exists and can be accessed
        var ele = document.getElementById(id);    //get hold of the element
        if(ele.style.display=="none"){   //see if display property is set to none
            ele.style.display="block";
        }else{
            ele.style.display="none";
        }
    }
}