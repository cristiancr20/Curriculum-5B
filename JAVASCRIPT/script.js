function abrirModal(){
    const modal = document.querySelector('.modal')
    const closeIcon = document.querySelector('.modal-content__close')

    const button1 = document.querySelector('#login')

    button1.addEventListener('click', () => {
      modal.classList.remove('hidden')
      modal.classList.add('visible')
    })

    closeIcon.addEventListener('click', () => {
      modal.classList.remove('visible')
      modal.classList.add('hidden')
    })
}

 function ingresar(){
  let usuario = document.getElementById('user').value;
  let clave = document.getElementById('password').value;
  
  if(usuario== "Cristian" && clave=="1234"){
    
    window.location="Curriculum.php";
    
  }else{
    alert("Error");
  }

}







