<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

use Bhavingajjar\LaravelPython\LaravelPython;


class ListNode {
    public $val;
    public $next;

    public function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}


class HomeController extends Controller
{
    /**
     * Display a listing of thresource.Add Two Numbers
     */

    public function index()
    {
        $new_array = array();
        $step = 6;
        $firstdata='';
        for($i=0;$i<$step;$i++){
            $firstdata = $firstdata.'1';
        }
        array_push($new_array,$firstdata);

        $diviedby2 = floor($step/2);
        $diviedby2_count = '';
        $remain = intval($step-$diviedby2*2);
        for($i=0;$i<$diviedby2;$i++){
            $diviedby2_count = $diviedby2_count.'2';
        }
        if($remain != 0){
            $diviedby2_count = $diviedby2_count.'1';
        }

        array_push($new_array,$diviedby2_count);

        $number_of_2_for_count = intval($diviedby2);
        $number_of_2_for_cal = intval($diviedby2);

        $new_count = '';
        $count_1 = '11';

        for($i=0;$i<$number_of_2_for_count-1;$i++){
            for($k=0;$k<$number_of_2_for_cal-1;$k++){
                $new_count = $new_count.'2';
                echo($new_count.',');
            }
            $new_count = $new_count.$count_1;
            if($remain != 0){
                $new_count = $new_count.'1';
            }
            array_push($new_array,$new_count);
            $number_of_2_for_cal = $number_of_2_for_cal-1;
            $count_1 = $count_1.'11';
            $new_count = '';
        }

        dd($new_array);

        return floor($x ** 0.5);
    }

    public function sqr_root()
    {
        $x = 8;
        return floor($x ** 0.5);
    }

    public function search_insert_position()
    {
        //search-insert-position
        $nums = [1,3,5,6];
        $target = 5;
        $insert_position = 0;

        foreach($nums as $singledata)
        {
            if($singledata < $target){
                $insert_position = $insert_position+1;
            }

        }
        return $insert_position;
    }

    public function remove_element()
    {
        $nums = [3,2,2,3];
        $new_array = array();
        $val = 3;
        foreach($nums as $singledata)
        {
            if($singledata != $val){
                array_push($new_array,$singledata);
            }
        }
        $nums =  $new_array;
        return count($nums);
    }
    public function remove_duplicates_from_sorted_array()
    {
        //remove-duplicates-from-sorted-array
        $new_array = array();
        $not_added = 0;
        foreach($nums as $singledata)
        {
            if (in_array($singledata, $new_array)){
                $not_added++;
            }else{
                array_push($new_array,$singledata);
            }
        }
        // for($i=0;$i<$not_added;$i++){
        //     //array_push($new_array,'_');
        // }
        //$stringresult = implode(",",$new_array);

        $nums =  $new_array;
        //return $new_array;
        $result = count($new_array);
        return $result;
    }

    public function Add_Two_Numbers_linked_list()
    {


        $l1 = new ListNode(2, new ListNode(4, new ListNode(3)));
        $l2 = new ListNode(5, new ListNode(6, new ListNode(4)));

        $l1_array = array();
        $current_l1 = $l1;
        while ($current_l1 !== null) {
            $l1_array[] = $current_l1->val;
            $current_l1 = $current_l1->next;
        }

        $l2_array = array();
        $current_l2 = $l2;
        while ($current_l2 !== null) {
            $l2_array[] = $current_l2->val;
            $current_l2 = $current_l2->next;
        }

        $l1_reverse = array_reverse($l1_array);
        $l2_reverse = array_reverse($l2_array);

        $converted_sting_l1 = (int)implode("",$l1_reverse);
        $converted_sting_l2 = (int)implode("",$l2_reverse);
        $newdataplus =bcadd($converted_sting_l1,$converted_sting_l2);

        $newdata_to_array = str_split($newdataplus);
        $count=0;
        foreach ($newdata_to_array as $digit) {
            $newdata_to_array[$count] = (int)$digit;
            $count++;
        }

        $finaldata_reverse = array_reverse($newdata_to_array);

        $finalresult_in_linkedlist = new ListNode();
        $current = $finalresult_in_linkedlist;

        foreach ($finaldata_reverse as $value) {
            $current->next = new ListNode($value);
            $current = $current->next;
        }

        return $finalresult_in_linkedlist->next;
    }

    public function plus_one()
    {

        $digits = [7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,6];
        $newdata = implode("",$digits);
        $newdataplus1 =bcadd($newdata,1);
        $array = str_split($newdataplus1);
        return $array;
    }

    public function lenght_of_last_word()
    {

        $s = "   fly me   to   the moon  ";
        $arraydata = explode(" ",$s);
        $newarray = array();
        foreach($arraydata as $singledata){
            if($singledata != ""){
                array_push($newarray, $singledata);
            }
        }
        return strlen(end($newarray));
    }

    public function two_sum()
    {

        $nums = [3,2,4];
        $target = 6;
        for($i=0;$i<count($nums);$i++)
        {
            echo $i;
            $currentnumber = $nums[$i];
            for($j=$i+1;$j<count($nums);$j++)
            {
                if($currentnumber+$nums[$j] == $target)
                {
                    $answare = array($i,$j);
                    return $answare;
                }
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
