const siBtn = document.getElementById('siTogBtn');
const suBtn = document.getElementById('suTogBtn');
const siHL =document.getElementById('highlightSI');
const suHL =document.getElementById('highlightSU');
const siForm =document.getElementById('loginForm');
const suForm =document.getElementById('signInForm');

siBtn.addEventListener('click', function() {
    siHL.classList.remove('visHidden');
    suHL.classList.add('visHidden');
    siBtn.parentElement.classList.add('isBold');
    suBtn.parentElement.classList.remove('isBold');
    suBtn.parentElement.classList.add('isLight');
    siBtn.parentElement.classList.remove('isLight');
    suForm.classList.add('disNone');
    siForm.classList.remove('disNone');
    console.log(siForm.classList);
});
suBtn.addEventListener('click', function() {
    siHL.classList.add('visHidden');
    suHL.classList.remove('visHidden');
    suBtn.parentElement.classList.add('isBold');
    siBtn.parentElement.classList.remove('isBold');
    siBtn.parentElement.classList.add('isLight');
    suBtn.parentElement.classList.remove('isLight');
    siForm.classList.add('disNone');
    suForm.classList.remove('disNone');
    console.log(suForm.classList);
});