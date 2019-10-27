<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	.nFound{
		padding: 20px;font-size: 20px;text-align: center;margin-right:100px;
	}
	h1{
		border: 1px solid;
	    padding: 11px;
	    width: 50%;
	}
	.form-control {
	    display: block;
	    width: 100%;
	    height: 34px;
	    padding: 6px 12px;
	    font-size: 14px;
	    line-height: 1.42857143;
	    color: #555;
	    background-color: #fff;
	    background-image: none;
	    border: 1px solid #ccc;
	    border-radius: 4px;
	    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
	    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	}
	.container {
	    padding-right: 15px;
	    padding-left: 15px;
	    margin-right: auto;
	    margin-left: auto;
	}
	.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
	    /* position: relative; */
	    min-height: 1px;
	    padding-right: 15px;
	    padding-left: 15px;
	}
	div {
	    display: block;
	}
	.row {
	    margin-right: -15px;
	    margin-left: -15px;
	}
	.btn-group-vertical>.btn-group:after, .btn-group-vertical>.btn-group:before, .btn-toolbar:after, .btn-toolbar:before, .clearfix:after, .clearfix:before, .container-fluid:after, .container-fluid:before, .container:after, .container:before, .dl-horizontal dd:after, .dl-horizontal dd:before, .form-horizontal .form-group:after, .form-horizontal .form-group:before, .modal-footer:after, .modal-footer:before, .modal-header:after, .modal-header:before, .nav:after, .nav:before, .navbar-collapse:after, .navbar-collapse:before, .navbar-header:after, .navbar-header:before, .navbar:after, .navbar:before, .pager:after, .pager:before, .panel-body:after, .panel-body:before, .row:after, .row:before {
	    display: table;
	    content: " ";
	}
	@media (min-width: 992px){
		.col-md-3 {
		    width: 25%;
		}
	}
	@media (min-width: 992px){
		.col-md-12 {
		    width: 100%;
		}
	}
	@media (min-width: 1200px){
	.container {
	    width: 1170px;
		}
	}
	@media (min-width: 992px){
	.col-md-offset-3 {
	    margin-left: 25%;
		}
	}

	@media (min-width: 992px){
	.col-md-6, {
	    width: 50%;
		}
	}
	@media (min-width: 992px){
	.col-md-12, {
	    width: 100%;
		}
	}
	.col-md-6{
		width:41% !important;
	}
	.col-md-3{
		width: 25% !important;
	}
	@media (min-width: 992px){
		.col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9 {
		    float: left;
		}
	}
	.cDay{
		border: 1px solid;
	    padding: 11px;
	    text-align: center;
	}
	.tmp{
		
	    border: 1px solid;
	    padding: 11px;
	    text-align: center;
	    display: block;
	    height: 200px;
	}
	.loc{
		border: 1px solid;
	    padding: 11px;
	    text-align: center;
	}
	.col-md-1 {
	    width: 11.285714% !important;
	    text-align: center;
	}
	img{
		  box-shadow: 0 8px 6px -6px black;
	}
	body{
		background: url(overcast_clouds.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    color: white;
    font-family: cursive;
    font-style: italic;
	}
	.input-box {
	    margin-top: 1%;
	    margin-bottom: 1%;
	    width: 50%;
	    margin-left: 20%;
	}
	input#location {
	    background: cyan;
	    font-size: 15px;
	    color: black;
	    font-style: italic;
	    font-family: monospace;
	}
	p.desc {
	    width: 131px;
	}
	@media only screen and (max-width: 600px){
		.col-md-1 {
		    width: 30px;
		    width: 90% !important;
		    text-align: center;
		}
		.nFound{
			margin-right:5px;
		}
		p.desc {
		    margin-left: 80px;
		}
		.loc{
			width: 	337%;
		}
		h3.tmp {
		    width: 204%;
		}
		h3.cDay {
		    width: 335%;
		}
	}

</style>
<body>
	<div class="body-part">
		<div class="col-md-12">
			<div class="row">
				<div class="input-box">
					<div>
						<input type="text" class="form-control" id="location" onkeyup="myFunction()" name="location" placeholder="search location">
					</div>
				</div>
			</div>
		</div>
		<div id="home">
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
		const formData = new FormData();
		formData.append('location','Mumbai');
		const xhr = new XMLHttpRequest();
		xhr.open('post','action.php',true);
		xhr.send(formData);
		xhr.onreadystatechange = function() {
	        if (this.readyState == 4 && this.status == 200) {
	            document.getElementById('home').innerHTML = this.responseText;
	        }
	    }

	function myFunction(){
		const formData = new FormData();
		data = document.getElementById('location').value;
		formData.append('location',data);
		const xhr = new XMLHttpRequest();
		xhr.open('post','action.php',true);
		xhr.send(formData);
		xhr.onreadystatechange = function() {
	        if (this.readyState == 4 && this.status == 200) {
	            // console.log(this.responseText);
	            document.getElementById('home').innerHTML = this.responseText;
	        }
	    }
	}
</script>