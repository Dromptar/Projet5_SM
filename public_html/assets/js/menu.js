
document.querySelector('.header-section').addEventListener('mouseover', mouseOver);
document.querySelector('.header-section').addEventListener("mouseout", mouseOut);


function mouseOver() {

  document.querySelector('.header-section').style.backgroundColor= '#111111';

}

function mouseOut() {

  document.querySelector('.header-section').style.backgroundColor = 'transparent';

}



