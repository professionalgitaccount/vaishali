<?php
trait pdf{//obj is not made in trait and u cn use multilevel inheritence instead of trait
	function showpdf(){echo "show";}
}
//$objpdf=new pdf();
trait excel{
	function showexcel(){echo "show excel";}
}
trait sms{}
trait email{}
class project{
	use pdf;
	use excel;
}
$obj=new project();
$obj->showpdf();
$obj->showexcel();

?>