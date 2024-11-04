<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=apps" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Google Search</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="navBar">

        <div class="right">
            <div class=" margn"><a href="">Home</a></div>
        </div>
    </div>
    

       

    <div class="results-container">
        <h1>Search Results</h1>
        <div id="results"></div>
    </div>



    <div class="test">
    <div class="location">
        <div class="locat paddin2">
            <h5 class="font-size-h5">Jordan</h5>
        </div>
    </div>

    <footer>
        <div class="footer-right paddin">    
            <div class=" margn"><a href="">About</a></div>
            <div class=" margn"><a href="">Advertising</a></div>
            <div class=" margn"><a href="">Business</a></div>
            <div class=" margn"><a href="">How Search Works</a></div>
        </div>

        <div class="footer-left paddin">
            <div class=" margn"><a href="">Privacy</a></div>
            <div class=" margn"><a href="">Terms</a></div>
            <div class=" margn"><a href="">Settings</a></div>
        </div>

    </footer>
    </div>
    <script>
        // Get search results from localStorage
        const resultsContainer = document.getElementById('results');
        const results = JSON.parse(localStorage.getItem('searchResults')) || [];

        if (results.length > 0) {
            results.forEach(item => {
                const resultItem = document.createElement('div');
                resultItem.classList.add('result-item');
                resultItem.innerHTML = `<a href="${item.link}" target="_blank">${item.title}</a><p>${item.snippet}</p>`;
                resultsContainer.appendChild(resultItem);
            });
        } else {
            resultsContainer.innerHTML = '<p>No results found.</p>';
        }
    </script>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/style2.css') }}">
    <title>Search Results</title>
</head>
<body>
    <div class="navBar">
        <div class="right">
            <div class="margn"><a href="{{ url('/index') }}">Home</a></div>
        </div>
    </div>

    <div class="search-container">
        <h1 class="font-size-h1">Search Results</h1>
        <div class="mid-div-search">
            <form action="" id="searchForm">
                <input class="search" type="text" id="searchInput" placeholder="Search Google..." value="{{ session('query') }}">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>

    <div class="results-container">
        <div id="results"></div>
    </div>

    <footer>
        <div class="footer-right paddin">    
            <div class="margn"><a href="">About</a></div>
            <div class="margn"><a href="">Advertising</a></div>
            <div class="margn"><a href="">Business</a></div>
            <div class="margn"><a href="">How Search Works</a></div>
        </div>
        <div class="footer-left paddin">
            <div class="margn"><a href="">Privacy</a></div>
            <div class="margn"><a href="">Terms</a></div>
            <div class="margn"><a href="">Settings</a></div>
        </div>
    </footer>

    <script>

        const resultsContainer = document.getElementById('results');
        const results = JSON.parse(localStorage.getItem('searchResults')) || [];

        if (results.length > 0) {
            results.forEach(item => {
                const resultItem = document.createElement('div');
                resultItem.classList.add('result-item');
                resultItem.innerHTML = `
                    <a href="${item.link}" target="_blank" class="result-title">${item.title}</a>
                    <p class="result-snippet">${item.snippet}</p>
                `;
                resultsContainer.appendChild(resultItem);
            });
        } else {
            resultsContainer.innerHTML = '<p>No results found.</p>';
        }
    </script>
</body>
</html>
