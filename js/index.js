$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: 'php/cargar_departamento.php'
  })
  .done(function(lista_dep){
    $('#lista_departamento').html(lista_dep)
  })
  .fail(function(){
    alert('Error al Cargar los Departamentos')
  })

  $('#lista_departamento').on('change', function(){
    var id = $('#lista_departamento').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargar_municipio.php',
      data: {'id': id}
    })
    .done(function(lista_dep){
      $('#municipios').html(lista_dep)
    })
    .fail(function(){
      alert('Error al Cargar los Municipios')
    })
  })

  $('#enviar').on('click', function(){
    var resultado = 'Departamento: ' + $('#lista_departamento option:selected').text() +
    ' Municipio Seleccionado: ' + $('#municipios option:selected').text()

    $('#resultado1').html(resultado)
  })

})