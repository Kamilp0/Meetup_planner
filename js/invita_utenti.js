const submitButton = document.getElementById('submitButton')
const id_riunione = document.getElementById('id_riunione')

function showUsersByRole(role, id) {
  console.log('onchange')
  if (role == '') {
    return
  } else {
    let xmlhttp = new XMLHttpRequest()
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        console.log('request OK')
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

submitButton.addEventListener('click', () => {
  console.log('invita button pressed')
  let checkboxes = document.getElementsByName('checkbox[]')
  const request = new XMLHttpRequest()

  request.onload = () => {
    let responseObject = null
    try {
      responseObject = JSON.parse(request.responseText)
    } catch (e) {
      console.error('Could not parse JSON!')
    }

    if (responseObject) {
      if (!responseObject.error) {
        window.location.href =
          '../frontend/lista invitati.php?id_riunione=' + id_riunione.value
      }
    }
  }

  let checkedValues = []
  checkboxes.forEach((v) => {
    if (v.checked) {
      checkedValues.push(v.value)
    }
  })

  const requestData = `checkbox=${checkedValues}&id=${id_riunione.value}`
  request.open('post', '../backend/invita_utenti_back.php')
  request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
  request.send(requestData)
})
