<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\response;

trait ApiResponseTrait{
    public  function jTable($data = null,$error=null,$code=200)
    {
            $successList=[200,201];
            $jTableResult['Result'] = in_array($code,$successList)?"OK":"ERROR";
            $jTableResult['Message'] = $error;
            return   $jTableResult;
    }
    public function jTableOptionList($data = null,$error=null,$code=200)
    {
        $jTableResult=$this->jTable($data,$error,$code);
        $jTableResult['Options'] =$data;

        return response( $jTableResult,$code);
    }
    public function jTableList($data = null,$error=null,$code=200)
    {
        $jTableResult=$this->jTable($data,$error,$code);
        $jTableResult['Records'] =$data;

        return response( $jTableResult,$code);
    }
    public function jTableCreate($data = null,$error=null,$code=200)
    {
        $jTableResult=$this->jTable($data,$error,$code);
        $jTableResult['Record'] =$data;

        return response( $jTableResult,$code);
    }
    public function jTableUpdateDelete($data = null,$error=null,$code=200)
    {
        $jTableResult=$this->jTable($data,$error,$code);
        return response( $jTableResult,$code);
    }

}

