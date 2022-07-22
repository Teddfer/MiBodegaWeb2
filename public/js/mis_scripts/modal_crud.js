window.addEventListener('DOMContentLoaded', () => {
  $('a[is-modal="true"]').on('click', function(e){
    e.preventDefault();

    $('#contentModal').load(this.href, function () {
      $('#modalGenerico').modal({ keyboard: true }, 'show');
      crud();
    });

      return false;
  });
});

function crud() {
  const form = document.querySelector('#myForm');

  form.addEventListener('submit', (event) => {
    event.preventDefault();
    const formdata = new FormData(form);

    const url = form.action;

    const options = {
      method: 'POST',
      body: formdata
    }

    fetch(url, { method: 'POST', body: formdata })
      .then(res => res.text())
      .then(data => {
        if (data.success) {
          Swal.fire({
          title: '¡Bien!',
          text: data.message,
          icon: 'success',
          showConfirmButton: false,
          confirmButtonColor: '#3085d6',
          confirmButtonText: 'Aceptar !',
          timer: 2000
        }).then(() => {
          location.href = data.redirection;
        });
        } else {
          new Error('Error al guardar el producto')
        }
      })
      .catch(error => new Error(error))
  });
}

function remove(e) {
  const action = e.getAttribute('my-action');
  const name = e.getAttribute('my-name');

  Swal.fire({
    title: 'Eliminar',
    text: "Está seguro de eliminar el registro: " + name + "?",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Sí, elimínalo!'
  }).then((result) => {
    if (result.isConfirmed) {
      fetch(action)
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          Swal.fire({
            title: '¡Eliminado!',
            text: data.message,
            icon: 'success',
            showConfirmButton: true,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar !',
            timer: 2000
          }).then(() => {
            location.href = data.redirection;
          });                    
        }else{
          allert('Algo salió mal');
        }
      })
    }
  })
}