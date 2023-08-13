// import './bootstrap';
//
const clickableRows = document.querySelectorAll('.clickable-row');
document.addEventListener('DOMContentLoaded', function () {
    // Find all clickable rows
    const clickableRows = document.querySelectorAll('.clickable-row');

    // Add click event listener to each row
    clickableRows.forEach(function (row) {
        row.addEventListener('click', function () {
            const url = row.getAttribute('data-url');

            // Redirect to the URL
            window.location.href = url;
        });
    });
});

const button = document.querySelector('button');
// button.addEventListener('click', (e) => {
//     // window.location.href = 'http://127.0.0.1:8000/posts' + '?title=Est tempora';
//     fetch('http://127.0.0.1:8000/posts' + '?title=Est tempora')
//         .then(data => data.text())
//         .then(data => console.log(data));
//
// })

const petFilter = document.getElementById('pet-filter');
const petList = document.getElementById('pet_list');

petFilter.addEventListener('input', (event) => {
    // clearTimeout(debounceTimeout);

    const searchTerm = event.target.value;
    // debounceTimeout = setTimeout(() => {
        fetchPets(searchTerm);
    // }, 300); // Debounce for 300 milliseconds
});

function fetchPets(searchTerm) {
    fetch(`/pets?name=${searchTerm}`)
        .then(response => {
            return response.json()
            // return readStreamAsText(response.body)
            //     .then(data => {
            //         console.log(data); // The data read from the stream as text
            //     })
            //     .catch(error => {
            //         console.error('Error reading stream:', error);
            //     });
        })
        .then(pets => {
            console.log(pets)
            const filteredPets = [...pets.data].map(pet => {
                // console.log(pet)
                const link_wrapper = document.createElement('div');
                link_wrapper.innerHTML = `<a
                    className="col-3"
                    href="${'http://127.0.0.1:8000/pets/' + pet.id}">
                    <div className="card" style="width: 18rem;">
                        <img src="${pet.image}" className="card-img-top" alt="image">
                            <div className="card-body">
                                <h5 className="card-title">${pet.name}</h5>
                                <h6 className="card-subtitle mb-2 text-muted">${pet.kind_id}</h6>
                                <p className="card-text">
                                    <strong>Age:</strong> ${pet.age}<br>
                                    <strong>Breed:</strong>${pet.breed}<br>
                                </p>
                            </div>
                    </div>
                </a>`
                return link_wrapper.firstElementChild;

            });
            petList.innerHTML = '';
            filteredPets.forEach(element => {
                petList.append(element);
            })
            // petList.innerHTML = filteredPets.join('');
        })
        .catch(error => console.error('Error fetching pets:', error));
}

async function readStreamAsText(stream) {
    const textDecoder = new TextDecoder();
    let result = '';

    const reader = stream.getReader();
    while (true) {
        const { done, value } = await reader.read();
        if (done) {
            break;
        }
        result += textDecoder.decode(value);
    }

    return result;
}
