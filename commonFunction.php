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

/**
   * 计算时间差
   * @param int $timestamp1 时间戳开始
   * @param int $timestamp2 时间戳结束
   * @return array
   */
 function time_diff($timestamp1, $timestamp2)
 {
         if ($timestamp2 <= $timestamp1)
             {
                 return array('hours'=>0, 'minutes'=>0, 'seconds'=>0);
             }
         $timediff = $timestamp2 - $timestamp1;
         
         //计算天数
         $days = intval($timediff/86400);
         
         // 时
         $remain = $timediff%86400;
         $hours = intval($remain/3600);
    
         // 分
         $remain = $timediff%3600;
         $mins = intval($remain/60);
         // 秒
         $secs = $remain%60;
    
         if ($days>0){
             $hours = $days*24 + $hours;
         }
         $time = array('days'=>$days,'hours'=>$hours, 'minutes'=>$mins, 'seconds'=>$secs);
    
         return $time;
     }
