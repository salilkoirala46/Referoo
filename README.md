Welcome to the Refereoo project! This project is a candidate management system built using Laravel.
Getting Started

Follow the steps below to set up and run the project on your local machine:

    Clone the Project:

    bash

git clone https://github.com/your-username/refereoo.git
cd refereoo

Run Laravel Server (Mac):

bash

    sudo php artisan serve --port=80

    Access the Application:
    Open your web browser and go to https://localhost/refereoo

    Login:
    Fill out your username and password on the login page.

    View Candidate Details:
    After logging in, click on the "View" button to see detailed listings of candidates.

Project Structure

    Controller:
        CandidateController.php - Manages candidate-related actions.

    Middleware:
        Middleware created to test API endpoints with an access_token.

    Routes:
        Routes have been defined to handle different functionalities.

    Views:
        master.blade.php - Master layout view.
        candidate-listing.blade.php - Child view extending the master layout for listing candidates.
        candidate-details.blade.php - Child view extending the master layout for displaying candidate details.