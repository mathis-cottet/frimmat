<?php
class mail {
    public $emailcontact;
    public $requetecontact;

public function sendMail($emailcontact, $requetecontact){
    // $to = "mathiscottet10@gmail.com";
    $from = "mathiscottet10@gmail.com";
    $subject = $requetecontact;
    $message ="Contact frimmat";

    if(!empty($from & $subject)){
        mail($from, $message, $subject);
    }
}



}
?>