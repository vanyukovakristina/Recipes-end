const post = document.querySelector('.post');
const likeEl = document.querySelector('.click-like');

likeEl.innerText = '';
let counter = 0;
post.addEventListener('click', () => {
    counter++;
    if (counter === 1) likeEl.innerText = counter;
    else likeEl.innerText = counter;

});
const openPopUp = document.getElementById('btn-rec');
const closePopUp = document.getElementById('pop-up-close');
const popUp = document.getElementById('pop-up');

const openPopUpRegistr = document.getElementById('button-registration');
const closePopUpRegistr = document.getElementById('pop-up-close-reg');
const popUpRegistr = document.getElementById('pop-up-registration');

const openPopUpEnter = document.getElementById('btn-login');
const closePopUpEnter = document.getElementById('pop-up-exit-close');
const popUpEnter = document.getElementById('pop-up-enter');

const openPopUpEnter_1 = document.getElementById('btn-group-login');
const closePopUpEnter_1 = document.getElementById('pop-up-exit-close');
const popUpEnter_1 = document.getElementById('pop-up-enter');

const openPopUp_Enter = document.getElementById('button-login');
const close_PopUpEnter = document.getElementById('pop-up-exit-close');
const popUp_Enter = document.getElementById('pop-up-enter');

const openPopUpRegPA= document.getElementById('btn-group-PA');
const closePopUpRegPA = document.getElementById('pop-up-close-reg');
const PopUpRegPA = document.getElementById('pop-up-registration');

openPopUp.addEventListener('click', function (e) {
    e.preventDefault();
    popUp.classList.add('active');
})
closePopUp.addEventListener('click', () => {
    popUp.classList.remove('active');
})

openPopUpRegistr.addEventListener('click', function (e) {
    e.preventDefault();
    popUpRegistr.classList.add('active');
})
closePopUpRegistr.addEventListener('click', () => {
    popUpRegistr.classList.remove('active');
})

openPopUpEnter.addEventListener('click', function (e) {
    e.preventDefault();
    popUpEnter.classList.add('active');
})
closePopUpEnter.addEventListener('click', () => {
    popUpEnter.classList.remove('active');
})

openPopUpEnter_1.addEventListener('click', function (e) {
    e.preventDefault();
    popUpEnter_1.classList.add('active');
})
closePopUpEnter_1.addEventListener('click', () => {
    popUpEnter_1.classList.remove('active');
})

openPopUp_Enter.addEventListener('click', function (e) {
    e.preventDefault();
    popUp_Enter.classList.add('active');
})
close_PopUpEnter.addEventListener('click', () => {
    popUp_Enter.classList.remove('active');
})

openPopUpRegPA.addEventListener('click', function (e) {
    e.preventDefault();
    PopUpRegPA.classList.add('active');
})
closePopUpRegPA.addEventListener('click', () => {
    PopUpRegPA.classList.remove('active');
})

const form = document.forms["form-registration"];  // считываем форму
form.addEventListener("input", inputHandler);


function inputHandler({ target }){
    if(target.hasAttribute("data-reg")){
        inputCheck(target);
    }
}
function inputCheck(el){
    const inputValue = el.value;
    const inputReg=el.getAttribute("data-reg");
    const reg = new RegExp(inputReg);
    if(reg.test(inputValue)){
        el.style.border = "2px solid rgb(0, 196, 0)";

    } else {
        el.style.border = "2px solid rgb(255, 0, 0)";

    }
}


function clearAllFormInputs() {
    let form = document.getElementById('form-registration');
    let inputs = form.getElementsByTagName('input');
    for (let input of inputs)
        input.value = '';
}

let button = document.getElementById('abolition');
button.addEventListener('click', clearAllFormInputs);



document.getElementById('button-check').onclick = function () {
    let login = document.getElementById('login').value;
    var arrLogins = ['vanyukovakristina01@mail.ru', 'kristinavanyukova.01@mail.ru'],
        flag=false;
    var mybutton = document.getElementById('button-check');

    function obr() {
        var obj=document.getElementById('login');
        for(var i=0;i<arrLogins.length;i++){
            if (obj.value== arrLogins[i]){
                flag=true;
            }
        }
        if(flag){
            alert('Логин занят! Попробуйте ещё раз!');
            flag=false;
        } else {
            alert('Логин свободен!');
        }
    }
    if (login === '') {
        alert('Введите логин!')
    } else {
        mybutton.onclick = obr;
    }

}
document.getElementById('check-enter').onclick=function (){
    let login_enter = document.getElementById('input-login').value;
    if (login_enter === '') {
        alert('Введите логин!')
    }
}

