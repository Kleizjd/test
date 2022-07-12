$(document).ready(function() {
    $(document).on("submit", "#formPerfil", function(e) {
      e.preventDefault();
        let strIdentificacion = document.querySelector('#txtIdentificacion').value;
        let strNombre = document.querySelector('#txtNombre').value;
        let strApellido = document.querySelector('#txtApellido').value;
        let intTelefono = document.querySelector('#txtTelefono').value;
        let strPassword = document.querySelector('#txtPassword').value;
        let strPasswordConfirm = document.querySelector('#txtPasswordConfirm').value;

        if (strIdentificacion == '' || strApellido == '' || strNombre == '' || intTelefono == '') {
          swal("Atención", "Todos los campos son obligatorios.", "error");
          return false;
        }

        if (strPassword != "" || strPasswordConfirm != "") {
          if (strPassword != strPasswordConfirm) {
            swal("Atención", "Las contraseñas no son iguales.", "info");
            return false;
          }
          if (strPassword.length < 5) {
            swal("Atención", "La contraseña debe tener un mínimo de 5 caracteres.", "info");
            return false;
          }
        }

        let elementsValid = document.getElementsByClassName("valid");
        for (let i = 0; i < elementsValid.length; i++) {
          if (elementsValid[i].classList.contains('is-invalid')) {
            swal("Atención", "Por favor verifique los campos en rojo.", "error");
            return false;
          }
        }
        // divLoading.style.display = "flex";
        let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        let ajaxUrl = base_url + '/Usuarios/putPerfil';
        let formData = new FormData(event.target);
        request.open("POST", ajaxUrl, true);
        request.send(formData);
        request.onreadystatechange = function() {
          if (request.readyState != 4) return;
          if (request.status == 200) {
            let objData = JSON.parse(request.responseText);
            if (objData.status) {
              $('#modalFormPerfil').modal("hide");
              swal({
                title: "",
                text: objData.msg,
                type: "success",
                confirmButtonText: "Aceptar",
                closeOnConfirm: false,
              }, function(isConfirm) {
                if (isConfirm) {
                  location.reload();
                }
              });
            } else {
              swal("Error", objData.msg, "error");
            }
          }
          // //divLoading.style.display = "none";
          return false;
        }
        // }
    });
  });