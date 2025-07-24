function deletar(id) {

$.ajax({
    url: 'http://localhost/SPA/usuario/deletar',
    type: 'POST',
    data: {id : id},
    success: function (response) {
        alert('Deletado com sucesso');
    },
    error: function(xhl, status, error) {
        alert('ERRO: ' + error);
    }
});

}