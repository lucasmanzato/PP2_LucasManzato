document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('contact-form');
  const errorMessage = document.getElementById('error-message');
  const verifyButton = document.getElementById('verify-button');

  form.addEventListener('submit', function (e) {
    if (!validateForm()) {
      e.preventDefault();
    }
  });
});

function validateForm() {
  var name = document.getElementById('name');
  var email = document.getElementById('email');
  var phone = document.getElementById('phone');
  var cpf = document.getElementById('cpf');
  var dob = document.getElementById('dob');
  var genero = document.querySelectorAll('input[name="genero"]');
  var checkboxes = document.querySelectorAll('input[name="terapia"]');
  var professionals = document.getElementById('professionals');
  let isValid = true;

  if (name.value.trim() === '') {
    setErrorFor(name, 'Por favor, informe o nome');
    isValid = false;
  } else {
    setSuccessFor(name);
  }

  if (email.value.trim() === '') {
    setErrorFor(email, 'Por favor, informe o email');
    isValid = false;
  } else if (!isEmail(email.value.trim())) {
    setErrorFor(email, 'Por favor, informe um email válido');
    isValid = false;
  } else {
    setSuccessFor(email);
  }

  if (phone.value.trim() === '') {
    setErrorFor(phone, 'Por favor, informe o telefone');
    isValid = false;
  } else {
    setSuccessFor(phone);
  }

  if (cpf.value.trim() === '') {
    setErrorFor(cpf, 'Por favor, informe o CPF');
    isValid = false;
  } else {
    setSuccessFor(cpf);
  }

  if (dob.value.trim() === '') {
    setErrorFor(dob, 'Por favor, informe a data de nascimento');
    isValid = false;
  } else {
    setSuccessFor(dob);
  }

  // Verificar checkboxes
  const checkedCheckboxes = document.querySelectorAll('input[name="terapia"]:checked');
  if (checkedCheckboxes.length === 0) {
    setErrorFor(checkboxes[0].parentElement, 'Por favor, selecione pelo menos uma terapia de interesse');
    isValid = false;
  } else {
    setSuccessFor(checkboxes[0].parentElement);
  }

  // Verificar conjunto de radios
  let isRadioSelected = false;
  for (const radio of genero) {
    if (radio.checked) {
      isRadioSelected = true;
      break;
    }
  }

  if (!isRadioSelected) {
    setErrorFor(genero[0].parentElement, 'Por favor, selecione um gênero');
    isValid = false;
  } else {
    setSuccessFor(genero[0].parentElement);
  }

  if (professionals.value.trim() === 'x') {
    setErrorFor(professionals, 'Por favor, selecione um profissional');
    isValid = false;
  } else {
    setSuccessFor(professionals);
  }

  return isValid;
}

function displayFormValues() {
  if (validateForm()) {
    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {});
    myModal.show();
    const form = document.getElementById('contact-form');
    const name = sanitizeHTML(form.elements['name'].value);
    const email = sanitizeHTML(form.elements['email'].value);
    const phone = sanitizeHTML(form.elements['phone'].value);
    const cpf = sanitizeHTML(form.elements['cpf'].value);
    const dob = sanitizeHTML(form.elements['dob'].value);
    const genero = sanitizeHTML(form.elements['genero'].value);
    const terapias = Array.from(form.elements['terapia'])
      .filter((checkbox) => checkbox.checked)
      .map((checkbox) => sanitizeHTML(checkbox.labels[0].textContent));
    const interest = sanitizeHTML(form.elements['interest'].value);
    const professionals = sanitizeHTML(form.elements['professionals'].value);

    const modalBody = document.querySelector('.modal-body');
    modalBody.innerHTML = `
      <p><strong>Nome:</strong> ${name}</p>
      <p><strong>Email:</strong> ${email}</p>
      <p><strong>Telefone:</strong> ${phone}</p>
      <p><strong>CPF:</strong> ${cpf}</p>
      <p><strong>Data de Nascimento:</strong> ${dob}</p>
      <p><strong>Gênero:</strong> ${genero}</p>
      <p><strong>Terapias de Interesse:</strong> ${terapias.join(', ')}</p>
      <p><strong>Interesse:</strong> ${interest}</p>
      <p><strong>Profissional de Interesse:</strong> ${professionals}</p>
    `;
    
    // Preencher novamente os campos do formulário
    form.elements['name'].value = name;
    form.elements['email'].value = email;
    form.elements['phone'].value = phone;
    form.elements['cpf'].value = cpf;
    form.elements['dob'].value = dob;
    form.elements['genero'].value = genero;
    form.elements['terapia'].forEach((checkbox) => {
      checkbox.checked = terapias.includes(sanitizeHTML(checkbox.labels[0].textContent));
    });
    form.elements['interest'].value = interest;
    form.elements['professionals'].value = professionals;
  }
}

function sanitizeHTML(value) {
  const element = document.createElement('div');
  element.innerText = value;
  return element.innerHTML;
}



function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const errorMessage = formControl.querySelector('.error-message');
  errorMessage.classList.remove("d-none");
  formControl.className = 'input-box error';
  errorMessage.innerText = message;
}

function setSuccessFor(input) {
  const formControl = input.parentElement;
  const errorMessage = formControl.querySelector('.error-message');
  errorMessage.classList.add("d-none");
  formControl.className = 'input-box success';
}

function isEmail(email) {
  // Regular expression for email validation
  const emailPattern = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
  return emailPattern.test(email);
}