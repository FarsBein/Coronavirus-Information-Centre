//A javascript script that helps us populate our new page with the latest news regarding covid.
fetch("https://covid-19-news.p.rapidapi.com/v1/covid?q=covid&lang=en&media=True", {
        "method": "GET",
        "headers": {
            "x-rapidapi-key": "4e0921712cmsh1c673f4cdbc1f7ap1ba2ddjsnc3a43cecb458",
            "x-rapidapi-host": "covid-19-news.p.rapidapi.com"
        }
    })
    .then(res => res.json())
    .then(data => sendToHtml(data["articles"]));

//A looping function that will loop through the data and help us build the HTML cards that are displayed on the news page.
const sendToHtml = (data) => {
    html="";
    for (i = 0; i < data.length; i++) {
        console.log(data[i]);
        //Build the HTML required to display the cards with news.
        html+=
        '<a href="'+data[i]["link"]+'">'+
        '<div class="card bg-light mb-3" style="max-width: 100%; margin: 10px">'+
        '<div class="card-body" >'+
            '<h5 class="card-title">'+ data[i]["title"] +'</h5>'+
        '</div>'+
        '<div class="card-body">Source: '+ data[i]["rights"] +'</div>'+
        '<div class="card-footer">'+
            '<small class="text-muted">'+
            'Updated: ' + data[i]["published_date"] +'</div>'+
            '</small>'+
        '</div>'+
        '</a>';
    }
    const tableBody = document.querySelector('.body');
    tableBody.innerHTML = html;
}
