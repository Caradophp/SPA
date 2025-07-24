$('#form-usuario').submit(function(e) {
    e.preventDefault();

    $.ajax({
        url: 'http://localhost/SPA/usuario/cadastrar',
        type: 'POST',
        data: $(this).serialize(),
        success: function(response) {
            alert('Cadastrado com sucesso!');
        },
        error: function (xhr, status, error) {
            alert('ERRO: ' + error);
        }
    });
})