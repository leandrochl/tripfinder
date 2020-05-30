$(document).ready(function () {
  getPontosTuristicos();
});

function getPontosTuristicos() {
  $.ajax({
    url: '/api/site-pontos-turisticos',
    type: 'get',
    success: function (pontos) {
      $("#div-pontos-turisticos").html(pontos);
    }
  });
}
