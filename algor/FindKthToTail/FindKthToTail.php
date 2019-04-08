<?php
/**
 * Created by PhpStorm.
 * User: supeng
 * Date: 2019-04-08
 * Time: 22:29
 */

function FindKthToTail($head, $k)
{
$current = $head;
   $pre = $head;
    if($head->next==null||$k==0){
        return $head->val;
    }

    for($i =0;$current->next!=null;$i++){
        $current = $current->next;
        if($i >= $k-1){
            $pre = $pre->next;
        }
    }

    return $pre->val;
}

class ListNode
{
    var $val;
    var $next = NULL;

    function __construct($x)
    {
        $this->val = $x;
    }
}
$a1 = new ListNode(1);
$a2 = new ListNode(2);
$a3 = new ListNode(3);
$a4 = new  ListNode(4);
$a5 = new  ListNode(5);
$a1->next = $a2;
$a2->next = $a3;
$a3->next = $a4;
$a4->next = $a5;

$res = FindKthToTail($a1,1);

var_dump($res);