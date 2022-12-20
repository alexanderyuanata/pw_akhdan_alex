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
    });
    event.preventDefault();
  });

  $("#add-pegawaiform").submit(function (event) {
    var sent_data = {
      nama: $("#in-name").val(),
      jk: $("#in-jk").val(),
      bd: $("#in-bd").val(),
      gaji: $("#in-gaji").val(),
      dep: $("#in-dep").val(),
      jab: $("#in-jab").val(),
    };

    $.ajax({
      type: "POST",
      url: "add-pegawai.php",
      data: sent_data,
    }).done(function (response) {
      window.alert("Pegawai berhasil ditambah!");
      window.location.replace("./pegawai.php");
    });

    event.preventDefault();
  });

  $("#edit-pegawaiform").submit(function (event) {
    var sent_data = {
      id: $("#edit-id").val(),
      nama: $("#edit-name").val(),
      jk: $("#edit-jk").val(),
      bd: $("#edit-bd").val(),
      gaji: $("#edit-gaji").val(),
      dep: $("#edit-dep").val(),
      jab: $("#edit-jab").val(),
    };

    $.ajax({
      type: "POST",
      url: "edit-pegawai.php",
      data: sent_data,
    }).done(function (response) {
      window.alert("Pegawai berhasil diedit!");
      window.location.replace("./pegawai.php");
    });

    event.preventDefault();
  });

  $("#delete-pegawaiform").submit(function (event) {
    var sent_data = {
      id: $("#delete-id").val(),
    };

    $.ajax({
      type: "POST",
      url: "delete-pegawai.php",
      data: sent_data,
    }).done(function (response) {
      window.alert("Pegawai berhasil dihapus!");
      window.location.replace("./pegawai.php");
    });

    event.preventDefault();
  });
});
