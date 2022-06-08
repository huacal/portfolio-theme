const msgAlert = document.getElementById('successmsg'); 
const formContact = document.getElementById('formContact');
const inputs = document.querySelectorAll('#formContact input');
const areaMessage = document.querySelectorAll('#message');
const names = document.getElementById('name');
const email = document.getElementById('email');

const expresiones = {
  name: /^[a-zA-ZÀ-ÿ\s]{3,40}$/,
  email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
  message: /^[\s\S]{0,120}$/,
  subject: /^[a-zA-ZÀ-ÿ\s]+$/
}

const validarFormulario = (e) => {
  switch (e.target.name) {
    case "name":
      console.log(e.target.value)
      if (expresiones.name.test(e.target.value)) {
        document.getElementById('name').classList.remove("validation");
        document.getElementById('inputGroupName').classList.remove("icon-error");
        document.getElementById('inputGroupName').classList.add("icon-sucess");
      }else{
        document.getElementById('name').classList.add("validation");
        document.getElementById('inputGroupName').classList.add("icon-error");
        document.getElementById('inputGroupName').classList.remove("icon-sucess");
      }
      break;
      case "email":
        if (expresiones.email.test(e.target.value)) {
          document.getElementById('email').classList.remove("validation");
          document.getElementById('inputGroupEmail').classList.remove("icon-error");
          document.getElementById('inputGroupEmail').classList.add("icon-sucess");
        }else{
          document.getElementById('email').classList.add("validation");
          document.getElementById('inputGroupEmail').classList.add("icon-error");
          document.getElementById('inputGroupEmail').classList.remove("icon-sucess");
        }
        break;
        case "subject":
        if (expresiones.subject.test(e.target.value)) {
          document.getElementById('subject').classList.remove("validation");
          document.getElementById('inputGroupSubject').classList.remove("icon-error");
          document.getElementById('inputGroupSubject').classList.add("icon-sucess");
        }else{
          document.getElementById('subject').classList.add("validation");
          document.getElementById('inputGroupSubject').classList.add("icon-error");
          document.getElementById('inputGroupSubject').classList.remove("icon-sucess");
        }
        break;
    default:
      break;
  }
}

const validarTexarea  = (e) => {
  if (expresiones.message.test(e.target.value || e.target.value.trim() != " ") ) {
          document.getElementById('message').classList.remove("validation");
          /* document.getElementById('inputGroupMessage').classList.add("icon-sucess"); */
          document.getElementById('inputGroupMessage').classList.remove("icon-error");
        }else{
          document.getElementById('message').classList.add("validation");
          document.getElementById('inputGroupMessage').classList.add("icon-error");
          /* document.getElementById('inputGroupMessage').classList.remove("icon-sucess"); */
        } 
}


inputs.forEach((input) => {
  input.addEventListener('keyup', validarFormulario);
  input.addEventListener('blur', validarFormulario);
});


formContact.addEventListener('submit', (e) =>{
  e.preventDefault();
  /* var message = document.getElementById('message');
  var names = document.getElementById('name');
  var email = document.getElementById('email');
  var subject = document.getElementById('subject');

  if (names.value == " " || email.value == " " || subject.value == ""  || message.value == "") {
      names.classList.add('validation');
      email.classList.add('validation');
      subject.classList.add('validation');
      message.classList.add('validation');
      document.getElementById('inputGroupName').classList.add("icon-error");
      document.getElementById('inputGroupEmail').classList.add("icon-error");
      document.getElementById('inputGroupSubject').classList.add("icon-error");
      document.getElementById('inputGroupMessage').classList.add("icon-error");
      msgAlert.innerHTML = '<span class="error"><i class="fas fa-times-circle"></i>  Por favor rellene todos los campos </span>' 
  } else {
    msgAlert.innerHTML = '<span class="sucess"><i class="fas fa-check-circle"></i> Mensaje enviado...</span>'; 
    setTimeout(() => {
      msgAlert.innerHTML = " ";
      window.location.reload();
  }, 3000);
    
  } */
});


/* areaMessage.addEventListener('blur', (e) => {
  validarTexarea(e);
  
}); */

areaMessage.forEach((textarea) => {
  textarea.addEventListener('keyup', validarTexarea);
  textarea.addEventListener('blur', validarTexarea);
});