const dropBtn1 = document.getElementById('drop-btn1');
const dropMenu1 = document.getElementById('dropdown1');

const dropBtn2 = document.getElementById('drop-btn2');
const dropMenu2 = document.getElementById('dropdown2');

dropBtn1.addEventListener('click', () => {
    if (dropMenu1.style.opacity === "1") {
        dropMenu1.style.opacity = "0";
    } else {
        dropMenu1.style.opacity = "1";
    }
})

dropBtn2.addEventListener('click', () => {
    if (dropMenu2.style.opacity === "1") {
        dropMenu2.style.opacity = "0";
    } else {
        dropMenu2.style.opacity = "1";
    }
})  

for (let i = 0; i < 5; i++) {
    document.getElementsByTagName('li')[i].addEventListener('click', () => {
        document.getElementsByTagName('p')[0].innerHTML = document.getElementsByTagName('li')[i].innerHTML;
    })
}

for (let i = 5; i < 10; i++) {
    document.getElementsByTagName('li')[i].addEventListener('click', () => {
        document.getElementsByTagName('p')[1].innerHTML = document.getElementsByTagName('li')[i].innerHTML;
    })
}