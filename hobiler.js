const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Host': 'online-movie-database.p.rapidapi.com',
		'X-RapidAPI-Key': '7ddaf3f037msh660a9301aee27aap1a3540jsn35a49b067c2c'
	}
};

fetch('https://online-movie-database.p.rapidapi.com/auto-complete?q=bird', options)
.then(response => response.json())
.then(data => {
    const list = data.d;

    list.map((item)=> {
        const name = item.l;
        const poster =item.i.imageUrl;
        const movie = `<li><img src="${poster}" <h2>${name}</h2></li>`
        document.querySelector('.movies').innerHTML += movie;
    })
})
.then(response => console.log(response))
.catch(err => console.error(err));