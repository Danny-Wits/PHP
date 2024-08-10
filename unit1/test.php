
<?php
class Solution1 {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $state=array('('=>true ,'['=>true,'{'=>true);
        $rev=array(')'=>'(' ,']'=>'[','}'=>'{');
        $str=str_split($s);
        $opened=array();
        foreach ($str as $char){
         if($char=="(" ||$char=="[" || $char=="{"){
            array_push($opened,$char);
            $state[end($opened)]=false;
         }
         else{
             #echo "EQUAL  : " . end($opened). $rev[$char];
            if(array_pop($opened)==$rev[$char]){
                $state[$rev[$char]]= true; 
            }else{
                return false; 
            }
         }
     # print_r($opened);
      #print_r($state);
      }
      echo array_sum($state);
      if(empty($opened)){
        $result=true; 
        foreach ($state as $flag){
          $result=$flag && $result;
        }
        return $result ;
      }return false; 
     
    }
    
}

 class ListNode {
     public $val = 0;
     public $next = null;
     function __construct($val = 0, $next = null) {
         $this->val = $val;
         $this->next = $next;
     }
}

class Solution {

  /**
   * @param ListNode $list1
   * @param ListNode $list2
   * @return ListNode
   */
  function mergeTwoLists($list1, $list2) { 
    if($list1==null && $list2 ==null){
      return null;
    }else if($list1==null)
    {
      return $list2;
    }
    else if($list2==null)
    {
      return $list1;
    }
    $head=new ListNode(0,null);
    $temp=$head;
    while(true){
      
     if($list1->val<$list2->val){
      $temp->next=$list1;
      $list1=$list1->next;
     }else{
      $temp->next=$list2;
      $list2=$list2->next;
     }
      $temp =$temp->next;
      if($list1==null){
        $temp->next=$list2;
        return $head->next;
        }if($list2==null){
          $temp->next=$list1;
          return $head->next;
        }
    }
    
  }
}
$test = new solution();

$l3=new ListNode(4,null);
$l2=new ListNode(3,$l3);
$list1=new ListNode(1,$l2);
$l3=new ListNode(4,null);
$l2=new ListNode(2,$l3);
$list2=new ListNode(1,$l2);
// echo " ###########################";
// print_r($list1);
// print_r($list2);
print_r($test->mergeTwoLists($list1,$list2));


