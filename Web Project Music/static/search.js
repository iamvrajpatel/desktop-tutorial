var songs = [
    {
        imgUrl: "../static/image/tera masoom chehra.jpg",
        name: "Bewafa Tera Masoom Chehra",
        singers: ['Jubin Nautiyal', ' Rochak Kohli'],
        link: 'tera-masoom-chehra'
    }
];

var fullHtml = null;

window.onload = function (e) {
    fullHtml = document.getElementById('song').innerHTML;
}

function search_song() {
    let input = document.getElementById('search').value
    let html = '';
    let song = document.getElementById('song');
    
    if (!input) {
        song.innerHTML = fullHtml;
        return;
    }
    songs.forEach(function (song) {
        if (!input || song.name.indexOf(input) !== -1 || song.singers.join('').indexOf(input)!==-1) {
            let divHtml = `
            <div class='block'>
                <div class='img'>
                    <img src="${song.imgUrl}">
                </div>
                <p>
                ${song.name}
                <br>
                ${song.singers.join(',')}
                </p>
                <button class='b'>
                    <a href='./${song.link}'>Download</a>
                </button>
            </div>
        `
            html = html + divHtml;
        }
    })
    song.innerHTML = html;
}


// function search_song() {
//     console.log(data);
//     console.log("hevbhebieb");
//     let input = document.getElementById('search').value
//     input = input.toLowerCase();
//     let x = document.getElementsByClassName('block');
//     for (i = 0; i < x.length; i++) {
//         if (!x[i].innerHTML.toLowerCase().includes(input)) {
//             x[i].style.display = "none";
//         }
//         else {
//             x[i].style.display = "div-item"
//         }
//     }
// }
