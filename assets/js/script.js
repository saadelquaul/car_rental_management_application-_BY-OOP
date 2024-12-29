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
const bodyofform = document.querySelector('.car-listing-main');
btnAddCar.addEventListener('click', ()=>{

    document.querySelector('.car-listing').innerHTML = `<div class="addCar">
                    <form method="post" action="manage.php" id="addCar">
                        <?php if (isset($error)): ?>
                            <p style="color: red;"><?php echo $error; ?></p>
                        <?php endif; ?>
                        <h2>Add a New Car</h2>
                        <input type="text" id="registrationNumber" name="registrationNumber" placeholder="Registration Number">
                        <input type="text" id="brand" name="brand" placeholder="Brand">
                        <input type="text" id="model" name="model" placeholder="Model">
                        <input type="text" id="year" name="year" placeholder="Year">
                        <input type="text" id="price" name="price" placeholder="Price">
                        <input type="submit" value="Add Car">

                    </form>
                </div>`;



} )