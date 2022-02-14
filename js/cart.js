let cartText = document.querySelector('#cartHeader');
let bt2 = document.querySelectorAll('.btn2');
let count = 0;
for (let b2 of bt2){
    b2.addEventListener('click', function(){
        count++;
        cartText.innerHTML = count;            
    })
}
