
function showModal(status) {
    var modal = document.getElementById('id01');
    modal.style.display = status;
    
    var modal2 = document.getElementById('form-cadastro');
    modal2.style.display = 'none';
}

function limparCamposCadastro(){
    document.getElementById('ipt').value = '';
    document.getElementById('ipt2').value = '';
    document.getElementById('ipt3').value = '';
}





