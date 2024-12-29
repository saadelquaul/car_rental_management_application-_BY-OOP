// const addContract = document.querySelector('.addContract');
// const addClient = document.querySelector('#addClient');
// const addCar = document.querySelector('.addCar');
// const addContractButton = document.querySelector('#addContractBtn');
// // const rightSide = document.querySelector('.right-bar');


// addContractButton.addEventListener('click', ()=>{
//     document.querySelector('.Info').style.display = 'none';
//     addContract.style.display = 'flex';

// })

//     const clientIDSelect = document.querySelector('#clientID')
//     clientIDSelect.onchange = ()=>{
//         if(clientIDSelect.value== 'addClient'){
//             addClient.style.display = 'flex';
//             addContract.style.display = 'none';           
//     };
// }
// const addClientForm = document.querySelector('#add-client');
// addClientForm.addEventListener('submit', ()=>{
//     addContract.style.display = 'flex';
//     addClient.style.display = 'none';

// })
// const carSelect = document.querySelector('#registration-Number');
// carSelect.onchange = ()=>{
//     console.log(carSelect.value);
//     if(carSelect.value== 'addCar'){
//         addCar.style.display = 'flex';
//         addContract.style.display = 'none';
               
// };
    
// }
// addCar.addEventListener('submit', ()=>{
    
//     addContract.style.display = 'flex';
//     addCar.style.display = 'none';
// });
const btnAddCar = document.querySelector('#addCarBtn');
const bodyofform = document.querySelector('.addCar');
btnAddCar.addEventListener('click', () => {
    bodyofform.style.display = bodyofform.style.display === 'flex' ? 'none' : 'flex';
   
});
