@extends('layout.navbar')
@section('kontenku')
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact List</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css\table.css">

</head>
<body>
	
        <div>
                <table class="table-head">
                    <thead>
                        <tr class="row head">
                            <th class="cell column4" scope="col">Name</th>
                            <th class="cell column4" scope="col">Phone Number</th>
                            <th class="cell column4" scope="col">Address</th>
                            <th class="cell column4" scope="col">Job</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="table-body ">
                    <table id="table_data"></table>

<!--===============================================================================================-->	
	<script src="js/jquery.js"></script>

	

	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
// <!--===============================================================================================-->
	<script src="js/main.js"></script>
        <script>
		$(document).ready(function() {
			$.getJSON("results.json",function(data) {
				var result_data = '';
				$.each(data, function(key, value) {
					result_data +='<tbody>';
					result_data +='<tr class="row body">';
                    result_data += '<td cell column4>'+ value.name+'</td>'                    
                    result_data += '<td cell column4>'+ value.phonenumber+'</td>';                
					result_data += '<td cell column4 >'+ value.address+'</td>';
					result_data += '<td cell column4>'+ value.job+'</td>';
					result_data +='</tr>';
					result_data +='</tbody>';
				});
				$('#table_data').append(result_data);
			});
		});
	</script>
</body>
</html>
@endsection