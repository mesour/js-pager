<?php

if (isset($_GET['m_do'])) {
	echo 'Test content';
	die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset='utf-8'>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div class="container">
		<div id="m_snippet-mesourapp-basicDataGrid-pager" class="row">
			<div class="col-xs-12 col-sm-1 col-lg-1">&nbsp;</div>
			<div class="col-xs-12 col-sm-8 col-lg-9">
				<nav>
					<ul class="pagination" data-name="pager" data-link="mesourapp-basicDataGrid-pager">
						<li class="disabled"><a><span aria-hidden="true">«</span></a></li>
						<li class="active"><a>1</a></li>
						<li class="">
							<a href="/__COMPONENTS__/DataGrid/examples/editable.php?m_mesourapp-basicDataGrid-pager-page=2&amp;m_do=mesourapp-basicDataGrid-pager-setPage" data-mesour="ajax">2</a>
						</li>
						<li class="">
							<a href="/__COMPONENTS__/DataGrid/examples/editable.php?m_mesourapp-basicDataGrid-pager-page=3&amp;m_do=mesourapp-basicDataGrid-pager-setPage" data-mesour="ajax">3</a>
						</li>
						<li class="">
							<a href="/__COMPONENTS__/DataGrid/examples/editable.php?m_mesourapp-basicDataGrid-pager-page=2&amp;m_do=mesourapp-basicDataGrid-pager-setPage" data-mesour="ajax"><span aria-hidden="true">»</span></a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="col-xs-12 col-sm-3 col-lg-2">
				<div class="input-group">
					<input type="text" class="form-control" value="1" data-page-input="1" style="width: 25px;"><span class="input-group-addon">/ 3</span><span class="input-group-btn"><a href="#" data-page-button="mesourapp-basicDataGrid-pager" class="btn btn-primary" role="button">Go!</a></span>
				</div>
			</div>
		</div>
	</div>

	<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="../dist/mesour.pager.js"></script>

	<script>

	</script>

</body>
</html>