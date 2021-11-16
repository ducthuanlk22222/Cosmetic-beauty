let backToTopBtn = document.querySelector('.back-to-top')

window.onscroll = () => {
    if(document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        backToTopBtn.style.display = 'flex'
    }else{
        backToTopBtn.style.display = 'none'
    }
}

//top nav menu
let menuItems = document.getElementsByClassName('menu-item');
Array.from(menuItems).forEach((item,inedx) => {
    item.onclick =(e) => {
        let currMenu = document.querySelector('.menu-item.active');
        currMenu.classList.remove('active');
        item.classList.add('active');
    }
})

let searchForm = document.querySelector('.search-form')

// document.querySelector('#search-btn').onclick = () =>{
//     searchForm.classList.toggle('active');
//     navbar.classList.remove('active');
//     cartItem.classList.remove('active');    
// }


//cosmetic item
let cosmeticMenuList = document.querySelector('.cosmetic-item-wrap')
let cosmeticCategory = document.querySelector('.cosmetic-category')
let categories = document.querySelectorAll('button')
Array.from(categories).forEach((item,index) => {
    item.onclick = (e) => {
        let currCat = cosmeticCategory.querySelector('button.active')
        currCat.classList.remove('active')
        e.target.classList.add('active')
        cosmeticMenuList.classList ='cosmetic-item-wrap '+ e.target.getAttribute('data-cosmetic-type')

    }
})

// on scorll animation
let scroll = window.requestAnimationFrame || function(callback)
    {window.setTimeout(Callback,1000/60)}
let elToShow = document.querySelectorAll('.play-on-scroll')

isElInViewPort = (el) => {
    let rect = el.getBoundingClientRect()
    return(
        (rect.top <= 0 && rect.bottom >= 0) ||
        (rect.bottom >= (window.innerHeight || 
            document.documentElement.clientHeight) && 
            rect.top <= (window.innerHeight || document.documentElement.clientHeight)) ||
            (rect.top >= 0 && rect.bottom <= (window.innerHeight || 
                document.documentElement.clientHeight))
    )
}
loop = () => { //arrow function
    elToShow.forEach((item,index) =>{
        if (isElInViewPort(item)){
            item.classList.add('start')
        }else{
            item.classList.remove('start')
        }
    })
    scroll(loop)
}
loop()
