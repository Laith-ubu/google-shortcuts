<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=apps" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="navBar">

        <div class="right">
            <div class=" margn"><a href="">Gmail</a></div>
            <div class=" margn"><a href="">Images</a></div>
            <div class=" margn"><a><span class="material-symbols-outlined">apps</span></a></div>
            <div class="paddin"><a href=""><img src="https://lh3.googleusercontent.com/-8PKX2g4fBGE/AAAAAAAAAAI/AAAAAAAAAAA/ALKGfknK2nfAKId5GSXZJ4XPn8O6YyGwoQ/photo.jpg?sz=46" class="profile-navBar" alt=""></a></div>
        </div>
    </div>
    
    <div class="middle">

        <div class="middle-name">
            <h1 class="font-size-h1">Google</h1>
        </div>

        <div class="mid-div-search">
            <form action="" id="searchForm">
            <input class="search paddin2" type="text" placeholder="Search Google.." name="search" id="searchInput" required>
            <button><i class="fa fa-search"></i></button>
            </form>
        </div>

        <div class="adj-buttons">

            <div>
                <button class="button-middle-box">
                    <a href="" class="button-middle-font">
                            Google Search
                    </a>
                </button>
            </div>
                
            <div>
                <button class="button-middle-box">
                    <a href="" class="button-middle-font">
                        I'm Feeling Lucky
                    </a>
                </button>
            </div>    
        </div>

        <div class="language">
            <div>
                <h5 class="font-size-h5">Google offered in: </h5>
            </div>

            <div>
                <a href="" class="language-font">English</a>
            </div>
        </div>

        <div id="results" class="results"></div>


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
        document.getElementById('searchForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission
            
            const query = document.getElementById('searchInput').value;
            const apiKey = 'AIzaSyAuscRAidBsJE3c4LtJoFYqz2JAWHg41Wo'; // Replace with your actual API key
            const cx = 'b74dbb7bbe763474d'; // Replace with your actual Search Engine ID
            const apiUrl = `https://www.googleapis.com/customsearch/v1?q=${encodeURIComponent(query)}&key=${apiKey}&cx=${cx}`;

            fetch(apiUrl)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    const resultsContainer = document.getElementById('results');
                    resultsContainer.innerHTML = ''; // Clear previous results

                    if (data.items && data.items.length > 0) {
                        data.items.forEach(item => {
                            const resultItem = document.createElement('div');
                            resultItem.classList.add('result-item');
                            resultItem.innerHTML = `<a href="${item.link}" target="_blank">${item.title}</a><p>${item.snippet}</p>`;
                            resultsContainer.appendChild(resultItem);
                        });
                    } else {
                        resultsContainer.innerHTML = '<p>No results found.</p>';
                    }
                })
                .catch(error => {
                    console.error('Error fetching search results:', error);
                });
        });
    </script>
</body>
</html>