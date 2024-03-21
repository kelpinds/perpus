<!doctype html>
<html lang="en">
  <head>
  	<title>Aplikasi Digital</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="\css\bootstrap.min.css">
		<link rel="stylesheet" href="\css\util.css">
		<link rel="stylesheet" href="\css\style.css">
		<link rel="stylesheet" href="\css\main.css">
    <link rel="stylesheet" href="\css\bootstrap\mixins\_border-radius.css">
    <link rel="stylesheet" href="\css\bootstrap\mixins\_screen-reader.css">
    <link rel="stylesheet" href="\css\bootstrap\mixins\_visibility.css">
    <link rel="stylesheet" href="\css\bootstrap\_media.css">
		<link rel="stylesheet" href="\css\style.min.css">
		
	<style>
    .dropdown-btn {
  
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
    }
  .dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
  </style>
    
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
	  		<h1><a class="logo">Perpustakaan Digital</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="dass"><span class="fa fa-home mr-3"></span> Dashboard</a>
          </li>
          <li>
            <a  class="dropdown-btn"><span class="fa fa-table mr-3"></span>Data</a>
            <div class="dropdown-container">
              <a href="admin">Petugas</a>
              <a href="buku">Buku</a>
              <a href="kategori">Kategori</a>
            </div>
        </li>
          <li>
            <a href="login"><span class="fa fa-sign mr-3"></span> Log Out</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
      @yield('content')
		</div>
    <script>
      var dropdown = document.getElementsByClassName("dropdown-btn");
      var i;
      
      for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
          } else {
            dropdownContent.style.display = "block";
          }
        });
      }
      </script>
    <script src="\js\jquery.min.js"></script>
    <script src="\perpus\public\js\popper.js"></script>
    <script src="\js\bootstrap.min.js"></script>
    <script src="\js\main.js"></script>
    <script src="\js\app-style-switcher.js"></script>
    <script src="\js\custom.js"></script>
    <script src="\js\sidebarmenu.js"></script>
    <script src="\js\waves.js"></script>
    <script src="\js\popper.js"></script>
  </body>
</html>