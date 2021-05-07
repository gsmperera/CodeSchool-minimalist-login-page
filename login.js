const siBtn = document.getElementById('siTogBtn');
const suBtn = document.getElementById('suTogBtn');
const siHL =document.getElementById('highlightSI');
const suHL =document.getElementById('highlightSU');

siBtn.addEventListener('click', function() {
    siHL.classList.remove('visHidden');
    suHL.classList.add('visHidden');
    siBtn.parentElement.classList.add('isBold');
    suBtn.parentElement.classList.remove('isBold');
    suBtn.parentElement.classList.add('isLight');
    siBtn.parentElement.classList.remove('isLight');
});
suBtn.addEventListener('click', function() {
    siHL.classList.add('visHidden');
    suHL.classList.remove('visHidden');
    suBtn.parentElement.classList.add('isBold');
    siBtn.parentElement.classList.remove('isBold');
    siBtn.parentElement.classList.add('isLight');
    suBtn.parentElement.classList.remove('isLight');
});