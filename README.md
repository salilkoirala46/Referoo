Refereoo

Refereoo is a candidate management system developed using the Laravel framework. This web application simplifies the process of tracking and managing candidates throughout the recruitment lifecycle. Whether you are a recruiter or hiring manager, Refereoo provides a user-friendly interface to streamline candidate interactions.
Features

    User Authentication: Securely log in with your username and password to access the application.

    Candidate Listing: View a detailed list of candidates, making it easy to review and manage potential hires.

    API Endpoint Testing: Utilize the middleware to test API endpoints with an access_token for enhanced security and functionality.

Project Components

    Controller:
        CandidateController.php - Manages candidate-related actions, ensuring smooth interaction with the backend.

    Middleware:
        Middleware is in place for testing API endpoints, enhancing security by requiring an access_token.

    Routes:
        Well-defined routes handle various functionalities within the application.

    Views:
        master.blade.php - Master layout view providing a consistent user interface.
        candidate-listing.blade.php - Child view extending the master layout for listing candidates.
        candidate-details.blade.php - Child view extending the master layout for displaying detailed candidate information.

Getting Started

Follow the provided instructions in the README file to clone the project, set up the Laravel server, and access the application on your local machine.