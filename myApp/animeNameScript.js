document.querySelector('#addAnime').addEventListener('submit',
    (event) => {
        const animeName = document.querySelector('#anime');

        if(animeName.value !== ''){
            return true;
        }
        else {
            alert('Please, introduce an anime title!');
            event.preventDefault();
        }   
    }
)