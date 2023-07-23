//prueba

var selectElement = document.querySelector('#idTipo');
// var selectedIndex = selectElement.selectedIndex;
// var selectedItem = selectElement.options[selectedIndex].textContent;

selectElement.addEventListener('change', function() {
var selectedItem = selectElement.value;
var lbldoc = document.querySelector('#tipo_cliente_label');
var lblnom = document.querySelector('#C_NomRep');
var lblap = document.querySelector('#C_ApRZ');
if (selectedItem == 1) {
    lbldoc.textContent = "DNI";
    lblnom.textContent = "Nombres";
    lblap.textContent = "Apellidos";
} else {
    lbldoc.textContent = "RUC";
    lblnom.textContent = "Representate";
    lblap.textContent = "Razon Social";
}
});








