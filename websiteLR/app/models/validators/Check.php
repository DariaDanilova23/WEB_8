<?php
Class FormValidation{
    private $Rules=[];
    private $data,$value; // может не приват

    public function __construct($post_data){
        $this->data=$post_data;
    }
    public function validForm(){
        $this->isNotEmpty();
        return $this->Rules;
    }
    private function isNotEmpty(){
        $name=trim($this->data['FIO']);
        $email=trim($this->data['email']);
        $phone=trim($this->data['phone']);
        if (empty($name)) {
            $this->SetRule('FIO','Введите имя');
        }
        else { $this->isName($name);}
        if (empty($email)) {
            $this->SetRule('email','Введите email');
        }
        else { $this->isEmail($email);}
        if (empty($phone)) {
            $this->SetRule('phone','Введитe телефон');
        }
        else { $this->isPhone($phone);}

    }

    function  isName($dataName){
        if (!(preg_match('/^[А-Яа-яA-Za-z]*?\s[А-Яа-яA-Za-z]*?\s[А-Яа-яA-Za-z]*$/u',$dataName))){
            $this->SetRule('FIO','Неверный формат ФИО');
        }
        else return;
    }

    function  isEmail($dataEmail){
        $email_="/(?:[a-z0-9!#$%&'*+?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+?^_`{|}~-]+)*|(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*)@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/";
        if (!preg_match($email_,$dataEmail)){
            $this->SetRule('email','Неверный формат email');
        }
        else return;
    }
    function  isPhone($dataPhone){
        if (!preg_match('/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/',$dataPhone)){
            $this->SetRule('phone','Неверный формат номера телефона');
        }
        else return;
    }
    private function SetRule($field_name, $validator_name) {
        $this->Rules[$field_name]=$validator_name;
    }
}

Class ResultsVerification extends FormValidation{
    public $REZ=[];
    private $data_r,$value; // может не приват

    public function __construct($post_data){
        $this->data_r=$post_data;
    }
    public function check($post_check){

        if (strcasecmp($post_check,'yes') == 0){
            return 1;
        }
    }
    public function check_2($post_check){
        if (strcasecmp($post_check,'3') == 0){
            return 1;
        }
    }
    public function mass(){
        $REZ=[];
        foreach ($_POST as $key=> $value){ echo "POST: $_POST "; echo "vAL $value " ; echo "kEY $key "; echo $_GET['email'];}
    }
}
?>
