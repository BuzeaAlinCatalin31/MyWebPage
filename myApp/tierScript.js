document.querySelector('#addAnime').addEventListener('submit',
    (e) => {
        const tierValue = document.querySelector('#tier');

        if(tierValue.value === 'S' ||
           tierValue.value === 'A' ||
           tierValue.value === 'B' ||
           tierValue.value === 'C' ||
           tierValue.value === 'D' ||
           tierValue.value === 'F'){
            // return true;  
        }
        else {
            alert('The tier you chose is not available. You can choose from: S, A, B, C, D or F tier.');
            e.preventDefault();
        }   
    }
)