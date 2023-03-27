const getAnimeNews = () => {

    fetch("https://newsapi.org/v2/everything?q=anime&language=en&pageSize=15&sortBy=publishedAt", {
        headers: {
            'X-Api-Key': '3e7be35654f444bd91be991dc76218f9',
        },
    })
    .then((response) => response.json())
    .then((data) => {
        data.articles.forEach((article) => {
            const { title, url, description } = article;
                const container = document.querySelector('#animeAPI')
                container.innerHTML += `<div" class="title"><h5>${title}</h2></div>                                                
                    <div class="content">${description}</div>
                    <div> <a target="_blank" href="${url}">
                    Read more on the site...</a><hr></div><br>`;
                // console.log(description);
        });
    });
};

getAnimeNews();