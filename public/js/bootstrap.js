window.addEventListener('DOMContentLoaded', ()
=> {
  const menuBtn = document.querySelector
  ('#menubtn')
  const dropdown = document.querySelector
  ('#dropdown')

  menuBtn.addEventListener('click', () => {
    dropdown.classList.toggle('hidden')
    dropdown.classList.toggle('flex')
  })
})