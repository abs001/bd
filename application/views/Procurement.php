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
	  	 	if ($pagename == "supplier"){
	  	 		$this->load->view('Home/Supplier'); 
	  	 		$this->load->view('Home/Js'); 	
	  	 	}	
	  	 	if ($pagename == "manufactur") {
	  	 		$this->load->view('Home/Manufactur'); 
	  	 		$this->load->view('Home/Js'); 	
	  	 	}
	  	 	if ($pagename == "department") {
	  	 		$this->load->view('Home/Department'); 
	  	 	}
	  	 	if ($pagename == "designation") {
	  	 		$this->load->view('Home/Designation'); 
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