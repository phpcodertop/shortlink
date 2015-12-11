<!DOCTYPE html>
<html>
<head>
	<title>Url Shortner By Ahmed Maher Halima</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/mycss.css">
	<script type="text/javascript" href="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script type="text/javascript" href="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" href="<?php echo base_url(); ?>assets/js/myjs.js"></script>
	<script type="text/javascript">
	</script>
</head>
<body>
		<div id="container">
				<h1 class="h" style="text-align: center"><a href="<?php echo base_url(); ?>" >Url Shortner</a></h1>
				<div class="hh">
					Use this URL Shortener service to shorten your long URLs!
				</div>

				<?php if($urldata): ?>

				<div id="form">
					<table class="table table-striped" style="width: 800px; margin: 0 auto; border: 10px solid #ccc; " border="1">
						<tr>
							<td width="25%"><h4>Short Link :</h4></td>
							<td width="75%"><?php echo base_url().'short/go/'.$urldata->code; ?></td>
						</tr>
						<tr>
							<td><h4>Created on :</h4> </td>
							<td><?php echo $urldata->create_date; ?></td>
						</tr>
						<tr>
							<td><h4>Number Of Visits :</h4></td>
							<td><?php echo $urldata->visits; ?></td>
						</tr>
						<tr>
							<td><h4>Go to link >>></h4></td>
							<td><a href="<?php echo $urldata->link; ?>" class="btn btn-primary">Go To Link</a></td>
						</tr>
					</table>
				</div>	
				<?php endif; ?>	

		</div>
		<footer style="padding:10px; text-align: center; background: #f1f1f1; position: fixed; bottom: 0; width: 100%;">
			copyrights &copy; reseved to Ahmed maher Halima <a href="https://www.facebook.com/yousseifweroquia" target="_blank">semicolon</a>
		</footer>
</body>
</html>