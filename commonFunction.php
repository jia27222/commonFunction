# commonFunction
项目常用小方法

//根据时间生成随机字符串，可做主键
function creatID(){
   $ID =  strftime("%y%m%d" ,time()).(intval(time()) -strtotime(date('Y-m-d',time()))).mt_rand(1000,9999);
   return $ID;
}

//对象转数组
 function object2array($array) {  
    if(is_object($array)) {  
        $array = (array)$array;  
     } if(is_array($array)) {  
         foreach($array as $key=>$value) {  
             $array[$key] = object2array($value);  
             }  
     }  
     return $array;  
}

//返回当前的毫秒时间戳
    //5分(min)=300000毫秒(ms)
    function msectime() {
        list($tmp1, $tmp2) = explode(' ', microtime());
        return (float)sprintf('%.0f', (floatval($tmp1) + floatval($tmp2)) * 1000 + 300000);
    }
