jQuery(function($){
$('body').on('submit','form',function(e){
  e.preventDefault();

  var url = $(this).attr('action');
  var data = [];
  var raw = $(this).serializeArray();
  var form = $(this);
  var has_errors = false;

  if(form.hasClass('loading')){
    return false;
  }

  form.find('.error').html("");

  for(i in raw){
    var name = raw[i].name;
    var field = $(this).find('[name="'+name+'"]');
    var value = field.val();
    var required = field.data('required');

    if(required && (!value || value.length==0)){
      if(form.find('.error').length == 0){//legacy
        alert('Не заполнено поле "'+field.data('name')+'"');
      }else{
        field.parents('.form-group').find('.error').html("Поле должно быть заполнено");
      }
      field.focus();
      has_errors = true;
    }
  }

  if(!has_errors){
    form.addClass('loading');
    $(form).parents('.modal-content').find('.modal-title').css('display', 'none')
    $.ajax(url,{
      url: url,
      type: "POST",
      data: form.serialize(),
      success: function(){
        try{
          yaCounter26199870.reachGoal(form.attr('data-metrika-goal'));
        }catch(e){}

        form.addClass('success');

        if(form.find('.loader').length == 0){//legacy
          alert('Спасибо за заявку!')
        }
      },

      error: function(){
        form.addClass('error');
        alert('Произошла ошибка, повторите попытку позже');
      },

      complete: function(){
        form.removeClass('loading');
        form.find('input[type=\'text\']').val('');
      }
    });
  }
  return false;
});
});
