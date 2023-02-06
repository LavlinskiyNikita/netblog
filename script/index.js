const seccess = () => {
  new Masonry(document.getElementById('masonry'), {
    responsive: {
      0: {
        column: 1,
        gap: 20
      },
      
      700: {
        column: 2,
        gap: 30
      },

      1400: {
        column: 3,
        gap: 20
      }
    }
  })
}


seccess()