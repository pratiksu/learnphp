<?php 
      if (unlink("pratik.txt"))        ################################################
	  {                                # using unlink() fuction.              	      #
		  echo"delete";                #                                              #
	  }                                #  unlink() function is used to delete a file. #
	  else                             #  it returns TRUE on success or FALSE on fail.#
	  {                                #                                              #
		  echo"not delete";            ################################################                                         
	  }
?>
