<?php

class validation{

   private $_passed = false,
           $_errors = array();


  public function check($item = array()){
    foreach ($item as $items => $rules) {
      foreach ($rules as $rule => $rule_value) {
        switch ($rule) {
          case 'required':
            if (trim(Input::get($items)) == false && $rule_value == true ) {
              $this->addError("$items can't empty");
            }
            break;

            case 'min':
              if (strlen(Input::get($items)) < $rule_value) {
                $this->addError("$items minimum $rule_value ");
              }
              break;

              case 'min':
                if (strlen(Input::get($items)) > $rule_value) {
                  $this->addError("$items maximum $rule_value ");
                }
                break;

          default:
            break;
        }
      }//ahkhir foreach pertama

    }



    if (empty($this->_errors)) {
      $this->_passed = true;
    }
    return $this;
}



private function addError($error){
  $this->_errors[] = $error;

}

public function errors()
{
  return $this->_errors;
}
 public function passed()
 {
    return $this->_passed;
 }

}



 ?>
