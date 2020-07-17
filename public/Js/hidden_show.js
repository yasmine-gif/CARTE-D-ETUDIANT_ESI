/**
 * Jquery permet d'afficher les champs de saisir filiére et personne à prevenir
 * 
 * @argument.
 * 
 * @Debut du code
 */

 $(document).ready(function() {
     //filière
     $('#inlineRadio1').click(function() {
         $('#selecte').html('<span id="selecte"><label for="select" class="text_color ">Filière :</label><select class="custom-select custom-select-sm" id="select"> <option selected>Open this select menu</option></select></span>');
     });

     $('#inlineRadio2').click(function() {
        $('#selecte').html('<span id="selecte2"><label for="filiere" class="text_color">Nouveau filière :</label><input type="text" name="filiere" id="filiere" class="form-control" placeholder="entre la la filière..."></span>');
    });

    //personne à prevenir

    $('#inlineRadio3').click(function() {
        $('#select2').html('<label for="personne" class="text_color">Personne à prevenir :</label><select class="custom-select custom-select-sm"><option selected>Open this select menu</option></select>');
    });

    $('#inlineRadio4').click(function() {
       $('#select2').html('<span><a href="" style="color: #d02525">click pour ajouter une personne à prevenir</a></span>');
   });
 });