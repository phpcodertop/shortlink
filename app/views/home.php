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
		function short(){
			var u = $("#myform").serialize();
			$.post('<?php echo base_url(); ?>short/index',u,function(output){
				$('#hide').html(output).show();
			});
		}
	</script>
</head>
<body>
		<div id="container">
				<h1 class="h" style="text-align: center">Url Shortner</h1>
				<div class="hh">
					Use this URL Shortener service to shorten your long URLs!
				</div>

				<div id="form">
					<?php 
						if(validation_errors()){
							echo '<div class="alert alert-danger" id="hide">'. validation_errors().'</div>';
						}
					?>
					<form method="post" action="<?php echo base_url(); ?>short/index" id="myform">
						<input type="text" name="link" placeholder="Type the link you wanta to shorten" class="txt">
						<input type="submit"  name="short" value="Shorten" class="btn btn-primary" >
					</form>
				</div>
				<?php if(isset($link)): ?>
						<div id="shorten">
							Your Short link : 
							<form method="post" action="#">
								<input type="text" id="box-content" name="shorten" disabled="disabled" value="<?php echo base_url().'short/go/'.$link->code; ?>"  class="txt2" >
							</form>
						</div>
				<?php endif; ?>		
				<br />
				<h1 class="recent">Recent added URLs</h1>
				<div class="w">
					<table class="table table-striped o">
						<thead>
							<th>Short Link</th>
							<th>Long Link</th>
							<th>Date Added</th>
							<th>Visits</th>
						</thead>	
						<tbody>
						<?php if($recentadded and $urlnum != 0): ?>
							<?php foreach($recentadded as $urls): ?>
							<tr>
								<td><?php echo base_url().'short/go/'.$urls->code; ?></td>
								<td><?php echo substr($urls->link,0,30)."....."; ?></td>
								<td><?php echo $urls->create_date; ?></td>
								<td><?php echo $urls->visits; ?></td>
							</tr>
						<?php endforeach; ?>
						<?php endif; ?>	
						</tbody>
					</table>
				</div>

				<h1 class="recent">Most visited urls</h1>
				<div class="w">
					<table class="table table-striped o">
						<thead>
							<th>Short Link</th>
							<th>Long Link</th>
							<th>Date Added</th>
							<th>Visits</th>
						</thead>	
						<tbody>
						<?php if($mostvisited and $urlnum != 0): ?>
							<?php foreach($mostvisited as $urls): ?>
							<tr>
								<td><?php echo base_url().'short/go/'.$urls->code; ?></td>
								<td><?php echo substr($urls->link,0,30)."....."; ?></td>
								<td><?php echo $urls->create_date; ?></td>
								<td><?php echo $urls->visits; ?></td>
							</tr>
						<?php endforeach; ?>
						<?php endif; ?>	
						</tbody>
					</table>
				</div>
		</div>
<br />
<br />
<br />
		<footer style="padding:10px; text-align: center; background: #f1f1f1; position: fixed; bottom: 0; width: 100%;">
			copyrights &copy; reseved to Ahmed maher Halima <a href="https://www.facebook.com/yousseifweroquia" target="_blank">semicolon</a>
		</footer>
</body>
</html>