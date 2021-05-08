// Dark mod Toggle
const dmBtn = document.getElementById('modTogBtn');
const dmBg = document.getElementById('modTogBtn');

dmBtn.addEventListener('click', function() {
    if (dmBtn.classList.value.match('dmTogged')) {
        dmBtn.classList.remove('dmTogged');
        document.documentElement.style.setProperty('--light', '#fff');
        document.documentElement.style.setProperty('--dark', '#707070');
    } else {
        dmBtn.classList.add('dmTogged');
        document.documentElement.style.setProperty('--light', '#707070');
        document.documentElement.style.setProperty('--dark', '#fff');
    }
});

// Switch between sign in and sign up
const siBtn = document.getElementById('siTogBtn');
const suBtn = document.getElementById('suTogBtn');
const siHL = document.getElementById('highlightSI');
const suHL = document.getElementById('highlightSU');
const siForm = document.getElementById('loginForm');
const suForm = document.getElementById('signInForm');

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