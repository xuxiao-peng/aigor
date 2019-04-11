<?php
/**
 * Created by PhpStorm.
 * User: supeng
 * Date: 2019-04-11
 * Time: 16:27
 */

class TreeNode
{
    var $val;
    var $left = NULL;
    var $right = NULL;

    function __construct($val)
    {
        $this->val = $val;
    }
}

function HasSubtree($pRoot1, $pRoot2)
{
    if ($pRoot1 == null || $pRoot2 == null) {
        return false;
    }
    if ($pRoot1->val == $pRoot2->val) {
        return judgeChildren($pRoot1,$pRoot2)||HasSubtree($pRoot1->left, $pRoot2)|| HasSubtree($pRoot1->right, $pRoot2);
    }
    return HasSubtree($pRoot1->left, $pRoot2)|| HasSubtree($pRoot1->right, $pRoot2);
}

function judgeChildren($tree1,$tree2){
    if($tree2 == null){
        return true;
    }
    if($tree1 == null){
        return false;
    }
    if($tree1->val != $tree2->val){
        return false;
    }
    return judgeChildren($tree1->left,$tree2->left)&&judgeChildren($tree1->right,$tree2->right);
}

$t1 = new TreeNode(1);