const select = () => {
  let selectHeader = document.querySelectorAll('.profile-edit__select-header')
  let selectitem = document.querySelectorAll('.profile-edit__select-item')

  selectHeader.forEach(item => {
    item.addEventListener('click', function () {
      this.parentElement.classList.toggle('is-active');
    })
  })

  selectitem.forEach(item => {
    item.addEventListener('click', function () {
      let text = this.innerText
      let select = this.closest('.profile-edit__select')
      let currentText = this.closest('.profile-edit__select').querySelector('.profile-edit__select-current')
      currentText.innerText = text;
      select.classList.remove('is-active')
    })
  })  
}

select()

let profileEedit__selectItem = document.querySelectorAll('.profile-edit__select-item')

profileEedit__selectItem.forEach(item => {
  console.log(item.innerHTML);
})