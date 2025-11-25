function confirmDelete(id) {
    if (confirm('Deseja realmente excluir este contato?')) {
        window.location.href = 'excluir.php?id=' + encodeURIComponent(id);
    }
}


const form = document.getElementById('form-cadastro');
if (form) {
    form.addEventListener('submit', function (e) {
        const nome = form.querySelector('[name="nome"]').value.trim();
        if (!nome) {
            e.preventDefault();
            alert('O nome é obrigatório.');
        }
    })
}

console.log("Agenda carregada!");
