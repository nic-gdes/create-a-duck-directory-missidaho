// create a var
const hamburger = document.querySelector('.hamburger');
// the window needs to be a certain size


// the hamburger is clicked then
hamburger.addEventListener('click',function (){
hamburger.classList.toggle('.hamburger');
const list = document.querySelector('.nav_links');
list.classList.toggle('active')
        

})
    // the list needs to pop down
   
// when the hamburger is clicked again the list needs to close