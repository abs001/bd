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
	  	 	if ($pagename == "home"){
	  	 		$this->load->view('Home/Container'); 
	  	 		$this->load->view('Home/Js'); 	
	  	 	}	
	  	 	if ($pagename == "role") {
	  	 		$this->load->view('Home/Role'); 
	  	 	}
	  	 	if ($pagename == "department") {
	  	 		$this->load->view('Home/Department'); 
	  	 	}
	  	 	if ($pagename == "designation") {
	  	 		$this->load->view('Home/Designation'); 
	  	 	}
	  	 	if ($pagename == "CreateEmp") {
	  	 		$this->load->view('Home/CreateEmp'); 
	  	 	}
	  	 	if ($pagename == "supplier") {
	  	 		$this->load->view('Home/Supplier'); 
	  	 	}
	  	 	if ($pagename == "manufactur") {
	  	 		$this->load->view('Home/Manufactur'); 
	  	 	}
	    ?>
	    </div>
	    <script>
			var menuOption = <?php echo json_encode($active_menu); ?>;
			if (menuOption=="dashboard") {
				$("#dashboard").addClass("active");
			}
			if (menuOption=="employee") {
				$("#employee").addClass("active");
			}
			if (menuOption=="procurement") {
				$("#procurement").addClass("active");
			}
	    </script>
    </div>
</body>    