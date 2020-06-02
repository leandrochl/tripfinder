$(document).ready(function () {
  getPontosTuristicos();

  $("body").on('click', '.set-homepage', function () {
    var id = $(this).attr('id').split('-')[1];
    $.ajax({
      url: '/api/set-pontos-turisticos',
      type: 'post',
      data: {operacao: 'add', id: id},
      success: function (data) {
        getPontosTuristicos();
      }
    });
  });
  $("body").on('click', '.remove-homepage', function () {
    var id = $(this).attr('id').split('-')[1];
    $.ajax({
      url: '/api/set-pontos-turisticos',
      type: 'post',
      data: {operacao: 'remove', id: id},
      success: function (pontos) {
        getPontosTuristicos();
      }
    });
  });
});

function getPontosTuristicos() {
  $.ajax({
    url: '/api/pontos-turisticos',
    type: 'get',
    success: function (pontos) {
      $("#table-01").html(pontos);
    }
  });
}
