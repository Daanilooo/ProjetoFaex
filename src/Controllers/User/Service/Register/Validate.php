<?php
namespace Danilo\Receitas\Controllers\User\Service\Register;

class Validate{

    public function execute($data){
        $sucess = true;
        foreach($this->getFields() as $key => $field){
            if ($field['required'] == false){
                continue;
            }

            if (!isset($data[$key]) or empty($data[$key])){
                $sucess = false;
            }
            
        }
        return $sucess; 
    }

    private function getFields(){
        return [
            'name' => [
                'required' => true
            ],
            'email' => [
                'required' => true
            ],
            'password' => [
                'required' => true
            ],
            'phone' => [
                'required' => true
            ]
        ];
    }
}