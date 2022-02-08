function invitaButtonClicked() {
  document.getElementById('guests_form').submit()
}

function requestUsers() {
  let xmlhttp = new XMLHttpRequest()
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('usersTable').innerHTML = this.responseText
    }
  }
  xmlhttp.open('GET', '../backend/listautenti_back.php', true)
  xmlhttp.send()
}

function showUsersByRole(role) {
  if (role == '') {
    requestUsers()
  } else {
    let xmlhttp = new XMLHttpRequest()
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('usersTable').innerHTML = this.responseText
      }
    }
    xmlhttp.open('GET', '../backend/utenti_filtro_ruoli.php?q=' + role, true)
    xmlhttp.send()
  }
}
