$(document).ready(function () {
  $("#reg-form").submit(function (event) {
    var sent_data = {
      reg_user: $("#reg-user").val(),
      reg_pw: $("#reg-pw").val(),
    };

    $.ajax({
      type: "POST",
      url: "register.php",
      data: sent_data,
    }).done(function (response) {
      window.alert(response);
      if (response == "Akun berhasil dibuat") {
        window.location.replace("./home.html");
      }
    });
    event.preventDefault();
  });

  $("#add-form").submit(function (event) {
    var sent_data = {
      nama: $("#id-name").val(),
      jk: $("#in-jk").val(),
      bd: $("#in-bd").val(),
      gaji: $("#in-gaji").val(),
      dep: $("#in-dep").val(),
      jab: $("#in-jab").val(),
    };

    $.ajax({
      type: "POST",
      url: "add-act.php",
      data: sent_data,
    }).done(function (response) {
      window.alert(response);
    });
    event.preventDefault();
  });
});
