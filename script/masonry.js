const masonryActiveClass = 'masonryActive'

class Masonry {
  constructor(elem, options = {}) {
    this.containerNode = elem;
    this.childrenNodes = elem.children;


    this.childrenData = Array.from(this.childrenNodes).map((childNode) => ({
      childNode
    }))

    this.setting = {
      responsive: options.responsive || {
        0: {
          gap: 10,
          column: 3
        }
      }
    }

    this.settingSizes = Object.keys(this.setting.responsive).map((item) => Number(item)).sort((a,b) => a - b)

    this.resize = this.resize.bind(this)

    this.setEvents();
    this.setParameters();

  }

  setEvents() {
    this.debouncedResize = debounce(this.resize)
    window.addEventListener('resize', this.debouncedResize)
  };


  resize() {
    this.setParameters();
  };

  setParameters() {
    const containertWidth = this.containerNode.offsetWidth
    this.setCurrentSetting(containertWidth)

    const widthPost = (containertWidth - this.setting.gap * (this.setting.column - 1)) / this.setting.column
    this.setWidth(widthPost)     

    this.childrenData = this.childrenData.map((child) => ({
      ...child,
      height: child.childNode.offsetHeight
    }))

    this.setSizeConteiner()
    this.setPosition(widthPost)
  }

  setCurrentSetting(containertWidth) {
    let currentSize = 0 
    const widthWindow = window.innerWidth
    this.settingSizes.forEach((size) => {
      if (widthWindow >= size) {
        currentSize = size
      }
      
    })

    this.setting.column = this.setting.responsive[currentSize].column
    this.setting.gap = this.setting.responsive[currentSize].gap
  }

  setWidth(widthPost) {
    this.childrenData.forEach((child) => {
      child.childNode.style.width = `${widthPost}px`
    })
  }

  setSizeConteiner() {
    const heightColumn = new Array(this.setting.column).fill(0)
    this.childrenData.forEach((child, i) => {
      heightColumn[i % this.setting.column] += child.height + this.setting.gap
    })

    const maxHeightColumn = heightColumn.reduce((acc, size) => (size > acc) ? size : acc)

    this.containerNode.style.height = `${ maxHeightColumn - this.setting.gap}px`
  }

  setPosition(widthPost) {
    const topSets = new Array(this.setting.column).fill(0)


    this.childrenData = this.childrenData.map((child, i ) => {
      const iColumn = i % this.setting.column
      const left = iColumn * widthPost + this.setting.gap * iColumn
      const top = topSets[iColumn]
      topSets[iColumn] += child.height + this.setting.gap

      return {
        ...child,
        top,
        left
      }
    })

    this.childrenData.forEach((child) => {
      child.childNode.style.transform= `translate3d(${child.left}px, ${child.top}px, 0)`
    })
  }
}

function debounce(func, time = 100) {
  let timer 
  return function(event) {
    clearTimeout(timer)
    timer = setTimeout(func, time, event)
  }
}