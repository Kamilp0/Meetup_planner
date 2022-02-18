const roomsSelect = document.getElementById('sala_select')
const formChecks = document.getElementsByClassName('form-check-input')
const formChecksArr = [].slice.call(formChecks)

formChecksArr.forEach((checkInput) => {
  checkInput.addEventListener('click', () => {
    roomsSelect.textContent = ''
    let department = checkInput.value

    const request = new XMLHttpRequest()

    request.onload = () => {
      let responseObject = null
      try {
        responseObject = JSON.parse(request.responseText)
      } catch (e) {
        console.error('Could not parse JSON!')
      }

      responseObject.rooms.forEach((room) => {
        let option = document.createElement('option') //<option></option>
        option.setAttribute('value', room.nome) //<option value="nome"></option>
        let text = document.createTextNode(room.nome) //nome
        option.appendChild(text) //<option value="nome">nome</option>
        roomsSelect.appendChild(option)
      })
    }

    const requestData = `dp=${department}`
    request.open('post', '../backend/lista_nomisale_back.php')
    request.setRequestHeader(
      'Content-type',
      'application/x-www-form-urlencoded',
    )
    request.send(requestData)
  })
})
