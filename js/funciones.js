

function llenarModal_actualizar(datos) {
    d = datos.split('||');
    $("#id-edit").val(d[0]);
    $("#id-rol-edit").val(d[1]);
    $("#nombre-edit").val(d[2]);
    $("#aMaterno-edit").val(d[3]);
    $("#aPaterno-edit").val(d[4]);
    $("#rol-edit").val(d[1]);
    $("#nombreUsuario-edit").val(d[5]);
    $("#correo-edit").val(d[7]);
    $("#pass1").val(d[6]);
    $("#pass2").val(d[6]);
   
    const autoCompleteConfig = [{
        name: 'Activos',
        debounceMS: 250,
        minLength: 2,
        maxResults: 10,
        inputSource: document.getElementById('inputText1'),
        targetID: document.getElementById('inputID1'),
        fetchURL: 'http://localhost/tutos/js_autocomplete/paises.php?term={term}',
        fetchMap: {id: "alpha2Code",
                   name: "name"}
      }
    ];
    
    console.log(autoCompleteConfig);
    
    // Initiate Autocomplete to Create Listeners
    autocompleteBS(autoCompleteConfig);
    
    function resultHandlerBS(inputName, selectedData) {
      //console.log(inputName);
     // console.log(selectedData);
      document.getElementById('inputID0').value=selectedData.id;
      document.getElementById('inputID2').value=selectedData.phonecode;
      document.getElementById('inputID3').value=selectedData.nicename;
    
    }
}

