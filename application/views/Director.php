<?php
	$this->load->view('Home/Head');
?>
<body>
    <div id="wrapper">
    	<?php
	  	 	$this->load->view('Home/LeftSide'); 	
	    ?>
    	<div id="page-wrapper" class="gray-bg dashbard-1">
	    <?php
	  	 	$this->load->view('Home/TopMenu'); 	
	  	 	$this->load->view('Home/Container'); 
	  	 	$this->load->view('Home/Js'); 	
	    ?>
	    </div>
    </div>
</body>    