// protect the js field from injections
function escapeHtml(text) {

  var map = {

    '&': '&amp;',
    '<': '&lt;',
    '>': '&gt;',
    '"': '&quot;',
    "'": '&#039;'
  };

  return text.replace(/[&<>"']/g, function (m) { return map[m]; });
}

//declaring our variables
let searchButton = document.querySelector('#search');

const APP_ID = document.querySelector("#apiId").value;
const APP_KEY = document.querySelector("#apiKey").value;

//creating event on the search button to have a result
searchButton.addEventListener('click', () => {

  let recipeSearch = document.querySelector('#recipeName').value;

  if (escapeHtml(recipeSearch)) {

    document.querySelector('#searchResult').innerHTML = "";

    // answering to the API with parameters result in relation with the research
    fetch(`https://api.edamam.com/search?q=${recipeSearch}&to=9&app_id=${APP_ID}&app_key=${APP_KEY}`)

      .then(response => response.json())

      .then(response => {

        // displying the result on the page
        if (response.hits.length > 0) {

          for (let hit of response.hits) {

            document.querySelector('#searchResult').innerHTML +=

              `<div class="card" style="width: 18rem;">

              <img src="${hit.recipe.image}" class="card-img-top" alt="...">

                <div class="card-body">

                    <h5 class="card-title">${hit.recipe.label}</h5>

                      <p class="card-text">${hit.recipe.source}</p>

                    <a href="${hit.recipe.url}" class="btn btn-primary">Ver la receta</a>

                </div>

            </div>`

            console.log(hit);
          }

        } else {

          document.querySelector('#recipeName').value = "";

          document.querySelector('#emptyInput').innerHTML =

            '<p>No se encontro ninguna receta.</p>'
        }

      }/*console.log(response.hits)*/)

      .catch(error => alert("Erreur : " + error));

    console.log("Button pressed");

  } else {

    document.querySelector('#emptyInput').innerHTML =

      '<p>Por favor complete los campos.</p>'
  }

});








