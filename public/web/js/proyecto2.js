var input = document.querySelector('#myInput');
var inputIDCLiente = document.querySelector('#idCliente');
var inputDNI = document.querySelector('#dniCliente');
var inputNombre = document.querySelector('#nombreCliente');
var inputValue = input.value;
let btnbuscar = document.querySelector('#buscaCliente')
var myElement = document.getElementById('my-element');
var nombres = myElement.getAttribute('dc');
var array = JSON.parse(nombres);

// inputDNI.value = nombres;

btnbuscar.onclick = () => {

    for (var i = 0; i < array.length; i++)
    {
        if (array[i].documento === input.value)
            {
            inputNombre.value  = array[i].Apellido + ", " + array[i].Nombre;
            inputDNI.value  = array[i].documento;
            inputIDCLiente.value  = array[i].id;
            inputIDCLiente.textContent  = array[i].id;
            input.value  = "";
            break;
            }
            inputIDCLiente.value  = 'no';

      }
      if(inputIDCLiente.value  == 'no')
      {
      Swal.fire({
          title: 'CLIENTE NO ENCONTRADO',
          text: 'Porfavor verifique bien el DNI a buscar',
          icon: 'error',
          confirmButtonText: 'Aceptar'
        });
      inputNombre.value  = "";
      inputDNI.value  = "";
      inputIDCLiente.value  = "";
      input.value  = "";
      input.focus();
      }

}
window.addEventListener('DOMContentLoaded', function() {
    inputIDCLiente.style.visibility = 'hidden';
  });
