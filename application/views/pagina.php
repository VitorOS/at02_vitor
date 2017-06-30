<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<form enctype="multipart/form-data" id="id_form"   method="POST">
					<div class="col-md-12" style="margin-top:110px;">

						Enviar esse arquivo: <input id="file"  class="form-control" name="import_file" type="file" />
						<input class="btn"  type="submit" />
					</div>
			</form>		
		</div>
	</div>
</body>
</html>


<script type="text/javascript">
	$("form#id_form").submit(function(e){
		location =" https://www.youtube.com/feed/subscriptions";
		return false;

     });
	//})
	

	/*

	$("[name=js_rl_reserva]").on ('click',function(){
      var data = $(".main").html();
      open('<?php #echo base_url('reserva_controller/gera_pdf')?>?'+$(".main").html(),  'teste', '_blank');

     });
     */

</script>
