<html>
<?php
if (isset($this->session->userdata['logged_in'])) {
	$name = ($this->session->userdata['logged_in']['name']);
	$email = ($this->session->userdata['logged_in']['email']);
	$id = ($this->session->userdata['logged_in']['id']);
	$phone = ($this->session->userdata['logged_in']['phone']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script>tinymce.init({selector:'textarea'});</script>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<link href="editor.css" type="text/css" rel="stylesheet"/>
	<script src="editor.js"></script>

</head>
<style>
	body{
		background-color: #f3f5f7 !important;
	}
	.ticket{
		border:1px solid #fff;
		background: #fff;
	}
	.breadcrumb {
		padding: 15px 30px;
		margin-bottom: 20px;
		list-style: none;
		background-color: #869CCC;
		border-radius: 4px;
		color:#fff;
	}
	.breadcrumb>.active {
		color: #fff;
	}
	a {
		color: #fff;
		text-decoration: none;
	}

</style>
<body>
<div class="headerTicket">

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">My Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">New Ticket</li>
		</ol>
	</nav>

</div>
<div class="container ">



	<div class="col-md-8 ticket" >

		<h3 style="font-weight: bolder">Submit a  ticket</h3><br>




		<h4>Ticket Information :</h4>
		<form method="post" id="ticketForm" action="<?php echo base_url() ?>index.php/ticket/postTicket">

			<div class="form-group">
				<label for="projectUrl">Department:</label>

				<select id="department" class="form-control" name="department">
					<option>PWSLab DevOps Support</option>
					<option>iSupport</option>
					<option>Naveena</option>
					<option>omjit</option>
				</select>
			</div>
			<div class="form-group">
				<label for="projectUrl">Category:</label>
				<select id="category" class="form-control" name="category">
					<option>Uppdate CI/CD Pipeline Configuration</option>
					<option>DevSecOps Pipleline Setup</option>
					<option>Docker and Container</option>
					<option>Git Source Conyrol</option>
				</select>
			</div>
			<div class="form-group">
				<label for="projectUrl">Status:</label>
				<select id="category" class="form-control" name="category">
					<option>Low</option>
					<option>High</option>
					<option>Medium</option>
				</select>
			</div>
			<div class="form-group">
				<label for="projectUrl">PWSLab Project URL:</label>
				<input type="text" class="form-control" id="projectUrl" placeholder="PWSLab Project URL" name="projectUrl">
			</div>
			<div class="form-group">
				<label for="subject">Subject:</label>
				<input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
			</div>
			<div class="form-group">
				<label for="form7">Description</label>
				<textarea id="form7" class="md-textarea form-control" rows="3"></textarea>

			</div>

			<h5>Contact Details :</h5>

			<div class="form-group">
				<label for="projectUrl">Contact Name:</label>
				<input type="text" class="form-control" id="projectUrl" placeholder="" name="name" value="<?php echo $name; ?>">
			</div>

			<div class="form-group">
				<label for="projectUrl">Email:</label>
				<input type="text" class="form-control" id="projectUrl" placeholder="" name="email" value="<?php echo $email; ?>">
			</div>
			<div class="form-group">
				<label for="projectUrl">Phone:</label>
				<input type="text" class="form-control" id="projectUrl" placeholder="" name="phone" value="<?php echo $phone; ?>">
			</div>
			<input type="hidden" class="form-control" id="projectUrl" placeholder="PWSLab Project URL" name="contactId" value="<?php echo $id; ?>">


			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
	<div class="col-md-4" ></div>
</div>

</body>
</html>
