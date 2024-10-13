document.getElementById('uploadForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Create a new FormData object
    var formData = new FormData();
    
    // Get the image file from the input
    var imageFile = document.getElementById('imageFile').files[0];
    formData.append('file', imageFile);

    // Create the JSON object with additional data
    var data = {
        dataimagem: document.getElementById('dataImage').value,
        descricao: document.getElementById('description').value,
        codigoplanta: document.getElementById('plantCode').value
    };

    // Append the JSON object as a Blob to the FormData
    formData.append('imagem', new Blob([JSON.stringify(data)], { type: 'application/json' }));
    
    // Send the FormData object to the API using Fetch API
    fetch('http://localhost:8090/inventario/imagens', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log('Success:', data);
    })
    .catch((error) => {
        console.error('Error:', error);
    });
});
