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
	  	 	if ($pagename == "CreateUser") {
	  	 		$this->load->view('Home/CreateUser'); 
	  	 	}
	  	 	if ($pagename == "assignrole") {
	  	 		$this->load->view('Home/AssignRole'); 
	  	 	}
	  	 	if ($pagename == "item") {
	  	 		$this->load->view('Home/Item'); 
	  	 	}

	  	 	if ($pagename == "category") {
	  	 		$this->load->view('Home/Category'); 
	  	 	}
	  	 	if ($pagename == "drug") {
	  	 		$this->load->view('Home/Drug'); 
	  	 	}
	  	 	if ($pagename == "po") {
	  	 		$this->load->view('Home/PurchaseOrder'); 
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
				var category = <?php echo json_encode($category); ?>;
				if (category=="master") {
					$("#master").addClass("active");
				}
				if (category=="purchase") {
					$("#purchase").addClass("active");
				}

				var pagename = <?php echo json_encode($pagename); ?>;

				if (pagename=="supplier") {
					$("#supplier").addClass("active");
				}

				if (pagename=="manufactur") {
					$("#manufactur").addClass("active");
				}
				if (pagename=="item") {
					$("#item").addClass("active");
				}
				if (pagename=="category") {
					$("#cat").addClass("active");
				}
				if (pagename=="drug") {
					$("#drug").addClass("active");
				}
				if (pagename=="po") {
					$("#po").addClass("active");
				}
			}
	    </script>
    </div>
</body>    