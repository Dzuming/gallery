
<div id="Main_form">
<div class="insert_header">Dodaj zdjęcie</div>
<form id="form_sub" method="post" enctype="multipart/form-data" action="<?php echo URL;?>insert_photo/insert" >
     <div class="monkey_jpg">
  <img  src='<?php echo URL?>public/photo/monkey.png'>
  </div>
    <div class="insert_photo">
    <label>Zdjęcie</label><input class="input_photo" id="photo_name" type="file"  name="photo_name" />
    </div>
    <div class="insert_photo">
    
    <label>kategoria</label><select class="input_photo" name="id_category">
     
    <?php  foreach ($this->category as $key => $value) {
        echo '<option  value="'.$value['id_category'].'">'.$value['category'].'</option> ';
}
    ?>
        
 </select>
 </div>   
 <div class="insert_photo">
    <label >Opis</label><input class="input_photo"  type="textbox" name="photo_description" />
    </div>
<div class="insert_photo">    
<label></label><input class="input_photo button"    type="submit"  value="Wyślij"/>
</div>
</div>
</form> 
