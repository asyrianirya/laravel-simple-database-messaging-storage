<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
	<head>
		<script src="{{ asset('/js/color-modes.js') }}"></script>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>WEB MESSENGER | ASYRIANIRYA</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/styles.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/datatables.min.css') }}">
		<style>
	        #footer {
            position: sticky;
            background-color: #333;
            color: white;
            text-align: center;
            padding: 0em;
            bottom: 0;
			}
		</style>
	</head>
	
	<body>
		
		<?php include(public_path('php/darkModeButton.php')); ?>
		
		<h1 class="m-4 z-1" id="title"><center><strong>WEB MESSENGER</strong></center></h1>
		<div class="position-fixed bottom-0 start-0 mb-5 pb-2 z-1">
			<a href="#title" ><button class="">
				Kembali ke Atas
			</button></a>
		</div>
		
		<main id="page-container">
			<div id="content-wrap">
				<div id="form-container">
					<form action="/send" method="post">
						@csrf
						<div class="d-none">
							<label>ID</label>
							<input type="text" disabled hidden value="">
						</div>
						<div>
							<label>Sender</label>
							<input name="sender" id="sender" type="text" value="Anonim" required>
						</div>
						<div>
							<label>Message</label>
							<input name="message" id="message" type="text" value="" required>
						</div>
						<div>
							<button type="submit">KIRIM</button>
						</div>
					</form>
				</div>
				
				<div id="table-container">
					<table id="dataTable">
						<thead>
							<tr>
								<th width="50">#</th>
								<th width="100">Sent</th>
								<th>Sender</th>
								<th>Message</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($msg as $msg)
							<tr>
								<td>{{$msg->id}}</td>
								<td>{{$msg->created_at}}</td>
								<td class="wrap">{{$msg->sender}}</td>
								<td class="wrap">{{$msg->message}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<footer id="footer">
			Dibuat oleh <a href="" data-bs-toggle="modal" data-bs-target="#about">@asyrianirya</a>
		</footer>	
		
		
		<section id="modals">
			<?php include(public_path('php/author_modal.php')); ?>
		</section>
	</body>
	
	<div class="script">
		<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('/js/datatables.min.js') }}"></script>
		<script>
			new DataTable('#dataTable', {
				ordering: false
			});
			
		</script>
	</div>
</html>	