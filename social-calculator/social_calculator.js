jQuery(document).ready(function () {
  $(':input[type="submit"]').prop("disabled", true);
  $('input[type="text"]').keyup(function () {
    if (
      $("#col1").val() != "" &&
      $("#col3").val() != "" &&
      $("#col5").val() != "" &&
      $("#col6").val() != "" &&
      $("#col8").val() != "" &&
      $("#col10").val() != "" &&
      $("#col12").val() != ""
    ) {
      $(':input[type="submit"]').prop("disabled", false);
    }
  });
  jQuery(".caldownload").click(function (e) {
    setTimeout(showAlert, 2000);
    function showAlert() {
      jQuery("#myForm")[0].reset();
    }
  });
  jQuery("input").keyup(function () {
    var E_S = parseInt($("#col1").val());
    var F = parseInt($("#col3").val());
    var P_P = parseInt($("#col5").val());
    var inputVal = jQuery("#col4").val();
    jQuery("#col11").val(E_S);
    jQuery("#col33").val(F);
    jQuery("#col55").val(P_P);

    if (((E_S.length != F.length) != P_P.length) != 0) {
      var result1 = E_S * P_P * 1000 + F;
      var res1 = $.isNumeric(result1);
      if (res1 == false) {
        jQuery("#col4").val(0);
      } else {
        jQuery("#col4").val(result1);
      }
    }
    var T_A_S = parseInt($("#col6").val());
    var A_I = parseInt($("#col8").val());
    jQuery("#col66").val(T_A_S);
    jQuery("#col88").val(A_I);
    var result2 = T_A_S / A_I;
    var res2 = jQuery.isNumeric(result2);
    var C_P_T = result2.toFixed(4);
    if (res2 == false) {
      jQuery("#col7").val(0);
    } else {
      jQuery("#col7").val(C_P_T);
    }

    var result3 = E_S * P_P * 1000 * result2;
    var T_E_V = result3.toFixed(4);
    var res3 = $.isNumeric(result3);
    if (res3 == false) {
      jQuery("#col9").val(0);
    } else {
      jQuery("#col9").val(T_E_V);
    }
    var T_G = parseInt($("#col10").val());
    var O_D = parseInt($("#col12").val());
    jQuery("#col100").val(T_G);
    jQuery("#col122").val(O_D);
    var result4 = T_G / O_D;
    var OF_D = result4.toFixed(4);
    var res4 = $.isNumeric(result4);
    if (res4 == false) {
      jQuery("#col11").val(0);
    } else {
      jQuery("#col11").val(OF_D);
    }
  });
});
