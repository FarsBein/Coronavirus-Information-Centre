fetch('https://api.covidnow.com/v1/news/usa')
    .then(res => res.json())
    .then(data => loopData(data));


const loopData = (data) => {
    html="";
    for (const news in data) {
        if (data[news]["title"]){
            console.log(data[news]);
            html+=
            '<a href="'+data[news]["link"]+'">'+
            '<div class="card bg-light mb-3" style="max-width: 100%;">'+
            '<div class="card-body" >'+
              '<h5 class="card-title">'+ data[news]["title"] +'</h5>'+
            '</div>'+
            '<div class="card-body">Source: '+ data[news]["source"] +'</div>'+
            '<div class="card-footer">'+
                '<small class="text-muted">'+
                'Updated: ' + data[news]["pubDate"] +'</div>'+
                '</small>'+
            '</div>'+
            '</a>';
        }
    }
    const tableBody = document.querySelector('.body');
    tableBody.innerHTML = html;
}

// '<div class="card bg-light mb-3" style="max-width: 21rem;">'+
// '<div class="card-body" style="background: white; border-radius: 20px;">'+
//     data[news]["html"]+
//   '<p class="card-text" style="font-size: 12px; margin-top: 10px;">'+'UPDATED: '+data[news]["pubDate"]+'</p>'+
// '</div>'+
// '</div>';