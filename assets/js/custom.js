

jQuery(document).ready(function () {
  //Disable cut copy paste
  jQuery('.soical_data').bind('cut copy paste', function (e) {
    e.preventDefault();
  });

  //Disable mouse right click
  jQuery(".soical_data").on("contextmenu",function(e){
    return false;
  });
});

jQuery(document).ready(function(){
  jQuery( "#add_company_form" ).submit(function() {
     var firstname = jQuery('#firstname').val();
     var lastname = jQuery('#lastname').val();
     var title = jQuery('#title').val();
     var company_name = jQuery('#company_name').val();
     var industry = jQuery('#industry').val();
     var address = jQuery('#address').val();
     var city = jQuery('#city').val();
     var zip_code = jQuery('#zip_code').val();
     var phone_number = jQuery('#phone_number').val();
     var email = jQuery('#email').val();
     var companywebsite = jQuery('#companywebsite').val();
     var bussiness_description = jQuery('#bussiness_description').val();

     if(firstname ==''&& lastname ==''&& title ==''&& company_name ==''&& industry==''&& address ==''&& city ==''&&
        zip_code ==''&& phone_number ==''&& email ==''&& companywebsite ==''&& bussiness_description ==''){
        var meesage = '<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Required!</strong> Please fill the company detail</div>';
        jQuery('#message').html(meesage);
      return false;
     }

  });
});

jQuery(document).ready(function(){
  jQuery(document).on('click','.alert button.close',function() {
    jQuery('.alert-dismissible').remove();
  });
});


document.addEventListener("keyup", validation);
function validation(event){
  switch (event.target.id) {
    case 'zip_code':
        zip_code(event.target.id);
        break;
    default:
      "error"
  }
}

function zip_code(id){
 var zip = jQuery("#"+id).val();
  intRegex = /^[0-9 ]+$/;
  if((zip.length > 6) || (!intRegex.test(zip))){
    jQuery("#"+id).addClass('error-message');
    return false;
  }
  else{
    jQuery("#"+id).removeClass('error-message');
  }
}
// CHECK PHONE NUMBER
jQuery('#phone_number').keyup(function(e) {
  if ((e.keyCode > 47 && e.keyCode < 58) || (e.keyCode < 106 && e.keyCode > 95)) {
    this.value = this.value.replace(/(\d{3})(\d{4})/, '$1-$2');
    return true;
  }
  //remove all chars, except dash and digits
  this.value = this.value.replace(/[^\-0-9]/g, '');
});

// CHECK WEBSITE
jQuery("#companywebsite").focusout(function() {
    var myVariable = jQuery(this).val();
    if(/^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/|www\.)[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/.test(myVariable)){
      jQuery(this).addClass("validated_ok").removeClass("error-message");

    } else {
      jQuery(this).removeClass("validated_ok").addClass("error-message");
    }
});
