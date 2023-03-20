document.querySelector("#klik").addEventListener("click",tampil);

function tampil() {
    let url = "https://jsonplaceholder.typicode.com/todos" ;
    fetch(url)
    // .then(function (res) {
    //     return res.json();
    // })
    .then(res => res.json())
    // .then(function (data) {
    //     console.log(data);
    // })

    .then(data => { 
        // console.log(data);
        let out = "<ul>";
        data.forEach(el => {
            out += '<li>${el.tittle}</li>'
            console.log(el.tittle);
        });
        
        out +="</ul>";
        document.querySelector("#isi").innerHTML = out;
    })
}

