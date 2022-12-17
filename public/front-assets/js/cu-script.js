// $('.submenu-addicon a').each(function(item){
//     $item.click(function(){
//     $(this).find('.sub-menu').addClass('show-mega-menu');
// });
// });

// $('.submenu-addicon').click(function(e){
//     e.preventDefault();
//     $('.submenu-addicon').removeClass('.show-mega-menu');
//     $('.submenu-addicon').find('.sub-menu').toggleClass('show-mega-menu');
// });


// const menuItems = document.querySelectorAll('.submenu-addicon');

// menuItems.forEach(hoverFunction);

// function hoverFunction(menuItem) {

//     menuItem.addEventListener("click", function(){
//         // alert('fess');
//         const nodes = menuItem.querySelector(".sub-menu");
//         // removeClass();
//         nodes.classList.toggle("show-mega-menu");
//     });

// }

// function removeClass(menuItem) {
//     const nodes = menuItem.querySelector(".sub-menu");
//     nodes.classList.remove("show-mega-menu");
// }


// document.addEventListener("click", (evt) => {
//     // const flyoutEl = document.querySelector(".show-mega-menu");
//     const flyoutEl = document.querySelector(".careerfy-navigation");

//     let targetEl = evt.target; // clicked element      
//     do {
//       if(targetEl == flyoutEl) {
//         // This is a click inside, does nothing, just return.
//         // alert("Clicked inside!");
//         return;
//       }
//       // Go up the DOM
//       targetEl = targetEl.parentNode;
//     } while (targetEl);
//     // This is a click outside.   
//     alert("Clicked outside!");
//     menuItems.forEach(removeClass);
   
// });

// alert('js ready');