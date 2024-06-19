function llenarModal_actualizarEstatus(datos) {
    d = datos.split('||');
    $("#id-edit").val(d[0]);
    $("#estatus-edit").val(d[1]);
   
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