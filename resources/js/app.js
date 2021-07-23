const init = () => {
  toggleDeleteModal()
}

const toggleDeleteModal = () => {
  const $deleteBtns = document.querySelectorAll('.js-delete-row-btn')
  const $closeModalBtns = document.querySelectorAll('.js-modal-close')

  const $modal = document.querySelector('.js-modal')
  const $form = $modal.querySelector('form')

  if (!$deleteBtns) return

  const deleteUrl = $form.getAttribute('action').split('/')
  const lastSegment = deleteUrl.pop() || deleteUrl.pop() // handle potential trailing slash

  $deleteBtns.forEach(($deleteBtn) => {
    $deleteBtn.addEventListener('click', (e) => {
      $modal.classList.add('open')
      newUrl = deleteUrl.join('/') + '/' + e.currentTarget.dataset.id
      console.log(newUrl)
      $form.setAttribute('action', newUrl)
    })
  })

  $closeModalBtns.forEach(($closeModalBtn) => {
    $closeModalBtn.addEventListener('click', (e) => {
      $modal.classList.remove('open')
    })
  })
}

init()
