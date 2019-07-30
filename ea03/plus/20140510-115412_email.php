$email="valami@valami.hu";
if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 
    echo $email.'<br>'; 
    var_dump(filter_var($email, FILTER_VALIDATE_EMAIL)); 
}else{ 
    var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));    
} 
