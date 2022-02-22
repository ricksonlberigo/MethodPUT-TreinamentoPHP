$('.btn').on('click', event => {
  event.preventDefault();
  const data = {
    email: $('#email').val(), // Pegando o valor do input com o id email
    name: $('#name').val(), // Pegando o valor do input com o id email
    action: $(event.target).prop('name') // Retorno o valor ou propriedade do elemento selecionado
  };
  $.ajax({
    url: '../api/apiFormPUT.php', // Passando para onde deve ser enviado os dados do formulário
    method: 'PUT', // Método passado
    data: JSON.stringify(data), // Transformando os dados em json
    success: resp => {
      console.log(resp)
    }
  })
})