let postedit = document.querySelectorAll('.post-profile__bottom .post__profile__none');
let postМertecal = document.querySelectorAll('.post-profile__dots-vertecal');


const Click = (e) => {
  const current = e.currentTarget;
  current.closest('.post-profile__bottom').querySelector('.post__profile__none').classList.toggle('post__profile__none--active')
}

postМertecal.forEach( item => {
  item.addEventListener('click', Click)
})
