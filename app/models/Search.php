<?php

class Search extends Model
{
    public function searchData($data)
    {
       $where = $data['where'];
        
       $arr_query = explode(' ', $data['search_str']);
        
       $result = '';
       
       $idx = 0;
       foreach ($arr_query as $part){
           ++$idx;
           $result.= $idx.' часть: '.$part.' ;';          
       }
       
        return $result;
    }
}
