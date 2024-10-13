


<script>
document.addEventListener('DOMContentLoaded', function() {
    var selectFamilia = document.getElementById('selectFamilia');
    var modalFamiliaInput = document.getElementById('nomefamilia');

    // Adicione um listener de evento para o modal ser exibido
    document.getElementById('familiaForm').addEventListener('show.bs.modal', function() {
        // Obtém o valor selecionado no select
        var selectedCodFamilia = selectFamilia.value;

        // Preenche o input do modal com o valor selecionado
        modalFamiliaInput.value = selectedCodFamilia;
    });
});
</script>