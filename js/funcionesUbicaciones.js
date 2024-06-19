function llenarModal_actualizarUbicaciones(datos) {
    d = datos.split('||');
    $("#tipoUbicacion-edit").val(d[1]);
    $("#nombreUbicacion-edit").val(d[2]);
    $("#edificio-edit").val(d[3]);
    $("#descripcion-edit").val(d[4]);
    $("#capacidad-edit").val(d[5]);

   
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
    
  }