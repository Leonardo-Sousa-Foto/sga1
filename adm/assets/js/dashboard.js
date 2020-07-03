$(document).ready(function () {
    //Apresentar ou ocultar o menu
    $('.sidebar-toggle').on('click', function () {
        $('.sidebar').toggleClass('toggled');
    });
    
    //carregar aberto o submenu
    var active = $('.sidebar .active');
    if (active.length && active.parent('.collapse').length) {
        var parent = active.parent('.collapse');

        parent.prev('a').attr('aria-expanded', true);
        parent.addClass('show');
    }
});
//Carregar modal define para apagar
$(document).ready(function(){
    $('a[data-confirm]').click(function(ev){
      var href = $(this).attr('href');
    if(!$('#confirm-delete').length){
      $('body').append('<div class="modal fade" id="confirm-delete" \n\
tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="\n\
true"><div class="modal-dialog"><div class="modal-content"><div class="modal-\n\
header bg-danger text-white">EXCLUIR ITEM<button type="button" class="close"\n\
 data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>\n\
</button></div><div class="modal-body">Tem certeza que deseja excluir o item \n\
selecionado?</div><div class="modal-footer"><button type="button" class="btn \n\
btn-success" data-dismiss="modal">Cancelar</button><a class="btn btn-danger \n\
text-white" id="dataConfirmOK>Apagar</a></div></div></div></div>');
   }
   $('#dataConfirmOK').attr('href', href)
  $('#confirm-delete').modal({show: true});
  return false;
   });
});