import counterUp from 'counterup2'
import Scrollbar from 'smooth-scrollbar'
const $ = require('jquery')
if(typeof window !== 'undefined') {
  window.$ = $
  window.jQuery = $
  require('select2')
  require('datatables.net')
  require('waypoints/lib/noframework.waypoints.min')
}
export const core = {

  progressInitVerticle (e) {
    const iqProgress = e
    if (iqProgress !== undefined && iqProgress !== null && iqProgress !== undefined) {
      iqProgress.style.width = '100%'
      iqProgress.style.transition = 'height 2s ease 0s'
      iqProgress.style.height = iqProgress.getAttribute('data-value') + '%'
    }
  },
  triggerSet () {
    const elementExist = this.checkElement('class', 'wrapper-menu')
    if (elementExist) {
      const wrapperMenu = document.querySelector('.wrapper-menu')
      const body = document.querySelector('body')
      wrapperMenu.classList.toggle('close')
      body.classList.toggle('sidebar-main')
    }
  },

  checkElement (type, element) {
    let found = false
    let elements
    switch (type) {
      case 'class':
        elements = document.getElementsByClassName(element)
        if (elements !== undefined && elements !== null && elements.length > 0) {
          found = true
        }
        break

      case 'id':
        elements = document.getElementById(element)

        if (elements !== undefined && elements !== null) {
          found = true
        }
        break
    }
    return found
  },
  counterPlgInit () {
    let waypointInit
    
    Array.from(document.getElementsByClassName('counter')).forEach((c) => {
      waypointInit = new Waypoint({
        element: c,
        handler: (direction) => {
          if (direction === 'down') {
            this.counterInit(c)
          }
        },
        offset: 'bottom-in-view'
      })
    })
    return waypointInit
  },
  SmoothScrollbar () {
    const elementExistMain = document.getElementById('sidebar-scrollbar')
    if (elementExistMain) {
      Scrollbar.init(document.querySelector('#sidebar-scrollbar'))
    }
    const elementExistRight = document.getElementById('right-sidebar-scrollbar')
    if (elementExistRight) {
      Scrollbar.init(document.querySelector('#right-sidebar-scrollbar'))
    }
  },
  counterInit (e) {
    if (e !== undefined && e !== null) {
      counterUp(e, {
        delay: 5,
        time: 100
      })
    }
  },
  progressInit (e) {
    const iqProgress = e
    if (iqProgress !== undefined && iqProgress !== null && iqProgress !== undefined) {
      iqProgress.style.transition = 'width 2s ease 0s'
      iqProgress.style.width = iqProgress.getAttribute('data-value') + '%'
    }
  },
  initDataTable () {
     $('.table').DataTable()
    },
  scroll(){
    //convert to js
    $(window).on('scroll', function () {
      if ($(window).scrollTop() > 0) {
          $('.iq-top-navbar').addClass('fixed');
          $('.white-bg-menu').addClass('sticky-menu');
      } else {
          $('.iq-top-navbar').removeClass('fixed');
          $('.white-bg-menu').removeClass('sticky-menu');
      }
  });
  },
  activeTabPane () {
    $('li a').on('click',function (e) {
      e.preventDefault()
      $('a').removeClass('active')
      $(this).addClass('active')
    })
  },
  
}
export const animation = {
  easing: {
    linear: function (progress) {
      return progress
    },
    quadratic: function (progress) {
      return Math.pow(progress, 2)
    },
    swing: function (progress) {
      return 0.5 - Math.cos(progress * Math.PI) / 2
    },
    circ: function (progress) {
      return 1 - Math.sin(Math.acos(progress))
    },
    back: function (progress, x) {
      return Math.pow(progress, 2) * ((x + 1) * progress - x)
    },
    bounce: function (progress) {
      // eslint-disable-next-line no-unused-vars,no-constant-condition
      for (let a = 0, b = 1, result; 1; a += b, b /= 2) {
        if (progress >= (7 - 4 * a) / 11) {
          return -Math.pow((11 - 6 * a - 11 * progress) / 4, 2) + Math.pow(b, 2)
        }
      }
    },
    elastic: function (progress, x) {
      return Math.pow(2, 10 * (progress - 1)) * Math.cos(20 * Math.PI * x / 3 * progress)
    }
  },
  animate: function (options) {
    const start = new Date()
    const id = setInterval(function () {
      const timePassed = new Date() - start
      let progress = timePassed / options.duration
      if (progress > 1) {
        progress = 1
      }
      options.progress = progress
      const delta = options.delta(progress)
      options.step(delta)
      if (progress === 1) {
        clearInterval(id)
      }
    }, options.delay || 10)
  },
  fadeOut: function (element, options) {
    const to = 1
    this.animate({
      duration: options.duration,
      delta: function (progress) {
        progress = this.progress
        return animation.easing.swing(progress)
      },
      step: function (delta) {
        element.style.opacity = to - delta
      }
    })
  },
  fadeIn: function (element, options) {
    const to = 0
    this.animate({
      duration: options.duration,
      delta: function (progress) {
        progress = this.progress
        return animation.easing.swing(progress)
      },
      step: function (delta) {
        element.style.opacity = to + delta
      }
    })
  }
}

export function toggleBodyClass(className,className1, addRemoveClass = false) {
  const example = document.body;

  if (addRemoveClass) {
    example.classList.add(className,className1);
  } else {
    example.classList.remove(className,className1);
  }
}

   
export const flatpickerSetting = {
  wrap: true,
  altFormat: 'j M Y',
  altInput: true,
  dateFormat: 'Y-m-d'
}
