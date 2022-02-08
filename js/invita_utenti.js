function invitaButtonClicked() {
  document.getElementById('guests_form').submit()
}

function showUsersByRole(role, id) {
  if (role == '') {
    return
  } else {
    let xmlhttp = new XMLHttpRequest()
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('usersTable').innerHTML = this.responseText
      }
    }
    xmlhttp.open(
      'GET',
      '../backend/utenti_filtro_ruoli.php?q=' + role + '&id=' + id,
      true,
    )
    xmlhttp.send()
  }
}
