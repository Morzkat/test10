<!-- Modal Log In-->
<div id="newItem" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Iniciar Sesion</h4>
      </div>
      <div class="" id="response"></div>
      <div class="modal-body">
        <form id ="fileToUpload" enctype="multipart/form-data" class="" action="" method="post" required>
          <h4>Marca</h4>
          <input type="text" name="brand" value ="" placeholder ="Marca" required>
          <h4>Fecha de compra</h4>
          <input type="text" name="date" value ="" placeholder ="Fecha" required>
          <h4>Tipo</h4>
          <input type="text" name="type" value ="" placeholder ="Tipo (tv, radio, microhondas)" required>
          <h4>Peso</h4>
          <input type="text" name="weight" value ="" placeholder ="Peso" required>
          <h4>Color</h4>
          <input type="text" name="color" value ="" placeholder ="Color" required>
          <h4>Foto</h4>
          <input type="file" name="file" id="file" value ="" required accept="image/*">
          <div id="imgPreview"><img src="noimage.png" id="preview" alt=""></div>
          <div class="" id="message"></div>

          <h4>Comentario</h4>
          <textarea name="comment" rows="5" cols="80" placeholder="escribe un comentario"></textarea><br></p>

          <input type="submit" onclick="add_Img()" class="btn btn-success" value="Agregar item">
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
