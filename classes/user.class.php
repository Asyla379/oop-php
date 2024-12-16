<?php
class User {
    protected static $instance;
    public function __construct() {


    
    }
    public static function action(){

        if (!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function create(){
        
    }

    public function update_by_id ($values,$id){
        return DB::table('users')->update($values)->where("id = :id",["id"=>$id]);
    }
    public function get_all(){

        return DB::table('users')->select()->all();
    }



    public function _call($function, $params){
        $value =$params[0];
        $column =str_replace("get_by_","",$function);
        $column =addslashes($column);


        $check= DB::table('users')->select('show columns from users');

    
        $all_columns=array_column($check,"field");
        
        if(in_array($column,$all_columns)){
            return DB::table('users')->select()->where($column ."= :" . $column,[$column=>$value]);
        }
        return false;
    }

}
