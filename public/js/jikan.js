async function init() {
    // basic information we are going to use
    let jikanStatistics = "https://api.jikan.moe/v4/users/zirconics/statistics";
    let jikanData = await getSwapiData(jikanStatistics);

    // write it to the DOM
    writeToTheDom(jikanData);
}

/**
 * Async function to get the data from the SWAPI api
 * @returns - returns a promise
 */
async function getSwapiData(url) {
    try {
        let response = await fetch(url);
        let data = await response.json();
        return data;
    } catch (err) {
        console.warn("warning", err);
    }
}

/**
 * Function to write character and films to the DOM
 * @param jikanData
 */
function writeToTheDom(jikanData) {
    const ph = document.getElementById("Statistics");
    const h2 = document.createElement("h2");
    h2.innerHTML = `Anime Statistics:`;
    ph.append(h2);
    const ul = document.createElement("ul");
    ul.className = "api-list";

    for (const stats in jikanData.data.anime) {
        const li = document.createElement("li");
        li.className = "api-list";
        if (jikanData.data.anime.hasOwnProperty(stats)) {
            const value = jikanData.data.anime[stats];
            li.innerHTML = `${stats}: ${value}`;
            ul.append(li);
        }


    }
    ph.append(ul);
}

init();
