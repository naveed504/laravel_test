<?php


    /**
     * Example one
     */
    function findAverage(){
        $numbers = array(200.4, 15.9,69.3,122.2,50.3,201.5,4.6,8.4,1.6,0.4,6.3);
        $average = array_sum($numbers) / count($numbers);
        echo $average;
    }

    /**
     * Example Two
     */
     function maximumNumbers(){
        $array = array(200.4, 15.9,69.3,122.2,50.3,201.5,4.6,8.4,1.6,0.4,6.3);
       
        $third = $first = $second = $fourth = $fifth =  PHP_INT_MIN;
        for ($i = 0; $i < count($array) ; $i ++)
        {
          
            if ($array[$i] > $first)
            {
                $fifth = $fourth;
                $fourth = $third;
                $third = $second;
                $second = $first;
                $first = $array[$i];
            }

            
            
            else if ($array[$i] > $second)
            {
                $third = $second;
                $second = $array[$i];
            }
     
            else if ($array[$i] > $third){
                $fourth = $third;
                $third = $array[$i];
            }
            else if ($array[$i] > $fourth){
                $fifth = $fourth;
                $fourth = $array[$i];
            }
         
        }
     
        echo $first. " ".$second." ".$third. " ".$fourth. " ".$fifth;
    
    }


    /**
     * Example three
     */
    function minimumNumbers(){
        $array = array(200.4, 15.9,69.3,122.2,50.3,201.5,4.6,8.4,1.6,0.4,6.3);
       
        $third = $first = $second = $fourth = $fifth =  0;
        for ($i = sizeof($array) -1; $i >= 0; $i --)
       
        {
          
            if ($array[$i] > $first)
            {
                $fifth = $fourth;
                $fourth = $third;
                $third = $second;
                $second = $first;
                $first = $array[$i];
            }

            else if ($array[$i] > $second)
            {
                $third = $second;
                $second = $array[$i];
            }
     
            else if ($array[$i] > $third){
                $fourth = $third;
                $third = $array[$i];
            }
            else if ($array[$i] > $fourth){
                $fifth = $fourth;
                $fourth = $array[$i];
            }
         
        }
     
        echo $first. " ".$second." ".$third. " ".$fourth. " ".$fifth;
    
    }


///




