fetch('https://api.covidnow.com/v1/news/usa')
    .then(res => res.json())
    .then(data => loopData(data));


const loopData = (data) => {
    html=""
    for (const news in data) {
        if (data[news]["title"]){
            html+=
            '<div class="card bg-light mb-3" style="max-width: 21rem;">'+
            '<div class="card-body">'+
              '<h5 class="card-title">'+data[news]["title"]+'</h5>'+
              '<p class="card-text">'+'UPDATED: '+data[news]["pubDate"]+'</p>'+
            '</div>'+
            '</div>';
        }
    }
    const tableBody = document.querySelector('.body');
    tableBody.innerHTML = html
}

// document.body.innerHTML = 
// 
// 