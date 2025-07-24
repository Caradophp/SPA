$('#lista-usuarios').click(function(e) {
    e.preventDefault();

    $.ajax({
        url: 'http://localhost/SPA/usuario/listar',
        type: 'GET',
        success: function(response) {
            response.forEach(element => {
                $('#lista').append(`
                        <td>${element.id}</td>
                        <td>${element.nome}</td>
                        <td>${element.email}</td>
                        <td><button class='btn btn-danger' onclick='deletar(${element.id})'>deletar</button><td>
                `);
            });
        },
        error: function (xhr, status, error) {
            alert('ERRO: ' + error);
        }
    });
})