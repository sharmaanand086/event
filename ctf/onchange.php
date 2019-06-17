<?php  
    include("isdk.php");  
    $tagnumber =    12095;  //tag number 
        $app = new iSDK;
    $inputemail=    $_POST['email'];
 
        if ($app->cfgCon("connectionName")) 
        {                                
             $returnFields=array('Id','FirstName','Email','Phone1');
            $contacts = $app->dsFind("Contact",1000,0,'Groups',$tagnumber, $returnFields);     
            
          foreach($contacts as $row){
              if($row['Email'] == $inputemail ){
                echo'1';
               exit;
            }
            }
          echo'0';
              
         }
                                
 

?>
