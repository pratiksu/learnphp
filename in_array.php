<?php
    $bike = array("hero", "honda", "bullet");
	
	if(in_array("bullet", $bike)){              //using in_array() function
	    echo "find.";
	}else{
		echo "not find.";                  
	}                                           /*in_aaray() function use to search valu in_array
	                                              it returns 1(TRUE) on success OR 0(FALSE) on fali*/
	
?>