  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  ?>

  <body style="">

<div class="container-fluid">
    <div class="pagina" style="border-radius: 10px; padding-top: 20px;">          
        <div class="div_cadastro" style="    padding: 20px;">
          <form  data-toggle="validator" id="upload" action='upload' method="POST" enctype="multipart/form-data" target="_blank">
            <div class="row"> 
              <div class="col-md-12"> 
                <div class="text-left"> 
                  <h2><label class="label-cadastro">Cadastrar Documento</label></h2>
                  <hr>
                </div>
              </div>
            </div>
          <div class="row">
          
            <div class="col-md-6">
              <label for="usuario" class="label-cadastro">Usuario cadastrando <span class="campo_obg"> * </span></label><br>
               <input class="form-control" type="text" name="cpf_usuario" value='  <?php echo $_SESSION['usuario_doc'] ?> ' required>
              <div class="help-block with-errors"></div>
            </div>
           
          </div>
            <div class="row">
            
            <div class="col-md-12">
              <label for="senha" class="label-cadastro">Arquivo <span class="campo_obg"> * </span></label><br>
              <input class="form-control" type="file" name="import_file" required>
            </div>
           
          </div><br>
      
          <div class="row">
             <div class="col-md-12 text-right">
                <input type="submit" id="cadastrar" class="btn btn-primary" value="Cadastrar" >
             </div>
          </div>  
          </form>
        </div>

  </body>
  </html>

  <script type="text/javascript">
  jQuery("form").submit("click",function(){
     setTimeout(function(){
    BootstrapDialog.show({
            type: BootstrapDialog.TYPE_SUCCESS,
                  title: 'Aviso',
                  message: 'Documento GERADO'
              });
  }, 1000);
   
   //event.preventDefault();


    /*var data = new FormData();
    jQuery.each(jQuery('[name=import_file]')[0].files, function(i, file) {
        data.append('file-'+i, file);
    });
        open('<?php #echo base_url('Atividade/upload')?>?'+ data,  'teste', '_blank');

    /*
    $.ajax({
      url: '<?php #echo base_url('Atividade/upload')?>' ,
      data:  data,
      processData: false,
      contentType: false,
      target: '_blank',
      type:'POST',
      success: function(data){

        if(data == 1){
          BootstrapDialog.show({
            type: BootstrapDialog.TYPE_SUCCESS,
                  title: 'Cadastro Realizado',
                  message: 'Seu curso foi cadastrado!'
              });
              $('#cadastro_curso').trigger("reset");
        }else{

          BootstrapDialog.show({
            type: BootstrapDialog.TYPE_DANGER,
                  title: 'Erro',
                  message: 'Cadastro não realizado, verifique os campos ou entre em contato com o suporte!'
              });
        }
      }
    });
  */
  });
  </script>