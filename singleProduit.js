let plus_btns = document.querySelectorAll('#plus-button');
let minus_btns = document.querySelectorAll('#minus-button');

plus_btns.forEach(btn=>{
    btn.addEventListener('click', ()=>{
        btn.previousElementSibling.value++;
    })
})
minus_btns.forEach(btn=>{
    btn.addEventListener('click', ()=>{
        btn.nextElementSibling.value = (btn.nextElementSibling.value == 1) ? 1 : btn.nextElementSibling.value - 1;
    })
})